<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ManageController;

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

//Route for the homepage
Route::get('/admin', [ManageController::class, 'index']);


//Route for the sessie
Route::get('/session/{id}', [SessionController::class, 'archiveer'])->name('archiveersessie');
Route::get('/desession/{id}', [SessionController::class, 'dearchiveer'])->name('dearchiveersessie');
Route::get('/session/view/{id}', [SessionController::class, 'viewsession'])->name('bekijksessie');
Route::get('/session/edit/{id}', [SessionController::class, 'editsession'])->name('wijzigsessie');


