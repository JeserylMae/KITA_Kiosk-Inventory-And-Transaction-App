<?php

namespace App\Http\Controllers\Logic;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index() 
    {
        $productCategories = ProductCategory::all();

        return response()->json([
            'message' => 'Successfully retrieved all the product categories.',
            'productCategories' => $productCategories
        ], 200);
    }

    public function store(ProductCategoryRequest $request)
    {
        $validated = $request->validated();

        $productCategory = ProductCategory::create($validated);

        return response()->json([
            'message' => 'Successfully created new product category.',
            'productCategory' => $productCategory
        ], 201);
    }

    public function update(ProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $validated = $request->validated();

        $productCategory->update($validated);

        return response()->json([
            'message' => 'Successfully updated the product category.'
        ], 200);
    }

    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();

        return response()->json([
            'message' => 'Successfully deleted the product category.'
        ], 200);
    }
}
