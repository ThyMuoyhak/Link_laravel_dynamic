<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $title = 'Students List';
        return view('students.index', compact('students', 'title'));
    }

    public function create()
    {
        $title = 'Add New Student';
        return view('students.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'nullable|in:male,female,other',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:students,email|max:255',
            'address' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'note' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('student'), $filename);
            $validated['photo'] = 'student/' . $filename;
        }

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function show(Student $student)
    {
        $title = 'Student Details';
        return view('students.show', compact('student', 'title'));
    }

    public function edit(Student $student)
    {
        $title = 'Edit Student';
        return view('students.edit', compact('student', 'title'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'nullable|in:male,female,other',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:students,email,' . $student->id . '|max:255',
            'address' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'note' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            if ($student->photo && File::exists(public_path($student->photo))) {
                File::delete(public_path($student->photo));
            }
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('student'), $filename);
            $validated['photo'] = 'student/' . $filename;
        }

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        if ($student->photo && File::exists(public_path($student->photo))) {
            File::delete(public_path($student->photo));
        }

        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}