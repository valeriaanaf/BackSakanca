<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = 'site_settings';

    protected $fillable = [
        'site_name',
        'footer_copyright',
        'social_instagram',
        'social_tiktok',
        'social_linkedin',
        'contact_email',
        'contact_phone',
        'services_section_bg',
        'projects_section_bg',
        'testimonials_section_bg',
    ];  
}