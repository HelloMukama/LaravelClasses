<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeachersController;

Route::get('/', function () {
    // dd('Hello world!');
    return view('welcome');
});

Route::get('new/', function(){
    dd("New students here!");
});

Route::get('login', function(){
    return view('login');
});

// students index
Route::get('/students', function(){
    return view('students.index');
});

// students form
Route::get('/students/form', function(){
    return view('students.form');
});

// // teachers index
// Route::get('/myteachers', function(){
//     return view('teachers.index');
// });

// teachers form CONTROLLER
Route::get('/myteachers', [TeachersController::class, 'index']);

// teachers form
Route::get('/admin/registration', function(){
    return view('teachers.form');
});



