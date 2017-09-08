<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Country;
class CountryController extends BaseController
{
   public function __construct(){

    }
     public function createCountry(Request $request){

        if ($request->ajax()){
            return response(Country::create($request->all()));
        }
    }

    public function getCountries(){
        $countries = [];
        $countries = Country::all();
    	return view('countries.country', compact('countries'));
    }

    public function editCountry($id,Request $request){
        $country = Country::where('id',$id)->first();
        return view('countries.edit_country', compact('country'));
    }

    public function updateCountry(Request $request){
        $country = Country::where('id',$request->country_id)->first();
        $country->country_name = $request->country_name;
        $country->save();
        return response($country);
    }

    public function deleteCountry($id, Request $request){
      $country = Country::find($id);
      $country->delete();
      Session::flash('message', 'Successfully deleted the nerd!');
      return Redirect::to('countries');
    }

}
