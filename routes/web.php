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
    Route::get('/research/{slug}', 'singleresearch')->name('frontend.singleresearch');
    Route::get('/cancer-therapy', 'cancerTherapy')->name('frontend.cancerTherapy');
    Route::get('/journal', 'journal')->name('frontend.journal');
    Route::get('/jurnal/{slug}', 'singlejurnal')->name('frontend.singlejurnal');
    Route::get('/seminars', 'seminars')->name('frontend.seminars');
    Route::get('/contact', 'contact')->name('frontend.contact');
    Route::get('/enquiry', 'enquiry')->name('frontend.enquiry');
    Route::get('/course-overview', 'course')->name('frontend.course');
    Route::get('/course-overview/{slug}', 'singlecourse')->name('frontend.singlecourse');
    Route::post('/send-mail', 'sendMailCourse')->name('send.sendMailCourse');
    Route::get('/fees-structure', 'feesStructure')->name('frontend.feesStructure');
    Route::get('/comming-soon', 'commingSoon')->name('frontend.commingSoon');
});
require __DIR__ . '/admin.php';


