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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if (in_array($this->route()->getActionMethod(), ['store', 'signup'])){
            return [
                'last_name' => 'required|string|min:2|max:25',
                'first_name' => 'required|string|min:2|max:25',
                'middle_name' => 'nullable|string|min:2|max:25',
                'house_number' => 'nullable|string|min:0|max:6',
                'street' => 'nullable|string|max:50',
                'barangay' => 'nullable|string|max:50',
                'city' => 'required|string|min:4|max:50',
                'postal_code' => 'required|string|digits:4',
                'province' => 'required|string|min:4|max:50',
                'email' => 'required|email|max:100|unique:users,email',
                'contact_number' => 'required|string|regex:/^\+63\s\d{3}\s\d{3}\s\d{4}$/|unique:users,contact_number',
                'password' => 'required|string|min:8|max:25|confirmed',
                'role' => 'required|string|in:admin,owner,employee',
            ];
        }

        $userId = $this->route('user')?->id;

        return [
            'last_name' => 'nullable|string|min:2|max:25',
            'first_name' => 'nullable|string|min:2|max:25',
            'middle_name' => 'nullable|string|min:2|max:25',
            'house_number' => 'nullable|string|min:0|max:6',
            'street' => 'nullable|string|max:50',
            'barangay' => 'nullable|string|max:50',
            'city' => 'nullable|string|min:4|max:50',
            'postal_code' => 'nullable|string|digits:4',
            'province' => 'nullable|string|min:4|max:50',
            'email' => 'nullable|email|max:100|unique:users,email,' . ($userId ?? 'NULL'),
            'contact_number' => 'nullable|string|regex:/^\+63\s\d{3}\s\d{3}\s\d{4}$/|unique:users,contact_number,' . ($userId ?? 'NULL'),
            'password' => 'nullable|string|min:8|max:25|confirmed',
            'role' => 'nullabls|string|in:admin,owner,employee',
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
