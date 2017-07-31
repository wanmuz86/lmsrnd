<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function(){
	return view('master');
});
Route::get('/grade', ['as'=>'grade', 'uses'=>function(){
	return view('grade/grade');
}]);

Route::get('/calendar', ['as'=>'calendar', 'uses'=>function(){
	return view('calendar/calendar');
}]);

Route::get('/lessons',['as'=>'lessons', 'uses'=>function(){
	return view('lessons/lessons');
}]);


Route::get('/news',['as'=>'news', 'uses'=>function(){
	return view('news/news');
}]);


Route::get('/assignments', ['as'=>'assignments', 'uses'=>function(){
	return view('assignments/assignments');
}]);


Route::get('/mastery', ['as'=>'mastery', 'uses'=>function(){
	return view('mastery/mastery');
}]);

Route::get('/forums', ['as'=>'forums', 'uses'=>function(){
	return view('forums/forums');
}]);

Route::get('/games', ['as'=>'games', 'uses'=>function(){
	return view('games/games');
}]);

Route::get('/attendances', ['as'=>'attendances', 'uses'=>function(){
	return view('attendance/attendance');
}]);

Route::get('/syllabus', ['as'=>'syllabus', 'uses'=>function(){
	return view('syllabus/syllabus');
}]);



Route::post( '/manage/course/category',['as'=>'createCategory','uses'=>'CategoryController@createCategory']);

Route::get('/categories', ['as'=>'Categories', 'uses'=>'CategoryController@getCategories']);



Route::post( '/manage/course/course',['as'=>'createCourse','uses'=>'CourseController@createCourse']);

Route::get('/courses', ['as'=>'courses', 'uses'=>'CourseController@getCourses']);


Route::post('/manage/course/student',['as'=>'createStudent','uses'=>'StudentController@createStudent']);

Route::get('/students', ['as'=>'students','uses'=> 'StudentController@getStudents']);
