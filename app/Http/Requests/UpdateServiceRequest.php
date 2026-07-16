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
        $serviceId = $this->route('service')?->id;

        return [
            'slug' => ['required', 'string', 'max:50', 'unique:services,slug,'.$serviceId],
            'name' => ['required', 'string', 'max:100', 'unique:services,name,'.$serviceId],
            'logo' => ['nullable', 'string', 'max:255'],
            'col' => ['required', 'in:left,right'],
            'order' => ['integer'],
            'is_active' => ['boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'slug.required' => 'Slug layanan wajib diisi.',
            'slug.unique' => 'Slug layanan sudah dipakai, gunakan slug lain.',
            'name.required' => 'Nama layanan wajib diisi.',
            'name.unique' => 'Nama layanan sudah dipakai, gunakan nama lain.',
            'col.in' => 'Posisi kolom hanya boleh left atau right.',
        ];
    }
}
