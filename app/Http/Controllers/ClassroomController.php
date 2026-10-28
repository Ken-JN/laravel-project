<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $title = 'Classroom';
        $classroom = Classroom::all();

        return view('admin.classroom', [
            'title' => $title,
            'classroom' => $classroom,
            'classrooms' => $classroom,
        ]);
    }
}
