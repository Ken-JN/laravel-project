<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classroom::truncate();

        $classrooms = [
            ['name' => '10 PPLG 1', 'major' => 'PPLG'],
            ['name' => '11 PPLG 1', 'major' => 'PPLG'],
            ['name' => '12 PPLG 1', 'major' => 'PPLG'],
            ['name' => '10 ANIMASI 1', 'major' => 'ANIMASI'],
            ['name' => '11 ANIMASI 1', 'major' => 'ANIMASI'],
            ['name' => '12 ANIMASI 1', 'major' => 'ANIMASI'],
            ['name' => '10 DKV 2', 'major' => 'DKV'],
            ['name' => '11 DKV 2', 'major' => 'DKV'],
            ['name' => '12 DKV 2', 'major' => 'DKV'],
            ['name' => '10 PPLG 2', 'major' => 'PPLG'],
        ];

        foreach ($classrooms as $classroom) {
            Classroom::create($classroom);
        }
    }
}

