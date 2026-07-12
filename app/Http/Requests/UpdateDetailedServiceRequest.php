<?php

namespace App\Http\Requests;

class UpdateDetailedServiceRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'service_id' => ['required', 'exists:services,id'],
            'title_line1' => ['required', 'string', 'max:100'],
            'title_line2' => ['required', 'string', 'max:100'],
            'bg_image' => ['required', 'string', 'max:255'],

            'description' => ['required', 'array'],
            'description.ID' => ['required', 'string'],
            'description.EN' => ['required', 'string'],
            'description.JPN' => ['required', 'string'],

            'order' => ['integer'],
            'is_active' => ['boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'service_id.required' => 'Detail ini wajib terhubung ke salah satu Service.',
            'service_id.exists' => 'Service yang dipilih tidak ditemukan.',
            'description.ID.required' => 'Deskripsi Bahasa Indonesia wajib diisi.',
            'description.EN.required' => 'Deskripsi Bahasa Inggris wajib diisi.',
            'description.JPN.required' => 'Deskripsi Bahasa Jepang wajib diisi.',
        ];
    }
}