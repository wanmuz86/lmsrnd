<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\NewUser;
use App\Course;
use App\User;
use Auth;
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
        $students = NewUser::where('group_id',4)->get();
        $course = Course::where('id',$id)->first();
        $user = Auth::getUser();
    	return view('student.student', compact('students','course','user'));
    }
}
