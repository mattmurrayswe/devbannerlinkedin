<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateTechnologiesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Change to true if no specific authorization logic is needed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        $allowedTechnologies = [
            'react', 'node', 'firebase', 'vue', 'laravel', 'php', 'ruby', 'csharp', 'svelte', 'aws', 'gcp', 'azure'
        ];
    
        return [
            'email' => ['required', 'email'],
            'position' => ['required', 'string', 'max:40'],
            'tec_1' => ['required', 'in:' . implode(',', $allowedTechnologies)],
            'tec_2' => ['required', 'in:' . implode(',', $allowedTechnologies)],
            'tec_3' => ['required', 'in:' . implode(',', $allowedTechnologies)],
            'tec_4' => ['required', 'in:' . implode(',', $allowedTechnologies)],
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'position' => strtoupper($this->position), // Convert to uppercase
            'email' => strtolower($this->email), // Convert to lowercase
        ]);
    }
}
