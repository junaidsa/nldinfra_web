<?php

use App\Http\Controllers\BlogConcroller;
use App\Http\Controllers\BlogController;
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
Route::get('/project/{id}',[Homecontroller::class,'project'])->name('project');
Route::get('/about',[Homecontroller::class,'about'])->name('about');
Route::get('/blogs',[BlogController::class,'blogs'])->name('blogs');
Route::get('admin/projects',[ProjectConcroller::class,'index'])->name('project.index');
Route::get('/contact',[Homecontroller::class,'contact'])->name('contact');
Route::middleware('auth')->group(function () {
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create');
Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');
Route::get('/blog/edit/{id}',[BlogController::class,'blogEdit'])->name('blog.edit');
Route::post('/blog/update/{id}',[BlogController::class,'blogUpdate'])->name('blog.update');
Route::delete('/blog/delete/{id}', [BlogController::class, 'Blogdestroy'])->name('blog.destroy');
Route::get('/home',[Homecontroller::class,'index'])->name('dashboard');
Route::get('/project/create',[ProjectConcroller::class,'create'])->name('project.create');
Route::post('/project/store',[ProjectConcroller::class,'store'])->name('project.store');
Route::get('admin/project/gallery/{id}',[ProjectConcroller::class,'gallery'])->name('project.gallery');
Route::get('admin/project/amenitles/{id}',[ProjectConcroller::class,'amenitles'])->name('project.amenitles');
Route::get('admin/project/{id}',[ProjectConcroller::class,'edit'])->name('project.edit');
Route::post('admin/project/edit/{id}', [ProjectConcroller::class, 'update'])->name('project.update');
Route::post('/admin/testimonials/store',[TestimonialController::class,'store'])->name('testimonials.store');
Route::get('admin/testimonials/create',[TestimonialController::class,'create'])->name('testimonial.create');
Route::get('admin/testimonials',[TestimonialController::class,'index'])->name('testimonial.index');
Route::get('admin/testimonial',[TestimonialController::class,'index'])->name('testimonial.index');
Route::get('admin/about',[Homecontroller::class,'create_about'])->name('admin.about');
Route::get('admin/contacts',[Homecontroller::class,'showContactMessage'])->name('admin.contact');
Route::get('about-update',[Homecontroller::class,'aboutupdate'])->name('about.update');
Route::post('admin/project/gallery/upload', [ProjectConcroller::class, 'uploadGallery'])->name('project.gallery.upload');
Route::delete('admin/project/gallery/delete/{id}', [ProjectConcroller::class, 'deleteGallery'])->name('project.gallery.delete');
Route::post('admin/project/amenitles/upload', [ProjectConcroller::class, 'uploadAmenitles'])->name('project.amenitles.upload');
Route::delete('admin/project/amenitles/delete/{id}', [ProjectConcroller::class, 'deleteAmenitles'])->name('project.amenitles.delete');
Route::get('admin/project/featured/{id}',[ProjectConcroller::class,'featured'])->name('project.featured');
Route::post('admin/featured/edit/{id}', [ProjectConcroller::class, 'featuredUpdate'])->name('featured.update');
});
require __DIR__ . '/auth.php';
