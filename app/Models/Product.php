<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $casts = [
        'gallery' => 'array',  // Convierte automáticamente JSON a array
    ];
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'brand',
        'sku',
        'short_description',
        'description',
        'price',
        'stock',
        'availability',
        'image',
        'gallery',
        'country_of_origin',
        'is_active'
    ];

    // Relación con categorías (1 producto → 1 categoría)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
