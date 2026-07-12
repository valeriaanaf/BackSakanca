<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateDetailedServiceRequest;
use App\Models\DetailedService;
use App\Traits\ApiResponse;

class DetailedServiceController extends Controller
{
    use ApiResponse;

    /**
     * Endpoint untuk DetailedServicesSection.tsx (Slider Detail) — Public
     */
    public function index()
    {
        $details = DetailedService::with('service:id,slug')
            ->where('is_active', true)
            ->orderBy('order', 'asc')
            ->get(['id', 'service_id', 'title_line1', 'title_line2', 'description', 'bg_image']);

        return $this->success($details);
    }

    public function show(DetailedService $detailedService)
    {
        return $this->success($detailedService);
    }

    public function store(UpdateDetailedServiceRequest $request)
    {
        $detail = DetailedService::create($request->validated());

        return $this->success($detail, 'Detail service berhasil dibuat', 201);
    }

    public function update(UpdateDetailedServiceRequest $request, DetailedService $detailedService)
    {
        $detailedService->update($request->validated());

        return $this->success($detailedService, 'Detail service berhasil diperbarui');
    }

    public function destroy(DetailedService $detailedService)
    {
        $detailedService->delete();

        return $this->success(null, 'Detail service berhasil dihapus');
    }
}