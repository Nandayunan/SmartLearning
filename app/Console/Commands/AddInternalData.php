<?php

namespace App\Console\Commands;

use App\Models\Student;
use App\Models\User;
use App\Models\Subject;
use App\Models\Presensi;
use App\Models\Teacher;
use App\Models\Kelas;
use Illuminate\Console\Command;

class AddInternalData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add-internal-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add internal data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::create([
            'name' => 'Freddy Kristian Putra',
            'email' => 'freddy@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user2 = User::create([
            'name' => 'Asep Suryana',
            'email' => 'asep@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        Teacher::create([
            'id' => $user2->id,
            'nuptk' => '193129302193021'
        ]);

        Student::create([
            'id' => $user->id,
            'nis' => '1234568999',
            'teacher_id' => $user2->id,
        ]);

        Subject::insert([
            [
                'name' => 'Matematika',
                'tahun_ajaran' => 2024,
                'semester' => 2,
                'kkm' => 75,
                'teacher_id' => $user2->id
            ],
            [
                'name' => 'Bahasa Indonesia',
                'tahun_ajaran' => 2024,
                'semester' => 2,
                'kkm' => 75,
                'teacher_id' => $user2->id
            ],
            [
                'name' => 'Bahasa Inggris',
                'tahun_ajaran' => 2024,
                'semester' => 2,
                'kkm' => 75,
                'teacher_id' => $user2->id
            ],
            [
                'name' => 'Ilmu Pengetahuan Alam',
                'tahun_ajaran' => 2024,
                'semester' => 2,
                'kkm' => 75,
                'teacher_id' => $user2->id
            ],
        ]);

        Student::first()
            ->belongsToMany(Subject::class, 'student_subject', 'student_id', 'subject_id')
            ->attach(Subject::first()->id);

        Presensi::create([
            'student_id' => $user->id,
            'status' => 'HADIR',
        ]);
        Presensi::create([
            'student_id' => $user->id,
            'status' => 'SAKIT',
        ]);

        Kelas::create([
            'teacher_id' => $user2->id
        ]);


    }
}
