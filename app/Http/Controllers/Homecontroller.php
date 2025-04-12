<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $ab = DB::table('about')->where('is_deleted', 0)->first();
        return view('front.about',compact('ab'));
    }
    public function create_about(){
        $ab = DB::table('about')->where('is_deleted', 0)->first();
        return view('admin.about',compact('ab'));
    }

    public function contact(){
        return view('front.contact');
    }
    public function showContactMessage(){
       $contact =  Contact::get();
        return view('admin.contact_list',compact('contact'));
    }
    public function aboutupdate(Request $req){
        $req->validate([
            'about' => ['required'],
        ]);
        $data = array(
            'about' => $req->about
        );
        $save = DB::table('about')->where('id', 1)->update($data);
        return redirect()->back()->with('success', 'About Update Successfully');
    }
}
