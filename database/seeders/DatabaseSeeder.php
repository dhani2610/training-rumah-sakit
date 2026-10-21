<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Setting;
use App\Models\Statistic;
use App\Models\HeroSlide;
use App\Models\Program;
use App\Models\Article;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Services\RumahSakitSchemeService;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'admin@trainingrumahsakit.my.id'],
            [
                'name' => 'Administrator Training Rumah Sakit',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Settings
        $settings = [
            'site_name' => 'TRAINING RUMAH SAKIT',
            'site_subtitle' => 'Pusat Pelatihan & Sertifikasi Manajemen Rumah Sakit, Akreditasi, Tata Kelola Klinis & Mutu Pelayanan Kesehatan',
            'contact_phone' => '0813-9981-0272',
            'contact_email' => 'info@trainingrumahsakit.my.id',
            'contact_address' => 'Pusat Diklat & Pengembangan Manajemen Rumah Sakit, Jakarta, Indonesia',
            'notice_text' => 'Lembaga Pelatihan & Pengembangan Kompetensi Manajemen Rumah Sakit, Keselamatan Pasien, PPI, MFK-K3RS, RME, dan Akreditasi Nasional.',
            'whatsapp' => '081399810272',
            'whatsapp_detail_1' => '08118500177',
            'whatsapp_detail_3' => '087894580806',
            'whatsapp_detail_4' => '087894580649',
            'whatsapp_template' => 'Halo Admin Utama Training Rumah Sakit, saya ingin konsultasi pendaftaran pelatihan manajemen rumah sakit dan akreditasi untuk wilayah {region}. Mohon info jadwal batch terbaru dan silabus teknis.',
            'meta_description_default' => 'Pusat pelatihan dan sertifikasi manajemen rumah sakit, keselamatan pasien (IKP & RCA), PPI, MFK-K3RS, rekam medis elektronik (RME), service excellence nakes, dan persiapan akreditasi rumah sakit.',
            'meta_keywords_default' => 'training rumah sakit, pelatihan manajemen rumah sakit, diklat rumah sakit, keselamatan pasien ikp rca, pelatihan ppi rumah sakit, mfk k3rs, akreditasi rumah sakit, rme rekam medis elektronik, cssd rumah sakit',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value, 'group' => 'general']
            );
        }

        // 3. Statistics
        $statistics = [
            [
                'key' => 'health_staff_trained',
                'label' => 'Tenaga Kesehatan & Manajemen Terlatih',
                'value' => '18.500+',
                'unit' => 'Alumni Nakes',
                'icon' => 'bi-person-badge-fill',
                'description' => 'Dokter, perawat, komite mutu, direksi, dan staf penunjang medis di seluruh Indonesia.',
                'sort_order' => 1
            ],
            [
                'key' => 'partner_hospitals',
                'label' => 'Rumah Sakit & Fasilitas Kesehatan Mitra',
                'value' => '450+',
                'unit' => 'Rumah Sakit',
                'icon' => 'bi-hospital-fill',
                'description' => 'RS Vertikal, RSUD Tipe A/B/C, RS Swasta, dan jejaring fasilitas kesehatan nasional.',
                'sort_order' => 2
            ],
            [
                'key' => 'accreditation_pass_rate',
                'label' => 'Tingkat Kelulusan Akreditasi Paripurna',
                'value' => '99.2%',
                'unit' => 'Kelulusan',
                'icon' => 'bi-award-fill',
                'description' => 'Efektivitas pendampingan persiapan survei akreditasi standar mutu nasional.',
                'sort_order' => 3
            ],
            [
                'key' => 'satisfaction_index',
                'label' => 'Indeks Kepuasan Mutu Pelayanan & Diklat',
                'value' => '98.7%',
                'unit' => 'Sangat Puas',
                'icon' => 'bi-shield-check',
                'description' => 'Rating kepuasan peserta terhadap relevansi modul praktikum, narasumber klinis, dan implementasi lapangan.',
                'sort_order' => 4
            ]
        ];

        foreach ($statistics as $stat) {
            Statistic::updateOrCreate(['key' => $stat['key']], $stat);
        }

        // 4. Hero Slides (Tanpa Foto - Grafis Modern Berkelas Hospital Telemetry & Safety HUD)
        $heroSlides = [
            [
                'title' => 'Pusat Pelatihan & Sertifikasi Manajemen Rumah Sakit & Akreditasi Mutu Klinis',
                'subtitle' => 'Tingkatkan standar tata kelola rumah sakit, kepatuhan akreditasi nasional, dan keselamatan pasien berbasis bukti nyata dengan narasumber praktisi klinis terkemuka.',
                'badge' => 'Standar Mutu Pelayanan Kesehatan Terakreditasi',
                'cta_text' => 'Konsultasi Tim Ahli Rumah Sakit',
                'cta_link' => 'https://api.whatsapp.com/send?phone=6281399810272',
                'cta2_text' => 'Eksplorasi 8 Program Unggulan',
                'cta2_link' => '#program',
                'sort_order' => 1
            ],
            [
                'title' => 'Investigasi Keselamatan Pasien (IKP), RCA Klinis & Manajemen Risiko Rumah Sakit',
                'subtitle' => 'Kuasai audit keselamatan pasien, pelaporan Insiden Keselamatan Pasien (IKP), investigasi Root Cause Analysis (RCA) klinis, serta formulasi tindakan korektif sistemik bebas budaya menyalahkan (Just Culture).',
                'badge' => 'Patient Safety & Clinical Risk Governance',
                'cta_text' => 'Daftar Kelas Keselamatan Pasien',
                'cta_link' => 'https://api.whatsapp.com/send?phone=6281399810272',
                'cta2_text' => 'Lihat Direktori Wilayah',
                'cta2_link' => '#wilayah',
                'sort_order' => 2
            ],
            [
                'title' => 'Transformasi Rekam Medis Elektronik (RME), PPI, MFK-K3RS & Service Excellence',
                'subtitle' => 'Modernisasi tata kelola operasional rumah sakit dengan digitalisasi rekam medis, pengendalian infeksi nosokomial ketat, keselamatan fasilitas terpadu, dan komunikasi terapeutik nakes.',
                'badge' => 'Operational Hospital Excellence',
                'cta_text' => 'Hubungi Hotline Prioritas',
                'cta_link' => 'https://api.whatsapp.com/send?phone=6281399810272',
                'cta2_text' => 'Silabus & Modul Diklat',
                'cta2_link' => '#program',
                'sort_order' => 3
            ]
        ];

        foreach ($heroSlides as $slide) {
            HeroSlide::updateOrCreate(['title' => $slide['title']], $slide);
        }

        // 5. Programs Seeding
        $programs = RumahSakitSchemeService::getPrograms();
        foreach ($programs as $index => $prog) {
            Program::updateOrCreate(
                ['slug' => $prog['slug']],
                [
                    'title' => $prog['title'],
                    'code' => $prog['code'] ?? 'TRS-' . ($index + 1),
                    'level_name' => $prog['level_name'] ?? 'Training & Sertifikasi Tenaga Rumah Sakit',
                    'level_code' => $prog['code'] ?? 'RumahSakit',
                    'badge' => $prog['badge'] ?? 'Program Utama',
                    'duration' => $prog['duration'] ?? '2 - 3 Hari (Teori & Simulasi Kasus)',
                    'method' => $prog['method'] ?? 'Tatap Muka Workshop & Simulasi Kasus Klinis',
                    'certification' => $prog['certification'] ?? 'Sertifikasi Kompetensi Manajemen Rumah Sakit',
                    'price_note' => $prog['price_note'] ?? 'Investasi Pengembangan Kompetensi Tenaga Kesehatan',
                    'target_audience' => $prog['target_audience'] ?? '',
                    'requirements' => $prog['requirements'] ?? [],
                    'curriculum' => $prog['curriculum'] ?? [],
                    'facilities' => $prog['facilities'] ?? [],
                    'short_description' => $prog['short_description'],
                    'full_description' => $prog['full_description'],
                    'sort_order' => $index + 1,
                    'is_featured' => true,
                    'is_active' => true,
                ]
            );
        }

        // 6. Sample Articles (3 Cards on Homepage)
        $sampleArticles = [
            [
                'title' => 'Training Akreditasi Rumah Sakit dan Standar Pelayanan Mutu Klinis di Indonesia',
                'slug' => 'training-akreditasi-rumah-sakit-dan-standar-pelayanan-mutu-klinis-di-indonesia',
                'category' => 'Akreditasi & Tata Kelola',
                'author' => 'Konsultan Akreditasi Rumah Sakit & Surveyor Mutu Klinis',
                'read_time' => 35,
                'excerpt' => 'Panduan komprehensif implementasi instrumen akreditasi rumah sakit, self-assessment berkala, audit internal kepatuhan clinical pathway, dan strategi pencapaian predikat Paripurna.',
                'content' => RumahSakitSchemeService::buildFullArticleContent(
                    'Training Akreditasi Rumah Sakit dan Standar Pelayanan Mutu Klinis',
                    'Indonesia',
                    $programs[0]
                ),
            ],
            [
                'title' => 'Training Keselamatan Pasien dan Investigasi Insiden Klinis (IKP) Rumah Sakit di Indonesia',
                'slug' => 'training-keselamatan-pasien-dan-investigasi-insiden-klinis-ikp-rumah-sakit-di-indonesia',
                'category' => 'Keselamatan Pasien & RCA',
                'author' => 'Spesialis Keselamatan Pasien & Incident Investigator',
                'read_time' => 38,
                'excerpt' => 'Protokol pelaporan Insiden Keselamatan Pasien (KTD, KNC, KTC, Sentinel), metodologi Root Cause Analysis (RCA) 5 langkah di faskes, serta pembangunan budaya keselamatan Just Culture.',
                'content' => RumahSakitSchemeService::buildFullArticleContent(
                    'Training Keselamatan Pasien dan Investigasi Insiden Klinis (IKP) Rumah Sakit',
                    'Indonesia',
                    $programs[1]
                ),
            ],
            [
                'title' => 'Training Pencegahan dan Pengendalian Infeksi (PPI) Rumah Sakit di Indonesia',
                'slug' => 'training-pencegahan-dan-pengendalian-infeksi-ppi-rumah-sakit-di-indonesia',
                'category' => 'Pengendalian Infeksi (PPI)',
                'author' => 'Infection Prevention and Control Practitioner',
                'read_time' => 32,
                'excerpt' => 'Strategi kewaspadaan standar dan isolasi ketat, surveilans infeksi Healthcare-Associated Infections (HAIs), bundles pencegahan infeksi kateter dan ventilator, serta audit kepatuhan cuci tangan.',
                'content' => RumahSakitSchemeService::buildFullArticleContent(
                    'Training Pencegahan dan Pengendalian Infeksi (PPI) Rumah Sakit',
                    'Indonesia',
                    $programs[2]
                ),
            ],
        ];

        foreach ($sampleArticles as $art) {
            Article::updateOrCreate(['slug' => $art['slug']], $art);
        }

        // 7. FAQs
        $faqs = RumahSakitSchemeService::getFaqs();
        foreach ($faqs as $index => $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question']],
                [
                    'answer' => $faq['answer'],
                    'category' => 'Umum & Sertifikasi',
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ]
            );
        }

        // 8. Testimonials
        $testimonials = [
            [
                'name' => 'dr. Hendrawan Santoso, Sp.A, MARS',
                'role' => 'Direktur Utama Rumah Sakit',
                'company' => 'RS Medika Insani Sejahtera',
                'content' => 'Pelatihan akreditasi dan audit tata kelola klinis dari Training Rumah Sakit sangat terstruktur dan aplikatif. Pendampingan telusur dokumen dan simulasi wawancara surveyor berhasil mengantarkan rumah sakit kami meraih Akreditasi Paripurna dengan nilai kepatuhan di atas 98%.',
                'rating' => 5,
                'sort_order' => 1,
            ],
            [
                'name' => 'Ns. Ratna Widyaningrum, S.Kep., M.Kep.',
                'role' => 'Ketua Komite Mutu & Keselamatan Pasien',
                'company' => 'RS Harapan Mulia Sentosa',
                'content' => 'Workshop Investigasi Insiden Keselamatan Pasien (IKP) dan Root Cause Analysis (RCA) membuka wawasan seluruh tim medis. Kami kini memiliki sistem investigasi sentinel yang cepat, terstruktur, dan objektif tanpa menyudutkan nakes, sehingga budaya pelaporan insiden meningkat sangat pesat.',
                'rating' => 5,
                'sort_order' => 2,
            ],
            [
                'name' => 'Dr. dr. Fahmi Alamsyah, Sp.PK, M.Kes.',
                'role' => 'Ketua Komite PPI & Manajer Pelayanan Medis',
                'company' => 'RS Graha Husada Utama',
                'content' => 'Modul Pencegahan dan Pengendalian Infeksi (PPI) serta MFK-K3RS sangat berbobot dan berbasis standar terbaru. Audit kepatuhan kebersihan tangan dan bundle HAIs pasca-pelatihan menunjukkan penurunan infeksi nosokomial secara signifikan di ICU dan ruang rawat bedah kami.',
                'rating' => 5,
                'sort_order' => 3,
            ],
        ];

        foreach ($testimonials as $testi) {
            Testimonial::updateOrCreate(['name' => $testi['name']], $testi);
        }
    }
}
