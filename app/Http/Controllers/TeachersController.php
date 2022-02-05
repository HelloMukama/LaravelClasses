<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeachersController extends Controller
{
    public function index (){
        // $teachers = ['Augustine', 'Moses', 'Jovic',  'Elisa', 'ETC'];

        // dd("This is a method that will return teachers!.");
        // dd($teachers);
        // return view('teachers.index')->with(compact('teachers'));  // using the compact mthd

        // animals in this case is the value holder. its what will be used to access the data via the for loop in the index view
       
    // to return all the database records, we do ModelName::all()

    // $teachers = Teacher::all();
    // $teachers = Teacher::get();
    // $teachers = Teacher::where('id', '=', 2)->get(); // display details of teacher whose id=2 
    $teachers = Teacher::where('first_name', 'like', '%a%')->get();
    //    dd($teachers);
        return view('teachers.index', ['animals' => $teachers]);   // associative array
    }
}
