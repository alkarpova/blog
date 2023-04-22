<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model implements TranslatableContract
{
    use HasFactory, SoftDeletes, Translatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sort_order',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'sort_order' => 'integer',
        'status' => 'boolean',
    ];

    /**
     * Added translated attributes
     *
     * @var array|string[]
     */
    public array $translatedAttributes = [
        'meta_title',
        'meta_description',
        'name',
        'content',
        'slug',
    ];

    /**
     * Scope a query to only include sorted categories.
     *
     * @param $query
     * @param string $direction
     * @return mixed
     */
    public function scopeSorted($query, string $direction = 'asc'): mixed
    {
        return $query->orderBy('sort_order', $direction);
    }

    /**
     * Scope a query to only include enabled categories.
     *
     * @param $query
     * @return mixed
     */
    public function scopeEnabled($query): mixed
    {
        return $query->where('status', 1);
    }

    /**
     * Get the posts for the category.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
