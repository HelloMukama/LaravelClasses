<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class StudentsController extends Controller
{
    public function index (){

    $teachers = Teacher::where('first_name', 'like', '%a%')->get();
        return view('students.index', ['animals' => $teachers]);
    }

    public function create(){
        // dd('load student registration form');
        return view('students.registration');
    }
}
