<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\RedirectResponse;

class DeliveryRequest extends FormRequest
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
        if(in_array($this->route()->getActionMethod(), ['store'])) {
            return [
                'seller_id' => 'required|integer|exists:users,id',
                'supplier_id' => 'required|integer|exists:suppliers,id',
                'product_id' => 'required|integer|exists:products,id',
                'quantity' => 'required|integer|min:0',
                'delivery_date' => 'required|date_format:Y-m-d H-i-s',
                'wholesale_price' => 'required|float|min:0',
            ];
        }
        return [
            'seller_id' => 'nullable|integer|exists:users,id',
            'supplier_id' => 'nullable|integer|exists:suppliers,id',
            'product_id' => 'nullable|integer|exists:products,id',
            'quantity' => 'nullable|integer|min:0',
            'delivery_date' => 'nullable|date_format:Y-m-d H-i-s',
            'wholesale_price' => 'nullable|float|min:0'
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
