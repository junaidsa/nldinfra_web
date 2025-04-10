<?php
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ProjectConcroller;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Utilitycontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/admin', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('auth.login');
})->name('login');
Route::get('/',[Homecontroller::class,'home'])->name('home');
Route::get('/project',[Homecontroller::class,'project'])->name('project');
Route::get('/about',[Homecontroller::class,'about'])->name('about');
Route::get('/blogs',[Homecontroller::class,'blogs'])->name('blogs');
Route::get('/contact',[Homecontroller::class,'contact'])->name('contact');

Route::middleware('auth')->group(function () {
Route::get('/home',[Homecontroller::class,'index'])->name('dashboard');
Route::get('/project/create',[ProjectConcroller::class,'create'])->name('project.create');
Route::post('/project/store',[ProjectConcroller::class,'store'])->name('project.store');
Route::get('admin/testimonial/create',[TestimonialController::class,'create'])->name('testimonial.create');
Route::get('admin/testimonial',[TestimonialController::class,'index'])->name('testimonial.index');
});
require __DIR__ . '/auth.php';
