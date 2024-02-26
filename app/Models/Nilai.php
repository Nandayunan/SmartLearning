<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    static $unguarded = true;

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'id', 'id');
    }
}
