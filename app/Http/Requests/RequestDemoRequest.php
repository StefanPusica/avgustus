<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestDemoRequest extends FormRequest
{
    public const UNITS = [
        '1' => '1 jedinica',
        '2-5' => '2–5 jedinica',
        '6-20' => '6–20 jedinica',
        '20+' => 'Više od 20 jedinica',
    ];

    public const PRODUCTS = [
        'tv' => 'TV aplikacija',
        'mobile' => 'Mobilna aplikacija',
        'admin' => 'Admin panel',
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
            'phone' => ['required', 'string', 'max:30'],
            'property' => ['required', 'string', 'max:255'],
            'units' => ['required', Rule::in(array_keys(self::UNITS))],
            'products' => ['required', 'array', 'min:1'],
            'products.*' => [Rule::in(array_keys(self::PRODUCTS))],
            'message' => ['nullable', 'string', 'max:5000'],
        ];
    }
}
