<?php

namespace App\Http\Requests;

class UpdateServiceRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:100'],
            'slug' => ['required', 'string', 'max:100'],
            'image' => ['nullable', 'string', 'max:255'],
            'color' => ['nullable', 'string', 'max:100'],
            'col' => ['required', 'in:left,right'],
            'order' => ['integer'],
            'is_active' => ['boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Nama layanan wajib diisi.',
            'slug.required' => 'Slug URL wajib ditentukan.',
            'col.in' => 'Posisi kolom hanya boleh left atau right.',
        ];
    }
}