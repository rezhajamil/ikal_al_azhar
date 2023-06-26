<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $alumni = User::where('role', 'alumni')->where('status', 1)->count();
        $news = News::orderBy('created_at', 'desc')->limit(4)->get();

        return view('home', compact('alumni', 'news'));
    }
}
