<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsercommentController extends Controller
{
    public function index()
    {
        return view('/user-comment');
    }

    public function store(Request $request)
    {
        $name = $request->input('postcomment');

        //
    }
}
