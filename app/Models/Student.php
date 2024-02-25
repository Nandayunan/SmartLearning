<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    static $unguarded = true;

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function presensi()
    {
        return $this->hasMany(Presensi::class);
    }
}
