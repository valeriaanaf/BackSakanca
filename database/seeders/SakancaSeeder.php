<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Hero;
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
                        'src' => 'hero-backgrounds/default.jpg',
                        'alt' => 'Sakanca Alliance Home Banner',
                        'zoomType' => 'in',
                    ],
                ],
                'is_active' => true,
            ]
        );

        // ==========================================
        //                  SEEDER ABOUT
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
                'logo' => 'logo-sakanca.png',
                'background_image' => 'about-backgrounds/team_photo.jpg',
            ]
        );

        // ==========================================
        //              SEEDER TEAM MEMBERS
        // ==========================================

        // --- TAZAR AL GHAFFAR ---
        TeamMember::updateOrCreate(
            ['name' => 'TAZAR', 'username' => 'Al Ghaffar'],
            [
                'role' => [
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
                'photo' => '/images/profile/profileTazar.webp',
                'background_image' => '/images/background/Gallery/Gallery8.webp',
                'github_url' => 'https://github.com/Tazarag',
                'instagram_url' => 'https://instagram.com/tazarag_',
                'email' => 'papatazar@gmail.com',
                'order' => 1,
                'is_active' => true,
            ]
        );

        // --- HAFIDZ CHAIRUL L ---
        TeamMember::updateOrCreate(
            ['name' => 'HAFIDZ', 'username' => 'CHAIRUL L'],
            [
                'role' => [
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
                'photo' => '/images/profile/profileTara.webp',
                'background_image' => '/images/background/Gallery/Gallery9.webp',
                'github_url' => 'https://github.com/lestarahmanh',
                'instagram_url' => 'https://instagram.com/taraavanjava',
                'email' => 'lestarahmanh@gmail.com',
                'order' => 2,
                'is_active' => true,
            ]
        );

        // --- CLARA DELTA GENIOVA ---
        TeamMember::updateOrCreate(
            ['name' => 'CLARA', 'username' => 'DELTA GENIOVA'],
            [
                'role' => [
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
                'photo' => '/images/profile/profileClara.webp',
                'background_image' => '/images/background/Gallery/Gallery10.webp',
                'github_url' => 'https://github.com/Geniova12',
                'instagram_url' => 'https://instagram.com/claradeltagenio_',
                'email' => 'geniova12@gmail.com',
                'order' => 3,
                'is_active' => true,
            ]
        );

        // --- FATHIR IBNU ABDILLAH ---
        TeamMember::updateOrCreate(
            ['name' => 'FATHIR', 'username' => 'IBNU ABDILLAH'],
            [
                'role' => [
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
                'photo' => '/images/profile/profileFatir.webp',
                'background_image' => '/images/background/Gallery/Gallery7.webp',
                'github_url' => 'https://github.com/fathiribnuabdillah',
                'instagram_url' => 'https://instagram.com/fthr_ibnu12',
                'email' => 'fathiribnu.abdillah12@gmail.com',
                'order' => 4,
                'is_active' => true,
            ]
        );

        // --- VALERIAN AHMAD FAUZIAN ---
        TeamMember::updateOrCreate(
            ['name' => 'VALERIAN', 'username' => 'AHMAD FAUZIAN'],
            [
                'role' => [
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
                'photo' => '/images/profile/profileVale.webp',
                'background_image' => '/images/background/Gallery/Gallery12.webp',
                'github_url' => 'https://github.com/valeriaanaf',
                'instagram_url' => 'https://instagram.com/valeriaanaf',
                'email' => 'valerianahmdahmad@gmail.com',
                'order' => 5,
                'is_active' => true,
            ]
        );

        // ---- BIMA KHAIRUN NAIM ----
        TeamMember::updateOrCreate(
            ['name' => 'BIMA', 'username' => 'KHAIRUN NAIM'],
            [
                'role' => [
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
                'photo' => '/images/profile/profileBima.webp',
                'background_image' => '/images/background/Gallery/Gallery11.webp',
                'github_url' => 'https://github.com/Bimakhaii',
                'instagram_url' => 'https://instagram.com/bimakhaii',
                'email' => 'bimakhairun90@gmail.com',
                'order' => 6,
                'is_active' => true,
            ]
        );
    }
}
