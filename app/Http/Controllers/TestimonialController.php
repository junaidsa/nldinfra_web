<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonials::with('project')->get();
        return view('testimonial.index', compact('testimonials'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_id' => 'required',
            'name' => 'required|string|max:255',
            'designation' => 'required',
            'message' => 'required',
            'avatar' => 'required',
        ]);

        if ($validated) {
            $document = $request->file('avatar');
            $name = now()->format('Y-m-d_H-i-s') . '-testimonial';
            $file = $name . '.' . $document->getClientOriginalExtension();
            $targetDir = public_path('./files');
            $document->move($targetDir, $file);
            $project = Testimonials::create([
                'project_id' => $request->project_id,
                'name' => $request->name,
                'designation' => $request->designation,
                'avatar' => $file,
                'message' => $request->message,
            ]);
            return redirect()->route('testimonial.index')->with('success', 'Testimonials added successfully.');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }
    public function create()
    {
        $projects = Projects::get();
        return view('testimonial.create', compact('projects'));
    }
    public function edit($id)
    {
        $testimonials = Testimonials::findOrFail($id);
        $projects = Projects::all(); // ← Get all projects
        return view('testimonial.edit', compact('testimonials', 'projects'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'project_id' => 'required',
            'name' => 'required|string|max:255',
            'designation' => 'required',
            'message' => 'required',
            'avatar' => 'nullable|file|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $testimonial = Testimonials::findOrFail($id);

        if ($request->hasFile('avatar')) {
            $document = $request->file('avatar');
            $name = now()->format('Y-m-d_H-i-s') . '-testimonial';
            $file = $name . '.' . $document->getClientOriginalExtension();
            $targetDir = public_path('./files');
            $document->move($targetDir, $file);

            $oldAvatarPath = public_path('./files/' . $testimonial->avatar);
            if (file_exists($oldAvatarPath)) {
                unlink($oldAvatarPath);
            }

            $testimonial->avatar = $file;
        }

        $testimonial->project_id = $request->project_id;
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->message = $request->message;
        $testimonial->save();

        return redirect()->route('testimonial.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy($id)
    {
        $testimonial = Testimonials::find($id);
        if ($testimonial) {
            $testimonial->delete();
            return response()->json(['success' => 'Testimonial deleted successfully.']);
        } else {
            return response()->json(['error' => 'Testimonial not found.'], 404);
        }
    }
}
