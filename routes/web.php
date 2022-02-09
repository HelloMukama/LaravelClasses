<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentsController;

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
Route::get('/students_index', function(){
    return view('students.index');
});

// students form
Route::get('/students/registration',  [StudentsController::class, 'create'])->name('students.registration.form');

// // teachers index
// Route::get('/myteachers', function(){
//     return view('teachers.index');
// });

// teachers form CONTROLLER
Route::get('/myteachers', [TeachersController::class, 'index'])->name('teachers');

// teachers form
Route::get('/admin/registration', function(){
    return view('teachers.form');
});



// teachers form CONTROLLER
Route::get('/students', [StudentsController::class, 'index'])->name('students.index');



