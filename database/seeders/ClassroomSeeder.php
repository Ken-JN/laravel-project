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
        $classrooms = [
            ['name' => 'X PPLG 1', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'X PPLG 2', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'XI PPLG 1', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'XI PPLG 2', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'XII PPLG 1', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'XII PPLG 2', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'X TJKT 1', 'major' => 'Teknik Jaringan Komputer dan Telekomunikasi'],
            ['name' => 'X TJKT 2', 'major' => 'Teknik Jaringan Komputer dan Telekomunikasi'],
            ['name' => 'XI TJKT 1', 'major' => 'Teknik Jaringan Komputer dan Telekomunikasi'],
            ['name' => 'XII TJKT 1', 'major' => 'Teknik Jaringan Komputer dan Telekomunikasi'],
        ];

        foreach ($classrooms as $classroom) {
            Classroom::create($classroom);
        }
    }
}

