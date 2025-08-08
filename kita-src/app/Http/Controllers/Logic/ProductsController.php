<?php

namespace App\Http\Controllers\Logic;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    public function index() 
    {
        $products = Product::all();
        return response()->json([
            'message' => "Products retrieved successfully.",
            'products' => $products
        ], 200);
    }

    public function store(ProductRequest $request)
    {
        $validated = $request->validated();

        $product = Product::create($validated);

        return response()->json([
            'message' => 'Products created successfully.',
            'product' => $product
        ], 201);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $validated = $request->validated();

        $product->update($validated);

        return response()->json([
            'message' => 'Product successfully updated.'
        ], 200);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'Product successfully deleted.'
        ], 200);
    }
}
