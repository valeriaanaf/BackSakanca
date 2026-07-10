<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;
use App\Traits\ApiResponse;

class AboutController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $about = About::first();

        return $about ? $this->success($about) : $this->error('Data About belum diset', null, 404);
    }

    public function update(UpdateAboutRequest $request, $id)
    {
        $about = About::findOrFail($id);
        $about->update($request->validated());

        return $this->success($about, 'Konten About sukses diperbarui');
    }
}
