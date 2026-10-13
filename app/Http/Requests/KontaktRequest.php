<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class KontaktRequest extends FormRequest
{
    public const TOPICS = [
        'demo' => 'Zahtev za demo',
        'cene' => 'Cene i paketi',
        'podrska' => 'Tehnička podrška',
        'saradnja' => 'Saradnja',
        'ostalo' => 'Ostalo',
    ];

    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'topic' => ['required', 'in:'.implode(',', array_keys(self::TOPICS))],
            'message' => ['required', 'string', 'max:5000'],
        ];
    }
}
