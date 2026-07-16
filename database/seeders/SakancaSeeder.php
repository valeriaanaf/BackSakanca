<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\DetailedService;
use App\Models\GalleryItem;
use App\Models\Hero;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\TeamMember;
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
                'logo' => 'about/logoSakanca.webp',
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
                'logo' => 'services/logoSakancaVisual.webp',
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
                'background_image' => 'services/detailed/detVisual.webp',
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
                'logo' => 'services/logoSakancaAuto.webp',
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
                'background_image' => 'services/detailed/detAuto.webp',
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
                'logo' => 'services/logoSakancaEscape.webp',
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
                'background_image' => 'services/detailed/detEscape.webp',
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
                'logo' => 'services/logoSakancaTech.webp',
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
                'background_image' => 'services/detailed/detTech.webp',
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
                'logo' => 'services/logoSakancaDev.webp',
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
                'background_image' => 'services/detailed/detDev.webp',
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
                'logo' => 'services/logoSakancaPet.webp',
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
                'background_image' => 'services/detailed/detPet.webp',
                'order' => 6,
                'is_active' => true,
                'description' => [
                    'ID' => 'Sakanca Pet menyediakan layanan grooming hewan peliharaan, penginapan hewan peliharaan dengan fasilitas lengkap, serta makanan premium untuk memberikan kenyamanan dan kasih sayang terbaik bagi hewan kesayangan Anda.',
                    'EN' => 'Sakanca Pet offers professional pet grooming, fully-equipped pet boarding, and premium food selection to deliver the highest comfort and love for your beloved pets.',
                    'JPN' => 'Sakanca Petは、ペットのグルーミング、充実した設備を備えたペットホテル、プレミアムフードを提供し、大切なペットに最高の快適さと愛情をお届けします。',
                ],
            ]
        );

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
                'background_image' => 'team-members/backgrounds/Fatir-Bg-Profile.webp',
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
                'photo' => 'team-members/ValerianProfile.webp',
                'background_image' => 'team-members/backgrounds/Valerian-Bg-Profile.webp',
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
                    'JPN' => 'サカnciaギャラリー',
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
        $settings = [
            'site_name' => 'Sakanca Alliance',
            'site_logo' => 'images/logo/logoSakanca.webp',
            'footer_description' => 'Ekosistem kolaboratif yang menyatukan layanan kreatif, teknologi, otomotif, dan pengalaman wisata dalam satu jaringan.',
            'footer_email' => 'hello@sakanca.com',
            'footer_phone' => '+62 812-3456-7890',
            'footer_address' => 'Yogyakarta, Indonesia',
            'social_instagram' => 'https://instagram.com/sakanca.alliance',
            'social_tiktok' => 'https://tiktok.com/@sakanca.alliance',
            'social_email' => 'mailto:hello@sakanca.com',
        ];

        foreach ($settings as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
