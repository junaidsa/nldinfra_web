<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
       $testimonials = Testimonials::get();
    return view('testimonial.index', compact('testimonials'));
}
public function store()
{

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
