<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class OptimizedExistingImages extends Command
{
    protected $signature = 'images:optimize';
    protected $description = 'Kompres semua gambar di storage lokal menggunakan Native PHP GD';

    public function handle()
    {
        $files = Storage::disk('public')->allFiles();

        foreach ($files as $file) {
            $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (!in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
                continue;
            }

            $fullPath = storage_path('app/public/' . $file);

            try {
                // 1. Load gambar berdasarkan ekstensi
                $srcImage = match ($extension) {
                    'jpg', 'jpeg' => @imagecreatefromjpeg($fullPath),
                    'png'         => @imagecreatefrompng($fullPath),
                    'webp'        => @imagecreatefromwebp($fullPath),
                    default       => null,
                };

                if (!$srcImage) {
                    continue;
                }

                $width = imagesx($srcImage);
                $height = imagesy($srcImage);

                // 2. Resize hanya jika lebar gambar lebih dari 1920px (proporsional)
                if ($width > 1920) {
                    $newWidth = 1920;
                    $newHeight = (int) floor($height * ($newWidth / $width));
                    $resizedImage = imagescale($srcImage, $newWidth, $newHeight);
                    imagedestroy($srcImage);
                    $srcImage = $resizedImage;
                }

                // 3. Simpan ulang dengan kompresi kualitas 80%
                match ($extension) {
                    'jpg', 'jpeg' => imagejpeg($srcImage, $fullPath, 80),
                    'png'         => imagepng($srcImage, $fullPath, 6), // Scale 0-9 untuk PNG
                    'webp'        => imagewebp($srcImage, $fullPath, 80),
                };

                imagedestroy($srcImage);
                $this->info("Optimized: {$file}");
            } catch (\Throwable $e) {
                $this->error("Gagal mengompres {$file}: " . $e->getMessage());
            }
        }

        $this->info("Semua gambar berhasil dikompres!");
    }
}