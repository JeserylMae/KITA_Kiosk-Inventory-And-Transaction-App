<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Validation\Validator;

class TransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if(in_array($this->route()->getActionMethod(), ['store'])){
            return [
                'product_id' => 'required|integer|exists:products,id',
                'user_id' => 'required|integer|exists:users,id',
                'transaction_datetime' => 'required|date_format:Y-m-d H:i:s',
                'selling_price' => 'required|float|min:0',
                'purchase_price' => 'required|float|min:0',
                'quantity' => 'required|integer|min:0',
                'transaction_type' => 'required|string|min:4|max:10',
                'store_id' => 'required|integer|exists:stores,id',
            ];
        }
        return [
            'product_id' => 'nullable|integer|exists:products,id',
            'user_id' => 'nullable|integer|exists:users,id',
            'transaction_datetime' => 'nullable|date_format:Y-m-d H:i:s',
            'selling_price' => 'nullable|float|min:0',
            'purchase_price' => 'nullable|float|min:0',
            'quantity' => 'nullable|integer|min:0',
            'transaction_type' => 'mullable|string|min:4|max:10',
            'store_id' => 'nullable|integer|exists:stores,id',
        ];
    }

    public function failedValidation(Validator $validator): RedirectResponse
    {
        throw new HttpResponseException(redirect()
            ->back()
            ->withErrors($validator)
            ->withInput()
            ->with([
                'success' => false,
                'message' => 'Validation failed.'
            ])
        );
    }
}
