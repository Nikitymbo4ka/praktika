<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function show()
    {
        return view('siteKto');
    }

    public function site_me()
    {
        return view('siteMe');
    }

    public function stat()
    {
        return view('statia');
    }
}
