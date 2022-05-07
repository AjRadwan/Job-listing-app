<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ListingController extends Controller{
   public function index(){
        $listings =  Listing ::latest()->filter(request(['tag', 'search']))->paginate(4);
       return view('listings.index', compact('listings'));
   }

   public function show(Listing $listing){
       return  view('listings.show', compact('listing'));
   }


   public function create(){
     return view('listings.create');
   }


   public function store(Request $request){
     $formFileds = $request->validate([
       'title' => 'required',
       'company' => ['required', Rule::unique('listings', 'company')],
       'location' => 'required',
       'website' => 'required',
       'email' => ['required', 'email'],
       'tags' => 'required',
       'description' => 'required',
     ]);

     if($request->hasFile('logo')) {
      $formFields['logo'] = $request->file('logo')->store('logos', 'public');
  }

     Listing::create($formFileds);

     return redirect('/')->with('message', 'Listing created successfully');  
    }

    public function edit(listing $listing){
      return  view('listings.edit', compact('listing'));
    }


    public function update(Request $request, Listing $listing){
      $formFileds = $request->validate([
        'title' => 'required',
        'company' => ['required'],
        'location' => 'required',
        'website' => 'required',
        'email' => ['required', 'email'],
        'tags' => 'required',
        'description' => 'required',
      ]);
 
      if($request->hasFile('logo')) {
       $formFields['logo'] = $request->file('logo')->store('logos', 'public');
   }
       $listing->update($formFileds);
   return back()->with('message', 'Listing Updated successfully'); 
}

 public function delete(listing $listing){
   $listing->delete();
   return redirect('/')->with('message', 'Listing Deleted successfully');  
 }

}
