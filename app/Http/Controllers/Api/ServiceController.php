<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use App\Traits\ApiResponse;

class ServiceController extends Controller
{
    use ApiResponse;

    /**
     * Endpoint untuk ServicesSection.tsx (Grid Menu Utama) — Public
     */
    public function index()
    {
        $services = Service::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get(['id', 'title', 'slug', 'image', 'color', 'col']);

        return $this->success($services);
    }

    public function show(Service $service)
    {
        return $this->success($service);
    }

    public function store(UpdateServiceRequest $request)
    {
        $service = Service::create($request->validated());

        return $this->success($service, 'Service berhasil dibuat', 201);
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->update($request->validated());

        return $this->success($service, 'Service berhasil diperbarui');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return $this->success(null, 'Service berhasil dihapus');
    }
}