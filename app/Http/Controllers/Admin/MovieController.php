<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::latest()->get(); //select * from movies order by id desc
        return view('admin.movie.movie', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('admin.movie.create', compact('genres'));
    }

    public function delete($movieId)
    {
        Movie::where('id', $movieId)-> delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('admin.movie.index');
    }

}
