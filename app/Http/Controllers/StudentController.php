<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Students';
        $listStudents = [
        ['name' => 'Ardiansyah', 'NIS' => '240001', 'CLASS' => 'X PPLG 1', 'Status' => 'Active'],
        ['name' => 'Bima', 'NIS' => '240002', 'CLASS' => 'X PPLG 1', 'Status' => 'Active'],
        ['name' => 'Kenji', 'NIS' => '240003', 'CLASS' => 'X PPLG 2', 'Status' => 'Inactive'],
        ['name' => 'Aldi', 'NIS' => '240004', 'CLASS' => 'X PPLG 2', 'Status' => 'Inactive'],
        ['name' => 'Rafa', 'NIS' => '240005', 'CLASS' => 'XI PPLG 1', 'Status' => 'Active'],
        ['name' => 'Putra', 'NIS' => '240006', 'CLASS' => 'XI PPLG 1', 'Status' => 'Active'],
        ['name' => 'Putri', 'NIS' => '240007', 'CLASS' => 'XI PPLG 2', 'Status' => 'Active'],
        ['name' => 'Alika', 'NIS' => '240008', 'CLASS' => 'XI PPLG 2', 'Status' => 'Inactive'],
        ['name' => 'Pratama', 'NIS' => '240009', 'CLASS' => 'XII PPLG 1', 'Status' => 'Active'],
        ['name' => 'Bejo', 'NIS' => '240010', 'CLASS' => 'XII PPLG 1', 'Status' => 'Active'],
        ];
        return view('admin.students', ['title' => $title, 'listStudents' => $listStudents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
