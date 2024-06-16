<?php

use Illuminate\Support\Facades\Route;


//backend
use App\Http\Controllers\ContactController;












Route::get('/', function () {
    return view('Frontend.pages.home');
})->name('home');

Route::get('/about', function () {
    return view('Frontend.pages.about');
})->name('about');


Route::get('/products', function () {
    return view('Frontend.pages.products');
})->name('products');

/* Product Details Route Start */
Route::get('/products-details01', function () {
    return view('Frontend.pages.product-details1');
})->name('products1');

Route::get('/products-details02', function () {
    return view('Frontend.pages.product-details2');
})->name('products2');

Route::get('/products-details03', function () {
    return view('Frontend.pages.product-details3');
})->name('products3');

Route::get('/products-details04', function () {
    return view('Frontend.pages.product-details4');
})->name('products4');

Route::get('/products-details05', function () {
    return view('Frontend.pages.product-details5');
})->name('products5');

Route::get('/products-details06', function () {
    return view('Frontend.pages.product-details6');
})->name('products6');
/* Product Details Route end */


// Single Product page details Route start

Route::get('/economicalMetal', function () {
    return view('Frontend.pages.economicalMetal');
})->name('economicalMetal');
Route::get('/basicMetal', function () {
    return view('Frontend.pages.basicMetal');
})->name('basicMetal');
Route::get('/encloseMetal', function () {
    return view('Frontend.pages.encloseMetal');
})->name('enclosedMetal');
Route::get('/exchangeMetal', function () {
    return view('Frontend.pages.exchangeMetal');
})->name('exchangeMetal');
Route::get('/singleMetal', function () {
    return view('Frontend.pages.singleMetal');
})->name('singleMetal');
Route::get('/largeMetal', function () {
    return view('Frontend.pages.largeMetal');
})->name('largeMetal');





Route::get('/services', function () {
    return view('Frontend.pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('Frontend.pages.contact');
})->name('contact');


// Route::get('/projects', function () {
//     return view('Frontend.pages.projects');
// })->name('projects');

// Route::get('/team', function () {
//     return view('Frontend.pages.team');
// })->name('team');

// Route::get('/blog', function () {
//     return view('Frontend.pages.blog');
// })->name('blog');

// Route::get('/contact', function () {
//     return view('Frontend.pages.contact');
// })->name('contact');




//backend
// Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::resource('contacts', ContactController::class);