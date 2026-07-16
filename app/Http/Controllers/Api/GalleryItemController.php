<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateGalleryItemRequest;
use App\Models\GalleryItem;
use App\Traits\ApiResponse;

class GalleryItemController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $items = GalleryItem::where('is_active', true)->orderBy('order', 'asc')->get();

        return $this->success($items, 'Data gallery berhasil diambil');
    }

    public function show(GalleryItem $galleryItem)
    {
        return $this->success($galleryItem);
    }

    public function store(UpdateGalleryItemRequest $request)
    {
        $item = GalleryItem::create($request->validated());

        return $this->success($item, 'Gallery item berhasil dibuat', 201);
    }

    public function update(UpdateGalleryItemRequest $request, GalleryItem $galleryItem)
    {
        $galleryItem->update($request->validated());

        return $this->success($galleryItem, 'Gallery item berhasil diperbarui');
    }

    public function destroy(GalleryItem $galleryItem)
    {
        $galleryItem->delete();

        return $this->success(null, 'Gallery item berhasil dihapus');
    }
}
