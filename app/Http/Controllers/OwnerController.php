<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourismObject;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Submission;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
    public function manageProfile()
    {
        $user = Auth::user();

        $wisata = $user->tourismObject()->with(['category', 'tags', 'images'])->first();

        if (!$wisata) {
            return redirect()->route('owner.dashboard')->with('error', 'Anda belum memiliki data wisata.');
        }

        $categories = Category::all();
        $tags = Tag::all();

        return view('owner.halkelolaprofil', compact('wisata', 'categories', 'tags'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $wisata = $user->tourismObject;

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array|max:3', 
            'tags.*' => 'exists:tags,id',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        $payload = [
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'tags' => $request->tags,
            'ticket_price' => $request->ticket_price, 
            'opening_hours' => $request->opening_hours,
            'closing_hours' => $request->closing_hours,
        ];

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('submissions', 'public');
            $payload['thumbnail'] = $path;
        }

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('submissions', 'public');
            $payload['thumbnail'] = $path;
        }

        if ($request->hasFile('gallery')) {
            $galleryUpdates = [];
            
            foreach ($request->file('gallery') as $sortOrder => $file) {
                if ($file->isValid()) {
                    $path = $file->store('submissions', 'public');
                    
                    $galleryUpdates[$sortOrder] = $path;
                }
            }

            if (!empty($galleryUpdates)) {
                $payload['gallery'] = $galleryUpdates;
            }
        }

        Submission::create([
            'user_id' => $user->id,
            'tourism_object_id' => $wisata->id,
            'submission_type' => 'update_profile',
            'payload' => $payload,
            'status' => 'pending'
        ]);

        return redirect()->route('owner.submission.status')
            ->with('success', 'Perubahan profil telah diajukan dan menunggu verifikasi Admin.');
    }
}