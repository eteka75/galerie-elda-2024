<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FournisseurController;

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


//redirect to admin

Route::get('/', function () {
    return redirect('/admin');
});

Route::get('/home', function () {
    return redirect('/admin');
});


Route::group(['prefix' => '/admin', 'middleware' => ['auth'] ], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    // Product
    Route::resource('/product', App\Http\Controllers\ProductController::class);

    //fournisseur
    Route::resource('/fournisseur', App\Http\Controllers\FournisseurController::class);

    //client
    Route::resource('/client', App\Http\Controllers\ClientController::class);

     // user route
    Route::resource('users', App\Http\Controllers\UsersController::class);

    // Category
    Route::resource('/category', App\Http\Controllers\CategoryController::class);
    // sliders
    Route::resource('/sliders', App\Http\Controllers\NouvelleController::class);

    // publicites
    Route::resource('/publicites', App\Http\Controllers\PubliciteController::class);
    Route::resource('/apropos', App\Http\Controllers\AproposController::class);
    Route::resource('/pourquois', App\Http\Controllers\PourquoiController::class);

    //parametres
    Route::resource('/parametres', App\Http\Controllers\ParametreController::class);

    //contacts
    Route::resource('/contacts', App\Http\Controllers\ContactController::class);

    Route::resource('/evenements', App\Http\Controllers\EvenementController::class);

    // Slider
});

Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

