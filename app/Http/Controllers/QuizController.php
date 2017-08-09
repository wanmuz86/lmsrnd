<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Course;

class QuizController extends Controller
{
    //
    public function __construct(){

    }
     public function createQuiz($id, Request $request){

        if ($request->ajax()){
            return response(Quiz::create($request->all()));
        }
    }
    public function getQuiz($id,Request $request){
        $quizes = Quiz::all();
        $course = Course::where('id',$id)->first();
    	return view('quiz.quiz', compact('course','quizes'));
    }
     public function getQuizDetail($course_id,$quiz_id,Request $request){
        $course = Course::where('id',$course_id)->first();
    	return view('quiz.question', compact('course'));
    }
}
