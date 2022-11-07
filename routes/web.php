<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login/facebook', [SocialController::class, 'facebookRedirect'])->name('facebook.login');
Route::get('login/facebook/callback', [SocialController::class, 'loginWithFacebook']);

Route::get('login/github', [SocialController::class, 'githubRedirect'])->name('github.login');
Route::get('login/github/callback', [SocialController::class, 'loginWithGithub']);

Route::get('login/google', [SocialController::class, 'googleRedirect'])->name('google.login');
Route::get('login/google/callback', [SocialController::class, 'loginWithGoogle']);
