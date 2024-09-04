<?php

namespace App\Http\Controllers;

use App\Models\Post;

class SearchController extends Controller
{
    //Perform search queries
    public function __invoke()
    {
        $posts = Post::query()
            ->with(['author', 'tags'])
            ->where('title', 'LIKE', '%' . request('search') . '%')
            ->get();

        return view('results', ['posts' => $posts]);
    }
}
