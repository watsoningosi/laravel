<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            'my-first-post' => '1. Hello this is my first post',
            'my-second-post' => '2. Hello this is my second post'
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, 'Sorry, that post does not exist');
        }

        return view('post', [
            'posts' => $posts[$post]
        ]);
    }
}
