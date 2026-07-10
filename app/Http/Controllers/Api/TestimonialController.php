<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Traits\ApiResponse;

class TestimonialController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $testimonials = Testimonial::where('is_active', true)->orderBy('order', 'asc')->get();

        // Mapping otomatis agar dibaca satu frekuensi oleh Frontend Next.js
        $formatted = $testimonials->map(function ($item) {
            return [
                'id' => $item->id,
                'author' => $item->client_name,
                'text' => $item->content,
                'rating' => $item->rating,
            ];
        });

        return $this->success($formatted);
    }
}
