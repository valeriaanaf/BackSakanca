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
            'username' => ['required', 'string', 'max:100'],
            'surname' => ['nullable', 'string', 'max:100'],

            'role' => ['required', 'array'],
            'role.ID' => ['required', 'string'],
            'role.EN' => ['required', 'string'],
            'role.JPN' => ['required', 'string'],

            'description1' => ['nullable', 'array'],
            'description2' => ['nullable', 'array'],

            'skills' => ['nullable', 'array'],
            'focus' => ['nullable', 'array'],
            'tools' => ['nullable', 'string', 'max:100'],
            'style' => ['nullable', 'array'],

            'photo' => ['nullable', 'string', 'max:255'],
            'background_image' => ['nullable', 'string', 'max:255'],

            'instagram_url' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'max:255'],
            'github_url' => ['nullable', 'string', 'max:255'],
            'linkedin_url' => ['nullable', 'string', 'max:255'],

            'order' => ['required', 'integer'],
            'is_active' => ['required', 'boolean'],
        ];
    }
}
