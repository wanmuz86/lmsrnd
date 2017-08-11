<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Course;
use App\Question;
use App\Answer;
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
        $quiz = Quiz::where('id',$quiz_id)->first();
        $questions = Question::where('quiz_id', $quiz_id)->get();
    	return view('quiz.question', compact('course','quiz', 'questions'));
    }
    public function addMultipleChoice($course_id,$quiz_id,Request $request){
        $course = Course::where('id',$course_id)->first();
        $quiz = Quiz::where('id',$quiz_id)->first();
    	return view('quiz.question_multiple', compact('course','quiz'));
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
