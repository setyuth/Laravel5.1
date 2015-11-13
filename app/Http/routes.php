<?php

use App\Task;
use Illuminate\Http\Request;

/**
 * Display all Tasks
 */

//Authentication Routes...
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');

//Registration Routes...
Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');


Route::get('/tasks','TaskController@index');
Route::post('/task','TaskController@store');
Route::delete('/task/{task}','TaskController@destroy');


// Route::get('/', function () {
//     $tasks = Task::orderBy('created_at', 'desc')->get();

//     return view('tasks', [
//         'tasks' => $tasks
//     ]);
// });

// /**
//  * Add a new Task
//  */
// Route::post('/task',function(Request $request) {
// 	$validator = Validator::make($request->all(), [
//         'name' => 'required|max:255',
//     ]);

//     if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }


// 	$task = new Task;
//     $task->name = $request->name;
//     $task->save();

//     return redirect('/');
// });

// /**
//  * Delete an existing Task
//  */
// Route::delete('/task/{id}',function($id) {
// 	Task::findOrFail($id)->delete();

//     return redirect('/');
// });
