<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    use Sluggable;

    // Timestamps are not needed for translation tables
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_description',
        'name',
        'content',
        'slug',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'meta_title' => 'string',
        'meta_description' => 'string',
        'name' => 'string',
        'content' => 'string',
        'slug' => 'string',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
