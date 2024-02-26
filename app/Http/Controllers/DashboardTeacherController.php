<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardTeacherController extends Controller
{
    public function index()
    {
        assert(! is_null(Auth::user()->teacher));

        $studentCount = Auth::user()->teacher->students->count();
        $kelasCount = Auth::user()->teacher->kelas->count();
        $subjectCount = Auth::user()->teacher->subjects->count();

        return view('dashboardGURU', compact('studentCount', 'kelasCount', 'subjectCount'));
    }
}
