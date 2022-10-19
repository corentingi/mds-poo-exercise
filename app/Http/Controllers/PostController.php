<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function list()
    {
        return view('posts', [
            'posts' => Post::list()
        ]);
    }

    public function show($post_name)
    {
        return view('post', [
            'post_content' => Post::find($post_name)
        ]);
    }
}
