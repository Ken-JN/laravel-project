<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'Aboutwdwdwdwd';
        $nama = 'Ahmad Kenzie JN';
        $hobby = 'Main Game';
        return view('admin.about', ['title' => $title, 'nama' => $nama, 'hobby' => $hobby]);
    }

}

