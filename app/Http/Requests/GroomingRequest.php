<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroomingRequest extends FormRequest
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
        return [
            'nama_hewan' => 'required|min:3',
            'nama_pemilik' => 'required|min:3',
            'alamat' => 'required|min:15',
            'no_hp' => 'required|regex:/^\d{10,13}$/',
            'hewan' => 'required',
            'tanggal_grooming' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'hewan.required' => 'Pilih hewan sesuai dengan jenis hewan anda'
        ];
    }
}
