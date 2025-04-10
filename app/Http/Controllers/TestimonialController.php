<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
    return view('testimonial.index');
}
public function store()
{
}
public function create(){
    return view('testimonial.create');

    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){

    }
}
