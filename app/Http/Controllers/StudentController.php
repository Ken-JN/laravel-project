<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Student List';

        $students = Student::with('classroom')->latest('id')->get();
        $classrooms = Classroom::orderBy('name')->get();

        return view('admin.students.index', [
            'title' => $title,
            'students' => $students,
            'classrooms' => $classrooms,
        ]);
    }

    public function create()
    {
        return redirect()->route('admin.students.index');
    }

    public function
    store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nis' => ['required', 'integer'],
            'classroom_id' => ['required', 'exists:classrooms,id'],
            'address' => ['required', 'string', 'max:255'],
        ]);

        Student::create($validated);

        return redirect()->route('admin.students.index');
    }
}
