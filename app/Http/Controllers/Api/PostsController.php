<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PostsController
{
    public function index(): AnonymousResourceCollection
    {
        return PostResource::collection(
            resource: Post::query()->latest()->published()->get()
        );
    }

    public function show(Post $post): PostResource
    {
        return PostResource::make($post);
    }
}
