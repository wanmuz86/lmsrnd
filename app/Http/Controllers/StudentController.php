<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Student;
class StudentController extends BaseController
{
   public function __construct(){
    	
    }
     public function createStudent(Request $request){

        if ($request->ajax()){
            return response(Student::create($request->all()));
        }
    }

    public function getStudents(){
        $students = Student::all();
      
    	return view('student.student', compact('students'));
    }
}


