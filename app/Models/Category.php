<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    //
    use HasFactory;
    // Si solo vas a manejar "name":
    protected $fillable = [
        'name',
        'description',
        'slug'];

    // Relación con productos (1 categoría → muchos productos)
    public function products()
    {
        return $this->hasMany(Product::class);
        
    }
}
