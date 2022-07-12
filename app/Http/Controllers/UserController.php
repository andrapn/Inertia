<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Users';
        $users = User::all();
        return Inertia::render('User/Index', [
            'title' => $title,
            'users' => $users
        ]);
    }
    public function show($id)
    {
        $user = User::find($id);
        $title = 'Profile';
        return Inertia::render('User/Detail', [
            'title' => $title,
            'user' => $user
        ]);
    }
}
