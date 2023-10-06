<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\SlidesController;
use App\Http\Controllers\Dashboard\ServicesController;
use App\Http\Controllers\Dashboard\PagesController;
use App\Http\Controllers\Dashboard\PhotosController;
use App\Http\Controllers\Dashboard\ContactUsController;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;

use App\Http\Controllers\Website\WebsiteController;


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



//Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/changeLanguage', [HomeController::class, 'changeLanguage'])->name('changeLanguage');

Route::group(['middleware' => 'web' ,'prefix' => 'admin/'], function () {
    // Login Routes
    Route::get('/', function () {
        return redirect('/admin/login');
    });
    Route::get('login',  [AuthController::class,'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class,'login'])->name('admin.signIn');

});



Route::group(['middleware' =>  ['auth:admin','SetLanguage'],'prefix' => 'admin/', 'as' => 'admin.'], function() {
        Route::get('dashboard', DashboardController::class)->name('home');

        Route::resource('users',UserController::class);
        Route::resource('slides',SlidesController::class);
        Route::resource('services',ServicesController::class);
        Route::resource('photo-album',PhotosController::class);

        Route::get('who-us', [PagesController::class,'whoUs'])->name('pages.who-us');
        Route::get('vision-mission', [PagesController::class,'vision'])->name('pages.vision');
        Route::get('contact-us', [ContactUsController::class,'index'])->name('contact.index');
        Route::get('contact-us/{id}', [ContactUsController::class,'show'])->name('contact.show');

        Route::post('/logout', [AuthController::class,'logout'])->name('logout');

    });

Route::group(['middleware' =>  'SetLanguage'], function() {

    Route::get('/', [WebsiteController::class,'index'])->name('index');
    Route::get('/contact', [WebsiteController::class,'contact'])->name('contact');
    Route::get('/FAQs', [WebsiteController::class,'faq'])->name('faq');
    Route::get('/privacy-policy', [WebsiteController::class,'privacyPolicy'])->name('privacyPolicy');

});

