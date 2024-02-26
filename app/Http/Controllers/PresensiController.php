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

    public function store(Request $request)
    {
        $request->validate([
            'presensi' => ['required', 'in:HADIR,ABSEN,SAKIT,IZIN'],
        ]);

        $user = Auth::user();

        assert(! is_null($user->student));

        $user->student->presensi()->create([
            'status' => $request->presensi
        ]);

        return to_route('presensi.index');
    }
}
