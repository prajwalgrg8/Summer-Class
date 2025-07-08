<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $statistics=[
            'totaluser'=> User::count(),
            'totalmovies'=>Movie::count(),
            'totalgenre'=>Genre::count(),
            'totalmoviewatched'=>1,
        ];
        $movies = Movie::latest()->get(); //select * from movies order by id desc
        return view('admin.dashboard', compact('statistics','movies'));
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
