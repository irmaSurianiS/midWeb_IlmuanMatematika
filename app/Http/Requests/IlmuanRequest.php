<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IlmuanRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "nama_ilmuan" => "required",
            "biografi_singkat" => "required"
        ];
    }

    public function messages()
    {
        return [
            "nama_ilmuan.requaired" => "Nama Ilmuan Tidak Boleh Kosong",
            "biografi_singkat.requaired" => "Biografi Singkat Tidak Boleh Kosong"
        ];
    }
}
