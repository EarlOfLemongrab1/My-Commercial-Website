<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($Name)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id) ]);
    }
}
