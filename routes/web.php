<?php

use App\Http\Controllers\Website\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('optimize', function () {

    \Artisan::call('optimize:clear');

    dd("optimize is cleared");

});

Route::get('storage', function () {

    \Artisan::call('storage:link');

    dd("storage is link");

});

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name('frontend.index');
    Route::get('/profile', 'profile')->name('frontend.profile');
    Route::get('/about-us', 'aboutUs')->name('frontend.aboutUs');
    Route::get('/research', 'research')->name('frontend.research');
    Route::get('/cancer-therapy', 'cancerTherapy')->name('frontend.cancerTherapy');
    Route::get('/journal', 'journal')->name('frontend.journal');
    Route::get('/seminars', 'seminars')->name('frontend.seminars');
    Route::get('/contact', 'contact')->name('frontend.contact');
    Route::get('/enquiry', 'enquiry')->name('frontend.enquiry');
    
});
require __DIR__ . '/admin.php';


