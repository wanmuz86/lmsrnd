<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Course;
use App\Module;
use Auth;
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
     $module = Module::where('id',$module_id)->first();
     $lessons = Lesson::where('module_id',$module_id)->get();
     $user = Auth::getUser();
   return view('lessons.lessons', compact('course','module', 'lessons','user'));
 }

 public function getAddLesson($course_id,$module_id,Request $request){
     $module = Module::where('id',$module_id)->first();
     $course = Course::where('id',$course_id)->first();
   return view('lessons.add_lesson', compact('course','module'));
}
}
