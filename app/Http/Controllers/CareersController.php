<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use App\Models\Qualifications;
use App\Models\Responsibilities;
use App\Models\Images;
use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CareersController extends Controller
{
    public function index()
    {
        $careers = Careers::with(['qualifications', 'responsibilities', 'image.file'])
            ->orderBy('created_at', 'desc')
            ->get();

        $qualifications = Qualifications::all();
        $responsibilities = Responsibilities::all();

        return view('admin.careers.index', compact('careers', 'qualifications', 'responsibilities'));
    }


    public function create()
    {
        $qualifications = Qualifications::all();
        $responsibilities = Responsibilities::all();
        return view('admin.careers.create', compact('qualifications', 'responsibilities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'career_name' => 'required|string|max:255',
            'job_type' => 'required|string|max:255',
            'experience' => 'nullable|string|max:255',
            'vacancy' => 'nullable|integer',
            'overview' => 'nullable|string',
            'career_image' => 'nullable|image|max:2048',
            'qualification_ids' => 'nullable|array',
            'responsibility_ids' => 'nullable|array',
        ]);

        try {
            $careerImageId = null;

            if ($request->hasFile('career_image')) {
                $file = $request->file('career_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('storage/careers'), $filename);

                $fileRecord = Files::create(['image_path' => 'storage/careers/' . $filename]);
                $image = Images::create([
                    'file_id' => $fileRecord->id,
                    'uploaded_by_id' => auth()->id(),
                    'alt_text' => $request->career_name . ' Image',
                ]);

                $careerImageId = $image->id;
            }

            $career = Careers::create([
                'career_name' => $request->career_name,
                'job_type' => $request->job_type,
                'experience' => $request->experience,
                'vacancy' => $request->vacancy,
                'overview' => $request->overview,
                'career_image_id' => $careerImageId,
            ]);

            if ($request->has('qualification_ids')) {
                $career->qualifications()->sync($request->qualification_ids);
            }

            if ($request->has('responsibility_ids')) {
                $career->responsibilities()->sync($request->responsibility_ids);
            }

            return redirect()->route('admin.careers.index')->with('success', 'Career created successfully!');
        } catch (\Throwable $e) {
            Log::error('Career store error: ' . $e->getMessage());
            return back()->withErrors('Failed to create career.');
        }
    }

    public function edit(Careers $career)
    {
        $career->load(['qualifications', 'responsibilities', 'image.file']);
        $qualifications = Qualifications::all();
        $responsibilities = Responsibilities::all();

        return view('admin.careers.edit', compact('career', 'qualifications', 'responsibilities'));
    }

    public function update(Request $request, Careers $career)
    {
        $request->validate([
            'career_name' => 'required|string|max:255',
            'job_type' => 'required|string|max:255',
            'experience' => 'nullable|string|max:255',
            'vacancy' => 'nullable|integer',
            'overview' => 'nullable|string',
            'career_image' => 'nullable|image|max:2048',
            'qualification_ids' => 'nullable|array',
            'responsibility_ids' => 'nullable|array',
        ]);

        try {
            // Replace career image if uploaded
            if ($request->hasFile('career_image')) {
                $file = $request->file('career_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('storage/careers'), $filename);

                // Delete old image if exists
                if ($career->career_image_id && $career->image && $career->image->file) {
                    $oldPath = public_path('storage/' . $career->image->file->image_path);
                    if (file_exists($oldPath)) unlink($oldPath);

                    $career->image->file->delete();
                    $career->image->delete();
                }

                $fileRecord = Files::create(['image_path' => 'storage/careers/' . $filename]);
                $image = Images::create([
                    'file_id' => $fileRecord->id,
                    'uploaded_by_id' => auth()->id(),
                    'alt_text' => $request->career_name . ' Image',
                ]);

                $career->career_image_id = $image->id;
            }

            // Update base fields
            $career->update([
                'career_name' => $request->career_name,
                'job_type' => $request->job_type,
                'experience' => $request->experience,
                'vacancy' => $request->vacancy,
                'overview' => $request->overview,
                'career_image_id' => $career->career_image_id,
            ]);

            // Sync qualifications & responsibilities
            if ($request->has('qualification_ids')) {
                $career->qualifications()->sync($request->qualification_ids);
            } else {
                $career->qualifications()->detach();
            }

            if ($request->has('responsibility_ids')) {
                $career->responsibilities()->sync($request->responsibility_ids);
            } else {
                $career->responsibilities()->detach();
            }

            return redirect()->route('admin.careers.index')->with('success', 'Career updated successfully!');
        } catch (\Throwable $e) {
            Log::error('Career update error: ' . $e->getMessage());
            return back()->withErrors('Failed to update career.');
        }
    }

    public function destroy($id)
    {
        try {
            $career = Careers::findOrFail($id);
            $career->qualifications()->detach();
            $career->responsibilities()->detach();

            // Delete career image if exists
            if ($career->image && $career->image->file) {
                $imagePath = public_path('storage/' . $career->image->file->image_path);
                if (file_exists($imagePath)) unlink($imagePath);

                $career->image->file->delete();
                $career->image->delete();
            }

            $career->delete();
            return redirect()->route('admin.careers.index')->with('success', 'Career deleted successfully!');
        } catch (\Throwable $e) {
            Log::error('Failed to delete career: ' . $e->getMessage());
            return back()->withErrors('Failed to delete career.');
        }
    }
}
