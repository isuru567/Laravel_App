<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentcontroller extends Controller
{
    public function index(){
        $student = Student::all();
        return view('index', ['student'=>$student]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $data=$request ->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $newStudent = student::create($data);
        dd($newStudent); 
        return redirect(route('student.index'));
        
    } 

}
