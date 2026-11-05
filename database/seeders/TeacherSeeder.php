<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        if (Subject::count() === 0) {
            Subject::factory(10)->hasTeachers(3)->create();
        } else {
            Teacher::factory(10)->create();
        }
    }
}

