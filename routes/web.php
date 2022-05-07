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
Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create');

//store listing data
Route::Post('/listings', [ListingController::class, 'store'])->name('listings.store');


Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('listings.edit');


// update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('listings.update'); 

//delete
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->name('listings.delete'); 

// single listing
Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listings.show');
 





//show register formFileds

Route::get('/register', [UserController::class, 'create'])->name('register');


//create a new user
Route::post('/users', [UserController::class, 'store']);

//log out users

Route::post('/logout', [UserController::class, 'logout'])->name('logout');





 