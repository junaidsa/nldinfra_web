<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogConcroller extends Controller
{
    public function blogs(){
        return view('front.blogs');
    }

    public function index(){
        return view('blogs.index');
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'short_description' => 'required|string|max:255',
            'bolg_description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validated) {

            $document = $request->file('image');
            $name = now()->format('Y-m-d_H-i-s') . '-image';
            $file = $name . '.' . $document->getClientOriginalExtension();
            $targetDir = public_path('./files');
            $document->move($targetDir, $file);
            $pdf = null;
            if ($request->hasFile('pdf_file')) {
                $docpdf = $request->file('pdf_file');
                $pdfname = now()->format('Y-m-d_H-i-s') . '-pdf';
                $pdf = $pdfname . '.' . $docpdf->getClientOriginalExtension();
                $targetPDF = public_path('./files');
                $docpdf->move($targetPDF, $pdf);
            }
            $blog = Blog::create([
                'image' => $file,
                'short_description' => $request->short_description,
                'description' => $request->bolg_description,
            ]);

            return redirect()->route('blog.index')->with('success', 'Blogs added successfully.');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }
}
