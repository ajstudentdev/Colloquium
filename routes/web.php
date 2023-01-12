<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordforgotController;

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

//Route for the homepage
Route::get('/', [HomeController::class, 'home']);

//Route for the login page
Route::get('/login', [HomeController::class, 'login']);

//Route for the manage page
Route::get('/manage', [HomeController::class, 'manage']);



//Route for the sessie
Route::get('/session/{id}', [SessionController::class, 'archiveer'])->name('archiveersessie');
Route::get('/desession/{id}', [SessionController::class, 'dearchiveer'])->name('dearchiveersessie');
Route::get('/session/view/{id}', [SessionController::class, 'viewsession'])->name('bekijksessie');
Route::get('/session/edit/{id}', [SessionController::class, 'editsession'])->name('wijzigsessie');

//Route for the types
Route::get('/type', [TypeController::class, 'index']);

//Route for the save sessie
Route::post('/save', [SessionController::class, 'save'])->name('savesessie');

//Route for the update sessie
Route::post('/update/{id}', [SessionController::class, 'update'])->name('updatesessie');

//Route for the read sessie
//Route::get('/session/read/{lezingid}', [SessionController::class, 'read'])->name('readsessie');

//Route for the login
Route::post('/loginapp', [LoginController::class, 'login'])->name('loginapp');

//Route for the register
Route::post('/registerapp', [RegisterController::class, 'register'])->name('registerapp');
