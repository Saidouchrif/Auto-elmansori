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
    return view('Home.home');
});
Route::get('/contact', function () {
    return view('Contact.Contact');
})->name('contact');
Route::get('/apropos', function () {
    return view('Apropos.Apropos');
})->name('apropos');
