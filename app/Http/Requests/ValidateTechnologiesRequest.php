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
            'ada',
            'algol',
            'assembly',
            'aws',
            'azure',
            'bash',
            'c',
            'c++',
            'c#',
            'cobol',
            'dart',
            'docker',
            'elixir',
            'erlang',
            'f#',
            'firebase',
            'fortran',
            'go',
            'gcp',
            'groovy',
            'haskell',
            'java',
            'javascript',
            'julia',
            'kotlin',
            'laravel',
            'lisp',
            'lua',
            'matlab',
            'node',
            'objective-c',
            'pascal',
            'perl',
            'php',
            'prolog',
            'python',
            'r',
            'ruby',
            'rust',
            'react',
            'scala',
            'scheme',
            'shell',
            'sql',
            'swift',
            'svelte',
            'typescript',
            'vb.net',
            'vhdl',
            'visualbasic',
            'vue',
            'whitespace',
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
