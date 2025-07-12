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

    public function create()
    {
        return view('admin.genre.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|max:55',
        'description' => 'nullable|string|max:255',
        ]);

        // Step 2: Store in database
        Genre::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        

        // Step 3: Redirect with success message
        toastr()->success('Genre added successfully!');
        return redirect()->route('admin.genre.index');
    }

    public function delete($genreId)
    {
        Genre::where('id', $genreId)-> delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('admin.genre.index');
    }
}
