<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('about-us', function () {
    return view('frontend.about-us');
});

Route::get('services', function () {
    return view('frontend.services');
});

Route::get('industries', function () {
    return view('frontend.industries');
});

Route::get('contact', function () {
    return view('frontend.contact');
});

Route::post('contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact.submit');

Route::get('faq', function () {
    return view('frontend.faq');
});
