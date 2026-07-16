<?php

namespace App\Http\Requests;

class UpdateProjectRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'service_id' => ['required', 'exists:services,id'],

            'name' => ['required', 'array'],
            'name.ID' => ['required', 'string', 'max:200'],
            'name.EN' => ['required', 'string', 'max:200'],
            'name.JPN' => ['required', 'string', 'max:200'],

            'description' => ['required', 'array'],
            'description.ID' => ['required', 'string'],
            'description.EN' => ['required', 'string'],
            'description.JPN' => ['required', 'string'],

            'thumbnail' => ['required', 'string', 'max:255'],
            'url' => ['nullable', 'url', 'max:255'],

            'order' => ['integer'],
            'is_active' => ['boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'service_id.required' => 'Project wajib terhubung ke salah satu Service.',
            'name.ID.required' => 'Nama project bahasa Indonesia wajib diisi.',
            'description.ID.required' => 'Deskripsi bahasa Indonesia wajib diisi.',
        ];
    }
}
