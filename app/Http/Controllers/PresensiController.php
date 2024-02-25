<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    public function index()
    {
        $presensi = Auth::user()->student->presensi;

        return view('absensiswa', compact('presensi'));
    }
}
