<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectConcroller extends Controller
{
    public function create(){
        return view('projects.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'discripation' => 'required',
            'image' => 'required',
        ]);

        if ($validated) {
            $document = $request->file('image');
            $name = now()->format('Y-m-d_H-i-s') . '-image';
            $file = $name . '.' . $document->getClientOriginalExtension();
            $targetDir = public_path('./files');
            $document->move($targetDir, $file);
            $project = Projects::create([
                'project_name' => $request->project_name,
                'title' => $request->title,
                'video_url' => $request->video_url,
                'image' => $file,
                'discripation' => $request->discripation,
            ]);

            return redirect()->route('project.create')->with('success', 'Project added successfully.');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }
}
