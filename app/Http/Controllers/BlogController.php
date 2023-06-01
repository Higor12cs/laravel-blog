<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $posts = Post::orderBy('published_at', 'desc')->paginate(5);

        return view('blog.index', compact('posts'));
    }

    public function postsByCategory(Category $category): View
    {
        $posts = Post::whereHas('categories', fn (Builder $query) => $query->where('category_id', $category->id))
            ->with('categories')
            ->with('user')
            ->orderBy('published_at', 'desc')
            ->paginate(5);

        return view('blog.index', compact('posts'));
    }

    public function postsByWriter(User $user): View
    {
        $posts = Post::where('user_id', $user->id)
            ->with('categories')
            ->with('user')
            ->orderBy('published_at', 'desc')
            ->paginate(5);

        return view('blog.index', compact('posts'));
    }
}
