<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $title = 'Subject List';
        $subjects = Subject::with('teachers')->latest('id')->get();

        return view('admin.subjects.index', ['title' => $title, 'subjects' => $subjects]);
    }

    public function create()
    {
        return redirect()->route('admin.subjects.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        Subject::create($validated);

        return redirect()->route('admin.subjects.index');
    }
}

