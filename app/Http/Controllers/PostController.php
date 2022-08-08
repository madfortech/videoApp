<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\Post;

class PostController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $posts = Post::with(['media'])->get();

        return view('welcome', compact('posts'));
    }
}
