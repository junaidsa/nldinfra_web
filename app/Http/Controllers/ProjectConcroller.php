<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectConcroller extends Controller
{
    public function create(){
        return view('projects.create');
    }
}
