<?php

namespace App\Http\Controllers\Logic;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSupplierRequest;
use App\Models\ProductSupplier;

class ProductSupplierController extends Controller
{
    public function index()
    {
        $productSuppliers = ProductSupplier::all();

        return response()->json([
            'message' => 'Successfully retrieved all product suppliers.',
            'productSuppliers' => $productSuppliers,
        ], 200);
    }

    public function store(ProductSupplierRequest $request)
    {
        $validated = $request->validated();

        $productSupplier = ProductSupplier::create($validated);

        return response()->json([
            'message' => 'Successfully created new product supplier.',
            'productSupplier' => $productSupplier
        ], 201);
    }

    public function update(ProductSupplierRequest $request, ProductSupplier $productSupplier)
    {
        $validated = $request->validated();

        $productSupplier->update($validated);

        return response()->json([
            'message' => 'Successfully updated the product supplier.',
        ], 200);
    }

    public function destroy(ProductSupplier $productSupplier)
    {
        $productSupplier->delete();

        return response()->json([
            'message' => 'Successfully deleted the product supplier.',
        ], 200);
    }
}
