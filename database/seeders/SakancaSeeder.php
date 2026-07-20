<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\DetailedService;
use App\Models\GalleryItem;
use App\Models\Hero;
use App\Models\Project;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class SakancaSeeder extends Seeder
{
    public function run(): void
    {
        // ==========================================
        //                 SEEDER HERO
        // ==========================================
        Hero::updateOrCreate(
            ['id' => 1],
            [
                'title1' => 'SHARED IDEAS',
                'title2' => 'ONE ALLIANCE',
                'subtitle' => [
                    'ID' => 'Your Collective Expert Creating Solutions That Matter',
                    'EN' => 'Your Collective Expert Creating Solutions That Matter',
                    'JPN' => '価値あるソリューションを創出するプロフェッショナル集団',
                ],
                'cta_primary' => [
                    'url' => '#contact',
                    'text' => [
                        'ID' => 'Mulai Sekarang',
                        'EN' => 'Get Started',
                        'JPN' => '今すぐ始める',
                    ],
                ],
                'background_images' => [
                    [
                        'src' => 'heroes/bgHero1.webp',
                        'alt' => 'Sakanca Alliance',
                        'zoomType' => 'in',
                    ],
                    [
                        'src' => 'heroes/bgHero2.webp',
                        'alt' => 'Sakanca Alliance',
                        'zoomType' => 'out',
                    ],
                    [
                        'src' => 'heroes/bgHero3.webp',
                        'alt' => 'Sakanca Alliance',
                        'zoomType' => 'in',
                    ],
                ],
                'is_active' => true,
            ]
        );

        // ==========================================
        //               SEEDER ABOUT
        // ==========================================
        About::updateOrCreate(
            ['id' => 1],
            [
                'title1' => 'SAKANCA',
                'title2' => 'ALLIANCE',
                'description' => [
                    'ID' => 'Sakanca Alliance berasal dari kata "Sakanca" yang berarti teman seperjalanan, sahabat, atau rekan yang berjalan bersama, sedangkan "Alliance" berarti kolaborasi. Sakanca Alliance merepresentasikan sebuah ekosistem yang menyatukan berbagai layanan kreatif, teknologi, otomotif, dan pengalaman wisata dalam satu jaringan kolaboratif. Kami percaya bahwa setiap ide, kebutuhan, dan impian layak diwujudkan bersama partner yang tepat. Oleh karena itu, Sakanca Alliance hadir sebagai rumah bagi berbagai unit bisnis yang saling mendukung untuk memberikan solusi terbaik bagi individu, bisnis, maupun komunitas.',
                    'EN' => 'Sakanca Alliance is derived from the word "Sakanca" which means fellow traveler, friend, or partner walking together, while "Alliance" means collaboration. Sakanca Alliance represents an ecosystem that unites various creative services, technology, automotive, and travel experiences into one collaborative network. We believe that every idea, need, and dream deserves to be realized with the right partner. Therefore, Sakanca Alliance is here as a home for various mutually supportive business units to provide the best solutions for individuals, businesses, and communities.',
                    'JPN' => 'サカンカ・アライアンス（Sakanca Alliance）は、「旅の仲間」「親友」「共に歩むパートナー」を意味する「サカンカ（Sakanca）」と、協働を意味する「アライアンス（Alliance）」に由来しています。クリエイティブ、テクノロジー、自動車、旅行体験を統合したコラボレーションネットワークです。すべてのアイデアや夢は、最適なパートナーと共に実現されるべきだと私たちは信じています。個人の皆様、企業、コミュニティへ最高のソリューションを提供するため、相互に支え合う事業ユニットの拠点として存在しています。',
                ],
                'logo' => 'logos/logoSakanca.webp',
                'background_image' => 'about/bgAbout.webp',
            ]
        );

        // ==========================================
        // SEEDER MODUL SERVICES & DETAILED SERVICES
        // ==========================================

        // --- 1. SAKANCA VISUAL ---
        $visual = Service::updateOrCreate(
            ['slug' => 'sakanca-visual'],
            [
                'name' => 'Sakanca Visual',
                'slug' => 'sakanca-visual',
                'logo' => 'logos/logoSakancaVisual.webp',
                'col' => 'left',
                'order' => 1,
                'is_active' => true,
            ]
        );
        DetailedService::updateOrCreate(
            ['service_id' => $visual->id],
            [
                'title_line1' => 'S A K A N C A',
                'title_line2' => 'V I S U A L',
                'background_image' => 'detailed-services/detVisual.webp',
                'order' => 1,
                'is_active' => true,
                'description' => [
                    'ID' => 'Sakanca Visual adalah divisi yang bergerak di bidang videografi, fotografi, dan produksi konten kreatif. Kami membantu mengabadikan setiap momen sekaligus menciptakan visual yang menarik untuk kebutuhan promosi, branding, dokumentasi acara, hingga media sosial dengan hasil yang profesional dan berkualitas.',
                    'EN' => 'Sakanca Visual specializes in videography, photography, and creative content production. We help capture every moment while producing compelling visuals for promotion, branding, event documentation, and social media with professional, high-quality results.',
                    'JPN' => 'Sakanca Visualはビデオグラフィー、写真撮影、クリエイティブコンテンツ制作を担当しています。プロモーション、ブランディング、イベント記録、SNS用に高品質で魅力的なビジュアルを提供します。',
                ],
            ]
        );

        // --- 2. SAKANCA AUTO ---
        $auto = Service::updateOrCreate(
            ['slug' => 'sakanca-auto'],
            [
                'name' => 'Sakanca Auto',
                'slug' => 'sakanca-auto',
                'logo' => 'logos/logoSakancaAuto.webp',
                'col' => 'right',
                'order' => 2,
                'is_active' => true,
            ]
        );
        DetailedService::updateOrCreate(
            ['service_id' => $auto->id],
            [
                'title_line1' => 'S A K A N C A',
                'title_line2' => '    A U T O',
                'background_image' => 'detailed-services/detAuto.webp',
                'order' => 2,
                'is_active' => true,
                'description' => [
                    'ID' => 'Sakanca Auto menyediakan layanan otomotif profesional yang mencakup kustomisasi motor, pemasangan aksesori, hingga konsultasi kendaraan dengan mengutamakan presisi dan kualitas.',
                    'EN' => 'Sakanca Auto provides professional automotive services including motorcycle customization, accessory installation, and vehicle consultation, prioritizing precision and quality.',
                    'JPN' => 'Sakanca Autoは、バイクのカスタマイズ、アクセサリー取り付け、車両のご相談まで自動車関連サービスを提供します。品質と精度を最優先し、お客様のスタイルに合わせた仕上がりをお届けします。',
                ],
            ]
        );

        // --- 3. SAKANCA ESCAPE ---
        $escape = Service::updateOrCreate(
            ['slug' => 'sakanca-escape'],
            [
                'name' => 'Sakanca Escape',
                'slug' => 'sakanca-escape',
                'logo' => 'logos/logoSakancaEscape.webp',
                'col' => 'left',
                'order' => 3,
                'is_active' => true,
            ]
        );
        DetailedService::updateOrCreate(
            ['service_id' => $escape->id],
            [
                'title_line1' => 'S A K A N C A',
                'title_line2' => 'E S C A P E',
                'background_image' => 'detailed-services/detEscape.webp',
                'order' => 3,
                'is_active' => true,
                'description' => [
                    'ID' => 'Sakanca Escape menyediakan layanan perjalanan dan tur wisata di Yogyakarta, mulai dari tur keliling kota hingga rencana perjalanan kustom untuk memastikan liburan Anda nyaman dan menyenangkan.',
                    'EN' => 'Sakanca Escape provides travel and tour services in Yogyakarta, ranging from city tours to custom itineraries to ensure your holiday is comfortable and memorable.',
                    'JPN' => 'Sakanca Escapeは、ジョグジャカルタでの印象的な旅行・ツアーサービスを提供します。シティツアーからカスタム旅行まで、快適で安全かつ楽しい旅をサポートします。',
                ],
            ]
        );

        // --- 4. SAKANCA TECH ---
        $tech = Service::updateOrCreate(
            ['slug' => 'sakanca-tech'],
            [
                'name' => 'Sakanca Tech',
                'slug' => 'sakanca-tech',
                'logo' => 'logos/logoSakancaTech.webp',
                'col' => 'right',
                'order' => 4,
                'is_active' => true,
            ]
        );
        DetailedService::updateOrCreate(
            ['service_id' => $tech->id],
            [
                'title_line1' => 'S A K A N C A',
                'title_line2' => 'T E C H',
                'background_image' => 'detailed-services/detTech.webp',
                'order' => 4,
                'is_active' => true,
                'description' => [
                    'ID' => 'Sakanca Tech melayani penjualan laptop, komputer desktop, komponen PC, serta perangkat pendukung lainnya dengan garansi resmi dan layanan konsultasi pemilihan spesifikasi perangkat.',
                    'EN' => 'Sakanca Tech provides sales of laptops, desktop computers, PC parts, and peripherals with official warranties and expert consulting services to choose the device that best fits your needs.',
                    'JPN' => 'Sakanca Techは、ノートPC、デスクトップ、PCパーツ、周辺機器の販売を行っています。学習、仕事、ビジネスに最適な機器選びを専門的なコンサルティングと共にサポートします。',
                ],
            ]
        );

        // --- 5. SAKANCA DEV ---
        $dev = Service::updateOrCreate(
            ['slug' => 'sakanca-dev'],
            [
                'name' => 'Sakanca Dev',
                'slug' => 'sakanca-dev',
                'logo' => 'logos/logoSakancaDev.webp',
                'col' => 'left',
                'order' => 5,
                'is_active' => true,
            ]
        );
        DetailedService::updateOrCreate(
            ['service_id' => $dev->id],
            [
                'title_line1' => 'S A K A N C A',
                'title_line2' => 'D E V',
                'background_image' => 'detailed-services/detDev.webp',
                'order' => 5,
                'is_active' => true,
                'description' => [
                    'ID' => 'Sakanca Dev berfokus pada pengembangan website inovatif, aplikasi web kustom, serta sistem informasi manajemen terintegrasi untuk mendukung efisiensi bisnis Anda di era digital.',
                    'EN' => 'Sakanca Dev focuses on developing innovative websites, custom applications, and integrated management information systems to drive your business efficiency in the digital era.',
                    'JPN' => 'Sakanca Devは、革新的なウェブサイト、アプリケーション、情報システムの開発に特化しています。デジタル時代におけるビジネスの効率化と品質向上を実現するカスタムソリューションを提供します。',
                ],
            ]
        );

        // --- 6. SAKANCA PET ---
        $pet = Service::updateOrCreate(
            ['slug' => 'sakanca-pet'],
            [
                'name' => 'Sakanca Pet',
                'slug' => 'sakanca-pet',
                'logo' => 'logos/logoSakancaPet.webp',
                'col' => 'right',
                'order' => 6,
                'is_active' => true,
            ]
        );
        DetailedService::updateOrCreate(
            ['service_id' => $pet->id],
            [
                'title_line1' => 'S A K A N C A',
                'title_line2' => 'P E T',
                'background_image' => 'detailed-services/detPet.webp',
                'description' => [
                    'ID' => 'Sakanca Pet menyediakan layanan grooming hewan peliharaan, penginapan hewan peliharaan dengan fasilitas lengkap, serta makanan premium untuk memberikan kenyamanan dan kasih sayang terbaik bagi hewan kesayangan Anda.',
                    'EN' => 'Sakanca Pet offers professional pet grooming, fully-equipped pet boarding, and premium food selection to deliver the highest comfort and love for your beloved pets.',
                    'JPN' => 'Sakanca Petは、ペットのグルーミング、充実した設備を備えたペットホテル、プレミアムフードを提供し、大切なペットに最高の快適さと愛情をお届けします。',
                    ],
                'order' => 6,
                'is_active' => true,
            ]
        );

        // ==========================================
        //                  PROJECTS
        // ==========================================
        Project::updateOrCreate(
            ['id' => 1],
            [
                'service_id' => $escape->id,
                'name' => [
                    'ID' => 'SAKANCA ESCAPE × GEWD VACATION CITY TOUR',
                    'EN' => 'SAKANCA ESCAPE × GEWD VACATION CITY TOUR',
                    'JPN' => 'SAKANCA ESCAPE × GEWD VACATION シティツアー',
                ],
                'description' => [
                    'ID' => 'City Tour hasil kolaborasi Sakanca Escape × Gewd Vacation menyusuri spot tersembunyi diluar dari jalan Malioboro. Mulai dari kuliner hingga hidden gems tempat yang tidak banyak orang kunjungi.',
                    'EN' => 'A city tour collaboration between Sakanca Escape and Gewd Vacation, exploring hidden spots off the beaten path of Malioboro Street. From local culinary spots to hidden gems that few people visit.',
                    'JPN' => 'Sakanca EscapeとGewd Vacationのコラボレーションによるシティツアー。マリオボロ通りから少し外れた隠れたスポットを巡ります。グルメから、あまり訪れる人がいない穴場スポットまで。',
                ],
                'thumbnail' => 'projects/Escape.webp',
                'url' => null,
                'order' => 1,
                'is_active' => true,
            ]
        );

        Project::updateOrCreate(
            ['id' => 2],
            [
                'service_id' => $tech->id,
                'name' => [
                    'ID' => 'SAKANCA TECH CUSTOM PC BUILD',
                    'EN' => 'SAKANCA TECH CUSTOM PC BUILD',
                    'JPN' => 'SAKANCA TECH カスタムPC組み立て',
                ],
                'description' => [
                    'ID' => 'Merakit komputer desktop sesuai kebutuhan pengguna dengan memperhatikan performa, estetika, dan manajemen kabel. Proyek ini mencakup pemasangan seluruh komponen, konfigurasi hardware, optimalisasi airflow, serta pengujian sistem untuk memastikan komputer berjalan stabil dan siap digunakan.',
                    'EN' => 'Building a custom desktop PC tailored to user needs, with attention to performance, aesthetics, and cable management. The project covers full component installation, hardware configuration, airflow optimization, and system testing to ensure stable performance.',
                    'JPN' => 'ユーザーのニーズに合わせたデスクトップPCの組み立て。パフォーマンス、美観、ケーブルマネジメントに配慮しています。全パーツの取り付け、ハードウェア設定、エアフローの最適化、システムテストまでを含みます。',
                ],
                'thumbnail' => 'projects/CustomPC.webp',
                'url' => null,
                'order' => 2,
                'is_active' => true,
            ]
        );

        Project::updateOrCreate(
            ['id' => 3],
            [
                'service_id' => $tech->id,
                'name' => [
                    'ID' => 'SAKANCA TECH LAPTOP MAINTENANCE',
                    'EN' => 'SAKANCA TECH LAPTOP MAINTENANCE',
                    'JPN' => 'SAKANCA TECH ノートパソコンメンテナンス',
                ],
                'description' => [
                    'ID' => 'Melakukan pembongkaran laptop untuk proses pembersihan, penggantian thermal paste, upgrade komponen seperti SSD dan RAM, serta pemeriksaan kondisi hardware. Setiap perangkat diuji kembali setelah perawatan guna memastikan performa meningkat dan sistem bekerja secara optimal.',
                    'EN' => 'Disassembling laptops for cleaning, thermal paste replacement, component upgrades such as SSD and RAM, and hardware condition checks. Each device is retested after maintenance to ensure improved performance and optimal system operation.',
                    'JPN' => 'ノートパソコンを分解し、クリーニング、サーマルペーストの交換、SSDやRAMのアップグレード、ハードウェア状態のチェックを行います。メンテナンス後は再テストを行い、性能向上を確認します。',
                ],
                'thumbnail' => 'projects/LaptopMaintenance.webp',
                'url' => null,
                'order' => 3,
                'is_active' => true,
            ]
        );

        Project::updateOrCreate(
            ['id' => 4],
            [
                'service_id' => $visual->id,
                'name' => [
                    'ID' => 'JUARA 2 LOMBA PORSIMAPTAR 2025',
                    'EN' => '2ND PLACE — PORSIMAPTAR COMPETITION 2025',
                    'JPN' => 'PORSIMAPTAR 2025 大会 2位受賞',
                ],
                'description' => [
                    'ID' => 'Juara 2 lomba videografi yang diadakan oleh Akademi Kepolisian Semarang pada tahun 2025 tingkat nasional.',
                    'EN' => '2nd place winner of a national-level videography competition held by the Semarang Police Academy in 2025.',
                    'JPN' => '2025年にスマラン警察学校が主催した全国レベルの映像コンテストで2位を受賞。',
                ],
                'thumbnail' => 'projects/Porsimaptar.webp',
                'url' => null,
                'order' => 4,
                'is_active' => true,
            ]
        );

        Project::updateOrCreate(
            ['id' => 5],
            [
                'service_id' => $dev->id,
                'name' => [
                    'ID' => 'Sugi AC Mobil',
                    'EN' => 'Sugi AC Mobil',
                    'JPN' => 'Sugi AC Mobil',
                ],
                'description' => [
                    'ID' => 'Sugi AC Mobil adalah website company profile yang menampilkan informasi layanan servis AC mobil, galeri, testimoni, dan kontak untuk memudahkan pelanggan mengenal bisnis serta melakukan konsultasi. Website ini dibangun menggunakan Next.js, TypeScript, dan Tailwind CSS dengan deployment di Vercel, sehingga menghasilkan tampilan modern, responsif, cepat, dan SEO-friendly.',
                    'EN' => 'Sugi AC Mobil is a company profile website presenting car AC service information, gallery, testimonials, and contact details to help customers learn about the business and consult easily. Built with Next.js, TypeScript, and Tailwind CSS, deployed on Vercel, resulting in a modern, responsive, fast, and SEO-friendly site.',
                    'JPN' => 'Sugi AC Mobilは、カーエアコンサービスの情報、ギャラリー、お客様の声、連絡先を紹介する企業サイトです。Next.js、TypeScript、Tailwind CSSで構築され、Vercelにデプロイされており、モダンでレスポンシブ、高速かつSEOに強い仕上がりです。',
                ],
                'thumbnail' => 'projects/SugiAcMobil.webp',
                'url' => null,
                'order' => 5,
                'is_active' => true,
            ]
        );

        Project::updateOrCreate(
            ['id' => 6],
            [
                'service_id' => $dev->id,
                'name' => [
                    'ID' => 'C Minor',
                    'EN' => 'C Minor',
                    'JPN' => 'C Minor',
                ],
                'description' => [
                    'ID' => 'C Minor adalah website landing page yang dirancang untuk menyampaikan informasi mengenai komunitas secara profesional melalui desain yang sederhana, responsif, dan mudah digunakan. Website ini dikembangkan menggunakan HTML, CSS, dan JavaScript, kemudian dideploy menggunakan Vercel sehingga memiliki performa yang ringan dan mudah diakses dari berbagai perangkat.',
                    'EN' => 'C Minor is a landing page website designed to professionally convey community information through a simple, responsive, and user-friendly design. Built with HTML, CSS, and JavaScript, deployed on Vercel for lightweight performance and easy access across devices.',
                    'JPN' => 'C Minorは、シンプルでレスポンシブなデザインを通じてコミュニティ情報を伝えるランディングページです。HTML、CSS、JavaScriptで構築され、Vercelにデプロイされており、軽量で様々なデバイスからアクセスしやすくなっています。',
                ],
                'thumbnail' => 'projects/CMinor.webp',
                'url' => null,
                'order' => 6,
                'is_active' => true,
            ]
        );

        Project::updateOrCreate(
            ['id' => 7],
            [
                'service_id' => $visual->id,
                'name' => [
                    'ID' => 'Lomba Video Kreatif UNISBA 2026',
                    'EN' => 'UNISBA 2026 Creative Video Competition',
                    'JPN' => 'UNISBA 2026 クリエイティブ動画コンテスト',
                ],
                'description' => [
                    'ID' => 'Lomba Video Kreatif yang diadakan oleh Universitas Islam Bandung Tahun 2026. Maya Rasa menceritakan tentang seorang perantau yang terjebak dalam judi online hingga menghabiskan uang yang dimilikinya. Saat keadaan mulai sulit, ia berusaha bertahan hidup dengan mencari pekerjaan di perantauan dan kembali menemukan semangat untuk bangkit.',
                    'EN' => 'A Creative Video Competition held by Universitas Islam Bandung in 2026. Maya Rasa tells the story of a migrant worker trapped in online gambling until he loses everything he owns. As things get harder, he strives to survive by finding work away from home and rediscovers the spirit to rise again.',
                    'JPN' => '2026年にバンドン・イスラム大学が主催したクリエイティブ動画コンテスト作品。「マヤ・ラサ」は、オンラインギャンブルにはまり全財産を失った出稼ぎ労働者が、困難の中で仕事を探しながら生き抜き、再び立ち上がる物語。',
                ],
                'thumbnail' => 'projects/MayaRasa.webp',
                'url' => null,
                'order' => 7,
                'is_active' => true,
            ]
        );

        Project::updateOrCreate(
            ['id' => 8],
            [
                'service_id' => $visual->id,
                'name' => [
                    'ID' => 'Lomba Video Pendek BNN 2025',
                    'EN' => 'BNN 2025 Short Film Competition',
                    'JPN' => 'BNN 2025 ショートフィルムコンテスト',
                ],
                'description' => [
                    'ID' => 'Lomba Video Pendek yang diadakan oleh Badan Narkotika Nasional Tahun 2025. Ruang Silam menceritakan sepenggal realita anak muda yang dihadapkan oleh ujung skripsi dan patah hati, sehingga hampir tersesat ke narkoba hingga suara ibu membawanya pulang.',
                    'EN' => 'A Short Film Competition held by the National Narcotics Agency (BNN) in 2025. Ruang Silam tells a slice of reality of young people facing the end of their thesis and heartbreak, nearly leading them astray into drugs, until their mother\'s voice brings them home.',
                    'JPN' => '2025年に国家麻薬対策庁（BNN）が主催したショートフィルムコンテスト作品。卒業論文の終わりと失恋に直面する若者たちが薬物に迷い込みそうになりながらも、母親の声によって家に帰る物語。',
                ],
                'thumbnail' => 'projects/BNN.webp',
                'url' => null,
                'order' => 8,
                'is_active' => true,
            ]
        );

        Project::updateOrCreate(
            ['id' => 9],
            [
                'service_id' => $auto->id,
                'name' => [
                    'ID' => 'TOP 5 Motor Matic 150cc Terbaik 2026 – Versi Sakanca Auto!',
                    'EN' => 'TOP 5 Best 150cc Automatic Motorcycles 2026 — Sakanca Auto Edition!',
                    'JPN' => '2026年最強150ccオートマチックバイク TOP5 — Sakanca Auto版！',
                ],
                'description' => [
                    'ID' => 'Pembuatan video mengenai motor: mencari motor matic 150cc yang tepat untuk kebutuhan harian maupun hobi di tahun 2026? Di video kali ini, kami telah mengurasi 5 pilihan motor matic kelas 150cc terbaik versi Sakanca Auto. Kami membahas keunggulan performa, desain, dan fitur-fitur yang membuat kelima motor ini layak menjadi pilihan utama bagi kamu tahun ini.',
                    'EN' => 'A video production about motorcycles: Looking for the right 150cc automatic scooter for daily use or hobby in 2026? In this video, we curated the top 5 best 150cc automatic scooters according to Sakanca Auto, covering performance, design, and features worth considering this year.',
                    'JPN' => 'バイクに関する動画制作：2026年、日常使いや趣味に最適な150ccのオートマチックバイクをお探しですか？今回はSakanca Auto厳選の150ccクラス最強バイク5選をご紹介し、性能、デザイン、機能について解説します。',
                ],
                'thumbnail' => 'projects/KelasMatic.webp',
                'url' => null,
                'order' => 9,
                'is_active' => true,
            ]
        );

        Project::updateOrCreate(
            ['id' => 10],
            [
                'service_id' => $visual->id,
                'name' => [
                    'ID' => 'Juara 2 Lomba Videografi Bioleaf UNS Tahun 2025',
                    'EN' => '2nd Place — Bioleaf UNS Videography Competition 2025',
                    'JPN' => 'Bioleaf UNS 2025 映像コンテスト 2位受賞',
                ],
                'description' => [
                    'ID' => 'Juara 2 Lomba Videografi yang diselenggarakan oleh HMP Biosfer FKIP UNS: BIOLEAF Tahun 2025.',
                    'EN' => '2nd place winner of the Videography Competition held by HMP Biosfer FKIP UNS: BIOLEAF 2025.',
                    'JPN' => 'HMP Biosfer FKIP UNS主催の映像コンテスト「BIOLEAF 2025」にて2位を受賞。',
                ],
                'thumbnail' => 'projects/Bioleaf.webp',
                'url' => null,
                'order' => 10,
                'is_active' => true,
            ]
        );

        // ==========================================
        //               TESTIMONIALS
        // ==========================================
        $testimonialsData = [
            [
                'client_name' => '@EdyPamungkas',
                'rating' => 5,
                'content' => [
                    'ID' => 'Tampilan web-nya classy banget! Flow-nya enak, navigasi dari halaman ke halaman mulus. Baru kali ini nemu web yang desainnya senyaman ini.',
                    'EN' => 'The website looks so classy! The flow is great, navigating between pages is seamless. First time I\'ve found a website this comfortable to use.',
                    'JPN' => 'ウェブサイトのデザインがとても上品です！操作性も良く、ページ間の移動がスムーズです。こんなに快適なサイトは初めてです。',
                ],
                'order' => 1,
                'is_active' => true,
            ],
            [
                'client_name' => '@Baktisakti',
                'rating' => 5,
                'content' => [
                    'ID' => 'Gacorr, ini web loading-nya cepet banget! Fitur-fitur yang ada di dalamnya juga fungsional dan nggak bikin bingung. Developer-nya juara sih.',
                    'EN' => 'Wow, this website loads super fast! The features are functional and easy to understand. Kudos to the developer.',
                    'JPN' => 'すごい、このサイトの読み込みがとても速いです！機能もしっかりしていて分かりやすいです。開発者さん最高です。',
                ],
                'order' => 2,
                'is_active' => true,
            ],
            [
                'client_name' => '@Br4mast4', 
                'rating' => 4,
                'content' => [
                    'ID' => 'Suka banget sama interface-nya. Modern dan minimalis, bener-bener enak dilihat lama lama. User experiencenya dapet banget, nggak bikin pusing.',
                    'EN' => 'I really love the interface. Modern and minimalist, genuinely pleasant to look at for a long time. The user experience is spot on.',
                    'JPN' => 'インターフェースがとても気に入りました。モダンでミニマルなデザインで、長時間見ていても心地良いです。',
                ],
                'order' => 3,
                'is_active' => true,
            ],
            [
                'client_name' => '@citradwi', 
                'rating' => 5,
                'content' => [
                    'ID' => 'Awalnya buka web di desktop trus pas buka webnya di mobile, tampilannya tetep rapi. Responsive nya jempolan, nggak ada elemen yang kepotong. Mantap banget buat dev nya.',
                    'EN' => 'I first opened the website on desktop, then on mobile, and the layout stayed neat. The responsiveness is excellent, no elements were cut off.',
                    'JPN' => '最初はパソコンで、次にスマホで開いてもレイアウトがきれいなままでした。レスポンシブ対応が素晴らしいです。',
                ],
                'order' => 4,
                'is_active' => true,
            ],
            [
                'client_name' => '@Sari4330', 
                'rating' => 5,
                'content' => [
                    'ID' => 'Struktur data di web ini rapi ya, mau cari info apa aja gampang ketemu. Backendnya kayaknya solid banget karena nggak pernah kerasa lag.',
                    'EN' => 'The data structure on this website is really well organized, easy to find any information. The backend seems very solid, never feels laggy.',
                    'JPN' => 'このサイトのデータ構造はとても整理されていて、どんな情報も簡単に見つけられます。バックエンドも安定しています。',
                ],
                'order' => 5,
                'is_active' => true,
            ],
            [
                'client_name' => '@Dikaprazz', 
                'rating' => 5,
                'content' => [
                    'ID' => 'Desainnya estetik, pemilihan font sama warnanya bikin web ini kelihatan mahal. Clean banget, beda sama web lain yang terlalu ramai.',
                    'EN' => 'The design is aesthetic, the font and color choices make this website look premium. Very clean, unlike other cluttered websites.',
                    'JPN' => 'デザインが美しく、フォントと色の選び方がこのサイトを高級に見せています。とてもクリーンです。',
                ],
                'order' => 6,
                'is_active' => true,
            ],
            [
                'client_name' => '@Kurniaa_fian', 
                'rating' => 4,
                'content' => [
                    'ID' => 'Pelayanan dari sistem webnya bagus, proses dari awal sampai bagian web paling akhir cepet banget nggak ada error. Problem solving-nya bener-bener dipikirin.',
                    'EN' => 'The service from the website system is great, the process from start to end is very fast with no errors. The problem-solving was really well thought out.',
                    'JPN' => 'ウェブシステムのサービスが素晴らしく、最初から最後までの処理がとても速く、エラーもありません。',
                ],
                'order' => 7,
                'is_active' => true,
            ],
            [
                'client_name' => '@DanielDiJakarta', 
                'rating' => 5,
                'content' => [
                    'ID' => 'Fitur pencariannya akurat. Sering banget pakai web ini buat cari refrensi, dan sejauh ini performanya stabil banget. Sangat membantu produktivitas gue.',
                    'EN' => 'The search feature is accurate. I often use this website to find references, and so far the performance has been very stable.',
                    'JPN' => '検索機能が正確です。よくこのサイトを参考資料探しに使っていますが、パフォーマンスはとても安定しています。',
                ],
                'order' => 8,
                'is_active' => true,
            ],
            [
                'client_name' => '@indahPratiwi', 
                'rating' => 5,
                'content' => [
                    'ID' => 'Integrasi datanya cepet banget, update an terbaru selalu sinkron. Bener-bener terstruktur, pengerjaannya pasti niat banget nih yang buat.',
                    'EN' => 'The data integration is super fast, the latest updates are always in sync. Really well structured, whoever built this clearly put in a lot of effort.',
                    'JPN' => 'データ連携がとても速く、最新の更新も常に同期されています。本当によく構成されています。',
                ],
                'order' => 9,
                'is_active' => true,
            ],
            [
                'client_name' => '@ahmdHad1', 
                'rating' => 5,
                'content' => [
                    'ID' => 'Tampilannya simpel tapi fungsional. Jarang nemu web yang UI nya seintuitif ini. Overall, sangat memuaskan buat pengalaman pengguna kayak gue.',
                    'EN' => 'The look is simple but functional. Rarely do I find a website with such an intuitive UI. Overall, very satisfying user experience.',
                    'JPN' => '見た目はシンプルですが機能的です。これほど直感的なUIのサイトはなかなかありません。',
                ],
                'order' => 10,
                'is_active' => true,
            ],
        ];

        foreach ($testimonialsData as $index => $data) {
            Testimonial::updateOrCreate(
                ['id' => $index + 1],
                array_merge($data, ['order' => $index + 1, 'is_active' => true])
            );
        }

        // ==========================================
        //       SEEDER TEAM MEMBERS / PROFILE
        // ==========================================

        // --- TAZAR AL GHAFFAR ---
        TeamMember::updateOrCreate(
            ['name' => 'TAZAR', 'surname' => 'Al Ghaffar'],
            [
                'focus' => [
                    'ID' => 'CREATIVE DEVELOPER & VISUAL STORYTELLER',
                    'EN' => 'CREATIVE DEVELOPER & VISUAL STORYTELLER',
                    'JPN' => 'クリエイティブ開発者 ＆ ビジュアルストーリーテラー',
                ],
                'description1' => [
                    'ID' => 'Creative creator menggabungkan keahlian teknis dan visual. Berpengalaman dalam pengeditan video menggunakan Adobe After Effects dan CapCut Pro, serta desain grafis melalui Canva.',
                    'EN' => 'Creative creator combining technical and visual expertise. Experienced in video editing using Adobe After Effects and CapCut Pro, as well as graphic design via Canva.',
                    'JPN' => '技術的および視覚的な専門知識を組み合わせたクリエイティブクリエイター。Adobe After EffectsとCapCut Proを使用したビデオ編集、およびCanvaを介したグラフィックデザインの経験があります。',
                ],
                'description2' => [
                    'ID' => 'Front-end developer building modern web interfaces with Next.js and TypeScript. Menghasilkan estetika visual dinamis demi fungsionalitas kode yang efisien.',
                    'EN' => 'Front-end developer building modern web interfaces with Next.js and TypeScript. Delivering dynamic visual aesthetics alongside efficient code functionality.',
                    'JPN' => 'Next.jsとTypeScriptを使用してモダンなWebフロントエンドを構築します。効率的なコード機能とともに、動的な視覚的美学を提供します。',
                ],
                'skills' => ['After Effects', 'CapCut Pro', 'Canva', 'Next.js', 'TypeScript', 'UI/UX'],
                'photo' => 'team-members/TazarProfile.webp',
                'background_image' => 'team-members/backgrounds/Tazar-Bg-Profile.webp',
                'github_url' => 'https://github.com/Tazarag',
                'instagram_url' => 'https://instagram.com/tazarag_',
                'email' => 'papatazar@gmail.com',
                'order' => 1,
                'is_active' => true,
            ]
        );

        // --- HAFIDZ CHAIRUL L ---
        TeamMember::updateOrCreate(
            ['name' => 'HAFIDZ', 'surname' => 'CHAIRUL L'],
            [
                'focus' => [
                    'ID' => 'CREATIVE DIRECTOR & CLIENT RELATIONS',
                    'EN' => 'CREATIVE DIRECTOR & CLIENT RELATIONS',
                    'JPN' => 'クリエイティブディレクター ＆ クライアントリレーションズ',
                ],
                'description1' => [
                    'ID' => 'Creative Director & Client Relations yang berfokus pada pengembangan identitas visual melalui perpaduan strategi, desain, dan komunikasi. Berpengalaman dalam branding, graphic design, dan creative layout menggunakan Canva dan Adobe Photoshop, serta didukung kemampuan fotografi dan public communication sebagai tour guide.',
                    'EN' => 'Creative Director & Client Relations focusing on visual identity development through a blend of strategy, design, and communication. Experienced in branding, graphic design, and creative layout using Canva and Adobe Photoshop, supported by photography and public communication skills as a tour guide.',
                    'JPN' => '戦略、デザイン、コミュニケーションの融合を通じてビジュアルアイデンティティの開発に注力するクリエイティブディレクター兼クライアントリレーションズ。CanvaとAdobe Photoshopを使用したブランディング、グラフィックデザイン、クリエイティブレイアウトの経験があり、ツアーガイドとしての写真撮影やパブリックコミュニケーションのスキルも備えています。',
                ],
                'description2' => [
                    'ID' => 'Percaya bahwa desain yang baik tidak hanya menarik secara visual, tetapi juga mampu membangun koneksi dan menyampaikan cerita yang bermakna.',
                    'EN' => 'Believes that good design is not only visually appealing but also capable of building connections and telling meaningful stories.',
                    'JPN' => '優れたデザインは視覚的に魅力的であるだけでなく、つながりを構築し、意味のある物語を伝えることができると信じています。',
                ],
                'skills' => ['Creative Direction', 'Client Relations', 'Branding', 'Graphic Design', 'Visual Storytelling', 'Photography', 'Speaking'],
                'photo' => 'team-members/TaraProfile.webp',
                'background_image' => 'team-members/backgrounds/Tara-Bg-Profile.webp',
                'github_url' => 'https://github.com/lestarahmanh',
                'instagram_url' => 'https://instagram.com/taraavanjava',
                'email' => 'lestarahmanh@gmail.com',
                'order' => 2,
                'is_active' => true,
            ]
        );

        // --- CLARA DELTA GENIOVA ---
        TeamMember::updateOrCreate(
            ['name' => 'CLARA', 'surname' => 'DELTA GENIOVA'],
            [
                'focus' => [
                    'ID' => 'UI/UX DESIGNER & EVENT ORGANIZER',
                    'EN' => 'UI/UX DESIGNER & EVENT ORGANIZER',
                    'JPN' => 'UI/UXデザイナー ＆ イベントオーガナイザー',
                ],
                'description1' => [
                    'ID' => 'Berkomitmen untuk terus berkembang dengan memadukan teknologi, kreativitas, dan pengalaman organisasi. Memiliki ketertarikan pada bidang UI/UX Design dan event organizing, dengan pengalaman mengembangkan ide melalui Figma untuk perancangan antarmuka serta Canva untuk desain visual.',
                    'EN' => 'Committed to continuous growth by blending technology, creativity, and organizational experience. Has an interest in the fields of UI/UX Design and event organizing, with experience developing ideas through Figma for interface design and Canva for visual design.',
                    'JPN' => 'テクノロジー、創造性、組織経験を融合させることで、継続的な成長に取り組んでいます。UI/UXデザインとイベント運営の分野に関心があり、インターフェースデザインのためのFigmaやビジュアルデザインのためのCanvaを通じてアイデアを展開した経験があります。',
                ],
                'description2' => [
                    'ID' => 'Di luar aktivitas tersebut, saya menikmati menulis, menggambar menggunakan Ibis Paint, dan bernyanyi sebagai media untuk menyalurkan kreativitas dan terus mengembangkan perspektif.',
                    'EN' => 'Outside of these activities, I enjoy writing, drawing using Ibis Paint, and singing as a medium to channel creativity and continue developing perspectives.',
                    'JPN' => 'これらの活動のほかに、創造性をチャネルし、視野を広げ続けるための媒体として、執筆、Ibis Paintを使用した描画、歌唱を楽しんでいます。',
                ],
                'skills' => ['Videography', 'DaVinci Resolve', 'After Effects', 'Color Grading', 'Drone', 'Storytelling'],
                'photo' => 'team-members/ClaraProfile.webp',
                'background_image' => 'team-members/backgrounds/Clara-Bg-Profile.webp',
                'github_url' => 'https://github.com/Geniova12',
                'instagram_url' => 'https://instagram.com/claradeltagenio_',
                'email' => 'geniova12@gmail.com',
                'order' => 3,
                'is_active' => true,
            ]
        );

        // --- FATHIR IBNU ABDILLAH ---
        TeamMember::updateOrCreate(
            ['name' => 'FATHIR', 'surname' => 'IBNU ABDILLAH'],
            [
                'focus' => [
                    'ID' => 'HARDWARE SPECIALIST & GRAPHIC DESIGNER',
                    'EN' => 'HARDWARE SPECIALIST & GRAPHIC DESIGNER',
                    'JPN' => 'ハードウェアスペシャリスト ＆ グラフィックデザイナー',
                ],
                'description1' => [
                    'ID' => 'Saya memiliki keahlian di bidang hardware komputer dan laptop, mencakup perakitan, perawatan, upgrade, troubleshooting, hingga servis berbagai jenis perangkat. Dengan pengalaman dan ketelitian dalam setiap proses, saya berkomitmen menghadirkan solusi yang efektif dan berkualitas.',
                    'EN' => 'I have expertise in computer and laptop hardware, including assembly, maintenance, upgrades, troubleshooting, and servicing various types of devices. With experience and precision in every process, I am committed to delivering effective and high-quality solutions.',
                    'JPN' => '私はコンピュータやラップトップのハードウェアの専門知識を持っており、組み立て、メンテナンス、アップグレード、トラブルシューティング、さまざまな種類のデバイスのサービスを含みます。すべてのプロセスにおける経験と正確さにより、効果的で高品質なソリューションを提供することをお約束します。',
                ],
                'description2' => [
                    'ID' => 'Selain hardware, saya juga berpengalaman dalam desain grafis dan editing video. Menggunakan Canva, Adobe Photoshop, dan CapCut Pro, saya menciptakan berbagai karya visual seperti poster, banner, konten media sosial, serta video yang menarik dan profesional.',
                    'EN' => 'Besides hardware, I am also experienced in graphic design and video editing. Using Canva, Adobe Photoshop, and CapCut Pro, I create various visual works such as posters, banners, social media content, and engaging, professional videos.',
                    'JPN' => 'ハードウェアのほかに、グラフィックデザインとビデオ編集の経験もあります。Canva、Adobe Photoshop、CapCut Proを使用して、ポスター、バナー、ソーシャルメディアコンテンツ、魅力的でプロフェッショナルなビデオなど、さまざまなビジュアル作品を作成しています。',
                ],
                'skills' => ['Hardware PC', 'Laptop Repair', 'Troubleshooting', 'Canva', 'Photoshop', 'CapCut Pro'],
                'photo' => 'team-members/FatirProfile.webp',
                'background_image' => 'team-members/backgrounds/Fathir-Bg-Profile.webp',
                'github_url' => 'https://github.com/fathiribnuabdillah',
                'instagram_url' => 'https://instagram.com/fthr_ibnu12',
                'email' => 'fathiribnu.abdillah12@gmail.com',
                'order' => 4,
                'is_active' => true,
            ]
        );

        // --- VALERIAN AHMAD FAUZIAN ---
        TeamMember::updateOrCreate(
            ['name' => 'VALERIAN', 'surname' => 'AHMAD FAUZIAN'],
            [
                'focus' => [
                    'ID' => 'FULL-STACK DEVELOPER & TECHNICAL LEADER',
                    'EN' => 'FULL-STACK DEVELOPER & TECHNICAL LEADER',
                    'JPN' => 'フルスタックデベロッパー ＆ テクニカルリーダー',
                ],
                'description1' => [
                    'ID' => 'Saya adalah Full-Stack Developer dan Technical Leader yang memadukan arsitektur kode dengan solusi digital modern. Berpengalaman memimpin tim rekayasa perangkat lunak, berfokus pada pengembangan sistem end-to-end menggunakan Laravel, Next.js, dan PostgreSQL.',
                    'EN' => 'Full-Stack Developer and Technical Leader combining code architecture with modern digital solutions. Experienced in leading software engineering teams, focusing on end-to-end system development using Laravel, Next.js, and PostgreSQL.',
                    'JPN' => 'コードアーキテクチャと現代的なデジタルソリューションを融合させるフルスタック開発者兼テクニカルリーダー。Laravel、Next.js、PostgreSQLを用いたエンドツーエンド의システム開発に注力し、ソフトウェアエンジニアリングチームを率いた経験があります。',
                ],
                'description2' => [
                    'ID' => 'Saya mengintegrasikan keahlian engineering, analisis data Python, serta insting visual UI/UX untuk mengeksekusi proyek berstandar industri.',
                    'EN' => 'I integrate engineering expertise, Python data analysis, and UI/UX visual instinct to execute industry-standard projects.',
                    'JPN' => 'エンジニアリングの専門知識、Pythonによるデータ分析、UI/UXのビジュアルセンスを統合し、業界標準のプロジェクトを実現します。',
                ],
                'skills' => ['Laravel', 'Next.js', 'PostgreSQL', 'Python', 'UI/UX', 'System Architecture'],
                'photo' => 'team-members/ValeProfile.webp',
                'background_image' => 'team-members/backgrounds/Vale-Bg-Profile.webp',
                'github_url' => 'https://github.com/valeriaanaf',
                'instagram_url' => 'https://instagram.com/valeriaanaf',
                'email' => 'valerianahmdahmad@gmail.com',
                'order' => 5,
                'is_active' => true,
            ]
        );

        // ---- BIMA KHAIRUN NAIM ----
        TeamMember::updateOrCreate(
            ['name' => 'BIMA', 'surname' => 'KHAIRUN NAIM'],
            [
                'focus' => [
                    'ID' => 'DIGITAL CREATOR & ACTOR',
                    'EN' => 'DIGITAL CREATOR & ACTOR',
                    'JPN' => 'デジタルクリエイター ＆ アクター',
                ],
                'description1' => [
                    'ID' => 'Saya adalah kreator digital yang memadukan keahlian teknis dan visual. Berpengalaman dalam desain 3D menggunakan Blender, editing video melalui CapCut Pro, serta perancangan desain UI/UX dengan Balsamiq dan Canva.',
                    'EN' => 'I am a digital creator who blends technical and visual skills. Experienced in 3D design using Blender, video editing through CapCut Pro, and UI/UX design with Balsamiq and Canva.',
                    'JPN' => '私は技術的スキルと視覚的スキルを融合させるデジタルクリエイターです。Blenderを使用した3Dデザイン、CapCut Proによるビデオ編集、BalsamiqとCanvaを使用したUI/UXデザインの経験があります。',
                ],
                'description2' => [
                    'ID' => 'Selain itu, saya aktor terampil yang menghadirkan karakter dinamis dalam berbagai proyek. Menggabungkan estetika visual dan kemampuan akting, saya siap menciptakan karya yang mendalam, profesional, serta memberikan dampak yang sangat kuat.',
                    'EN' => 'In addition, I am a skilled actor who brings dynamic characters to various projects. Combining visual aesthetics and acting abilities, I am ready to create deep, professional works that deliver a very strong impact.',
                    'JPN' => 'さらに、さまざまなプロジェクトにダイナミックなキャラクターをもたらす熟練した俳優でもあります。視覚的な美学と演技能力を組み合わせて、非常に強い影響を与える深くプロフェッショナルな作品を作成する準備ができています。',
                ],
                'skills' => ['Blender 3D', 'CapCut Pro', 'UI/UX Design', 'Balsamiq', 'Canva', 'Acting'],
                'photo' => 'team-members/BimaProfile.webp',
                'background_image' => 'team-members/backgrounds/Bima-Bg-Profile.webp',
                'github_url' => 'https://github.com/Bimakhaii',
                'instagram_url' => 'https://instagram.com/bimakhaii',
                'email' => 'bimakhairun90@gmail.com',
                'order' => 6,
                'is_active' => true,
            ]
        );

        // ==========================================
        //               SEEDER GALLERY
        // ==========================================
        GalleryItem::updateOrCreate(
            ['id' => 1],
            [
                'title' => [
                    'ID' => 'Galeri Sakanca',
                    'EN' => 'Sakanca Gallery',
                    'JPN' => 'サカンカ・ギャラリー',
                ],
                'subtitle' => [
                    'ID' => 'Koleksi momen terbaik dan perjalanan visual yang penuh inspitasi',
                    'EN' => 'Collection of the best moments and visually inspiring journeys',
                    'JPN' => '最高の瞬間と視覚的に感動的な旅のコレクション',
                ],
                'text_kicker' => [
                    'ID' => 'Visual Journey',
                    'EN' => 'Visual Journey',
                    'JPN' => '視覚的旅',
                ],

                'images' => [
                    [
                        'src' => 'gallery/Gallery1.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'in',
                    ],
                    [
                        'src' => 'gallery/Gallery2.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'out',
                    ],
                    [
                        'src' => 'gallery/Gallery3.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'in',
                    ],
                    [
                        'src' => 'gallery/Gallery4.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'out',
                    ],
                    [
                        'src' => 'gallery/Gallery5.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'in',
                    ],
                    [
                        'src' => 'gallery/Gallery6.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'out',
                    ],
                    [
                        'src' => 'gallery/Gallery7.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'in',
                    ],
                    [
                        'src' => 'gallery/Gallery8.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'out',
                    ],
                    [
                        'src' => 'gallery/Gallery9.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'in',
                    ],
                    [
                        'src' => 'gallery/Gallery10.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'out',
                    ],
                    [
                        'src' => 'gallery/Gallery11.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'in',
                    ],
                    [
                        'src' => 'gallery/Gallery12.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'out',
                    ],
                    [
                        'src' => 'gallery/Gallery13.webp',
                        'alt' => 'Sakanca Teams',
                        'zoomType' => 'in',
                    ],
                ],
            ]
        );

        // ==========================================
        //            SEEDER SITE SETTINGS
        // ==========================================
        SiteSetting::updateOrCreate(
            ['id' => 1],
            [
                'site_name'        => 'Sakanca Alliance',
                'site_logo'        => 'logos/logoSakanca.webp',
                'footer_copyright' => 'All Rights Reserved.',

                'social_instagram' => 'https://instagram.com/sakancaalliance',
                'social_tiktok'    => 'https://tiktok.com/@sakanca.visual',
                'social_linkedin'  => null,
                'contact_email'    => 'sakancalliance@gmail.com',
                'contact_phone'    => '+62 831-8040-2080',

                'services_section_bg'     => 'services/bgServices.webp',
                'projects_section_bg'     => 'projects/backgrounds/bgProjects.webp',
                'testimonials_section_bg' => null,
            ]
        );
    }
}
