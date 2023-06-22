<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $alumni = User::where('role', 'alumni')->where('status', 1)->count();
        return view('home', compact('alumni'));
    }
}
