<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostsController
{
    public function index(): Response
    {
        return inertia(
            component: 'Posts/Index',
            props: [
                'posts' => PostResource::collection(
                    Post::query()->published()->get()
                ),
            ]
        );
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
