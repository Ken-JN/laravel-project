<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/about', [AboutController::class, 'index']);

Route::get('/admin/students', [StudentController::class, 'index'])
                ->name('admin.students.index');

Route::get('/admin/classroom', [ClassroomController::class, 'index'])
                ->name('admin.classroom.index');

Route::get('/admin/classroom/create', [ClassroomController::class, 'create'])
                ->name('admin.classroom.create');

Route::post('/admin/classroom', [ClassroomController::class, 'store'])
                ->name('admin.classroom.store');

Route::get('/admin/teachers', [TeacherController::class, 'index'])
                ->name('admin.teachers.index');

Route::get('/admin/teachers/create', [TeacherController::class, 'create'])
                ->name('admin.teachers.create');

Route::post('/admin/teachers', [TeacherController::class, 'store'])
                ->name('admin.teachers.store');

Route::get('/admin/subjects', [SubjectController::class, 'index'])
                ->name('admin.subjects.index');

Route::get('/admin/subjects/create', [SubjectController::class, 'create'])
                ->name('admin.subjects.create');

Route::post('/admin/subjects', [SubjectController::class, 'store'])
                ->name('admin.subjects.store');

Route::get('/admin/students/create', [StudentController::class, 'create'])
                ->name('admin.students.create');

Route::post('/admin/students', [StudentController::class, 'store'])
                ->name('admin.students.store');
