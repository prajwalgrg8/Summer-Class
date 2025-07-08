<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
         $genres = Genre::all();
         return view('admin.genre.genre', compact('genres'));
    }
}
