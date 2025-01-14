<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentcontroller extends Controller
{
    public function index()
    {
        $students = Student::all(); // Fetch all student records
        return view('index', compact('students')); // Pass data to the Blade file
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
        return redirect()->route('student-index')->with('success', 'Student created successfully!');
        
    } 

    public function edit($id)
    {
      $student = Student::findOrFail($id); // Find the student by ID
      return view('edit', compact('student')); // Pass data to the edit Blade
    }

    public function update(Request $request, $id)
    {
     $data = $request->validate([
        'name' => 'required',
        'address' => 'required',
        'phone' => 'required',
     ]);

      $student = Student::findOrFail($id); // Find the student by ID
      $student->update($data); // Update the student record

     return redirect()->route('student-index')->with('success', 'Student updated successfully!');
    }


    public function destroy($id)
   {
    $student = Student::findOrFail($id); // Find the student by ID
    $student->delete(); // Delete the student record

    return redirect()->route('student-index')->with('success', 'Student deleted successfully!');
    }




}
