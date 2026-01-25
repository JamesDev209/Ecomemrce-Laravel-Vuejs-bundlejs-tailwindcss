<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

public function store(Request $request)
    // app/Http/Controllers/ProductController.php
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'gallery' => 'nullable|array',
        'gallery.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        // ... otros campos
    ]);

    $data = $validated;

    // Guardar imagen principal
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('productos', 'public');
    }

    // Guardar galería
    if ($request->hasFile('gallery')) {
        $galleryPaths = [];
        foreach ($request->file('gallery') as $image) {
            $galleryPaths[] = $image->store('productos/gallery', 'public');
        }
        $data['gallery'] = json_encode($galleryPaths);
        
        // Debug: Ver qué se está guardando
        Log::info('Gallery saved:', ['paths' => $galleryPaths]);
    }

    Product::create($data);
    
    // Debug: Ver producto creado
    Log::info('Product created:', ['data' => $data]);

    return response()->json(['message' => 'Producto creado'], 201);
}

    public function index()
    {
        $products = Product::with('category')
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json(['products' => $products]);
    }


    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);

        return response()->json(['product' => $product]);
    }


}
