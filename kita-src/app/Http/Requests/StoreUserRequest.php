<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (in_array($this->route()->getActionMethod(), ['destroy'])) 
        {
            if (!Auth::check()) 
            {
                return false;
            }
            return Auth::id() == $this->user->id;
        }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if (in_array($this->route()->getActionMethod(), ['store'])){
            return [
                'name' => 'required|string|max:255|min:4',
                'email'=> 'required|string|email|unique:users,email',
                'password' => 'required|string|min:8|max:25|confirmed',
                'addressId' => 'string|nullable|exists:address,id'
            ];
        }
        return [
            'name' => 'sometimes|nullable|string|max:255|min:4',
            'email'=> 'sometimes|nullable|string|email|unique:users,email',
            'password' => 'sometimes|nullable|string|min:8|max:25',
            'addressId' => 'string|nullable|exists:address,id'
        ];
    }

    
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(redirect()
            ->back()
            ->withErrors($validator)
            ->withInput()
            ->with([
                'success' => false,
                'message' => 'Validation failed',
            ])
        );
    }
}
