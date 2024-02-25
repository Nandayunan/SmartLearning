<?php

namespace App\Console\Commands;

use App\Models\Student;
use App\Models\User;
use App\Models\Presensi;
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

        Student::create([
            'id' => $user->id,
            'nis' => '1234568999',
        ]);

        Presensi::create([
            'student_id' => $user->id,
            'status' => 'HADIR',
        ]);
        Presensi::create([
            'student_id' => $user->id,
            'status' => 'SAKIT',
        ]);
    }
}
