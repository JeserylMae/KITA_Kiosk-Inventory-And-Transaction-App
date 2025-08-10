<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     if (in_array($this->route()->getActionMethod(), ['destroy']))
    //     {
    //         if (!Auth::check())
    //         {
    //             return false;
    //         }
    //     }
    //     return true;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if (in_array($this->route()->getActionMethod(), ['store'])) {
            return [
                'name' => 'required|string|max:100',
                'brand' => 'required|string|max:150',
                'category_id' => 'required|string|exists:product_categories,id',
                'created_by' => 'required|exists:users,id'
            ];
        }
        return [
            'name' => 'nullable|string|max:100',
            'brand' => 'nullable|string|max:150',
            'category_id' => 'nullable|string|exists:product_categories,id',
            'created_by' => 'nullable|exists:users,id'
        ];
    }


    /**
     * Throw exception when the rules defined are not met.
     * 
     * @return redirectResponse
     */
    public function failedValidation(Validator $validator): RedirectResponse
    {
        throw new HttpResponseException(redirect()
            ->back()
            ->withErrors($validator)
            ->withInput()
            ->with([
                'success' => false,
                'message' => 'Validation failed'
            ])
        );
    }
}
