<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiContoller extends Controller
{
    public function index()
    {
        assert(! is_null(Auth::user()->student));

        $nilai = Nilai::where('id', Auth::user()->student->id)->get();

        return view('pageNilai', compact('nilai'));
    }
}
