<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        ContactMessage::create($validated);

        // Response konfirmasi tipis tanpa mengembalikan isi data sensitif sesuai roadmap
        return $this->success(null, 'Pesan kamu berhasil dikirim, terima kasih ya!');
    }

    public function markAsRead(int $id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['is_read' => true]);

        return $this->success($message, 'Pesan ditandai telah dibaca');
    }
}
