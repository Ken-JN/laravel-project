<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Student List';

        $students = Student::with('classroom')->get();

        return view('admin.students', compact('title', 'students'));
    }
}
