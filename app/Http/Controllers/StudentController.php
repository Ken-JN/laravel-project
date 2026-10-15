<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Student List';

        $students = Student::all();

        return view('admin.students', compact('title', 'students'));
    }
}
