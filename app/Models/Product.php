<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $casts = [
    'gallery' => 'array',  // Convierte automáticamente JSON a array
];
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'category_id',
        'gallery',
        'availability'
    ];
    // Relación con categorías (1 producto → 1 categoría)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}