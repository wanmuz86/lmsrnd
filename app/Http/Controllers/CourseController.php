<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Course;
class CourseController extends BaseController
{
   public function __construct(){
    	
    }
   public function createCourse(Request $request){

        if ($request->ajax()){
            return response(Course::create($request->all()));
        }
    }

    public function getCourses(){
        $courses = Course::all();
      
    	return view('course.course', compact('courses'));
    }
}
