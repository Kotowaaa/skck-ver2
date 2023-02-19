<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataAyahRequest extends FormRequest
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
            'nama' => [
                'required'
            ],
            'umur' => [
                'required'
            ],
            'agama' => [
                'required'
            ],
            'kewarganegaraan' => [
                'required'
            ],
            'alamat' => [
                'required'
            ],
            'pekerjaan' => [
                'required'
            ],
            'provinsi_id' => [
                'required', 'integer'
            ],
            'kecamatan_id' => [
                'required', 'integer'
            ],
            'kabupaten_id' => [
                'required', 'integer'
            ],
            'kelurahan_id' => [
                'required', 'integer'
            ],
        ];
        return $rules;
    }
}
