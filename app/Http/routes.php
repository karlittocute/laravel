<?php
use App\Task;
use Illuminate\Http\Request;

Route::get('task/author','TaskController@author');

Route::resource('task', 'TaskController');
