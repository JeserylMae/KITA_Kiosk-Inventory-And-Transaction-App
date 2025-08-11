<?php

namespace App\Http\Controllers\Logic;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Response;

class StoreController extends Controller
{
    public function index() 
    {
        $stores = Store::all();

        return response()->json([
            'message' => 'Successfully retrieved all stores.',
            'stores' => $stores
        ], 200);
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validated();

        $store = Store::create($validated);

        return response()->json([
            'message' => 'Successfully created new store.',
            'store' => $store
        ], 201);
    }

    public function update(StoreRequest $request,  Store $store)
    {
        Gate::authorize('manage-owned', $store);

        $validated = $request->validated();

        $store->update($validated);

        return response()->json([
            'message' => 'Successfully updated the store.'
        ], 200);
    }

    public function destroy(Store $store) 
    {
        Gate::authorize('manage-owned', $store);

        $store->delete();

        return response()->json([
            'message' => 'Successfully deleted the store.'
        ], 200);
    }
}
