<?php

namespace App\Http\Requests;

class UpdateTeamMemberRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'surname' => ['required', 'string', 'max:100'],

            'focus' => ['required', 'array'],
            'focus.ID' => ['required', 'string'],
            'focus.EN' => ['required', 'string'],
            'focus.JPN' => ['required', 'string'],

            'description1' => ['required', 'array'],
            'description1.ID' => ['required', 'string'],
            'description1.EN' => ['required', 'string'],
            'description1.JPN' => ['required', 'string'],

            'description2' => ['required', 'array'],
            'description2.ID' => ['required', 'string'],
            'description2.EN' => ['required', 'string'],
            'description2.JPN' => ['required', 'string'],

            'skills' => ['required', 'array', 'min:1'],
            'skills.*' => ['required', 'string', 'max:50'],

            'photo' => ['required', 'string', 'max:255'],
            'background_image' => ['required', 'string', 'max:255'],

            'instagram_url' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'max:255'],
            'github_url' => ['nullable', 'string', 'max:255'],
            'linkedin_url' => ['nullable', 'string', 'max:255'],

            'order' => ['required', 'integer'],
            'is_active' => ['required', 'boolean'],
        ];
    }
}
