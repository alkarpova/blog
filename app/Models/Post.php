<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static sorted(string $field, string $direction = 'asc' | 'desc')
 * @method static enabled()
 */
class Post extends Model
{
    use HasFactory, SoftDeletes, Translatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'user_id',
        'image',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'category_id' => 'string',
        'user_id' => 'string',
        'image' => 'string',
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
     * Scope a query to only include sorted posts.
     *
     * @param $query
     * @param string $field
     * @param string $direction
     * @return mixed
     */
    public function scopeSorted($query, string $field = 'created_at', string $direction = 'asc'): mixed
    {
        return $query->orderBy($field, $direction);
    }

    /**
     * Scope a query to only include enabled posts.
     *
     * @param $query
     * @return mixed
     */
    public function scopeEnabled($query): mixed
    {
        return $query->where('status', 1);
    }

    /**
     * Get the category that owns the post.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user that owns the post.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the comments for the post.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
