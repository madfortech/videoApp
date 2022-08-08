<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordupdateController extends Controller
{
    public function index()
    {
        return view('passwordChange.index');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'password' => 'required|unique:users|string|confirmed|min:8',
        ]);
    }
}
