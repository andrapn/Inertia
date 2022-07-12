<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Users';
        $users = User::orderBy('id', 'DESC')->get();
        return Inertia::render('User/Index', [
            'title' => $title,
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        // $user = User::find($id);
        $title = 'Profile';
        return Inertia::render('User/Detail', [
            'title' => $title,
            'user' => $user
        ]);
    }

    public function create()
    {
        $title = 'Register';
        return Inertia::render('User/Register', [
            'title' => $title
        ]); 
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();  

        Return Redirect::route('user.index');
    }
}
