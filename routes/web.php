<?php

use Illuminate\Support\Facades\Route;


//backend
use App\Http\Controllers\ContactController;




use App\Http\Controllers\LanguageController; // Make sure this points to the correct namespace

Route::get('lang/{locale}', [LanguageController::class, 'switchLang'])->name('lang.switch');







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

// Route::get('/products-details02.1', function () {
//     return view('Frontend.pages.product-details2.1');
// })->name('products2');

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


//Laser Cutting Sheet Metal Product page  Route start
Route::get('/economicalMetal', function () {
    return view('Frontend.pages.LaserCutting.economicalMetal');
})->name('economicalMetal');
Route::get('/basicMetal', function () {
    return view('Frontend.pages.LaserCutting.basicMetal');
})->name('basicMetal');
Route::get('/encloseMetal', function () {
    return view('Frontend.pages.LaserCutting.enclosedMetal');
})->name('enclosedMetal');
Route::get('/exchangeMetal', function () {
    return view('Frontend.pages.LaserCutting.exchangeMetal');
})->name('exchangeMetal');
Route::get('/singleMetal', function () {
    return view('Frontend.pages.LaserCutting.singleMetal');
})->name('singleMetal');
Route::get('/largeMetal', function () {
    return view('Frontend.pages.LaserCutting.largeMetal');
})->name('largeMetal');
//Laser Cutting Sheet Metal Product page  Route end


//Tube Cutting Sheet Metal Product page  Route Start
Route::get('/miniTubecutting', function () {
    return view('Frontend.pages.TubeCutting.mini');
})->name('miniTube');
Route::get('/standardTubeCutting', function () {
    return view('Frontend.pages.TubeCutting.standard');
})->name('standardTubeCutting');
Route::get('/threeChuckTube', function () {
    return view('Frontend.pages.TubeCutting.threeChuck');
})->name('threeChuckTube');
Route::get('/autoLoadingTube', function () {
    return view('Frontend.pages.TubeCutting.AutoLoading');
})->name('autoLoadingTube');
Route::get('/suspensionTubecutting', function () {
    return view('Frontend.pages.TubeCutting.Suspension');
})->name('suspensionTube');

//Tube Cutting Sheet Metal Product page  Route End


//Combination Sheet Metal Product page  Route Start
Route::get('/standardTube', function () {
    return view('Frontend.pages.CombinationSheet.standardTube');
})->name('standardTube');
Route::get('/exchangeTube', function () {
    return view('Frontend.pages.CombinationSheet.exchangeTube');
})->name('exchangeTube');
Route::get('/encloseTube', function () {
    return view('Frontend.pages.CombinationSheet.enclosedTube');
})->name('enclosedTube');
//Combination Sheet Metal Product page  Route end

//Laser Welding Product page  Route Start
Route::get('/HandheldLaser', function () {
    return view('Frontend.pages.LaserWelding.HandheldLaser');
})->name('HandheldLaser');
Route::get('/HandheldMetal', function () {
    return view('Frontend.pages.LaserWelding.HandheldMetal');
})->name('HandheldMetal');
Route::get('automaticLaser', function () {
    return view('Frontend.pages.LaserWelding.automaticLaser');
})->name('automaticLaser');
//Laser Welding Product page  Route end

//Metal Bending Product page  Route Start
Route::get('/pressBrake', function () {
    return view('Frontend.pages.MetalBending.pressBrake');
})->name('pressBrake');
Route::get('/pipeBending', function () {
    return view('Frontend.pages.MetalBending.pipeBending');
})->name('pipeBending');
Route::get('automaticLaserWelding', function () {
    return view('Frontend.pages.MetalBending.automaticLaserWelding');
})->name('automaticLaserWelding');
//Metal Bending Product page  Route Start

//Pipe Bending Product page  Route Start
// Route::get('/standardTube', function () {
//     return view('Frontend.pages.PipeBending.standardTube');
// })->name('standardTube');
// Route::get('/basicMetal', function () {
//     return view('Frontend.pages.PipeBending.basicMetal');
// })->name('basicMetal');
// Route::get('/encloseMetal', function () {
//     return view('Frontend.pages.PipeBending.enclosedMetal');
// })->name('enclosedMetal');
//Pipe Bending Product page  Route Start

//Laser Cleaning Product page  Route Start
Route::get('/HandheldLaserMetal', function () {
    return view('Frontend.pages.Lasercleaning.HandheldLaserMetal');
})->name('HandheldLaserMetal');
Route::get('/suitcaseMetal', function () {
    return view('Frontend.pages.Lasercleaning.suitcaseMetal');
})->name('suitcaseMetal');
Route::get('backpackPulse', function () {
    return view('Frontend.pages.Lasercleaning.backpackPulse');
})->name('backpackPulse');
//Laser Cleaning Product page  Route Start







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