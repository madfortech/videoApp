<?php

namespace App\Http\Controllers;

class TwofactorController extends Controller
{
    public function index()
    {
        return view('/twofactor');
    }
}
