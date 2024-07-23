<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// frontend
Route::get('admin-driver-details', function () {
    return view('admin.driver.driver_details');
});

Route::get('about', function () {
    return view('frontend.about');
});

Route::get('blog-detail', function () {
    return view('frontend.blog-detail');
});

Route::get('blog', function () {
    return view('frontend.blog');
});
Route::get('booking-page', function () {
    return view('frontend.booking-page');
});
Route::get('bookingpage-02', function () {
    return view('frontend.bookingpage-02');
});
Route::get('bookingpage-03', function () {
    return view('frontend.bookingpage-03');
});
Route::get('bookingpage-success', function () {
    return view('frontend.bookingpage-success');
});
Route::get('car', function () {
    return view('frontend.car');
});
Route::get('cardetail', function () {
    return view('frontend.cardetail');
});
Route::get('contact', function () {
    return view('frontend.contact');
});
Route::get('destination', function () {
    return view('frontend.destination');
});
Route::get('forgot-password', function () {
    return view('frontend.forgot-password');
});
Route::get('hotel-detail', function () {
    return view('frontend.hotel-detail');
});
Route::get('/', function () {
    return view('frontend.index');
});
Route::get('hotel', function () {
    return view('frontend.hotel');
});
Route::get('front-login', function () {
    return view('frontend.login');
});
Route::get('photo-detail', function () {
    return view('frontend.photo-detail');
});
Route::get('Photo', function () {
    return view('frontend.Photo');
});
Route::get('front-register', function () {
    return view('frontend.register');
});
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::post('/customer/login', [CustomerController::class, 'login'])->name('customer.login');
Route::get('/front-logout', [CustomerController::class, 'frontLogout'])->name('front-logout');

Route::post('/submit-enquiry',[EnquiryController::class, 'store'])->name('submit.enquiry');
Route::post('/submit-contact', [ContactController::class, 'submit'])->name('submit.contact');


Route::get('video-detail', function () {
    return view('frontend.video-detail');
});
Route::get('Video', function () {
    return view('frontend.video');
});
Route::get('destinationdetail', function () {
    return view('frontend.destinationdetail');
});

Route::get('admin-blogs', function () {
    return view('admin.blogs.index');
});
Route::get('admin-about', function () {
    return view('admin.about');
});
Route::get('admin-cab-add', function () {
    return view('admin.cab.add_cab');
});
Route::get('admin-driver-add', function () {
    return view('admin.driver.add_driver');
});
Route::get('admin-owner-add', function () {
    return view('admin.driver.add_owner');
});

Route::resource('gallery', GalleryController::class);
Route::post('gallery-add',[GalleryController::class, 'store'])->name('gallery-add');
Route::post('/blogs',[App\Http\Controllers\BlogController::class, 'store'])->name('blogs.store');
Route::delete('/blogs/{id}',[App\Http\Controllers\BlogController::class, 'destroy'])->name('blogs.destroy');
Route::delete('/galleryDelete/{id}',[GalleryController::class, 'destroy'])->name('galleryDelete');

Auth::routes();
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

