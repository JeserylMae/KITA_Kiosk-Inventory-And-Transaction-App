<?php

namespace App\Http\Controllers\Logic;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use Illuminate\Support\Facades\Gate;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        return response()->json([
            'message' => 'Successfully retrieved all transactions.',
            'transactions' => $transactions
        ], 200);
    }

    public function store(TransactionRequest $request)
    {
        $validated = $request->validated();

        $transaction = Transaction::create($validated);

        return response()->json([
            'message' => 'Successfully created new transaction.',
            'transaction' => $transaction
        ], 201);
    }

    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $validated = $request->validated();
        
        $transaction->update($validated);

        return response()->json([
            'message' => 'Successfully updated the transaction.'
        ], 200);
    }

    public function delete(Transaction $transaction)
    {
        Gate::authorize('manage-owned', $transaction);

        $transaction->delete();

        return response()->json([
            'message' => 'Successfully deleted the transaction.'
        ], 200);
    }
}
