<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Category;
class NewcategoryController extends BaseController
{
   public function __construct(){

    }
     public function createNewcategory(Request $request){

        if ($request->ajax()){
            return response(Newcategory::create($request->all()));
        }
    }

    public function getNewcategories(){
        $newcategories = [];
        $newcategories = Newcategory::all();
    	return view('newcategories.newcategories', compact('Newcategories'));
    }
}
