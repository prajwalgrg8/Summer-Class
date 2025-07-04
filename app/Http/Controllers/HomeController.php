<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view(('index'), compact('title'));
    }


    public function about()
    {
        $title = 'About Us';
        return view(('about'), compact('title'));
    }

    public function services()
    {
        $title = 'Services';
        return view(('service'), compact('title'));
    }

    public function contacts()
    {
        $title = 'Contacts';
        return view(('contact'), compact('title'));
    }

    public function login()
    {
        $title = 'Log';
        return view(('login'), compact('title'));
    }

    
}


