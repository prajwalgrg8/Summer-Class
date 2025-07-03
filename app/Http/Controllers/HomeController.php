<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        return view('index');
    }


    public function about()
    {
        
        return view('about');
    }

    public function services()
    {
        
        return view('service');
    }

    public function contacts()
    {
        
        return view('contact');
    }

    public function login()
    {
        
        return view('login');
    }

    
}


