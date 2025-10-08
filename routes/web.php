<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


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
