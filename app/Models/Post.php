<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


/**
 * @mixin IdeHelperPost
 */
class Post extends Model
{
    protected $casts = [
        'published' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function (self $post) {
            $post->uuid = Str::orderedUuid();

            if ( ! $post->slug) {
                $post->slug = $post->uuid;
            }
        });
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('published', true);
    }
}
