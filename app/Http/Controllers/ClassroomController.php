<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $title = 'Classroom';
        $classroom = Classroom::with('students')->latest('id')->get();

        return view('admin.classroom.index', [
            'title' => $title,
            'classroom' => $classroom,
        ]);
    }

    public function create()
    {
        return redirect()->route('admin.classroom.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:classrooms,name'],
            'major' => ['required', 'string', 'max:255'],
        ]);

        Classroom::create($validated);

        return redirect()->route('admin.classroom.index');
    }
}
