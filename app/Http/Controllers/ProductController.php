<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'price' => 'required|numeric',
                'stock' => 'required|integer',
                'category_id' => 'nullable|integer|exists:categories,id',
                'image' => 'nullable|file|image|max:2048', // <-- aquí se valida una sola imagen
            ]);

            // Guardar imagen si viene en la request
            if ($request->hasFile('image')) {
                $validated['image'] = $request->file('image')->store('products/images', 'public');
            }


            $product = Product::create($validated);

            return response()->json([
                'message' => 'Product created successfully',
                'product' => $product
            ], 201);

        } catch (\Exception $e) {
            Log::error('Error al crear producto: ' . $e->getMessage());

            return response()->json([
                'message' => 'Error al crear el producto',
                'error' => $e->getMessage()
            ], 500);
        }
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
