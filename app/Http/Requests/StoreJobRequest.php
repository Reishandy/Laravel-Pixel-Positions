<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Use policy to check if user can create a job
        return $this->user() && $this->user()->can('create', \App\Models\Job::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'salary' => ['required', 'numeric', 'min:0', 'max:999999999.99'],
            'location' => ['required', 'string', 'max:255'],
            'schedule' => ['required', 'string', Rule::in(['Remote', 'Office', 'Hybrid'])],
            'url' => ['required', 'url', 'max:255'],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['exists:tags,id'],
            'featured' => ['boolean', 'nullable'],
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
            'url' => 'job URL',
            'tags.*' => 'selected tag',
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
            'salary.min' => 'The salary must be a positive number.',
            'schedule.in' => 'The schedule must be Remote, Office, or Hybrid.',
            'url.url' => 'Please enter a valid URL including http:// or https://.',
            'tags.*.exists' => 'One or more selected tags are invalid.',
        ];
    }
}
