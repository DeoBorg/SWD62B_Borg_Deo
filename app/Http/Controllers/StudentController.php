<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\College;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // List all students
    public function index()
    {
        $students = Student::with('college')->get();
        return view('students.index', compact('students'));
    }

    // Form to add a new student
    public function create()
    {
        $colleges = College::all(); // Get all colleges for dropdown
        return view('students.create', compact('colleges'));
    }

    // Store a new student
    public function storeStudent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|digits:8', // Assuming Maltese phone number validation
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id', // validation requiring foreign key (college) exists
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'college_id' => $request->college_id,
        ]);

        // Redirect to students.index page with success message
        return redirect()->route('students.index')->with('success', 'Student added successfully');
    }

    // Form to update a student's details
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $colleges = College::all(); // Get all colleges for dropdown
        return view('students.edit', compact('student', 'colleges'));
    }

    // Update a student's details
    public function updateStudent(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone' => 'required|digits:8', // Assuming Maltese phone number validation
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id', // validation requiring foreign key (college) exists
        ]);

        $student = Student::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'college_id' => $request->college_id,
        ]);

        // Redirect to students.index page with success message
        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    // Delete a student record
    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        // Redirect to students.index page with success message
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}