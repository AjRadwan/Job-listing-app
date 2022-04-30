<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;


class ListingController extends Controller{
   public function index(){
        $listings =  Listing ::all();

       return view('listings', compact('listings'));
   }

//    public function show(Listing $listing){
//        return  view('listing', ['listing' => $listing]);

//    }
}
