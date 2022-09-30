<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;
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


Route::get('/', function(){ return view('pages.home'); })->name('home');
Route::get('about', function(){ return view('pages.about'); })->name('about');
Route::get('service', function(){ return view('pages.service'); })->name('service');
Route::get('projects', function(){ return view('pages.projects'); })->name('projects');
Route::get('contact', function(){ return view('pages.contact'); })->name('contact');
Route::get('faq', function(){ return view('pages.faq'); })->name('faq');
Route::get('service', function(){ return view('pages.services.service'); })->name('service');
Route::get('seafreight', function(){ return view('pages.services.seafreight'); })->name('seafreight');
Route::get('landfreight', function(){ return view('pages.services.landfreight'); })->name('landfreight');
Route::get('warehousing', function(){ return view('pages.services.warehousing'); })->name('warehousing');
Route::get('procurement', function(){ return view('pages.services.procurement'); })->name('procurement');


Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');


Route::get('send-email',[SendEmailController::class,'index']);



Route::get('example', function(){ return view('emails.demoMail'); })->name('example');

