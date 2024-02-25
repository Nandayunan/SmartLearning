<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::insert([
            [
                'name' => 'Matematika',
                'tahun_ajaran' => 2024,
                'semester' => 2,
                'kkm' => 75
            ],
            [
                'name' => 'Bahasa Indonesia',
                'tahun_ajaran' => 2024,
                'semester' => 2,
                'kkm' => 75
            ],
            [
                'name' => 'Bahasa Inggris',
                'tahun_ajaran' => 2024,
                'semester' => 2,
                'kkm' => 75
            ],
            [
                'name' => 'Ilmu Pengetahuan Alam',
                'tahun_ajaran' => 2024,
                'semester' => 2,
                'kkm' => 75
            ],
        ]);
    }
}
