<?php

use App\Http\Controllers\ListingController;
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
//all listing
 Route::get('/', [ListingController::class, 'index'])->name('listings.index');

 
// show create form
Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create');

//store listing data
Route::get('/listings', [ListingController::class, 'store'])->name('listings.store');



// single listing
Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listings.show');
 





 