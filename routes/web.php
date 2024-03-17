<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\AproposController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\EvenementController;
use App\Http\Controllers\Backend\FournisseurController;
use App\Http\Controllers\Backend\NouvelleController;
use App\Http\Controllers\Backend\ParametreController;
use App\Http\Controllers\Backend\PourquoiController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\PubliciteController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\CategoriesController;

use App\Http\Controllers\Backend\ConditionController;
use App\Http\Controllers\Backend\ConfidentialiteController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
//use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\WelcomePageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Artisan;

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('admin');

// Shop and welcome
Route::get('/', [WelcomePageController::class,'index'])->name('welcome');
Route::get('/category', [ShopController::class,'getCategorie'])->name('shop.category');
Route::get('/shop', [ShopController::class,'index'])->name('shop.index');
Route::get('/shop/{product}', [ShopController::class,'show'])->name('shop.show');
Route::post('/shop/cart/add', [ShopController::class,'addToCart'])->name('shop.addToCart');

Route::get('/favorites', [CartController::class,'favorites'])->name('favorites.show');
Route::post('/favorites/add', [CartController::class,'addToFavorites'])->name('favorites.add');
Route::delete('/favorites/remove/{code}', [CartController::class,'removeToFavorites'])->name('favorites.remove');

Route::get('/search', [ShopController::class,'search'])->name('shop.search');
Route::get('/promotions', [ShopController::class,'promotions'])->name('shop.promotions');
Route::get('/best-sellers', [ShopController::class,'bestSellers'])->name('shop.best-sellers');
Route::get('/free-delivery', [ShopController::class,'freeDelivery'])->name('shop.free-delivery');
Route::get('/purchase-ideas', [ShopController::class,'purchaseIdeas'])->name('shop.purchase-ideas');
## Pages
Route::get('/contact', [PageController::class,'contact'])->name('page.contact');
Route::post('/contact/send', [PageController::class,'storeMessage'])->name('page.store-message');
Route::get('/about', [PageController::class,'about'])->name('page.about');
Route::get('/secure-payment', [PageController::class,'securePayment'])->name('page.secure-payment');
Route::get('/privacy-policy', [PageController::class,'privacyPolicy'])->name('page.privacy-policy');
Route::get('/our-shop', [PageController::class,'ourShop'])->name('page.our-shop');
Route::get('/terms', [PageController::class,'terms'])->name('page.terms');
Route::get('/faq', [PageController::class,'faq'])->name('page.faq');


// Cart
Route::get('/cart', [CartController::class,'index'])->name('cart.index');
Route::get('/cart/delete', [CartController::class,'deleteCart'])->name('cart.delete');
Route::post('/cart', [CartController::class,'store'])->name('cart.store');
Route::delete('/cart/{product}', [CartController::class,'destroy'])->name('cart.destroy');
//Route::post('/cart/save-later/{product}', 'CartController::class,'saveLater'])->name('cart.save-later');
//Route::post('/cart/add-to-cart/{product}', 'CartController::class,'addToCart')->name('cart.add-to-cart');
Route::patch('/cart/{product}', [CartController::class,'update'])->name('cart.update');
//payement
#Route::post('/payment', [PaymentController::class,'index'])->name('payement.index');
// checkout
Route::any('/checkout', [CheckoutController::class,'index'])->name('checkout.index');
Route::post('/checkout/store', [CheckoutController::class,'store'])->name('checkout.store');
Route::get('/guest-checkout', [CheckoutController::class,'index'])->name('checkout.guest');
Route::get('/login/{provider}', [LoginController::class,'redirectToProvider']);
Route::get('/login/{provider}/callback', [LoginController::class,'handleProviderCallback']);
// auth routes
Auth::routes();


############################################################################################################################
###   ADMINISTRATION 
############################################################################################################################

Route::get('/s-links', function () {  return Artisan::call('storage:link');return 'OK';})->name('home');;
Route::get('/clear', function () {  return Artisan::call('optimize:clear');return 'OK';})->name('home');;
Route::get('/home', function () {return redirect('/admin');})->name('home');;
Route::group(['prefix' => '/admin', 'middleware' => ['auth'] ], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('/product', ProductController::class);
    Route::resource('/client', ClientController::class);
    Route::resource('/fournisseur', FournisseurController::class);
    Route::resource('users', UsersController::class);
    Route::resource('/category', CategoriesController::class);
    Route::resource('/sliders', NouvelleController::class);
    Route::resource('/publicites', PubliciteController::class);
    Route::resource('/apropos', AproposController::class);
    Route::resource('/pourquois', PourquoiController::class);
    Route::resource('/parametres', ParametreController::class);
    Route::resource('/contacts', ContactController::class);
    Route::resource('/evenements', EvenementController::class);
    Route::resource('/conditions', ConditionController::class);
    Route::resource('/confidentialites', ConfidentialiteController::class);
});

Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

