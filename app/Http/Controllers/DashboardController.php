<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (! is_null(Auth::user()->teacher)) {
            return to_route('dashboardTeacher.index');
        }

        $subjectCount = Auth::user()->student->subjects->count();

        return view('welcome', compact('subjectCount'));
    }
}
