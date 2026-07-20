<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use App\Traits\ApiResponse;

class TestimonialController extends Controller
{
    use ApiResponse;

public function index()
{
    $testimonials = Testimonial::where('is_active', true)
        ->orderBy('order', 'asc')
        ->get();

    return $this->success($testimonials);
}

    public function store(UpdateTestimonialRequest $request)
    {
        $testimonial = Testimonial::create($request->validated());

        return $this->success($testimonial, 'Testimonial berhasil dibuat', 201);
    }

    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $testimonial->update($request->validated());

        return $this->success($testimonial, 'Testimonial berhasil diperbarui');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return $this->success(null, 'Testimonial berhasil dihapus');
    }
}
