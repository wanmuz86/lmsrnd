<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Course;
use App\Module;

class LessonController extends Controller
{
  //
  public function __construct(){

  }
   public function createLesson($id, Request $request){

      if ($request->ajax()){
          return response(Lesson::create($request->all()));
      }
  }


  public function getLesson($course_id,$module_id,Request $request){
     $course = Course::where('id',$course_id)->first();
     $module = module::where('id',$module_id)->first();
     $lessons = Lesson::all();
   return view('lessons.lessons', compact('course','module', 'lessons'));
 }

}
