<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use App\Models\Featured;
use App\Models\Galleries;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ProjectConcroller extends Controller
{

    public function index(){
        $projects = Projects::get();
        return view('projects.index',compact('projects'));
    }
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
                'user_id' => Auth::id(),
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

    public function edit($id){
    $project = Projects::find($id);
    $galleries = DB::table('galleries')
    ->where('project_id', $id)
    ->select('id', 'image')
    ->get();
    if ($project) {
        return view('projects.edit',compact('project', 'galleries'));
    }
    abort('404');
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:projects,id',
            'project_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'discripation' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $project = Projects::find($request->id);

        if ($request->hasFile('image')) {
            $document = $request->file('image');
            $name = now()->format('Y-m-d_H-i-s') . '-image';
            $file = $name . '.' . $document->getClientOriginalExtension();
            $targetDir = public_path('./files');
            $document->move($targetDir, $file);
            // Optional: delete old image if needed
            @unlink(public_path('./files/' . $project->image));
            $project->image = $file;
        }

        $project->project_name = $request->project_name;
        $project->title = $request->title;
        $project->video_url = $request->video_url;
        $project->discripation = $request->discripation;
        $project->save();

        return redirect()->route('project.index')->with('success', 'Project updated successfully.');
    }

    public function featuredUpdate(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:projects,id',
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $featured = Featured::firstOrNew(['project_id' => $request->id]);
        if ($request->hasFile('image')) {
            $document = $request->file('image');
            $name = now()->format('Y-m-d_H-i-s') . '-image';
            $file = $name . '.' . $document->getClientOriginalExtension();
            $targetDir = public_path('./files');
            $document->move($targetDir, $file);
            if ($featured->exists && $featured->image) {
                @unlink(public_path('./files/' . $featured->image));
            }
            $featured->image = $file;
        }
        $featured->project_id = $request->id;
        $featured->title = $request->title;
        $featured->description = $request->description;
        $featured->save();
        return redirect()->route('project.featured', $request->id)->with('success', 'Featured updated successfully.');
    }




public function gallery($id){
    $galleries = Galleries::where('project_id',$id)->get();

    return view('projects.gallery',compact('galleries','id'));
}
public function deleteGallery($id)
{
    $gallery = Galleries::findOrFail($id);
    if(file_exists(public_path($gallery->image))){
        unlink(public_path($gallery->image));
    }
    $gallery->delete();

    return response()->json(['success' => true]);
}
public function uploadGallery(Request $request)
{
    if($request->hasFile('attachment')) {
        foreach($request->file('attachment') as $file) {
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('projects/galleries'), $filename);

            Galleries::create([
                'project_id' => $request->project_id,
                'image' => 'public/projects/galleries/' . $filename,
            ]);
        }
    }

    return response()->json(['success' => true]);
}
public function amenitles($id){
    $amenitles = Amenities::where('project_id',$id)->get();

    return view('projects.amenitles',compact('amenitles','id'));
}
public function uploadAmenitles(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'attachment' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
    ]);

    $filename = null;
    if ($request->hasFile('attachment')) {
        $file = $request->file('attachment');
        $filename = 'public/project/amenities/' . time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('project/amenities'), basename($filename));
    }

    Amenities::create([
        'project_id' => $request->project_id,
        'title' => $request->title,
        'icon' => $filename,
    ]);

    return response()->json(['success' => true]);
}

public function deleteAmenitles($id)
{
    $item = Amenities::findOrFail($id);
    if (file_exists(public_path($item->icon))) {
        unlink(public_path($item->icon));
    }
    $item->delete();

    return response()->json(['success' => true]);
}

public function featured($id)
{
    $project = Featured::where('project_id', $id)->first(); // fetch a single record or null
    return view('projects.featured', compact('id', 'project'));
}


}
