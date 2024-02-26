<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    static $unguarded = true;

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'teacher_id', 'id');
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
