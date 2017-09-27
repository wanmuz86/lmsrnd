<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Course;
use App\Question;
use App\Answer;
use Auth;
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
        $user = Auth::getUser();
    	return view('quiz.quiz', compact('course','quizes', 'user'));
    }

     public function getQuizDetail($course_id,$quiz_id,Request $request){
        $course = Course::where('id',$course_id)->first();
        $quiz = Quiz::where('id',$quiz_id)->first();
        $questions = Question::where('quiz_id', $quiz_id)->get();
         $user = Auth::getUser();
    	return view('quiz.question', compact('course','quiz', 'questions','user'));
    }

    public function addMultipleChoice($course_id,$quiz_id,Request $request){
        $course = Course::where('id',$course_id)->first();
        $quiz = Quiz::where('id',$quiz_id)->first();
        $user = Auth::getUser();
    	return view('quiz.question_multiple', compact('course','quiz','user'));
    }

    public function  createQuestionMultiple($course_id, $quiz_id, Request $request){

        if ($request->ajax()){
            $question = new Question;
            $question->question_text = $request->question;
            $question->quiz_id = $quiz_id;
            $question->save();
            $question->answers()->saveMany([
                new Answer(['answer_text' =>$request->answer_1]),
                new Answer(['answer_text' => $request->answer_2]),
                new Answer(['answer_text' => $request->answer_3]),
                new Answer(['answer_text' => $request->answer_4])
                ]);


        }
    }
}
