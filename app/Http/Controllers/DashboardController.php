<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $alumni = User::where('role', 'alumni')->count();

        return view('dashboard.index', compact('alumni'));
    }
}
