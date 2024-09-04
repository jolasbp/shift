<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        //All tags related to car post
        return view('results', ['posts' => $tag->posts]);
    }
}
