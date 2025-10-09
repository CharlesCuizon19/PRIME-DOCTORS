<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannersController;




Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // HOMEPAGE BANNER
    Route::get('admin/homepageBanner', [BannersController::class, 'index'])->name('homepage.banner');
    Route::post('admin/homepageBanner/createBanner', [BannersController::class, 'create'])->name('banner.create');
    Route::put('admin/homepageBanner/updateBanner/{id}', [BannersController::class, 'update'])->name('banner.update');
    Route::delete('admin/homepageBanner/{id}', [BannersController::class, 'destroy'])->name('banner.destroy');

    // DOCTORS MANAGEMENT
    Route::get('/doctors', [PageController::class, 'index'])->name('doctors');
    Route::get('/doctors/create', [PageController::class, 'create_doctor'])->name('doctor.create');
    Route::put('/doctors/{id}', [PageController::class, 'update_doctor'])->name('doctor.update');
    Route::delete('/doctors/{id}', [PageController::class, 'destroy_doctor'])->name('doctor.destroy');
});


// HOME
Route::get('/', [PageController::class, 'home'])->name('home');


// ABOUT US
Route::get('/home/about-us', [PageController::class, 'about_us'])->name('about-us');


// SERVICES
Route::get('/home/services', [PageController::class, 'services'])->name('services');
Route::get('/home/services/{id}', [PageController::class, 'show_service'])->name('service.show');


// CAREERS
Route::get('/home/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/home/careers/{id}', [PageController::class, 'show_career'])->name('careers.show');


// FIND A DOCTOR
Route::get('/home/find-a-doctor', [PageController::class, 'find_a_doctor'])->name('find-a-doctor.show');
Route::get('/home/find-a-doctor/{id}', [PageController::class, 'show_doctor'])->name('find-a-doctor.singlepage');
Route::get('/home/find-a-doctor/doctor/{id}', [PageController::class, 'doctor_details'])->name('find-a-doctor.doctor-details');


// NEWS AND EVENTS
Route::get('/home/news-and-events', [PageController::class, 'news_and_events'])->name('news-and-events.show');
Route::get('/home/news-and-events/{id}', [PageController::class, 'show_news'])->name('news-and-events.singlepage');


//CONTACT US
Route::get('/home/contact-us', [PageController::class, 'contact_us'])->name('contact-us.show');
Route::post('/home/contact-us', [PageController::class, 'submit_contact_form'])->name('contact-us.submit');
