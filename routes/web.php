<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Student
Route::get('/', function(){
    return redirect('student');
});
Route::resource('student', StudentController::class);
