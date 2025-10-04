<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'customer')->get();
        return view('dashboards.user', compact('users'));
    }
}
