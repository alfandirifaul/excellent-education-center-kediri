<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->hasAnyRole(['siswa', 'guru', 'owner']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'name' => ['sometimes', 'string', 'max:255'],
                'photo' => ['sometimes', 'image', 'max:2048', 'mimes:png,jpg,jpeg,svg'],
                'email' => ['sometimes', 'email'],
                'phone' => ['sometimes', 'string', 'max:15'],
                // 'address' => 'sometimes',
                'kelas_id' => 'sometimes',
        ];
    }
}
