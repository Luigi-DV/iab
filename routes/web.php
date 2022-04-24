<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Pages ******************************************
 * 1- Welcome
 * 2- About
 * 3- Contact
 */
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function() {
    return view('pages.about.index');
})->name('about.index');

Route::get('/contact', function() {
    return view('pages.contact.index');
})->name('contact.index');

/**
 * Auth Middleware ************************************************
 * 1- Dashboard
 */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

/**
 * Resources ************************************************
 * 1- Blog
 */
Route::resource('blog', BlogController::class);

/**
 * Configs ******************************************
 */
Route::get('change-language/{locale}', function ($locale) {
    session(['applocale' => $locale]);
    return redirect()->back();
})->name('locale.setting');
