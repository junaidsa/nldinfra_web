<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Homecontroller extends Controller
{

    public function index()
    {
        return view('dashboad');
    }

    public function home()
    {
        return view('front.home');
    }
    public function project($id)
    {
        return view('front.project', compact('id'));
    }
    public function about()
    {
        $ab = DB::table('about')->where('is_deleted', 0)->first();
        return view('front.about', compact('ab'));
    }
    public function create_about()
    {
        $ab = DB::table('about')->where('is_deleted', 0)->first();
        return view('admin.about', compact('ab'));
    }

    public function contact()
    {
        return view('front.contact');
    }
    public function showContactMessage()
    {
        $contact =  Contact::with('project')->get();
        return view('admin.contact_list', compact('contact'));
    }
    public function aboutupdate(Request $req)
    {
        $req->validate([
            'about' => ['required'],
            'about_title' => ['required'],
            'about_attachment' => [''],
        ]);

            $document = $req->file('about_attachment');
            $name = now()->format('Y-m-d_H-i-s') . '-image';
            $file = $name . '.' . $document->getClientOriginalExtension();
            $targetDir = public_path('./files');
            $document->move($targetDir, $file);
        $data = array(
            'about' => $req->about,
            'about_title' => $req->about_title,
            'about_attachment' => $file
        );
        $save = DB::table('about')->where('id', 1)->update($data);
        return redirect()->back()->with('success', 'About Update Successfully');
    }
    public function insertContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile_number' => ['required', 'regex:/^\d{10,11}$/'],
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create([
            'project_id' => $request->project_id ?? null,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'mobile_number' => $validated['mobile_number'],
            'messages' => $validated['message'],
        ]);
        return redirect()->back()->with('success', 'Enquiry Created Successfully');
    }
}
