<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'About';
        $nama = 'Ahmad Kenzie JN';
        $hobby = 'Main Game';
        $github = 'Github: https://github.com/Ken-JN';
        return view('admin.about', ['title' => $title, 'nama' => $nama, 'hobby' => $hobby, 'github' => $github]);
    }

}

