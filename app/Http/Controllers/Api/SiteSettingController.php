<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSiteSettingRequest;
use App\Models\SiteSetting;
use App\Traits\ApiResponse;

class SiteSettingController extends Controller
{
    use ApiResponse;

    /**
     * Endpoint untuk Navbar.tsx & Footer.tsx — Public
     * Sama seperti Hero: ambil 1 baris singleton.
     */
    public function index()
    {
        $settings = SiteSetting::first();

        if (! $settings) {
            return $this->error('Site settings belum tersedia', null, 404);
        }

        return $this->success($settings);
    }

    public function update(UpdateSiteSettingRequest $request, SiteSetting $siteSetting)
    {
        $siteSetting->update($request->validated());

        return $this->success($siteSetting, 'Site setting berhasil diperbarui');
    }
}