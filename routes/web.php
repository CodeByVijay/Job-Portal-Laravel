<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/privacy-policy', function () {
    return view('pages.privacy');
})->name('privacy_policy');

Route::get('/contact-us', function () {
    return view('pages.contact_us');
})->name('contact_us');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('about_us');

Route::get('/jobs', function () {
    return view('pages.jobs');
})->name('job_listing');

Route::get('/job', function () {
    return view('pages.single_job');
})->name('single_job');

Route::get('/blogs', function () {
    return view('pages.blogs');
})->name('blogs');

Route::get('/blog-details', function () {
    return view('pages.single_blog');
})->name('single_blog');
