<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;


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
//all listing
 Route::get('/', [ListingController::class, 'index'])->name('listings.index');

 
// show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth')->name('listings.create');

//store listing data
Route::Post('/listings', [ListingController::class, 'store'])->middleware('auth')->name('listings.store');


Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth')->name('listings.edit');


// update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth')->name('listings.update'); 

//delete
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth')->name('listings.delete'); 

// single listing
Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listings.show');
 


 


//show register formFileds

Route::get('/register', [UserController::class, 'create'])->middleware('guest')->name('register');


//create a new user
Route::post('/users', [UserController::class, 'store']);

//log out users

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');


// show login form
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');

// Log in user 
Route::post('/users/auth', [UserController::class, 'auth'])->name('users.auth');





 