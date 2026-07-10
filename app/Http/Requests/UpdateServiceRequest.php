<?php

namespace App\Http\Requests;

// Extend BaseRequest agar format JSON response seragam

class UpdateServiceRequest extends BaseRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'slug' => ['required', 'string', 'max:150'],

            'description' => ['required', 'array'],
            'description.ID' => ['required', 'string'],
            'description.EN' => ['required', 'string'],
            'description.JPN' => ['required', 'string'],

            'logo' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'string', 'max:255'],
            'color_theme' => ['nullable', 'string', 'max:50'],
            'order' => ['required', 'integer'],
            'is_active' => ['required', 'boolean'],
        ];
    }

    /**
     * Get the custom validation error messages.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama layanan wajib diisi.',
            'slug.required' => 'Slug URL wajib ditentukan.',
            'description.id.required' => 'Deskripsi Bahasa Indonesia wajib diisi.',
            'description.en.required' => 'Deskripsi Bahasa Inggris wajib diisi.',
            'description.jpn.required' => 'Deskripsi Bahasa Jepang wajib diisi.',
        ];
    }
}
