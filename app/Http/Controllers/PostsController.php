<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;


class PostsController extends Controller
{
    public function index()
    {
        $posts = \App\Post::all();

        return view('posts.index', compact('posts'));

    }
}
