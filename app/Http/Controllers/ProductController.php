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
            'description' => 'nullable|string|max:500',
            'category_id' => 'nullable|exists:categories,id',
            'price' => 'required|numeric',
            'stock' => 'nullable|integer|min:0',
            'availability' => 'nullable|in:In Stock,Out Of Stock',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'gallery' => 'nullable|array',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
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
            $data['gallery'] = $galleryPaths;

        }

        Product::create($data);

        // Debug: Ver producto creado
        Log::info('Product created:', ['data' => $data]);

        return response()->json(['message' => 'Producto creado'], 201);
    }

    public function index(Request $request)
    {
        $query = Product::query()->with('category');

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);

            // Cuando hay filtro de categoría, devolver todos los productos
            $products = $query->orderBy('created_at', 'desc')->get();

            return response()->json([
                'data' => $products,
                'current_page' => 1,
                'last_page' => 1,
                'total' => $products->count()
            ]);
        }

        // Sin filtro de categoría, usar paginación normal
        $products = $query->orderBy('created_at', 'desc')
            ->paginate(12);

        return response()->json($products);
    }


    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);

        return response()->json(['product' => $product]);
    }
}
