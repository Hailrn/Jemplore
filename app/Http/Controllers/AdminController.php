<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use App\Models\TourismObject;
use App\Models\TourismObjectImage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $pendingCount = Submission::where('status', 'pending')->count();
        
        return view('admin.admin_dashboard', compact('pendingCount'));
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
        
        $wisata = TourismObject::find($submission->tourism_object_id);

        if ($submission->submission_type == 'update_profile' && $wisata) {
            
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

            $wisata->update($payload);
        }
        
        $submission->update(['status' => 'approved']);

        return redirect()->back()->with('success', 'Perubahan berhasil disetujui dan diterapkan!');
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
}