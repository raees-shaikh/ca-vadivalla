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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('industries', function () {
    return view('industries');
})->name('industries');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('careers', function () {
    return view('careers');
})->name('careers');

Route::get('audit-assurance', function () {
    return view('audit-assurance');
})->name('audit-assurance');

Route::get('income-tax', function () {
    return view('income-tax');
})->name('income-tax');

Route::get('good-services-tax', function () {
    return view('good-services-tax');
})->name('good-services-tax');

Route::get('risk-advisory-services', function () {
    return view('risk-advisory-services');
})->name('risk-advisory-services');

Route::get('services-non-resident', function () {
    return view('services-non-resident');
})->name('services-non-resident');

Route::get('outsourcing-non-resident', function () {
    return view('outsourcing-non-resident');
})->name('outsourcing-non-resident');

Route::get('us-outsourcing-work', function () {
    return view('us-outsourcing-work');
})->name('us-outsourcing-work');

Route::get('construction-accounts', function () {
    return view('construction-accounts');
})->name('construction-accounts');

Route::get('government', function () {
    return view('government');
})->name('government');

Route::get('manufacturing', function () {
    return view('manufacturing');
})->name('manufacturing');

Route::get('retail-consumer', function () {
    return view('retail-consumer');
})->name('retail-consumer');

Route::get('technology', function () {
    return view('technology');
})->name('technology');

Route::get('logistic', function () {
    return view('logistic');
})->name('logistic');

Route::get('media-entertainment', function () {
    return view('media-entertainment');
})->name('media-entertainment');

//   contact route

Route::post('contactForm', 'App\Http\Controllers\ContactController@contact')->name('submit.contact');
Route::post('quoteForm', 'App\Http\Controllers\ContactController@quote')->name('submit.quote');


