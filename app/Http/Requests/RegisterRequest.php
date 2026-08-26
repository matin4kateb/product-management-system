<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'national_id' => ['required', 'string', 'digits_between:4,16', 'unique:users,national_id'],
            'password' => ['required', 'confirmed', 'string', 'min:10', 'max:255'],
            'name' => ['required', 'string', 'max:32'],
            'lastname' => ['required', 'string', 'max:32'],
            'city' => ['required', 'string', 'max:32'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email', 'max:255'],
            'phone' => ['required', 'string', 'max:20', 'regex:/^\+?[0-9\s\-\(\)]+$/', 'unique:users,phone'],
        ];
    }
}
