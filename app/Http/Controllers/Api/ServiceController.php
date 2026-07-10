<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Traits\ApiResponse; // Gunakan Trait Response standar Sakanca

class ServiceController extends Controller
{
    use ApiResponse;

    /**
     * Ambil data seluruh service yang aktif untuk disuplai ke Next.js
     */
    public function index()
    {
        $services = Service::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        return $this->success($services, 'Data services berhasil diambil');
    }
}
