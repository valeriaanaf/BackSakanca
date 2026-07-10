<?php

namespace App\Http\Requests;

class UpdateHeroRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title1' => ['required', 'string', 'max:100'],
            'title2' => ['required', 'string', 'max:100'],

            'subtitle' => ['required', 'array'],
            'subtitle.ID' => ['required', 'string'],
            'subtitle.EN' => ['required', 'string'],
            'subtitle.JPN' => ['required', 'string'],

            'cta_primary' => ['required', 'array'],
            'cta_primary.url' => ['required', 'string', 'max:255'],
            'cta_primary.text' => ['required', 'array'],
            'cta_primary.text.ID' => ['required', 'string', 'max:50'],
            'cta_primary.text.EN' => ['required', 'string', 'max:50'],
            'cta_primary.text.JPN' => ['required', 'string', 'max:50'],

            'background_images' => ['required', 'array', 'min:1'],
            'background_images.*.src' => ['required', 'string', 'max:255'],
            'background_images.*.alt' => ['required', 'string', 'max:255'],
            'background_images.*.zoomType' => ['required', 'string', 'in:in,out'],

            'is_active' => ['boolean'],
        ];
    }
}
