<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Student;
class NewstudentController extends BaseController
{
   public function __construct(){

    }
     public function createNewstudent(Request $request){

        if ($request->ajax()){
            return response(Newstudent::create($request->all()));
        }
    }

    public function getStudents(){
        $newstudents = Newstudent::all();

    	return view('newstudent.newstudent', compact('newstudents'));
    }
}
