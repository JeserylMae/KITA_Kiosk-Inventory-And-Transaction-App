<?php

namespace App\Http\Controllers\Logic;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Http\Requests\InventoryRequest;
use Illuminate\Support\Facades\Gate;

class InventoryController extends Controller
{
    public function index() 
    {
        $inventory = Inventory::all();

        return response()->json([
            'message' => 'Successfully retrieved all items in the inventory.',
            'inventory' => $inventory
        ], 200);
    }

    public function store(InventoryRequest $request)
    {
        $validated = $request->validated();

        $inventory = Inventory::create($validated);

        return response()->json([
            'message' => 'Successfully created inventory items.',
            'inventory' => $inventory
        ], 201);
    }

    public function update(InventoryRequest $request, Inventory $inventory)
    {
        Gate::authorize('manage-owned', $inventory);

        $validated = $request->validated();

        $inventory->update($validated);

        return response()->json([
            'message' => 'Successfully updated the items in the inventory.'
        ], 200);
    }

    public function destroy(Inventory $inventory)
    {
        Gate::authorize('manage-owned', $inventory);

        $inventory->delete();

        return response()->json([
            'message' => 'Successfully deleted items in the inventory.'
        ], 200);
    }
}
