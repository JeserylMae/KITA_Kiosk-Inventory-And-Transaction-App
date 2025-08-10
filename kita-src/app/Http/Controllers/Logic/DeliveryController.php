<?php

namespace App\Http\Controllers\Logic;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeliveryRequest;
use App\Models\Delivery;
use Illuminate\Support\Facades\Gate;

class DeliveryController extends Controller
{
    public function index()
    {
        $deliveries = Delivery::all();

        return response()->json([
            'message' => 'Successfully retrieved all deliveries.',
            'deliveries' => $deliveries
        ], 200);
    }

    public function store(DeliveryRequest $request)
    {
        $validated = $request->validated();

        $delivery = Delivery::create($validated);

        return response()->json([
            'message' => 'Successfully created new delivery.',
            'delivery' => $delivery
        ], 201);
    }

    public function update(DeliveryRequest $request, Delivery $delivery)
    {
        Gate::authorize('manage-owned', $delivery);

        $validated = $request->validated();

        $delivery->update($validated);

        return response()->json([
            'message' => 'Successfully updated the delivery.'
        ], 200);
    }

    public function destroy(Delivery $delivery)
    {
        Gate::authorize('manage-owned', $delivery);

        $delivery->delete();

        return response()->json([
            'message' => 'Successfully deleted the delivery.'
        ], 200);
    }
}
