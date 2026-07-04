<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class SakancaSeeder extends Seeder
{
    public function run(): void
    {
        Hero::updateOrCreate(
            ['id' => 1],
            [
                'tagline' => [
                    'id' => 'Selamat Datang di Sakanca',
                    'en' => 'Creator & Technology Ecosystem',
                    'jpn' => 'クリエイター＆テクノロジーエコシステム',
                ],
                'title' => [
                    'id' => 'SHARED IDEAS ONE ALLIANCE',
                    'en' => 'SHARED IDEAS ONE ALLIANCE',
                    'jpn' => 'SHARED IDEAS ONE ALLIANCE',
                ],
                'subtitle' => [
                    'id' => 'Your Collective Expert Creating Solutions That Matter',
                    'en' => 'Your Collective Expert Creating Solutions That Matter',
                    'jpn' => 'あなたの集合的な専門家が重要なソリューションを作成します',
                ],
                'cta_primary_text' => 'Mulai Sekarang',
                'cta_primary_url' => '#contact',
                'background_image' => null,
                'is_active' => true,
            ]
        );
    }
}
