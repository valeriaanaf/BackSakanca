<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateContactRequest;
use App\Models\ContactMessage;
use App\Traits\ApiResponse;

class ContactController extends Controller
{
    use ApiResponse;

    // Diakses Admin untuk baca semua pesan masuk
    public function index()
    {
        $messages = ContactMessage::orderBy('created_at', 'desc')->get();

        return $this->success($messages);
    }

    // Diakses Pengunjung (Public) untuk kirim pesan lewat form kontak website
    public function store(UpdateContactRequest $request)
    {
        ContactMessage::create($request->validated());

        return $this->success(null, 'Pesan kamu berhasil dikirim, terima kasih ya!');
    }

    public function markAsRead(int $id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['is_read' => true]);

        return $this->success($message, 'Pesan ditandai telah dibaca');
    }
}
