<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Course;
use App\Category;
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
        $courseCat = Category::all();
    	return view('course.course', compact('courses', 'courseCat'));
    }

    public function getCourseDetail($id,Request $request){

        $course = Course::where('id',$id)->first();
        return view('lessons.lessons', compact('course'));

    }
    public function getModule($id,Request $request){

        $course = Course::where('id',$id)->first();
      return view('modules.modules', compact('course'));
    }
}
