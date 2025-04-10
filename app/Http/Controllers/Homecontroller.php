<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
class Homecontroller extends Controller
{

    public function index(){
        return view('dashboad');
    }

    public function home(){
        return view('front.home');
    }
    public function project(){
        return view('front.project');
    }
    public function about(){
        return view('front.about');
    }
    
    public function contact(){
        return view('front.contact');
    }
}
