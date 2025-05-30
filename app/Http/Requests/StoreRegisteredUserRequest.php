<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class StoreRegisteredUserRequest extends FormRequest
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
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed', Password::min(6)],
            'employer' => ['required', 'string', 'max:255', 'unique:employers,name'],
            'logo' => ['nullable', File::image()->max(2048)], // 2MB max
            'country_code' => ['required', 'string', 'size:2'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'employer' => 'company name',
            'country_code' => 'origin country',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'password.confirmed' => 'The password does not match',
            'logo.required' => 'A company logo is required.',
            'logo.image' => 'The file must be an image (jpeg, png, bmp, gif, svg, or webp).',
            'logo.max' => 'The logo must not be larger than 2MB.',
        ];
    }
}
