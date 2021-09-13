<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Post */
class PostEditResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'uuid'      => $this->uuid,
            'slug'      => $this->slug,
            'title'     => $this->title,
            'body'      => $this->body,
            'published' => $this->published,
        ];
    }
}
