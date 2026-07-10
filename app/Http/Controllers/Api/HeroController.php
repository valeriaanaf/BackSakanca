<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateHeroRequest;
use App\Models\Hero;
use App\Traits\ApiResponse;

class HeroController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $hero = Hero::where('is_active', true)->first();
        if (! $hero) {
            return $this->error('Data hero belum tersedia', null, 404);
        }

        return $this->success($hero);
    }

    public function store() {}

    public function update(UpdateHeroRequest $request, Hero $hero)
    {
        $hero->update($request->validated());

        return $this->success($hero, 'Hero berhasil diperbarui');
    }

    public function destroy() {}
}
