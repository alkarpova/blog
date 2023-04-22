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

    public function scopeSorted($query, $direction = 'asc')
    {
        return $query->orderBy('sort_order', $direction);
    }

    public function scopeEnabled($query)
    {
        return $query->where('status', 1);
    }
}
