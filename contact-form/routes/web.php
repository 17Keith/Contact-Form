<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
 
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
 
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');

Route::get('/', function () {
    return view('welcome');
});
