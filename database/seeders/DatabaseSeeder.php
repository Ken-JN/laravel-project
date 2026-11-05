<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {

        User::factory()->create([
            // 'name' => 'Test User',
            // 'email' => 'test@example.com',
        ]);

        Classroom::factory(12)
        ->hasStudents(5)
        ->create();
        // Student::factory(15)->recycle($classrooms)->create();
    }
}
