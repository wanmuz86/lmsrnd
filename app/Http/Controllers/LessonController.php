<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Module;
use App\Course;


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

  public function getCourseDetail($id,Request $request){
      $lesson = Lesson::all();
      $module = Module::all();
      $course = Course::where('id',$id)->first();
      return view('lessons.lessons', compact('course','lesson','module'));

  }
}
