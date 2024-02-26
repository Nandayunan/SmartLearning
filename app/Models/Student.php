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

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
