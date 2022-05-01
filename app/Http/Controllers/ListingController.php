<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;


class ListingController extends Controller{
   public function index(){
        $listings =  Listing ::latest()->filter(request(['tag']))->get();
       return view('listings.index', compact('listings'));
   }

   public function show(Listing $listing){
       return  view('listings.show', compact('listing'));
   }
 
}
