<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $posts = Post::with('categories')
            ->with('user')
            ->orderBy('published_at', 'desc')->take(3)->get();

        return view('home', compact('posts'));
    }
}
