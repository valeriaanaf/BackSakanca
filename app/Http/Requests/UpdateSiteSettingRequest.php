<?php

namespace App\Http\Requests;

class UpdateSiteSettingRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'site_name' => ['nullable', 'string', 'max:100'],
            'footer_copyright' => ['nullable', 'string', 'max:255'],
            'social_instagram' => ['nullable', 'string', 'max:255'],
            'social_tiktok' => ['nullable', 'string', 'max:255'],
            'social_linkedin' => ['nullable', 'string', 'max:255'],
            'contact_email' => ['nullable', 'email', 'max:255'],
            'contact_phone' => ['nullable', 'string', 'max:20'],

            // Background dekoratif per-section (bukan data bisnis, murni tema visual)
            'services_section_bg' => ['nullable', 'string', 'max:255'],
            'projects_section_bg' => ['nullable', 'string', 'max:255'],
            'testimonials_section_bg' => ['nullable', 'string', 'max:255'],
        ];
    }
}
