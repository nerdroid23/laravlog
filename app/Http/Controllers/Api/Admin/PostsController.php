<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Requests\EditPostRequest;
use App\Http\Resources\PostEditResource;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PostsController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return PostResource::collection(
            resource: Post::query()->latest()->get()
        );
    }

    public function store(): PostResource
    {
        return PostResource::make(
            Post::create([
                'title' => 'Untitled Post'
            ])
        );
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post): PostEditResource
    {
        return PostEditResource::make($post);
    }

    public function update(EditPostRequest $request, Post $post): JsonResponse
    {
        if ( ! $post->update($request->validated())) {
            return response()->json(
                status: Response::HTTP_BAD_REQUEST
            );
        }

        return response()->json(
            status: Response::HTTP_ACCEPTED
        );
    }

    public function destroy(Post $post)
    {
        //
    }
}
