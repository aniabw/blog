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


Route::get('/about', function () {
    return view('about');
});
   
Route::get('/five1', function () {
		return view('five1', ['name' => 'Ania']);
});	




	/*it can be also this way:
	 $name = 'Ania';
	 return view('five', compact('name'));
	*/
	
Route::get('/five2', function () {
    $tasks = [
			'Go to shop',
			'Prepare bd party',
			'Cook rice'
		];
		
    return view('five2', compact('tasks'));
});	
	
/*fetch from db
Route::get('/fromdbjson', function () {
   $tasks = DB::table('tasks')->get();
   return $tasks; //zwraca json format
});


Route::get('/fromdb', function () {
   $tasks = DB::table('tasks')->get();
   return view('fromdbview', compact('tasks'));
});


Route::get('/tasks', function () {
   $tasks = DB::table('tasks')->latest()->get();
   return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
   $task = DB::table('tasks')->find($id);
   
   //dd($task);
   
   return view('tasks.show', compact('task'));
});
*/	

/*******
mozemy zamiast uzyc na poczatku skryptu 

use App\Task 

i wtedy 
$tasks = Task::all();
/*******/
/*
Route::get('/tasks', function () {
   //$tasks = DB::table('tasks')->latest()->get();
   $tasks = App\Task::all();
   
   return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
   $task = App\Task::find($id);
   
   return view('tasks.show', compact('task'));
});
   
*/
Route::get('/tasks', 'TasksController@index');

Route::get('/ajax',function(){
    return view('tasks.ajax');
 });

Route::get('/ajax2',function(){
    return view('tasks.ajax2');
 });

Route::post('/getmsg','TasksController@ajaxresponses');


Route::get('/jq','TasksController@getBody');



Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/posts','PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');

Route::get('/posts/tags/{tag}','TagsController@index');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');
?>	