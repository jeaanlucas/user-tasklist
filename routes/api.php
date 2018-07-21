<?php

Route::post('login', 'LoginController@login');

Route::group([
  'middleware' => 'jwt.auth',
], function() {
    Route::post('users', 'UserController@createUser'); // Create an User
    Route::get('users', 'UserController@listUsers'); // Return all existing Users
    Route::get('users/{user}', 'UserController@userData'); // Return data from a specified User
    Route::put('users/{user}', 'UserController@editUser'); // Edit data from a specified User
    Route::delete('users/{user}', 'UserController@deleteUser'); // Delete an User

    Route::post('tasks', 'TaskController@createTask'); // Create a Task
    Route::get('tasks', 'TaskController@listTask'); // Return all existing Tasks
    Route::get('tasks/{task}', 'TaskController@taskData'); // Return data from a specified Task
    Route::put('tasks/{task}', 'TaskController@editTask'); // Edit data from a specified Task
    Route::delete('tasks/{task}', 'TaskController@deleteTask'); // Delete a Task
});
