<?php

use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('Frontend.pages.home');
})->name('home');

Route::get('/about', function () {
    return view('Frontend.pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('Frontend.pages.contact');
})->name('contact');

Route::get('/services', function () {
    return view('Frontend.pages.services');
})->name('services');

Route::get('/projects', function () {
    return view('Frontend.pages.projects');
})->name('projects');

Route::get('/team', function () {
    return view('Frontend.pages.team');
})->name('team');

Route::get('/blog', function () {
    return view('Frontend.pages.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('Frontend.pages.contact');
})->name('contact');