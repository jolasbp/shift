<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class PostController extends Controller
{
    //Show all posts with tags
    public function index()
    {
        $posts = Post::latest()->with(['author', 'tags'])->get()->groupBy('featured');

        return view('posts.index', [
            'featuredCar' => $posts[1],
            'posts' => $posts[0],
            'tags' => Tag::all(),
        ]);
    }

    //Show create post view
    public function create()
    {
        return view('posts.create');
    }

    //Store new post to db
    public function store(Request $request)
    {
        //Validate
        $attributes = $request->validate([
            'title' => ['required'],
            'manufacturer' => ['required'],
            'description' => ['required'],
            'price' => ['nullable'],
            'car_image' => ['required', File::types(['png', 'jpg', 'webp'])],
            'tags' => ['nullable']
        ]);

        //Store image to public storage
        $attributes['car_image'] = $request->car_image->store('car_images');
        $attributes['featured'] = $request->has('featured');

        $post = Auth::user()->author->posts()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $post->tag($tag);
            }
        }

        return redirect('/');
    }

    //Show specific post
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    //Show edit post view
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    //Update specific post
    public function update(Request $request, Post $post)
    {
        //Validate
        $attributes = $request->validate([
            'title' => ['required'],
            'manufacturer' => ['required'],
            'description' => ['required'],
            'price' => ['nullable'],
            'car_image' => ['nullable', File::types(['png', 'jpg', 'webp'])]
        ]);

        //Check if car_image is not null or not
        if ($request->car_image != null) {
            $attributes['car_image'] = $request->car_image->store('car_images');
        }

        $post->update($attributes);

        return redirect('/posts/' . $post->id);
    }

    //Delete specific post
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/');
    }
}
