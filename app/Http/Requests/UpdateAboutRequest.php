<?php

namespace App\Http\Requests;

class UpdateAboutRequest extends BaseRequest
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

            'description' => ['required', 'array'],
            'description.ID' => ['required', 'string'],
            'description.EN' => ['required', 'string'],
            'description.JPN' => ['required', 'string'],

            'logo' => ['required', 'string', 'max:255'],
            'background_image' => ['required', 'string', 'max:255'],
        ];
    }
}
