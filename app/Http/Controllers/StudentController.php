<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\NewUser;
use App\Course;
class StudentController extends BaseController
{
   public function __construct(){

    }
     public function createStudent(Request $request){

        if ($request->ajax()){
            return response(Student::create($request->all()));
        }
    }

    public function getStudents(Request $request, $id){
        $students = NewUser::all();
        $course = Course::where('id',$id)->first();
    	return view('student.student', compact('students','course'));
    }
}
