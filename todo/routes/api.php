<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("tasks", "TasksController@index");
Route::post("tasks", "TasksController@store");