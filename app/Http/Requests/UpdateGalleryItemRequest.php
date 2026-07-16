<?php

namespace App\Http\Requests;

class UpdateGalleryItemRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'array', 'max:100'],
            'title.ID' => ['required', 'string'],
            'title.EN' => ['required', 'string'],
            'title.JPN' => ['required', 'string'],

            'subtitle' => ['required', 'array', 'max:100'],
            'subtitle.ID' => ['required', 'string'],
            'subtitle.EN' => ['required', 'string'],
            'subtitle.JPN' => ['required', 'string'],

            'text_kicker' => ['required', 'array', 'max:50'],
            'text_kicker.ID' => ['required', 'string'],
            'text_kicker.EN' => ['required', 'string'],
            'text_kicker.JPN' => ['required', 'string'],

            'images' => ['required', 'array', 'min:1'],
            'images.*.src' => ['required', 'string', 'max:255'],
            'images.*.alt' => ['required', 'string', 'max:255'],
            'images.*.zoomType' => ['required', 'string', 'in:in,out'],

            'order' => ['required', 'integer'],
            'is_active' => ['required', 'boolean'],
        ];
    }
}
