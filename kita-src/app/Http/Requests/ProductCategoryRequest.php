<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
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
                'name' => 'required|string|min:2|max:25|unique:product_categories,name',
                'brand' => 'nullable|string|min:2|max:25',
                'created_by' => 'required|exists:users,id'
            ];
        }

        $productCategoryId = $this->route('productCategory')?->id;

        return [
            'name' => 'nullable|string|min:2|max:25|unique:product_categories,name,' . ($productCategoryId ?? 'NULL'),
            'brand' => 'nullable|string|min:2|max:25',
            'created_by' => 'nullable|exists:users,id'
        ];
    }
}
