<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticlesController;

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
    return view('pages.welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Login form
Route::get('/login', [UserController::class, 'login_form']);
//Reg form
Route::get('/register', [UserController::class, 'reg_form']);
//User registration
Route::post('/new_user', [UserController::class, 'new_user']);
//User login
Route::post('/user/authenticate', [UserController::class, 'login']);
//user logout
Route::get('/logout', [UserController::class, 'logout']);
//show create article form
Route::get('/new', [ArticlesController::class, 'new_article']);
//submit article
Route::post('/new_article', [ArticlesController::class, 'add_article']);







