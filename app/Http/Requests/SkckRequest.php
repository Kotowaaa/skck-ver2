<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkckRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'no_skck' => [
                'required'
            ],
            'no_ktp' => [
                'required'
            ],
            'keperluan' => [
                'required'
            ],
            'dibuat_tanggal' => [
                'date'
            ],
            'sampai_tanggal' => [
                'date'
            ],
        ];

        return $rules;
    }
}
