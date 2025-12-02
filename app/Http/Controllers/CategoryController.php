<?php

namespace App\Http\Controllers;

use App\Models\Category; // Cambiado de Categories a Category
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()

    {
        $categories = Category::all(); 
        return response()->json(['categories' => $categories]);
    }
}