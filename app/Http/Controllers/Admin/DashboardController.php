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
        return view('admin.dashboard.dashboard', compact('statistics','movies'));
    }

    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }
   
}
