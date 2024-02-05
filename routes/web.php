<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CitizenController;


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
    return view('pages.home');
});
// show pages
Route::get('/home', [UserController::class,'index']);
Route::get('/about', [UserController::class,'about']);
Route::get('/blog', [UserController::class,'blog']);

Route::get('/profile', [UserController::class,'profile']);

Route::get('/service', [UserController::class,'service']);
Route::get('/single', [UserController::class,'single']);
Route::get('/team', [UserController::class,'team']);

Route::get('/contact', [UserController::class,'contact']);
// Display the form
Route::get('/contact/create', [CitizenController::class, 'create'])->name('contact.create');

// Handle form submission
Route::post('/contact/store', [CitizenController::class, 'store'])->name('contact.store');

Route::get('/list_citizens', [CitizenController::class, 'listCitizens'])->name('list_citizens');
