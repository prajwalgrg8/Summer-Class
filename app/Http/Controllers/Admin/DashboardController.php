<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function movies()
    {
        return view('admin.movie');
    }

    public function genres()
    {
        return view('admin.genre');
    }

    public function users()
    {
        return view('admin.user');
    }

    public function reviews()
    {
        return view('admin.reviews');
    }

    public function reports()
    {
        return view('admin.reports');
    }
}
