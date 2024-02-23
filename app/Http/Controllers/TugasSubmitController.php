<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasSubmitController extends Controller
{
    public function index()
    {
        return view('PageTugas');
    }
}
