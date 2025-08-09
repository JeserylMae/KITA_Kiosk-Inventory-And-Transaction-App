<?php

namespace App\Http\Controllers\Logic;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\SupplierRequest;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();

        return response()->json([
            'message' => 'Successfully retrieved all suppliers.',
            'suppliers' => $suppliers
        ], 200);
    }

    public function store(SupplierRequest $request)
    {
        $validated = $request->validated();

        $supplier = Supplier::create($validated);

        return response()->json([
            'message' => 'Successfully created supplier.',
            'supplier' => $supplier
        ], 201);
    }

    public function update(SupplierRequest $request, Supplier $supplier)
    {
        $validated = $request->validated();

        $supplier->update($validated);

        return response()->json([
            'message' => 'Successfully updated supplier.'
        ], 200);
    }

    public function destroy(Supplier $supplier) 
    {
        $supplier->delete();

        return response()->json([
            'message' => 'Successfully deleted supplier.'
        ], 200);
    }
}
