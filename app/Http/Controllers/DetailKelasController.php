<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailKelasController extends Controller
{
    public function index()
    {
        assert(! is_null(Auth::user()->teacher));

        $kelas = Auth::user()->teacher->kelas;

        return view('detailKelas', compact('kelas'));
    }
}
