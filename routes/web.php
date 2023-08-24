<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarsController;
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
    return '<h1>Hello Laravel</h1>';
});

Route::get('/about', function () {
    return '<h4>About Page</h4>';
});

Route::get('/contact', function () {
    return '<h4>Contact Page</h4>';
});

// Route::get('/guitars/{item?}')

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');


Route::resource('guitars', GuitarsController::class);



// Always sanitize the inputs
// Dont let users take in any inputs

Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    $category = request('category');

    if (isset($category)) {

        if (isset($item)) {
            return "You are viewing the store for {$category} for {$item}";
        }

        return "You are the viewing the store for " . strip_tags($category);
    }
    return 'You are looking at all the instruments';

});

// Route::get('/store' ,function(){
//     $category = request('category');

//     if(isset($category)){
//         return 'You are viewing the store for ' . strip_tags($category);
//     }

//     return 'You are looking at all the instruments';
// });
