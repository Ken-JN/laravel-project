<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = 'Teacher List';
        $teachers = Teacher::with('subject')->latest('id')->get();
        $subjects = Subject::orderBy('name')->get();

        return view('admin.teachers.index', [
            'title' => $title,
            'teachers' => $teachers,
            'subjects' => $subjects,
        ]);
    }

    public function create()
    {
        return redirect()->route('admin.teachers.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'niy' => ['required', 'integer'],
            'subject_id' => ['required', 'exists:subjects,id'],
            'start_date' => ['required', 'date'],
        ]);

        Teacher::create($validated);

        return redirect()->route('admin.teachers.index');
    }
}

