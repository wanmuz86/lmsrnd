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



Route::get('/login',['as'=>'login', 'uses'=>function(){
	return view('logins/login');
}]);

Route::get('/modules',['as'=>'modules', 'uses'=>function(){
	return view('modules/modules');
}]);






Route::get('/mastery', ['as'=>'mastery', 'uses'=>function(){
	return view('mastery/mastery');
}]);

Route::get('/forums', ['as'=>'forums', 'uses'=>function(){
	return view('forums/forums');
}]);



Route::get('/attendances', ['as'=>'attendances', 'uses'=>function(){
	return view('attendance/attendance');
}]);

Route::get('/syllabus', ['as'=>'syllabus', 'uses'=>function(){
	return view('syllabus/syllabus');
}]);


Route::post( '/manage/course/profile',['as'=>'profile','uses'=>'NewUserController@createProfile']);


Route::post( '/manage/countries/country',['as'=>'createCountry','uses'=>'CountryController@createCountry']);
Route::get('/countries', ['as'=>'countries', 'uses'=>'CountryController@getCountries']);
Route::get( '/manage/countries/edit_country/{id}',['as'=>'editCountry','uses'=>'CountryController@editCountry']);
Route::post( '/manage/countries/update_country/',['as'=>'updateCountry','uses'=>'CountryController@updateCountry']);
Route::delete('/countries/{id}', ['as'=>'deleteCountry', 'uses'=>'CountryController@deleteCountry']);


Route::post( '/manage/companies/company',['as'=>'createCompany','uses'=>'CompanyController@createCompany']);

Route::get( '/manage/companies/edit_company/{id}',['as'=>'editCompany','uses'=>'CompanyController@editCompany']);
Route::post( '/manage/companis/update_company/',['as'=>'updateCompany','uses'=>'CompanyController@updateCompany']);
Route::delete('/companies/{id}', ['as'=>'deleteCompany', 'uses'=>'CompanyController@deleteCompany']);


Route::post( '/manage/bactchs/batch',['as'=>'createBatch','uses'=>'BatchController@createBatch']);

Route::get( '/manage/newusers/edit_batch/{id}',['as'=>'editBatch','uses'=>'BatchController@editBatch']);
Route::post( '/manage/newusers/update_batch/',['as'=>'updateBatch','uses'=>'BatchController@updateBatch']);
Route::delete('/batches/{id}', ['as'=>'deleteBatch', 'uses'=>'BatchController@deleteBatch']);


Route::post( '/manage/category/category',['as'=>'createCategory','uses'=>'CategoryController@createCategory']);

Route::get( '/manage/category/edit_category/{id}',['as'=>'editCategory','uses'=>'CategoryController@editCategory']);
Route::post( '/manage/categor/update_category/',['as'=>'updateCategory','uses'=>'CategoryController@updateCategory']);
Route::delete('/categories/{id}', ['as'=>'deleteCategory', 'uses'=>'CategoryController@deleteCategory']);


Route::post( '/manage/groups/group',['as'=>'createGroup','uses'=>'GroupController@createGroup']);


Route::post( '/manage/groups/update_group/',['as'=>'updateGroup','uses'=>'GroupController@updateGroup']);
Route::delete('/group/{id}', ['as'=>'deleteGroup', 'uses'=>'GroupController@deleteGroup']);



Route::get( '/manage/course/edit_course/{id}',['as'=>'editCourse','uses'=>'CourseController@editCourse']);
Route::post( '/manage/course/update_course/',['as'=>'updateCourse','uses'=>'CourseController@updateCourse']);








Route::post('/manage/course/student',['as'=>'createStudent','uses'=>'StudentController@createStudent']);



Route::post('/manage/user/users',['as'=>'createUser','uses'=>'UserController@createUser']);
Route::get( '/manage/users/edit_user/{id}',['as'=>'editUser','uses'=>'UserController@editUser']);
Route::post( '/manage/users/update_user/',['as'=>'updateUser','uses'=>'UserController@updateUser']);
Route::delete('/users/{id}', ['as'=>'deleteUser', 'uses'=>'UserController@deleteUser']);
Route::get('/users', ['as'=>'users','uses'=> 'UserController@getUser']);


Route::get('/newstudents', ['as'=>'getNewstudents','uses'=> 'NewstudentController@getNewstudents']);


Route::post('/manage/newuser/newuser',['as'=>'createNewUser','uses'=>'NewUserController@createNewUser']);

Route::get( '/manage/newusers/edit_newuser/{id}',['as'=>'editNewUser','uses'=>'NewUserController@editNewUser']);
Route::post( '/manage/newusers/update_newuser/',['as'=>'updateNewUser','uses'=>'NewUserController@updateNewUser']);
Route::delete('/newusers/{id}', ['as'=>'deleteNewUser', 'uses'=>'NewUserController@deleteNewUser']);


Route::post('/manage/{id}/createQuiz',['as'=>'createQuiz','uses'=>'QuizController@createQuiz']);



Route::post('course/{course_id}/quiz/{quiz_id}/createQuestionMultiple',['as'=>'createQuestionMultiple', 'uses'=>'QuizController@createQuestionMultiple']);



Route::post('/manage/{id}/createModule',['as'=>'createModule','uses'=>'ModuleController@createModule']);
Route::get( '/course/module/{module_id}/edit_module',['as'=>'editModule','uses'=>'ModuleController@editModule']);
Route::post( '/manage/module/update_module/',['as'=>'updateModule','uses'=>'ModuleController@updateModule']);
Route::delete('/modulesModule/{id}', ['as'=>'deleteModule', 'uses'=>'ModuleController@deleteModule']);



Route::post('/manage/{id}/createCertification',['as'=>'createCertificate','uses'=>'CertificateController@createCertificate']);

Route::post( 'course/manage/{id}/createLesson',['as'=>'createLesson','uses'=>'LessonController@createLesson']);

Route::get('course/{course_id}/module/{module_id}/add_lesson',['as'=>'add_lesson', 'uses'=>'LessonController@getAddLesson']);


Route::get('/',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login', ['as'=>'login', 'uses'=>'LoginController@postLogin']);


Route::middleware(['auth','roles'])->group(function () {
    Route::get('/courses',
	['as'=>'courses',
	'uses'=>'CourseController@getCourses',
	'roles'=>['Admin','Trainer']
	]);

	Route::get('course/{course_id}/module/{module_id}/add_lesson',
		['as'=>'add_lesson', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'LessonController@getAddLesson'
		]);
	Route::get('/dashboard',
		['as'=>'dashboard', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'DashboardController@getDashboard'
	]);
	Route::get('/categories', 
		['as'=>'categories', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'CategoryController@getCategories']);

	Route::get('/newusers', 
		['as'=>'newusers',
		'roles'=>['Admin','Trainer'],
		'uses'=> 'NewUserController@getNewUser']);

	Route::get('/groups', 
		['as'=>'groups', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'GroupController@getGroups']);
	Route::get('/calendar', 
		['as'=>'calendar', 
		'uses'=>'CalendarController@getCalendar'
		]);
	Route::get('/batches', 
		['as'=>'batches', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'BatchController@getBatches'
		]);
	Route::get('/companies', 
		['as'=>'companies', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'CompanyController@getCompanies']);

	Route::get('/generalGamification',
		['as'=>'generalGamification', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'GamificationController@getGamification']);

	Route::get('/inbox',
		['as'=>'inbox', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'NewUserController@getInbox']);

	Route::get('/bundle',
		['as'=>'bundle', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'CourseController@getBundle']);

	Route::get('/analyticsReporting',
		['as'=>'analyticsReporting',
		'roles'=>['Admin','Trainer'],
		'uses'=>'DashboardController@getReporting'] 
		);
	Route::get('course/{id}/module',
		['as'=>'getModules', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'ModuleController@getModules']);

	Route::get('/course/{id}/dashboardcourses',
		['as'=>'getDashboard', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'CourseController@getCourseDashboard'] );

	Route::get('course/{course_id}/module/{module_id}/getLesson', ['as'=>'getLesson',
		'roles'=>['Admin','Trainer'],
		'uses'=> 'LessonController@getLesson']);

	Route::get('/course/{id}/assignments', 
		['as'=>'assignments', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'CourseController@getAssignment']);

	Route::get('course/{id}/news',
		['as'=>'getNews',
		'roles'=>['Admin','Trainer'],
		'uses'=>'CourseController@getNews']);

	Route::get('course/{id}/certification',
		['as'=>'getCertificate', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'CertificateController@getCertificate']);
	
	Route::get('coursedetail/{id}/games',
	['as'=>'getGames', 
	'roles'=>['Admin','Trainer'],
	'uses'=>'CourseController@getGames']);

	Route::get('course/{id}/badges',
		['as'=>'getBadges', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'CourseController@getBadges']);

	Route::get('/course/{id}/students', 
		['as'=>'students',
		'roles'=>['Admin','Trainer'],
		'uses'=> 'StudentController@getStudents']);

	Route::get('/profile/{id}', 
		['as'=>'profile', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'NewUserController@getNewUserProfile']);

	Route::get('course/{id}/quiz',
		['as'=>'getQuiz', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'QuizController@getQuiz']);

	Route::get('course/{course_id}/quiz/{quiz_id}',
		['as'=>'getQuizDetail', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'QuizController@getQuizDetail']);

	Route::get('course/{course_id}/quiz/{quiz_id}/addMultipleChoice',
		['as'=>'addMultipleChoice', 
		'roles'=>['Admin','Trainer'],
		'uses'=>'QuizController@addMultipleChoice']);

	Route::get( '/manage/groups/edit_group/{id}',
		['as'=>'editGroup',
		'roles'=>['Admin','Trainer'],
		'uses'=>'GroupController@editGroup']);
Route::post( '/manage/courses/addUserToCourse/{id}',
		['as'=>'addUserToCourse',
		'roles'=>['Admin','Trainer'],
		'uses'=>'CourseController@addUserToCourse']);

Route::post( '/manage/course/course',
	['as'=>'createCourse',
	'roles'=>['Admin','Trainer'],
	'uses'=>'CourseController@createCourse']);

	

});


/*
Route::get('/courses',
	['as'=>'courses',
	'uses'=>'CourseController@getCourses',
	'middleware' => ['auth','roles'],
	'roles'=>['Admin','Trainer']
	]);
*/

Route::delete('/courses/{id}',
	['as'=>'deleteCourse',
	'uses'=>'CourseController@deleteCourse',
	'middleware' => ['auth','roles'],
	'roles'=>['Admin','Trainer']
	]);

Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
