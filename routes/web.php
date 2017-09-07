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

Route::get('/generalGamification',['as'=>'generalGamification', 'uses'=>function(){
	return view('generalGamifications/generalGamification');
}]);

Route::get('/analyticsReporting',['as'=>'analyticsReporting', 'uses'=>function(){
	return view('analyticsReportings/analyticsReporting');
}]);

Route::get('/inbox',['as'=>'inbox', 'uses'=>function(){
	return view('inboxs/inbox');
}]);

Route::get('/bundle',['as'=>'bundle', 'uses'=>function(){
	return view('bundles/bundle');
}]);

Route::get('/dashboard',['as'=>'dashboard', 'uses'=>function(){
	return view('dashboards/dashboard');
}]);

Route::get('/dashboardcourses',['as'=>'dashboardcourses', 'uses'=>function(){
	return view('dashboards/dashboardcourses');
}]);


Route::get('/login',['as'=>'login', 'uses'=>function(){
	return view('logins/login');
}]);

Route::get('/modules',['as'=>'modules', 'uses'=>function(){
	return view('modules/modules');
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



Route::post( '/manage/course/profile',['as'=>'profile','uses'=>'NewUserController@createProfile']);
Route::get('/profile/{id}', ['as'=>'profile', 'uses'=>'NewUserController@getNewUserProfile']);


Route::post( '/manage/countries/country',['as'=>'createCountry','uses'=>'CountryController@createCountry']);
Route::get('/countries', ['as'=>'countries', 'uses'=>'CountryController@getCountries']);
Route::get( '/manage/countries/edit_country/{id}',['as'=>'editCountry','uses'=>'CountryController@editCountry']);
Route::post( '/manage/countries/update_country/',['as'=>'updateCountry','uses'=>'CountryController@updateCountry']);


Route::post( '/manage/companies/company',['as'=>'createCompany','uses'=>'CompanyController@createCompany']);
Route::get('/companies', ['as'=>'companies', 'uses'=>'CompanyController@getCompanies']);
Route::get( '/manage/companies/edit_company/{id}',['as'=>'editCompany','uses'=>'CompanyController@editCompany']);
Route::post( '/manage/companis/update_company/',['as'=>'updateCompany','uses'=>'CompanyController@updateCompany']);


Route::post( '/manage/bactchs/batch',['as'=>'createBatch','uses'=>'BatchController@createBatch']);
Route::get('/batches', ['as'=>'batches', 'uses'=>'BatchController@getBatches']);
Route::get( '/manage/newusers/edit_batch/{id}',['as'=>'editBatch','uses'=>'BatchController@editBatch']);
Route::post( '/manage/newusers/update_batch/',['as'=>'updateBatch','uses'=>'BatchController@updateBatch']);


Route::post( '/manage/category/category',['as'=>'createCategory','uses'=>'CategoryController@createCategory']);
Route::get('/categories', ['as'=>'categories', 'uses'=>'CategoryController@getCategories']);
Route::get( '/manage/category/edit_category/{id}',['as'=>'editCategory','uses'=>'CategoryController@editCategory']);
Route::post( '/manage/categor/update_category/',['as'=>'updateCategory','uses'=>'CategoryController@updateCategory']);


Route::post( '/manage/groups/group',['as'=>'createGroup','uses'=>'GroupController@createGroup']);
Route::get('/groups', ['as'=>'groups', 'uses'=>'GroupController@getGroups']);
Route::get( '/manage/groups/edit_group/{id}',['as'=>'editGroup','uses'=>'GroupController@editGroup']);
Route::post( '/manage/groups/update_group/',['as'=>'updateGroup','uses'=>'GroupController@updateGroup']);


Route::post( '/manage/course/course',['as'=>'createCourse','uses'=>'CourseController@createCourse']);
Route::get( '/manage/course/edit_course/{id}',['as'=>'editCourse','uses'=>'CourseController@editCourse']);
Route::post( '/manage/course/update_course/',['as'=>'updateCourse','uses'=>'CourseController@updateCourse']);


Route::get('course/{id}/dashboardcourses',['as'=>'getDashboard', 'uses'=>'CourseController@getDashboard']);

Route::get('course/{id}/badges',['as'=>'getBadges', 'uses'=>'CourseController@getBadges']);
Route::get('course/{id}/news',['as'=>'getNews', 'uses'=>'CourseController@getNews']);
Route::get('coursedetail/{id}/games',['as'=>'getGames', 'uses'=>'CourseController@getGame']);


Route::post('/manage/course/student',['as'=>'createStudent','uses'=>'StudentController@createStudent']);
Route::get('/course/{id}/students', ['as'=>'students','uses'=> 'StudentController@getStudents']);



Route::get('/newstudents', ['as'=>'getNewstudents','uses'=> 'NewstudentController@getNewstudents']);


Route::post('/manage/newuser/newuser',['as'=>'createNewUser','uses'=>'NewUserController@createNewUser']);
Route::get('/newusers', ['as'=>'newusers','uses'=> 'NewUserController@getNewUsers']);

Route::get( '/manage/newusers/edit_newuser/{id}',['as'=>'editNewUser','uses'=>'NewUserController@editNewUser']);
Route::post( '/manage/newusers/update_newuser/',['as'=>'updateNewUser','uses'=>'NewUserController@updateNewUser']);



Route::post('/manage/{id}/createQuiz',['as'=>'createQuiz','uses'=>'QuizController@createQuiz']);
Route::get('course/{id}/quiz',['as'=>'getQuiz', 'uses'=>'QuizController@getQuiz']);
Route::get('course/{course_id}/quiz/{quiz_id}',['as'=>'getQuizDetail', 'uses'=>'QuizController@getQuizDetail']);
Route::get('course/{course_id}/quiz/{quiz_id}/addMultipleChoice',['as'=>'addMultipleChoice', 'uses'=>'QuizController@addMultipleChoice']);
Route::post('course/{course_id}/quiz/{quiz_id}/createQuestionMultiple',['as'=>'createQuestionMultiple', 'uses'=>'QuizController@createQuestionMultiple']);


Route::get('course/{id}/module',['as'=>'getModules', 'uses'=>'ModuleController@getModules']);
Route::post('/manage/{id}/createModule',['as'=>'createModule','uses'=>'ModuleController@createModule']);

Route::get('course/{id}/certification',['as'=>'getCertificate', 'uses'=>'CertificateController@getCertificate']);
Route::post('/manage/{id}/createCertification',['as'=>'createCertificate','uses'=>'CertificateController@createCertificate']);

Route::post( 'course/manage/{id}/createLesson',['as'=>'createLesson','uses'=>'LessonController@createLesson']);
Route::get('course/{course_id}/module/{module_id}/getLesson', ['as'=>'getLesson','uses'=> 'LessonController@getLesson']);
Route::get('course/{course_id}/module/{module_id}/add_lesson',['as'=>'add_lesson', 'uses'=>'LessonController@getAddLesson']);


Route::get('/',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login', ['as'=>'login', 'uses'=>'LoginController@postLogin']);




Route::get('/courses', ['as'=>'courses', 'uses'=>'CourseController@getCourses']);
Route::delete('/courses/{id}', ['as'=>'deleteCourse', 'uses'=>'CourseController@deleteCourse']);
Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);

