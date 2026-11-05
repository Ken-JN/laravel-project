<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $title = 'Subject List';
        $subjects = Subject::with('teachers')->get();

        return view('admin.subjects', compact('title', 'subjects'));
    }
}

