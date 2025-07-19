<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\Validator;


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
        $validator = Validator::make($request->all(), [
        'name' => 'required|max:55',
        'description' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            toastr()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

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

    public function edit($genreId)
    {
        $genres = Genre::where('id', $genreId)->first();
        
        return view('admin.genre.edit', compact('genres'));
    }

    public function update($genreId, Request $request)
    {
        $validator = Validator::make($request->all(), [
        'name' => 'required|max:55',
        'description' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            toastr()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        $genre = Genre::where('id', $genreId)->first();
        $genre->update([
        'name' => $request->name,
        'description' => $request-> description,
        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('admin.genre.index');
    }
}
