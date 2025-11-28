<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use App\Models\TourismObject;
use App\Models\TourismObjectImage;
use App\Models\User;
use App\Models\Review;
use App\Models\Category;
use App\Models\Tag;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::where('role', '!=', 'admin')->count();

        $totalDestinations = TourismObject::where('is_active', true)->count();

        $pendingCount = Submission::where('status', 'pending')->count();

        $totalReviews = Review::count();

        $traffic = 'N/A'; 

        return view('admin.admin_dashboard', compact(
            'totalUsers', 
            'totalDestinations', 
            'pendingCount',
            'totalReviews',
            'traffic'
        ));
    }

    public function verification()
    {
        $submissions = Submission::with(['user', 'tourismObject'])
            ->where('status', 'pending')
            ->oldest() 
            ->paginate(10);

        return view('admin.verification', compact('submissions'));
    }

    public function approve($id)
    {
        $submission = Submission::findOrFail($id);
        $message = 'Submission berhasil disetujui!';

        if ($submission->submission_type == 'create_new_tourism') {
            
            $payload = $submission->payload;
            
            $tags = $payload['tags'] ?? [];
            unset($payload['tags']); 

            $gallery = $payload['gallery'] ?? [];
            unset($payload['gallery']); 

            $newWisata = TourismObject::create(array_merge($payload, [
                'user_id' => $submission->user_id, 
                'is_active' => true,
            ]));

            if (!empty($tags)) {
                $newWisata->tags()->sync($tags);
            }

            if (!empty($gallery) && is_array($gallery)) {
                foreach ($gallery as $order => $path) {
                    TourismObjectImage::create([
                        'tourism_object_id' => $newWisata->id, 
                        'sort_order' => $order,
                        'image_path' => $path
                    ]);
                }
            }

            $user = $submission->user;
            $user->role = 'owner';
            $user->save();

            $message = 'Approved! User sekarang resmi menjadi Owner dan Wisata baru telah dibuat.';
        }

        elseif ($submission->submission_type == 'update_profile') {
            
            $wisata = TourismObject::find($submission->tourism_object_id);

            if ($wisata) {
                $payload = $submission->payload;

                if (isset($payload['gallery']) && is_array($payload['gallery'])) {
                    foreach ($payload['gallery'] as $order => $path) {
                        TourismObjectImage::updateOrCreate(
                            [
                                'tourism_object_id' => $wisata->id, 
                                'sort_order' => $order
                            ],
                            [
                                'image_path' => $path
                            ]
                        );
                    }
                    unset($payload['gallery']);
                }

                if (isset($payload['tags']) && is_array($payload['tags'])) {
                    $wisata->tags()->sync($payload['tags']);
                    unset($payload['tags']);
                }

                $wisata->update($payload);
            }

            $message = 'Perubahan profil wisata berhasil disetujui dan diperbarui!';
        }
        
        $submission->update(['status' => 'approved']);

        return redirect()->back()->with('success', $message);
    }

    public function reject(Request $request, $id)
    {
        $request->validate([
            'reason' => 'required|string|max:255'
        ]);

        $submission = Submission::findOrFail($id);
        
        $submission->update([
            'status' => 'rejected',
            'admin_feedback' => $request->reason
        ]);

        return redirect()->back()->with('error', 'Submission rejected.');
    }

    public function users(Request $request)
    {
        $query = User::query();

        if ($request->has('q')) {
            $query->where('name', 'like', '%' . $request->q . '%')
                  ->orWhere('email', 'like', '%' . $request->q . '%');
        }

        $users = $query->where('id', '!=', auth()->id())
                       ->latest()
                       ->paginate(10);

        return view('admin.users', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'User has been deleted successfully.');
    }

    public function masterData()
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();

        return view('admin.masterdata', compact('categories', 'tags'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:categories,name',
            'color' => 'required|string',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => \Illuminate\Support\Str::slug($request->name),
            'color' => $request->color
        ]);

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function deleteCategory($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Category deleted.');
    }

    public function storeTag(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:tags,name',
        ]);

        Tag::create([
            'name' => $request->name,
            'slug' => \Illuminate\Support\Str::slug($request->name),
        ]);

        return redirect()->back()->with('success', 'Tag added successfully!');
    }

    public function deleteTag($id)
    {
        Tag::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Tag deleted.');
    }
}