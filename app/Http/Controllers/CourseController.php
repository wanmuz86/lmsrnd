<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Course;
use App\Category;
use App\Badges;
use App\NewUser;
use Session;
use Redirect;
use Mail;
use Auth;
use App\Mail\RegisterMail;

class CourseController extends BaseController
{
  public function __construct(){
 
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
       Session::flash('message', 'Successfully added the course!');
       return Redirect::to('courses');
    }
  }
  public function getCourses(){
    $courses = Course::all();
    $courseCat = Category::all();
    $user = Auth::user();

    return view('course.course', compact('courses', 'courseCat', 'user'));
  }
  public function editCourse($id,Request $request){
    $course = Course::where('id',$id)->first();
    $image_url  = '';
    if(Storage::exists($course->course_logo)){
      $image_url = Storage::url($course->course_logo);
    }
    $categories = Category::all();
    return view('course.edit_course', compact('course', 'categories','image_url'));
  }
  public function deleteCourse($id, Request $request){
    $course = Course::find($id);
    $course->delete();
    Session::flash('message', 'Successfully deleted the nerd!');
    return Redirect::to('courses');
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
  public function getGames($id,Request $request){
    $course = Course::where('id',$id)->first();
    //Mail::to('wanmuz86@gmail.com')->send(new RegisterMail);
    $user = Auth::getUser();
    return view('games.games', compact('course','user'));
  }
  public function getBadges($id,Request $request){
    $course = Course::where('id',$id)->first();
    $user = Auth::getUser();
    return view('badges.badges', compact('course', 'user'));
  }
  public function getNews($id,Request $request){
    $course = Course::where('id',$id)->first();
    $user = Auth::getUser();
    return view('news.news', compact('course', 'user'));
  }
    public function getDashboard($id,Request $request){
      $course = Course::where('id',$id)->first();
      return view('dashboards.dashboardcourses', compact('course'));
    }

    public function getAssesment($id,Request $request){
      $course = Course::where('id',$id)->first();
      return view('assignments.assignments', compact('course'));
    }

    public function getBundle(Request $request){
      $user = Auth::getUser();
      return view('bundles.bundle', compact('user'));
    } 

    public function getCourseDashboard($id,Request $request){
      $user = Auth::getUser();
      $course = Course::where('id',$id)->first();
      return view('dashboards.dashboardcourses', compact('user','course'));
    } 

    public function getAssignment($id,Request $request){
      $user = Auth::getUser();
      $course = Course::where('id',$id)->first();
      return view('assignments.assignments', compact('user','course'));
    }

    public function addUserToCourse($id, Request $request){

      $course = Course::where('id',$id)->first();
      $users  = $request->user;
      $response = [];
      foreach ($users as $user) {
      $course->newUsers()->attach($user);
      $newUser = NewUser::where('newuser_id',$user)->first();
      array_push($response, $newUser);
      }
      return response($response);

    }
}
