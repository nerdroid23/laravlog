<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Post */
class PostResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'uuid'      => $this->uuid,
            'slug'      => $this->slug,
            'title'     => $this->title,
            'body'      => $this->body,
            'teaser'    => $this->teaser,
            'published' => $this->published,
            'links'     => $this->generateLinks(),
        ];
    }

    protected function generateLinks(): array
    {
        return [];
    }
}
