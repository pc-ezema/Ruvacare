<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/our-teams', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact-us', [App\Http\Controllers\HomePageController::class, 'contactConfirm']);

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/vacancies', function () {
    return view('vacancies');
});

Route::get('/locations', function () {
    return view('locations');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/equal-opportunities', function () {
    return view('equal-opportunities');
});
