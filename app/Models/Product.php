<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'category_id',
        'gallery'
    ];
    // Relación con categorías (1 producto → 1 categoría)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

