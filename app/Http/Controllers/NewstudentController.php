<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Newstudent;

<<<<<<< HEAD
use App\Newstudent;
=======
>>>>>>> 03fa563fd940da27238993a4188b574ceb0daed3
class NewstudentController extends BaseController
{
   public function __construct(){

    }
     public function createNewstudent(Request $request){

        if ($request->ajax()){
            return response(Newstudent::create($request->all()));
        }
    }

    public function getNewstudents(){
        $newstudents = Newstudent::all();

    	return view('newstudents.newstudent', compact('newstudents'));
    }
}
