<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSiteSettingRequest;
use App\Models\SiteSetting;
use App\Traits\ApiResponse;

class SiteSettingController extends Controller
{
    use ApiResponse;

    /*
        * Endpoint untuk Navbar.tsx & Footer.tsx -- public
        * Dikembalikan sebagai object [key: value] agar mudah dipakai FE, bukan array of object
    */

    public function indec()
    {
        $settings = SiteSetting::pluck('value', 'key');
        return $this->success($settings);
    }

    // Admin update satu key spesifik, contoh: PUT admin/settings/footer_email
    public function update(UpdateSiteSettingRequest $request, string $key)
    {
        $setting = SiteSetting::where('key', $key)->firstOrFail();
        $setting->update($request->validated());

        return $this->success($setting, 'Site setting berhasil diperbarui');
    }
}
