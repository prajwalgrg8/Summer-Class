<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.user', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function delete($userId)
    {
        User::where('id', $userId)->delete();
        toastr()->success('User has been deleted successfully!');
        return redirect()->route('admin.user.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:55',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            toastr()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        $data = $request->all();
        if ($request->image) {
            $imagePath = $request->file('image')->store('images', 'public');
            unset($data['image']);
            $data['image'] = 'storage/' . $imagePath;
        }

        User::create($data);

        toastr()->success('Movie added successfully!');
        return redirect()->route('admin.user.index');
    }

    public function edit($userId)
    {
        $user = User::where('id', $userId)->first();

        return view('admin.user.edit', compact('user'));
    }

    public function update($userId, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:55',
            'email' => 'required|email|unique:users,email,'.$userId,
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            toastr()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        $data = $request->all();
        if ($request->image) {
            $imagePath = $request->file('image')->store('images', 'public');
            unset($data['image']);
            $data['image'] = 'storage/' . $imagePath;
        }

        $user = User::where('id', $userId)->first();
        $user->update($data);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('admin.user.index');
    }
}
