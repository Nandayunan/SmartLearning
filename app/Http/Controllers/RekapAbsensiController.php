<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekapAbsensiController extends Controller
{
    public function index()
    {
        assert(! is_null(Auth::user()->teacher));

        $students = Auth::user()->teacher->students;

        return view('rekapabsensi', compact('students'));
    }
}
