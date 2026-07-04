<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateHeroRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'tagline' => ['required', 'array'],
            'tagline.id' => ['required', 'string', 'max:100'],
            'tagline.en' => ['required', 'string', 'max:100'],
            'tagline.jpn' => ['required', 'string', 'max:100'],

            'title' => ['required', 'array'],
            'title.id' => ['required', 'string', 'max:200'],
            'title.en' => ['required', 'string', 'max:200'],
            'title.jpn' => ['required', 'string', 'max:200'],

            'subtitle' => ['required', 'array'],
            'subtitle.id' => ['required', 'string'],
            'subtitle.en' => ['required', 'string'],
            'subtitle.jpn' => ['required', 'string'],

            'cta_primary_text' => ['required', 'string', 'max:50'],
            'cta_primary_url' => ['required', 'string', 'max:255'],
            'background_image' => ['nullable', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'tagline.id.required' => 'Tagline bahasa Indonesia wajib diisi.',
            'title.id.required' => 'Judul bahasa Indonesia wajib diisi.',
        ];
    }

    /**
     * Override ini supaya error validasi pakai format ApiResponse kita,
     * bukan format default Laravel. Semua Form Request project ini
     * harus override method ini untuk konsistensi.
     */
    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'message' => 'Validasi gagal. Periksa kembali input kamu.',
                'errors' => $validator->errors(),
            ], 422)
        );
    }
}
