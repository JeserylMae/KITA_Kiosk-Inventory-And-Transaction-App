<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if(in_array($this->route()->getActionMethod(), ['store'])){
            return [
                'last_name' => 'required|string|min:2|max:25',
                'first_name' => 'required|string|min:2|max:25',
                'middle_name' => 'nullable|string|max:25',
                'house_number' => 'nullable|string|min:0|max:6',
                'street' => 'nullable|string|max:50',
                'barangay' => 'nullable|string|max:50',
                'city' => 'required|string|min:4|max:50',
                'postal_code' => 'required|string|digits:4',
                'email' => 'required|email|max:100|unique:suppliers,email',
                'contact_number' => 'required|unique|string|regex:/^(09\d{9}|\+639\d{9})$/',
            ];
        }

        $supplierId = $this->route('supplier')?->id;

        return [
            'last_name' => 'nullable|string|min:2|max:25',
            'first_name' => 'nullable|string|min:2|max:25',
            'middle_name' => 'nullable|string|max:25',
            'house_number' => 'nullable|string|min:0|max:6',
            'street' => 'nullable|string|max:50',
            'barangay' => 'nullable|string|max:50',
            'city' => 'nullable|string|min:4|max:50',
            'postal_code' => 'nullable|string|digits:4',
            'email' => 'nullable|email|max:100|unique:suppliers,email' . ($supplierId ?? 'NULL'),
            'contact_number' => 'nullable|unique|string|regex:/^(09\d{9}|\+639\d{9})$/',
        ];
    }
}
