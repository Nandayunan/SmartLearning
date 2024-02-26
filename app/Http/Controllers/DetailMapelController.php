<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailMapelController extends Controller
{
    public function index()
    {
        assert(! is_null(Auth::user()->teacher));

        $subjects = Auth::user()->teacher->subjects;

        return view('detailMapel', compact('subjects'));
    }
}
