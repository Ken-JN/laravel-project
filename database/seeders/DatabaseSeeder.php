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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Student::factory(15)->create(); // 15 data
        Classroom::factory(10)->create();
    }
}
