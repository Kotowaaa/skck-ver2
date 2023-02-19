<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataDiriRequest extends FormRequest
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
            'namaDiri' => [
                'required'
            ],
            'tempat_lahir' => [
                'required'
            ],
            'tgl_lahir' => [
                'date'
            ],
            'jenis_kelamin' => [
                'required'
            ],
            'status_pernikahan' => [
                'required',
            ],
            'kewarganegaraan' => [
                'required'
            ],
            'agama' => [
                'required'
            ],
            'pekerjaan' => [
                'required'
            ],
            'no_telp' => [
                'required'
            ],
            'alamat' => [
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
            'no_e_ktp' => [
                'required'
            ],
            'no_kartu_keluarga' => [
                'required'
            ],
        ];
        return $rules;
    }
}
