<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasController extends Controller
{
    public function index()
    {
        $subjects = Auth::user()->student->subjects;

        return view('tugasMAPEL', compact('subjects'));
    }
}
