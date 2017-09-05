<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Course;
use App\Category;
use App\Badges;
class CourseController extends BaseController
{
   public function __construct(){
   // $this->middleware('web');

    }
   public function createCourse(Request $request){
  $path = $request->file('course_logo')->store('public/logos');
  if ($request->ajax()){
     $course = new Course;
     $course->course_name = $request->course_name;
       $course->course_logo = $path;
       $course->category_id = $request->category_id;
       $course->course_desc = $request->course_desc;
       $course->is_active = $request->is_active;
       $course->activation_date = $request->activation_date;
       $course->end_date = $request->end_date;
       $course->price = $request->price;
       $course->trainer_id = $request->trainer_id;
     $course->save();

    return response($course);
      }
    }

    public function getCourses(){
        $courses = Course::all();
        $courseCat = Category::all();
    	return view('course.course', compact('courses', 'courseCat'));
    }
    public function editCourse($id,Request $request){
        $course = Course::where('id',$id)->first();
        $image_url  = '';
        if(Storage::exists($course->course_logo));{
            $image_url = Storage::url($course->course_logo);
        }

        $categories = Category::all();
        return view('course.edit_course', compact('course', 'categories','image_url'));
    }

  public function updateCourse(Request $request){
        $course = Course::where('id',$request->course_id)->first();
        $course->course_name = $request->course_name;
       $course->course_logo = $request->course_logo;
       $course->category_id = $request->category_id;
       $course->course_desc = $request->course_desc;
       $course->is_active = $request->is_active;
       $course->activation_date = $request->activation_date;
       $course->end_date = $request->end_date;
       $course->price = $request->price;
       $course->trainer_id = $request->trainer_id;
        $course->save();
        return response($course);
    }

  public function getGame($id,Request $request){
    $course = Course::where('id',$id)->first();
    return view('games.games', compact('course'));
  }

  public function getBadges($id,Request $request){
    $course = Course::where('id',$id)->first();
    return view('badges.badges', compact('course'));
  }

  public function getNews($id,Request $request){
    $course = Course::where('id',$id)->first();
    return view('news.news', compact('course'));
  }

}
