<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

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
}
