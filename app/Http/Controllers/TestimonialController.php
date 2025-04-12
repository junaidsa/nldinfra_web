<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index(){
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
        return redirect()->route('project.create')->with('success', 'Testimonials added successfully.');
    } else {
        return redirect()->back()->withErrors($validated)->withInput();
    }
}
public function create(){
    $projects = Projects::get();
    return view('testimonial.create', compact('projects'));

    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){

    }
}
