<?php

namespace App\Services;

class RumahSakitSchemeService
{
    /**
     * 51 Program Pelatihan Unggulan Rumah Sakit & Layanan Kesehatan
     */
    public static function getPrograms(): array
    {
        return [
            [
                'title' => 'Training Haemodialisa & Tata Kelola Dialisis Rumah Sakit',
                'code' => 'TRS-01',
                'slug' => 'training-haemodialisa-tata-kelola-dialisis-rumah-sakit',
                'badge' => 'Hemodialisis Klinis',
                'level_name' => 'Perawat & Dokter Spesialis Dialisis',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pelatihan intensif tata kelola unit hemodialisa, pengoperasian mesin dialisis, penanganan komplikasi intra-dialisis, dan standardisasi water treatment osmosis balik.',
                'full_description' => 'Pelatihan intensif tata kelola unit hemodialisa, pengoperasian mesin dialisis, penanganan komplikasi intra-dialisis, dan standardisasi water treatment osmosis balik. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Prinsip Fisiologi Ginjal & Indikasi Terapi Pengganti Ginjal',
  1 => 'Sirkuit Ekstrakorporeal, Dialiser, dan Komposisi Cairan Dialisat',
  2 => 'Manajemen Akses Vaskular: Cimino (AV Fistula), Graft, dan CDL',
  3 => 'Penanganan Komplikasi Akut Intra-Dialisis: Hipotensi, Kram, Disekuilibrium',
  4 => 'Sistem Pengolahan Air (Water Treatment Plant) & Uji Mikrobiologi Berkala',
  5 => 'Pencegahan Infeksi Silang Hepatitis & HIV di Ruang Hemodialisa',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Perawat Ruang HD, Dokter Penanggung Jawab Pelayanan (DPJP) Nefrologi, Kepala Instalasi Dialisis, dan Sanitarian RS.',
            ],
            [
                'title' => 'Training Dialisis bagi Perawat di Rumah Sakit dan Klinik Khusus Dialisis (HD Perawat)',
                'code' => 'TRS-02',
                'slug' => 'training-dialisis-bagi-perawat-di-rumah-sakit-dan-klinik-khusus-dialisis-hd-perawat',
                'badge' => 'Sertifikasi HD Perawat',
                'level_name' => 'Perawat Mahir Dialisis',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Program pelatihan kompetensi komprehensif bagi perawat pelaksana dialisis mencakup kanulasi akses vaskular, monitoring adekuasi dialisis (Kt/V), dan asuhan keperawatan holistik.',
                'full_description' => 'Program pelatihan kompetensi komprehensif bagi perawat pelaksana dialisis mencakup kanulasi akses vaskular, monitoring adekuasi dialisis (Kt/V), dan asuhan keperawatan holistik. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Asuhan Keperawatan Pasien Gagal Ginjal Terminal Menjalani Hemodialisis',
  1 => 'Teknik Kanulasi Tepat pada AV Shunt dan Perawatan Kateter Double Lumen',
  2 => 'Perhitungan & Monitoring Target Adekuasi Dialisis (Kt/V dan URR)',
  3 => 'Manajemen Keseimbangan Cairan & Edukasi Pembatasan Cairan Pasien',
  4 => 'Tata Laksana Kedaruratan Emboli Udara dan Ruptur Dialiser',
  5 => 'Dokumentasi Keperawatan Hemodialisa & Komunikasi Edukatif Pasien Kronis',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Perawat Pelaksana Hemodialisa, Perawat Rawat Inap/ICU, dan Tim Keperawatan Klinik Khusus Dialisis.',
            ],
            [
                'title' => 'Training Patient Safety & Budaya Keselamatan Pasien Rumah Sakit',
                'code' => 'TRS-03',
                'slug' => 'training-patient-safety-budaya-keselamatan-pasien-rumah-sakit',
                'badge' => 'Patient Safety',
                'level_name' => 'Seluruh Tenaga Medis & Manajemen RS',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pembudayaan 6 sasaran keselamatan pasien, manajemen risiko klinis, pelaporan insiden tanpa rasa takut (Just Culture), dan mitigasi kesalahan medis sistemik.',
                'full_description' => 'Pembudayaan 6 sasaran keselamatan pasien, manajemen risiko klinis, pelaporan insiden tanpa rasa takut (Just Culture), dan mitigasi kesalahan medis sistemik. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => '6 Sasaran Keselamatan Pasien (SKP) Berstandar Akreditasi Rumah Sakit',
  1 => 'Membangun Just Culture & Menghilangkan Budaya Menyalahkan (No Blame Culture)',
  2 => 'Sistem Pelaporan Insiden Keselamatan Pasien (IKP) Internal Rumah Sakit',
  3 => 'Analisis Matriks Grading Risiko Klinis & Klasifikasi Insiden (KNC, KTC, KTD, Sentinel)',
  4 => 'Strategi Komunikasi Efektif dengan Teknik SBAR dan Tulis-Baca-Konfirmasi (TBaK)',
  5 => 'Audit Kepatuhan Identifikasi Pasien & Keselamatan Operasi di Kamar Bedah',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Komite Mutu & Keselamatan Pasien (KMKP), Dokter, Perawat, Tenaga Farmasi, Tenaga Laboratorium, dan Manajemen RS.',
            ],
            [
                'title' => 'Training Kegawatdaruratan Medis & Triase Gawat Darurat Rumah Sakit',
                'code' => 'TRS-04',
                'slug' => 'training-kegawatdaruratan-medis-triase-gawat-darurat-rumah-sakit',
                'badge' => 'Emergency Care',
                'level_name' => 'Dokter & Perawat IGD',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Standardisasi sistem triase gawat darurat modern (ATS / ESI), stabilisasi jalan napas, resusitasi syok, dan penanganan pasien kritis di Instalasi Gawat Darurat.',
                'full_description' => 'Standardisasi sistem triase gawat darurat modern (ATS / ESI), stabilisasi jalan napas, resusitasi syok, dan penanganan pasien kritis di Instalasi Gawat Darurat. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Sistem Triase Modern Berbasis Bukti (Emergency Severity Index & Australasian Triage Scale)',
  1 => 'Manajemen Jalan Napas Lanjutan (Airway Management & Rapid Sequence Intubation)',
  2 => 'Resusitasi Hemodinamik pada Syok Anafilaktik, Hipovolemik, Kardiogenik, dan Septik',
  3 => 'Tata Laksana Kegawatdaruratan Serebrovaskular (Stroke Akut) & Sindrom Koroner Akut',
  4 => 'Protokol Code Blue Rumah Sakit & Pengorganisasian Tim Resusitasi Terpadu',
  5 => 'Dokumentasi Medikolegal Pelayanan IGD & Penanganan Kasus Kritis Massal (Disaster Triage)',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter Jaga IGD, Perawat Gawat Darurat, Residen Medis, dan Kepala Ruangan Instalasi Gawat Darurat.',
            ],
            [
                'title' => 'Training Etika Profesi Keperawatan & Hukum Kesehatan Rumah Sakit',
                'code' => 'TRS-05',
                'slug' => 'training-etika-profesi-keperawatan-hukum-kesehatan-rumah-sakit',
                'badge' => 'Legal & Ethics',
                'level_name' => 'Komite Keperawatan & Staf Keperawatan',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pencegahan sengketa medis, batas kewenangan klinis (RKK), aspek hukum informed consent, perlindungan rahasia medis, dan penyelesaian dilema etik keperawatan.',
                'full_description' => 'Pencegahan sengketa medis, batas kewenangan klinis (RKK), aspek hukum informed consent, perlindungan rahasia medis, dan penyelesaian dilema etik keperawatan. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Kode Etik Keperawatan & Penerapannya dalam Praktik Klinis Sehari-hari',
  1 => 'Batas Kewenangan Klinis (Clinical Privileges) & Risiko Malpraktik Medis',
  2 => 'Aspek Hukum Informed Consent, Hak Menolak Tindakan, dan Pasien Terminal (Do Not Resuscitate)',
  3 => 'Perlindungan Kerahasiaan Rekam Medis & Implikasi Hukum Pengungkapan Informasi',
  4 => 'Manajemen Komplain Medikolegal & Strategi Mediasi Sengketa Medis Rumah Sakit',
  5 => 'Peran Komite Keperawatan dalam Penegakan Disiplin Profesi & Kredensialing',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Komite Keperawatan, Kepala Ruangan, Perawat Primer, Tim Legal Rumah Sakit, dan Manajer Pelayanan Medis.',
            ],
            [
                'title' => 'Training Manajemen Layanan Kesehatan & Tata Kelola Operasional Rumah Sakit',
                'code' => 'TRS-06',
                'slug' => 'training-manajemen-layanan-kesehatan-tata-kelola-operasional-rumah-sakit',
                'badge' => 'Healthcare Management',
                'level_name' => 'Direksi & Manajer Layanan Kesehatan',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Optimasi alur pelayanan pasien (patient journey), kendali mutu dan kendali biaya, efisiensi kapasitas tempat tidur (BOR/LOS), dan integrasi unit faskes.',
                'full_description' => 'Optimasi alur pelayanan pasien (patient journey), kendali mutu dan kendali biaya, efisiensi kapasitas tempat tidur (BOR/LOS), dan integrasi unit faskes. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Desain Alur Pelayanan Pasien (Patient Flow Management) Mengurangi Waktu Tunggu',
  1 => 'Manajemen Utilisasi Tempat Tidur: Indikator BOR, ALOS, TOI, BTO, dan GDR',
  2 => 'Pengendalian Biaya Operasional (Cost Containment) Tanpa Mengurangi Mutu Layanan',
  3 => 'Integrasi Pelayanan Rawat Jalan, Rawat Inap, Bedah Sentral, dan Farmasi',
  4 => 'Pengukuran Indikator Kinerja Utama (KPI) Unit Layanan Kesehatan Rumah Sakit',
  5 => 'Manajemen Perubahan & Kepemimpinan Adaptif di Era Transformasi Kesehatan',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Direktur Medis, Kepala Instalasi, Manajer Operasional, Manajer Keuangan, dan Pengelola Fasilitas Pelayanan Kesehatan.',
            ],
            [
                'title' => 'Training Pemanfaatan Teknologi Kesehatan & Transformasi Digital Rumah Sakit',
                'code' => 'TRS-07',
                'slug' => 'training-pemanfaatan-teknologi-kesehatan-transformasi-digital-rumah-sakit',
                'badge' => 'Digital Health',
                'level_name' => 'Tim SIMRS, Manajer Medis & Tenaga Kesehatan',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Implementasi Rekam Medis Elektronik terintegrasi, telemedicine, kecerdasan buatan dalam diagnostik medis, keamanan data rekam medis, dan interoperabilitas sistem faskes.',
                'full_description' => 'Implementasi Rekam Medis Elektronik terintegrasi, telemedicine, kecerdasan buatan dalam diagnostik medis, keamanan data rekam medis, dan interoperabilitas sistem faskes. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Arsitektur Sistem Informasi Manajemen Rumah Sakit (SIMRS) Modern Terpadu',
  1 => 'Implementasi Rekam Medis Elektronik (RME) Sesuai Standar Interoperabilitas',
  2 => 'Manajemen Keamanan Siber (Cybersecurity) & Perlindungan Privasi Data Pasien',
  3 => 'Pemanfaatan Telemedicine, Teleradiologi, dan Konsultasi Klinis Jarak Jauh',
  4 => 'Penerapan Barcode & RFID dalam Pelacakan Obat, Darah, dan Sampel Laboratorium',
  5 => 'Dashboard Analitik Data Pasien Real-Time untuk Pengambilan Keputusan Klinis',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Kepala Unit SIMRS, Tenaga Rekam Medis, Dokter DPJP, Komite Mutu, dan Manajer IT Rumah Sakit.',
            ],
            [
                'title' => 'Training Pelayanan Prima (Service Excellence) Keperawatan Rumah Sakit',
                'code' => 'TRS-08',
                'slug' => 'training-pelayanan-prima-service-excellence-keperawatan-rumah-sakit',
                'badge' => 'Service Excellence',
                'level_name' => 'Perawat, Bidan & Frontliner Medis',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Standar keramahan profesional, komunikasi empati dan terapeutik, tata kelola penampilan perawat, serta pemulihan layanan (service recovery) komplain pasien.',
                'full_description' => 'Standar keramahan profesional, komunikasi empati dan terapeutik, tata kelola penampilan perawat, serta pemulihan layanan (service recovery) komplain pasien. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Mindset Hospitality & Patient-Centered Care dalam Pelayanan Keperawatan',
  1 => 'Standar 5S (Senyum, Salam, Sapa, Sopan, Santun) & Grooming Profesional Perawat',
  2 => 'Komunikasi Terapeutik Meredakan Kecemasan Pasien dan Keluarga di Saat Kritis',
  3 => 'Teknik Active Listening & Penanganan Keluhan Pasien secara Solutif',
  4 => 'Service Recovery Framework: Mengubah Komplain Menjadi Loyalitas Pasien',
  5 => 'Manajemen Stres dan Burnout bagi Tenaga Keperawatan di Ruang Perawatan',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Perawat Rawat Jalan/Rawat Inap, Bidan, Petugas Customer Service Rumah Sakit, dan Supervisor Keperawatan.',
            ],
            [
                'title' => 'Training Manajemen & Peningkatan Mutu Pelayanan Fasilitas Kesehatan Tingkat Pertama (FKTP / Puskesmas)',
                'code' => 'TRS-09',
                'slug' => 'training-manajemen-peningkatan-mutu-pelayanan-fasilitas-kesehatan-tingkat-pertama-fktp-puskesmas',
                'badge' => 'Puskesmas & FKTP',
                'level_name' => 'Pimpinan & Tim Mutu Puskesmas / Klinik',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Tata kelola puskesmas unggul, integrasi UKM dan UKP, akreditasi FKTP, manajemen rantai rujukan medis ke rumah sakit, dan indikator kepuasan masyarakat.',
                'full_description' => 'Tata kelola puskesmas unggul, integrasi UKM dan UKP, akreditasi FKTP, manajemen rantai rujukan medis ke rumah sakit, dan indikator kepuasan masyarakat. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Tata Kelola Puskesmas Berkelanjutan & Sinkronisasi RUK/RPK Tahunan',
  1 => 'Peningkatan Mutu Klinis & Keselamatan Pasien di Tingkat Pelayanan Primer',
  2 => 'Manajemen Sistem Rujukan Berjenjang Efektif Menuju Rumah Sakit Mitra',
  3 => 'Pencegahan Infeksi (PPI) dan Keselamatan Kerja di Lingkungan FKTP',
  4 => 'Audit Internal Mutu & Tinjauan Manajemen (RTM) Berkala di Puskesmas',
  5 => 'Pengelolaan Obat Rasional dan Pengawasan Kepatuhan Resep di Poliklinik FKTP',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Kepala Puskesmas, Dokter Faskes Primer, Penanggung Jawab Mutu FKTP, Bidan Koordinator, dan Staf Manajerial Klinik.',
            ],
            [
                'title' => 'Training Perencanaan Karier & Pengembangan Profesional Tenaga Medis',
                'code' => 'TRS-10',
                'slug' => 'training-perencanaan-karier-pengembangan-profesional-tenaga-medis',
                'badge' => 'Career Development',
                'level_name' => 'Dokter, Perawat & Bagian SDM Rumah Sakit',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pengembangan jenjang karier klinis perawat (PK I - PK V), portofolio kompetensi tenaga medis, program mentoring internal, dan retensi tenaga profesional rumah sakit.',
                'full_description' => 'Pengembangan jenjang karier klinis perawat (PK I - PK V), portofolio kompetensi tenaga medis, program mentoring internal, dan retensi tenaga profesional rumah sakit. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Penyusunan Sistem Jenjang Karier Profesional Perawat Klinis (PK I - PK V)',
  1 => 'Penyusunan Portofolio Kompetensi dan Logbook Praktik Klinis Berbasis Bukti',
  2 => 'Metodologi Asesmen Kompetensi Berkelanjutan (Continuing Professional Development)',
  3 => 'Program Mentoring & Preceptorship bagi Tenaga Medis dan Perawat Baru',
  4 => 'Manajemen Retensi SDM Kesehatan & Strategi Pengurangan Turn-Over Tenaga Kritis',
  5 => 'Evaluasi Kinerja Profesi Berkelanjutan (OPPE & FPPE) Sesuai Standar Rumah Sakit',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Manajer SDM/HRD Rumah Sakit, Komite Keperawatan, Komite Medik, dan Pimpinan Fasilitas Kesehatan.',
            ],
            [
                'title' => 'Training Penanggulangan Penderita Gawat Darurat (PPGD) Tingkat Dasar (Basic)',
                'code' => 'TRS-11',
                'slug' => 'training-penanggulangan-penderita-gawat-darurat-ppgd-tingkat-dasar-basic',
                'badge' => 'PPGD Basic',
                'level_name' => 'Tenaga Kesehatan Pemula & Staf Medis',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Fondasi penanganan penderita gawat darurat, bantuan hidup dasar (BHD/BLS), evakuasi dan stabilisasi cedera, serta pembebasan jalan napas tanpa alat.',
                'full_description' => 'Fondasi penanganan penderita gawat darurat, bantuan hidup dasar (BHD/BLS), evakuasi dan stabilisasi cedera, serta pembebasan jalan napas tanpa alat. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Prinsip Initial Assessment: Primary Survey (ABCDE) dan Secondary Survey',
  1 => 'Teknik Resusitasi Jantung Paru (RJP/CPR) Dewasa, Anak, dan Bayi Berstandar Global',
  2 => 'Penggunaan Automated External Defibrillator (AED) secara Cepat dan Tepat',
  3 => 'Manajemen Tersedak (Choking) dan Pembebasan Jalan Napas Manual',
  4 => 'Balut Bidai, Imobilisasi Fraktur, dan Fiksasi Tulang Leher (Cervical Collar)',
  5 => 'Teknik Transportasi & Evakuasi Aman Korban Trauma Medis',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter Umum, Perawat Pemula, Bidan, Tenaga Paramedis, dan Staf Tim Reaksi Cepat Fasilitas Kesehatan.',
            ],
            [
                'title' => 'Training Penanggulangan Penderita Gawat Darurat (PPGD) Tingkat Menengah (Intermediate)',
                'code' => 'TRS-12',
                'slug' => 'training-penanggulangan-penderita-gawat-darurat-ppgd-tingkat-menengah-intermediate',
                'badge' => 'PPGD Intermediate',
                'level_name' => 'Perawat Klinis & Dokter Ruang Perawatan',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Penatalaksanaan kedaruratan kardiorespirasi lanjutan, penggunaan airway adjunct (OPA/NPA/LMA), interpretasi EKG dasar disritmia, dan akses intravaskular cepat.',
                'full_description' => 'Penatalaksanaan kedaruratan kardiorespirasi lanjutan, penggunaan airway adjunct (OPA/NPA/LMA), interpretasi EKG dasar disritmia, dan akses intravaskular cepat. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Manajemen Airway Lanjutan: Suctioning, OPA, NPA, dan Pemasangan LMA',
  1 => 'Interpretasi Elektrokardiogram (EKG) Gawat Darurat: Aritmia Mematikan & Iskemia',
  2 => 'Terapi Oksigenasi Dosis Tinggi, Bag-Valve-Mask Ventilation, dan Monitoring SpO2',
  3 => 'Manajemen Syok & Penghitungan Resusitasi Cairan Kristaloid/Koloid Tepat',
  4 => 'Protokol Defibrilasi Manual & Kardioversi Tersinkronisasi pada Pasien Tidak Stabil',
  5 => 'Stabilisasi Pasien Trauma Toraks, Pneumotoraks Ventil, dan Tamponade Jantung',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Perawat IGD/ICU, Dokter Umum Bangsal, Perawat Kamar Operasi, dan Tim Ambulans Gawat Darurat.',
            ],
            [
                'title' => 'Training Penanggulangan Penderita Gawat Darurat (PPGD) Tingkat Lanjutan (Advanced)',
                'code' => 'TRS-13',
                'slug' => 'training-penanggulangan-penderita-gawat-darurat-ppgd-tingkat-lanjutan-advanced',
                'badge' => 'PPGD Advanced',
                'level_name' => 'Dokter Spesialis & Perawat Senior Gawat Darurat',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Intervensi invasif kritis darurat, intubasi endotrakeal sulit, krikotiroidotomi darurat, torakosentesis jarum, resusitasi henti jantung refrakter, dan post-cardiac arrest care.',
                'full_description' => 'Intervensi invasif kritis darurat, intubasi endotrakeal sulit, krikotiroidotomi darurat, torakosentesis jarum, resusitasi henti jantung refrakter, dan post-cardiac arrest care. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Manajemen Jalan Napas Definitif: Video Laryngoscopy & Difficult Airway Algorithm',
  1 => 'Needle Cricothyroidotomy & Deformitas Trakea pada Trauma Maksilofasial Berat',
  2 => 'Farmakoterapi Kritis Resusitasi: Epinefrin, Amiodaron, Vasopresor, dan Inotropik Titrasi',
  3 => 'Needle Thoracostomy & Pemasangan Chest Tube pada Tension Pneumothorax',
  4 => 'Post-Cardiac Arrest Care: Targeted Temperature Management & Proteksi Serebral',
  5 => 'Leadership dan Crew Resource Management (CRM) dalam Mega-Code Resusitasi',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter Spesialis Anestesi, Dokter IGD Senior, Dokter Spesialis Bedah, dan Supervisor Perawat ICU/IGD.',
            ],
            [
                'title' => 'Training International Trauma Life Support (ITLS) Rumah Sakit',
                'code' => 'TRS-14',
                'slug' => 'training-international-trauma-life-support-itls-rumah-sakit',
                'badge' => 'Trauma ITLS',
                'level_name' => 'Dokter & Paramedis Trauma Terakreditasi',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Standar internasional tata laksana komprehensif pasien politrauma, rapid trauma survey, log-roll spinal, pengendalian perdarahan masif tourniquet, dan stabilisasi fraktur panggul.',
                'full_description' => 'Standar internasional tata laksana komprehensif pasien politrauma, rapid trauma survey, log-roll spinal, pengendalian perdarahan masif tourniquet, dan stabilisasi fraktur panggul. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Konsep Emas (Golden Hour) Trauma & Penilaian Cepat Multi-Sistem',
  1 => 'Manajemen Trauma Kepala Berat (Traumatic Brain Injury) & Pencegahan Hipoksia',
  2 => 'Tata Laksana Trauma Toraks dan Trauma Abdomen Akut dengan Metode FAST Sonografi',
  3 => 'Pengendalian Perdarahan Eksternal Masif: Hemostatic Dressing & Tourniquet Komersial',
  4 => 'Imobilisasi Fraktur Panggul Pelvic Binder & Fraktur Femur dengan Traction Splint',
  5 => 'Penanganan Trauma Luka Bakar Luas, Inhalasi Asap, dan Trauma Suhu Ekstrem',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter IGD, Perawat Trauma, Dokter Bedah Umum, Dokter Ortopedi, dan Tim Evakuasi Medis Ambulans.',
            ],
            [
                'title' => 'Training Basic Trauma Cardiac Life Support (BTCLS), BLS & ACLS Rumah Sakit',
                'code' => 'TRS-15',
                'slug' => 'training-basic-trauma-cardiac-life-support-btcls-bls-acls-rumah-sakit',
                'badge' => 'BTCLS / BLS / ACLS',
                'level_name' => 'Perawat & Dokter Layanan Kritis',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Paket terintegrasi penanganan trauma fisik dan henti jantung akut berstandar American Heart Association (AHA) untuk sertifikasi kesiapsiagaan nakes rumah sakit.',
                'full_description' => 'Paket terintegrasi penanganan trauma fisik dan henti jantung akut berstandar American Heart Association (AHA) untuk sertifikasi kesiapsiagaan nakes rumah sakit. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Rantai Kelangsungan Hidup AHA (Chain of Survival) & BLS Kualitas Tinggi',
  1 => 'Penatalaksanaan Henti Jantung: VF/VT Tanpa Nadi, Asistol, dan PEA',
  2 => 'Penanganan Takiaritmia & Bradiaritmia Berbahaya dengan Pacu Jantung Transkutan',
  3 => 'Penanganan Acute Coronary Syndrome (ACS) & Pemberian Terapi Trombolitik/PCI',
  4 => 'Penanganan Trauma Toraks, Abdomen, dan Ekstremitas Berbasis Pendekatan BTCLS',
  5 => 'Simulasi Skenario Tim Resusitasi Kardiovaskular Terintegrasi (Mega-Code Station)',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Seluruh Perawat Rumah Sakit, Bidan, Dokter Umum, Dokter Spesialis, dan Tenaga Medis Fasyankes.',
            ],
            [
                'title' => 'Training Advanced Cardiac Life Support (ACLS) & Resusitasi Jantung Paru',
                'code' => 'TRS-16',
                'slug' => 'training-advanced-cardiac-life-support-acls-resusitasi-jantung-paru',
                'badge' => 'ACLS Khusus',
                'level_name' => 'Dokter & Perawat Ruang Intensif',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pendalaman algoritma ACLS mutakhir, manajemen aritmia kompleks, farmakologi kardiovaskular darurat, pemantauan kapnografi gelombang (ETCO2), dan perawatan pasca henti jantung.',
                'full_description' => 'Pendalaman algoritma ACLS mutakhir, manajemen aritmia kompleks, farmakologi kardiovaskular darurat, pemantauan kapnografi gelombang (ETCO2), dan perawatan pasca henti jantung. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Algoritma ACLS Universal AHA & Update Panduan Resusitasi Kardiovaskular Terbaru',
  1 => 'Monitoring End-Tidal CO2 (ETCO2) untuk Mengukur Kualitas Kompresi & Indikator ROSC',
  2 => 'Tata Laksana Bradikardia Simtomatik: Atropin, Dopamin, dan Transcutaneous Pacing',
  3 => 'Tata Laksana Takikardia Reguler & Irreguler: Adenosin, Beta Blocker, dan Kardioversi',
  4 => 'Pengenalan STEMI dan NSTEMI pada Rekaman EKG 12 Sandapan Secara Akurat',
  5 => 'Perawatan Pasca Resusitasi Terpadu: Optimasi Tekanan Darah dan Penilaian Neurologis',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter Umum, Dokter Jantung, Dokter Anestesi, Perawat ICCU, Perawat ICU, dan Tim Code Blue Rumah Sakit.',
            ],
            [
                'title' => 'Training Manajemen Laktasi & Konseling Menyusui bagi Perawat dan Bidan',
                'code' => 'TRS-17',
                'slug' => 'training-manajemen-laktasi-konseling-menyusui-bagi-perawat-dan-bidan',
                'badge' => 'Manajemen Laktasi',
                'level_name' => 'Bidan, Perawat Perinatologi & Dokter Anak',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Tata kelola inisiasi menyusu dini (IMD), posisi dan perlekatan menyusui yang benar, penanganan masalah payudara (mastitis, puting lecet), konseling ASI eksklusif, dan Rumah Sakit Sayang Ibu dan Bayi.',
                'full_description' => 'Tata kelola inisiasi menyusu dini (IMD), posisi dan perlekatan menyusui yang benar, penanganan masalah payudara (mastitis, puting lecet), konseling ASI eksklusif, dan Rumah Sakit Sayang Ibu dan Bayi. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Fisiologi Pembentukan ASI & Hormon Prolaktin Serta Oksitosin',
  1 => 'Inisiasi Menyusu Dini (IMD) & Manfaat Skin-to-Skin Contact Segera Pasca Lahir',
  2 => 'Teknik Posisi dan Perlekatan Menyusui yang Ergonomis & Efektif',
  3 => 'Penatalaksanaan Masalah Laktasi: Saluran Tersumbat, Payudara Bengkak, dan Mastitis',
  4 => 'Manajemen ASI Perah (ASIP): Teknik Memerah, Penyimpanan, dan Pemberian Tanpa Dot',
  5 => 'Konseling Keterampilan Komunikasi Mendukung Ibu Menyusui dalam Program RSSIB',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Bidan Kebidanan, Perawat Perinatologi/NICU, Dokter Spesialis Anak, dan Konselor Laktasi Rumah Sakit.',
            ],
            [
                'title' => 'Training Pediatric Advanced Life Support (PALS) Rumah Sakit',
                'code' => 'TRS-18',
                'slug' => 'training-pediatric-advanced-life-support-pals-rumah-sakit',
                'badge' => 'PALS Pediatric',
                'level_name' => 'Dokter Anak, Dokter IGD & Perawat PICU/NICU',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Resusitasi dan stabilisasi kedaruratan anak dan neonatus, pengenalan dini gagal napas dan syok pediatrik, tata laksana aritmia anak, dan dosis obat berbasis berat badan.',
                'full_description' => 'Resusitasi dan stabilisasi kedaruratan anak dan neonatus, pengenalan dini gagal napas dan syok pediatrik, tata laksana aritmia anak, dan dosis obat berbasis berat badan. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Pendekatan Sistematik Penilaian Pasien Pediatrik: Pediatric Assessment Triangle (PAT)',
  1 => 'Identifikasi Dini & Tata Laksana Gagal Napas: Stridor, Wheezing, dan Grunting Anak',
  2 => 'Penatalaksanaan Syok Terkompensasi & Dekompensasi pada Bayi dan Balita',
  3 => 'Algoritma Henti Jantung Pediatrik & Dosis Defibrilasi Berdasarkan Berat Badan',
  4 => 'Penatalaksanaan Status Epileptikus dan Kejang Demam Kompleks pada Anak',
  5 => 'Manajemen Cairan dan Obat Darurat Pediatrik Menggunakan Broselow Tape System',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter Spesialis Anak, Dokter IGD, Perawat PICU, Perawat NICU, dan Perawat Rawat Inap Anak.',
            ],
            [
                'title' => 'Training Basic Obstetric and Neonatal Life Support (BONELS) Rumah Sakit',
                'code' => 'TRS-19',
                'slug' => 'training-basic-obstetric-and-neonatal-life-support-bonels-rumah-sakit',
                'badge' => 'Obstetrik & Neonatus',
                'level_name' => 'Bidan, Dokter Kandungan & Perawat VK',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Kedaruratan maternal dan neonatal komprehensif: perdarahan pasca persalinan (HPP), preeklamsia berat/eklamsia, distosia bahu, kompresi bimanual, dan resusitasi asfiksia bayi baru lahir.',
                'full_description' => 'Kedaruratan maternal dan neonatal komprehensif: perdarahan pasca persalinan (HPP), preeklamsia berat/eklamsia, distosia bahu, kompresi bimanual, dan resusitasi asfiksia bayi baru lahir. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Protokol Kedaruratan Maternal Preeklamsia Berat & Penggunaan Magnesium Sulfat (MgSO4)',
  1 => 'Tata Laksana Perdarahan Pasca Salin (HPP): Uterotonika, KBI/KBE, dan Balon Tamponade',
  2 => 'Manajemen Distosia Bahu: Manuver McRoberts, Tekanan Suprapubik, dan Rotasi Woods',
  3 => 'Resusitasi Bayi Baru Lahir dengan Asfiksia Berat Berbasis Algoritma Neonatus',
  4 => 'Sepsis Maternal & Syok Sepsis Obstetri: Deteksi Dini Menggunakan Skor MEOWS',
  5 => 'Rujukan Cepat Terintegrasi Maternal-Neonatal Menuju Fasilitas Pelayanan Rumah Sakit',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Bidan Praktik, Bidan Ruang Bersalin (VK), Dokter Umum Puskesmas/RS, dan Dokter Spesialis Obstetri & Ginekologi.',
            ],
            [
                'title' => 'Training Basic Neuro Life Support (BNLS) bagi Perawat di Rumah Sakit',
                'code' => 'TRS-20',
                'slug' => 'training-basic-neuro-life-support-bnls-bagi-perawat-di-rumah-sakit',
                'badge' => 'Neuro Life Support',
                'level_name' => 'Perawat Stroke Unit, ICU & Rawat Inap Bedah Saraf',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pengkajian neurologis berkala (GCS / Skor NIHSS), deteksi dini peningkatan tekanan intrakranial (TIK), tata laksana keperawatan stroke iskemik/hemoragik, dan cedera kepala.',
                'full_description' => 'Pengkajian neurologis berkala (GCS / Skor NIHSS), deteksi dini peningkatan tekanan intrakranial (TIK), tata laksana keperawatan stroke iskemik/hemoragik, dan cedera kepala. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Anatomi-Fisiologi Sistem Saraf Pusat & Sirkulasi Serebral Vaskular',
  1 => 'Pengkajian Tingkat Kesadaran Glasgow Coma Scale (GCS) & Skala NIHSS Komprehensif',
  2 => 'Tanda Gejala Peningkatan Tekanan Intrakranial (TIK) & Trias Cushing Kritis',
  3 => 'Posisi Pasien Head-Up 30 Derajat, Regulasi Osmolaritas, dan Ventilasi Terkontrol',
  4 => 'Asuhan Keperawatan Pasien Stroke Akut dalam Periode Golden Hour Trombolisis',
  5 => 'Pencegahan Komplikasi Tirah Baring Pasien Neuro: Aspirasi Pneumonia & Kontraktur',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Perawat Unit Stroke, Perawat Bedah Saraf, Perawat ICU, Perawat Neurologi, dan Dokter Penanggung Jawab Saraf.',
            ],
            [
                'title' => 'Training Sirkumsisi Modern bagi Tenaga Kesehatan di Fasilitas Pelayanan Kesehatan',
                'code' => 'TRS-21',
                'slug' => 'training-sirkumsisi-modern-bagi-tenaga-kesehatan-di-fasilitas-pelayanan-kesehatan',
                'badge' => 'Sirkumsisi Modern',
                'level_name' => 'Dokter Umum, Perawat & Bidan Terlatih',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Metode sirkumsisi tanpa jahit dan minim nyeri: teknik klamp (smart klamp / tara klamp), lem bedah (tissue adhesive), kauter elektrosurgical, dan anestesi blok saraf lokal.',
                'full_description' => 'Metode sirkumsisi tanpa jahit dan minim nyeri: teknik klamp (smart klamp / tara klamp), lem bedah (tissue adhesive), kauter elektrosurgical, dan anestesi blok saraf lokal. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Anatomi Penis, Indikasi Fimosis / Parafimosis, dan Kontraindikasi Hipospadia',
  1 => 'Teknik Anestesi Lokal Blok Saraf Dorsalis Penis Bebas Trauma Nyeri Berlebih',
  2 => 'Sirkumsisi Metode Klamp: Pemilihan Ukuran, Prosedur Insersi, dan Pelepasan Klamp',
  3 => 'Sirkumsisi Metode Lem Bedah (Tissue Adhesive) Estetis Tanpa Jahitan Konvensional',
  4 => 'Manajemen Pasca Sirkumsisi: Perawatan Kebersihan, Analgesik, dan Edukasi Orang Tua',
  5 => 'Tata Laksana Komplikasi: Perdarahan Tepi, Hematoma, Infeksi Lokal, dan Edema Kulit',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter Umum Praktik, Perawat Bedah Minor, Bidan Terlatih, dan Praktisi Layanan Sirkumsisi Modern.',
            ],
            [
                'title' => 'Training Sirkumsisi Modern Plasma Energy bagi Praktisi Kesehatan',
                'code' => 'TRS-22',
                'slug' => 'training-sirkumsisi-modern-plasma-energy-bagi-praktisi-kesehatan',
                'badge' => 'Plasma Energy Circumcision',
                'level_name' => 'Dokter Klinisi & Perawat Spesialis Minor Surgery',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Teknologi sirkumsisi termutakhir berbasis energi plasma: pemotongan mikro presisi tinggi tanpa panas berlebih, hemostasis seketika, dan proses penyembuhan jaringan luka lebih cepat.',
                'full_description' => 'Teknologi sirkumsisi termutakhir berbasis energi plasma: pemotongan mikro presisi tinggi tanpa panas berlebih, hemostasis seketika, dan proses penyembuhan jaringan luka lebih cepat. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Fisika Dasar Energi Plasma (Ionized Gas Technology) dalam Pembedahan Mikro',
  1 => 'Keunggulan Plasma Energy: Minim Jejak Luka Bakar Dibandingkan Kauter Biasa',
  2 => 'Protokol Sterilisasi dan Kalibrasi Alat Plasma Energy Generator Medis',
  3 => 'Teknik Sayatan Presisi Sesuai Frenulum dan Lapisan Mukosa Preputium',
  4 => 'Pencegahan Kerusakan Jaringan Termal Serebral Glans Penis saat Pemotongan',
  5 => 'Evaluasi Hasil Estetika Kulit Pasca Tindakan dan Protokol Kontrol Berkala',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter Bedah Umum, Dokter Umum Pelaksana Sirkumsisi, dan Perawat Praktisi Khitan Modern.',
            ],
            [
                'title' => 'Training Pelayanan Antenatal Care (ANC) dan Penggunaan USG Dasar Obstetri Terbatas',
                'code' => 'TRS-23',
                'slug' => 'training-pelayanan-antenatal-care-anc-dan-penggunaan-usg-dasar-obstetri-terbatas',
                'badge' => 'ANC & USG Terbatas',
                'level_name' => 'Dokter Umum & Bidan Faskes',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pemeriksaan kehamilan terpadu 10T, pengoperasian mesin USG 2D dasar, konfirmasi kehamilan intrauterin, deteksi kantung gestasi, detak jantung janin, dan letak plasenta.',
                'full_description' => 'Pemeriksaan kehamilan terpadu 10T, pengoperasian mesin USG 2D dasar, konfirmasi kehamilan intrauterin, deteksi kantung gestasi, detak jantung janin, dan letak plasenta. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Standar Pemeriksaan Antenatal Care Terpadu Minimal 6 Kali Selama Kehamilan',
  1 => 'Prinsip Fisika Dasar Ultrasonografi, Knobologi Mesin USG, dan Pemilihan Probe',
  2 => 'Konfirmasi Kehamilan Intrauterin Trimester Pertama & Penilaian Kantung Gestasi (GS)',
  3 => 'Identifikasi Fetal Heart Rate (FHR), Crown-Rump Length (CRL), dan Usia Kehamilan',
  4 => 'Penilaian Trimester Ketiga: Presentasi Janin, Letak Plasenta, dan Indeks Cairan Ketuban',
  5 => 'Kriteria Batasan USG Obstetri Terbatas & Kapan Harus Merujuk ke Spesialis Obgyn',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter Umum FKTP/Puskesmas, Bidan Pemeriksa Kehamilan, dan Dokter Residen Kebidanan.',
            ],
            [
                'title' => 'Training Pelayanan Antenatal Care (ANC) dengan Deteksi Dini Komplikasi Kehamilan',
                'code' => 'TRS-24',
                'slug' => 'training-pelayanan-antenatal-care-anc-dengan-deteksi-dini-komplikasi-kehamilan',
                'badge' => 'Deteksi Dini ANC',
                'level_name' => 'Bidan & Tenaga Medis KIA',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Skrining faktor risiko tinggi kehamilan, penggunaan Buku KIA, deteksi anemia gestasional, diabetes melitus gestasional, penyakit jantung bawaan, dan infeksi menular maternal.',
                'full_description' => 'Skrining faktor risiko tinggi kehamilan, penggunaan Buku KIA, deteksi anemia gestasional, diabetes melitus gestasional, penyakit jantung bawaan, dan infeksi menular maternal. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Skrining Awal Faktor Risiko Ibu Hamil Menggunakan Skor Poedji Rochjati',
  1 => 'Deteksi & Tata Laksana Anemia Defisiensi Besi pada Ibu Hamil Trimester 1, 2, dan 3',
  2 => 'Skrining Infeksi Menular Seksual, HIV, Hepatitis B, dan Sifilis pada Kehamilan',
  3 => 'Pengenalan Gejala Awal Preeklamsia: Proteinuria, Hipertensi Gestasional, dan Nyeri Kepala',
  4 => 'Konseling Gizi Maternal Seimbang untuk Mencegah Berat Badan Lahir Rendah (BBLR)',
  5 => 'Perencanaan Persalinan dan Pencegahan Komplikasi (P4K) Berbasis Partisipasi Keluarga',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Bidan Koordinator Puskesmas, Bidan Praktik Mandiri, Dokter Umum KIA, dan Staf Kesehatan Ibu dan Anak.',
            ],
            [
                'title' => 'Training Pelayanan Antenatal dan USG bagi Dokter dalam Penurunan AKI dan AKB',
                'code' => 'TRS-25',
                'slug' => 'training-pelayanan-antenatal-dan-usg-bagi-dokter-dalam-penurunan-aki-dan-akb',
                'badge' => 'Penurunan AKI & AKB',
                'level_name' => 'Dokter Umum di Fasyankes Primer & RS',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Akselerasi penurunan Angka Kematian Ibu (AKI) dan Angka Kematian Bayi (AKB) melalui standardisasi kompetensi USG skrining trimester pertama dan ketiga oleh dokter umum.',
                'full_description' => 'Akselerasi penurunan Angka Kematian Ibu (AKI) dan Angka Kematian Bayi (AKB) melalui standardisasi kompetensi USG skrining trimester pertama dan ketiga oleh dokter umum. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Epidemiologi Faktor Utama Penyebab AKI & AKB di Tingkat Daerah dan Nasional',
  1 => 'Skrining USG Trimester 1: Deteksi Kehamilan Ektopik dan Blighted Ovum',
  2 => 'Skrining USG Trimester 3: Deteksi Plasenta Previa Totalis dan Pertumbuhan Janin Terhambat (PJT)',
  3 => 'Integrasi Pemeriksaan USG dengan Tata Kelola Rujukan Maternal Terencana',
  4 => 'Kolaborasi Antara Dokter Umum Faskes Primer dengan Dokter Spesialis Obgyn Rumah Sakit',
  5 => 'Audit Maternal Perinatal (AMP) sebagai Bahan Evaluasi Perbaikan Mutu Pelayanan Faskes',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter Umum Puskesmas, Dokter Klinik Swasta, Dokter IGD Rumah Sakit, dan Pengelola Program KIA.',
            ],
            [
                'title' => 'Training Pelayanan Keperawatan Intensif (ICU) Rumah Sakit',
                'code' => 'TRS-26',
                'slug' => 'training-pelayanan-keperawatan-intensif-icu-rumah-sakit',
                'badge' => 'ICU Nursing',
                'level_name' => 'Perawat Intensif & Tim Perawatan Kritis',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Kompetensi asuhan keperawatan pasien kritis di ICU: pemantauan hemodinamik invasif (CVP/Arteri line), ventilasi mekanik ventilator, titrasi inotropik, dan pencegahan komplikasi kritis.',
                'full_description' => 'Kompetensi asuhan keperawatan pasien kritis di ICU: pemantauan hemodinamik invasif (CVP/Arteri line), ventilasi mekanik ventilator, titrasi inotropik, dan pencegahan komplikasi kritis. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Fisiologi Pasien Kritis & Indikasi Masuk Serta Keluar Ruang Rawat Intensif (ICU)',
  1 => 'Prinsip Kerja Ventilator Mekanik: Mode Kontrol, Assist, SIMV, PS, dan Setting PEEP',
  2 => 'Manajemen Jalan Napas Buatan: Perawatan Endotracheal Tube (ETT) dan Trakeostomi',
  3 => 'Pemantauan Hemodinamik Invasif: Tekanan Vena Sentral (CVP) dan Jalur Arteri',
  4 => 'Pemberian Terapi Inotropik & Vasopresor Menggunakan Syringe Pump Berkecepatan Teliti',
  5 => 'Pencegahan Ventilator-Associated Pneumonia (VAP Bundle) & Mobilisasi Progresif ICU',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Perawat Pelaksana ICU, Perawat HCU/ICCU, Supervisor Keperawatan Kritis, dan Dokter Jaga Ruang Intensif.',
            ],
            [
                'title' => 'Training Perawatan Luka Modern (Modern Wound Care) bagi Praktisi Kesehatan',
                'code' => 'TRS-27',
                'slug' => 'training-perawatan-luka-modern-modern-wound-care-bagi-praktisi-kesehatan',
                'badge' => 'Modern Wound Care',
                'level_name' => 'Perawat & Praktisi Perawatan Luka',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Konsep moist wound healing, pengkajian luka berbasis TIME (Tissue, Infection, Moisture, Edge), pemilihan balutan modern (hydrocolloid, foam, alginate), dan perawatan ulkus diabetikum.',
                'full_description' => 'Konsep moist wound healing, pengkajian luka berbasis TIME (Tissue, Infection, Moisture, Edge), pemilihan balutan modern (hydrocolloid, foam, alginate), dan perawatan ulkus diabetikum. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Fisiologi Penyembuhan Luka & Prinsip Kelembapan Seimbang (Moist Wound Healing)',
  1 => 'Pengkajian Luka Terstruktur Menggunakan Kerangka TIME dan Bates-Jensen Tool',
  2 => 'Teknik Debridemen Mekanik, Autolitik, Enzimatik, dan Konservatif Tajam (CSWD)',
  3 => 'Mengenal Ragam Balutan Luka Modern: Hydrogel, Kalsium Alginat, Foam, dan Antimikroba',
  4 => 'Tata Laksana Perawatan Luka Kaki Diabetik (Diabetic Foot Ulcer) & Offloading',
  5 => 'Perawatan Luka Tekan (Dekubitus), Luka Bakar, dan Luka Operasi dengan Infeksi',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Perawat Luka Klinis (CWCCA), Praktisi Home Care, Dokter Perawatan Luka, dan Perawat Ruang Bedah.',
            ],
            [
                'title' => 'Training Keperawatan Gawat Darurat Tingkat Dasar (Emergency Nursing Basic Level) di Fasilitas Pelayanan Kesehatan',
                'code' => 'TRS-28',
                'slug' => 'training-keperawatan-gawat-darurat-tingkat-dasar-emergency-nursing-basic-level-di-fasilitas-pelayanan-kesehatan',
                'badge' => 'Emergency Nursing',
                'level_name' => 'Perawat IGD & Staf Layanan Darurat',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Kompetensi dasar perawat gawat darurat: pengkajian cepat ABCD, penanganan henti napas henti jantung, imobilisasi cedera tulang belakang, dan transfer pasien darurat intra-rumah sakit.',
                'full_description' => 'Kompetensi dasar perawat gawat darurat: pengkajian cepat ABCD, penanganan henti napas henti jantung, imobilisasi cedera tulang belakang, dan transfer pasien darurat intra-rumah sakit. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Peran & Tanggung Jawab Profesional Perawat Gawat Darurat di Fasilitas Pelayanan',
  1 => 'Primary Survey & Secondary Survey Pasien Gawat Darurat Medis dan Trauma',
  2 => 'Tindakan Bantuan Hidup Dasar Dewasa dan Anak Sesuai Panduan Resusitasi Terkini',
  3 => 'Manajemen Oksigenasi: Nasal Kanul, Simple Mask, NRM, dan Bagging Efektif',
  4 => 'Teknik Balut Bidai Cepat, Penghentian Perdarahan, dan Imobilisasi Servikal',
  5 => 'Prosedur Transfer Pasien Kritis Antar Ruangan (Intra-Hospital Patient Transport)',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Perawat IGD Baru, Perawat Ruang Perawatan Umum, Perawat Klinik Pratama/Utama, dan Tim Ambulans.',
            ],
            [
                'title' => 'Training Tim Medis Kuratif & Rehabilitatif Pelayanan Kesehatan Terpadu',
                'code' => 'TRS-29',
                'slug' => 'training-tim-medis-kuratif-rehabilitatif-pelayanan-kesehatan-terpadu',
                'badge' => 'Kuratif & Rehabilitatif',
                'level_name' => 'Dokter, Fisioterapis & Perawat Rehabilitasi',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Sinergi pelayanan kuratif pengobatan penyakit dengan rehabilitasi medik dini: restorasi fungsi fisik, pencegahan kecacatan permanen, fisioterapi dada, dan reintegrasi sosial pasien.',
                'full_description' => 'Sinergi pelayanan kuratif pengobatan penyakit dengan rehabilitasi medik dini: restorasi fungsi fisik, pencegahan kecacatan permanen, fisioterapi dada, dan reintegrasi sosial pasien. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Konsep Kontinum Pelayanan Kesehatan dari Fase Akut, Sub-Akut, hingga Rehabilitatif',
  1 => 'Mobilisasi Dini Pasien Rawat Inap Pasca Operasi Bedah Ortopedi dan Laparotomi',
  2 => 'Program Rehabilitasi Jantung (Cardiopulmonary Rehabilitation) Pasca Serangan Jantung',
  3 => 'Fisioterapi Dada & Latihan Batuk Efektif pada Pasien Penyakit Paru Obstruktif Kronis',
  4 => 'Rehabilitasi Pasien Pasca Stroke: Latihan Rentang Gerak (ROM) dan Terapi Wicara Dini',
  5 => 'Kolaborasi Interprofesional Antara Dokter Spesialis, Fisioterapis, Okupasi, dan Perawat',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter Umum, Fisioterapis Rumah Sakit, Okupasi Terapis, Perawat Rehabilitasi Medik, dan Manajer Kasus Pasien.',
            ],
            [
                'title' => 'Training & Workshop Ultrasonografi (USG) Abdomen bagi Dokter Klinisi',
                'code' => 'TRS-30',
                'slug' => 'training-workshop-ultrasonografi-usg-abdomen-bagi-dokter-klinisi',
                'badge' => 'USG Abdomen',
                'level_name' => 'Dokter Spesialis & Dokter Umum Klinisi',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Keterampilan scanning organ intra-abdomen: hepar, vesika fellea (kolelitiasis), ginjal (nefrolitiasis/hidronefrosis), pankreas, limpa, vesika urinaria, dan protokol FAST trauma.',
                'full_description' => 'Keterampilan scanning organ intra-abdomen: hepar, vesika fellea (kolelitiasis), ginjal (nefrolitiasis/hidronefrosis), pankreas, limpa, vesika urinaria, dan protokol FAST trauma. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Dasar Akustik Jaringan Abdomen & Optimalisasi Gain, Depth, Serta Focus Probe Convex',
  1 => 'Protokol Scanning Hepar & Deteksi Sirosis, Fatty Liver, Serta Massa Hati',
  2 => 'Penilaian Kandung Empedu (Vesika Fellea): Deteksi Batu Empedu dan Kolesistitis Akut',
  3 => 'Pemeriksaan Sistem Traktus Urinarius: Ginjal, Hidronefrosis, Batu Saluran Kemih, dan BPH',
  4 => 'Pemeriksaan Focused Assessment with Sonography for Trauma (FAST) pada Kasus Trauma Tumpul',
  5 => 'Penulisan Laporan Hasil Pemeriksaan USG Abdomen & Dokumentasi Citra Medis Standar',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter Spesialis Penyakit Dalam, Dokter IGD, Dokter Umum Rumah Sakit, dan Dokter Bedah.',
            ],
            [
                'title' => 'Training & Workshop Pelayanan Antenatal Care (ANC) bagi Ibu Hamil dan Penggunaan USG Obstetri',
                'code' => 'TRS-31',
                'slug' => 'training-workshop-pelayanan-antenatal-care-anc-bagi-ibu-hamil-dan-penggunaan-usg-obstetri',
                'badge' => 'ANC & USG Terpadu',
                'level_name' => 'Dokter & Bidan Pelaksana Layanan Maternal',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Integrasi skrining klinis antenatal komprehensif dengan konfirmasi ultrasonografi obstetri untuk memastikan keselamatan janin, kesehatan ibu, dan kesiapan persalinan aman.',
                'full_description' => 'Integrasi skrining klinis antenatal komprehensif dengan konfirmasi ultrasonografi obstetri untuk memastikan keselamatan janin, kesehatan ibu, dan kesiapan persalinan aman. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Standar Layanan Pemeriksaan Kehamilan Berkualitas Sesuai Pedoman Maternal Terkini',
  1 => 'Identifikasi Anatomi Dasar Janin Menggunakan USG 2D Real-Time',
  2 => 'Penentuan Usia Gestasi Berdasarkan Pengukuran Biometri: BPD, HC, AC, dan FL',
  3 => 'Penilaian Kesejahteraan Janin: Gerak Janin, Denyut Jantung Janin, dan Air Ketuban',
  4 => 'Deteksi Dini Kelainan Posisi Plasenta (Plasenta Rendah & Solusio Plasenta)',
  5 => 'Edukasi Gizi, Rencana Persalinan Terencana, dan Konseling Tanda Bahaya Kehamilan',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter Umum Pemeriksa Kehamilan, Bidan Rumah Sakit, Bidan Puskesmas, dan Tenaga Kesehatan KIA.',
            ],
            [
                'title' => 'Training & Workshop Resusitasi Neonatus dan Tata Laksana Bayi Baru Lahir',
                'code' => 'TRS-32',
                'slug' => 'training-workshop-resusitasi-neonatus-dan-tata-laksana-bayi-baru-lahir',
                'badge' => 'Resusitasi Neonatus',
                'level_name' => 'Dokter Spesialis Anak, Bidan & Perawat Perina',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Standar resusitasi neonatus Indonesian Resuscitation Council / IDAI: langkah awal kehangatan, stimulasi, VTP dengan T-Piece Resuscitator, kompresi dada, dan intubasi bayi baru lahir.',
                'full_description' => 'Standar resusitasi neonatus Indonesian Resuscitation Council / IDAI: langkah awal kehangatan, stimulasi, VTP dengan T-Piece Resuscitator, kompresi dada, dan intubasi bayi baru lahir. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Fisiologi Transisi Sirkulasi Janin Menjadi Bayi Baru Lahir Pasca Pemotongan Tali Pusat',
  1 => 'Langkah Awal Resusitasi: Menghangatkan, Mengeringkan, Posisikan Jalan Napas, dan Rangsang Taktil',
  2 => 'Teknik Ventilasi Tekanan Positif (VTP) Menggunakan Balon Mengembang Sendiri & T-Piece',
  3 => 'Penggunaan Continuous Positive Airway Pressure (CPAP) Dini pada Bayi Preterm dengan Distres Napas',
  4 => 'Kompresi Dada Terkoordinasi 3:1 dengan Ventilasi & Pemasangan Kateter Umbilikal Darurat',
  5 => 'Pemberian Epinefrin dan Resusitasi Volume pada Bayi dengan Asfiksia Berat Refrakter',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Bidan Kamar Bersalin, Perawat Ruang Bayi (Perinatologi), Perawat NICU, Dokter Umum, dan Dokter Spesialis Anak.',
            ],
            [
                'title' => 'Training & Workshop Intensive Care Unit (ICU) dan Manajemen Pasien Kritis',
                'code' => 'TRS-33',
                'slug' => 'training-workshop-intensive-care-unit-icu-dan-manajemen-pasien-kritis',
                'badge' => 'Workshop ICU',
                'level_name' => 'Dokter Intensivis, Dokter Jaga & Perawat ICU',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Workshop komprehensif manajemen sepsis berat, sindrom distres pernapasan akut (ARDS), strategi ventilasi protektif paru, continuous renal replacement therapy (CRRT), dan sedasi analgesia.',
                'full_description' => 'Workshop komprehensif manajemen sepsis berat, sindrom distres pernapasan akut (ARDS), strategi ventilasi protektif paru, continuous renal replacement therapy (CRRT), dan sedasi analgesia. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Konsep Terkini Resusitasi Sepsis Sesuai Surviving Sepsis Campaign Guidelines',
  1 => 'Strategi Protektif Paru (Lung Protective Ventilation) Low Tidal Volume pada Pasien ARDS',
  2 => 'Tata Laksana Posisi Tengkurap (Prone Positioning) pada Hipoksemia Berat di ICU',
  3 => 'Prinsip Continuous Renal Replacement Therapy (CRRT) untuk Pasien Kritis Gagal Ginjal',
  4 => 'Protokol Sedasi, Analgesia, dan Pencegahan Delirium ICU Menggunakan Skor CAM-ICU',
  5 => 'Komunikasi Etis dengan Keluarga Pasien Kritis Mengenai Prognosis dan End-of-Life Care',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Dokter ICU/Anestesi, Dokter Jaga Ruang Intensif, Kepala Ruangan ICU, dan Perawat Senior Perawatan Kritis.',
            ],
            [
                'title' => 'Training Transformasi Pelayanan Rumah Sakit Unggul dan Pertumbuhan Kinerja Finansial (EBITDA)',
                'code' => 'TRS-34',
                'slug' => 'training-transformasi-pelayanan-rumah-sakit-unggul-dan-pertumbuhan-kinerja-finansial-ebitda',
                'badge' => 'Hospital EBITDA',
                'level_name' => 'Direksi, Dewan Pengawas & Manajer RS',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Strategi bisnis rumah sakit modern: meningkatkan kepuasan pasien, efisiensi operasional, eliminasi pemborosan (lean healthcare), pertumbuhan EBITDA, dan keberlanjutan investasi fasilitas.',
                'full_description' => 'Strategi bisnis rumah sakit modern: meningkatkan kepuasan pasien, efisiensi operasional, eliminasi pemborosan (lean healthcare), pertumbuhan EBITDA, dan keberlanjutan investasi fasilitas. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Analisis Kinerja Keuangan Rumah Sakit: Laporan Laba Rugi, Neraca, dan Struktur EBITDA',
  1 => 'Metodologi Lean Healthcare: Menghilangkan 8 Pemborosan (Waste) dalam Alur Pelayanan Pasien',
  2 => 'Optimalisasi Utilisasi Aset Medis Berbiaya Tinggi (CT-Scan, MRI, Kamar Bedah, Cathlab)',
  3 => 'Strategi Negosiasi Tarif Asuransi Swasta, Korporasi, dan Efisiensi Formularium Obat',
  4 => 'Pengembangan Layanan Unggulan (Center of Excellence) untuk Menarik Pangsa Pasar Pasien',
  5 => 'Tata Kelola Investasi Modal (CapEx) Peralatan Medis Canggih Berdasarkan Analisis Payback Period',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Direktur Utama RS, Direktur Keuangan, Direktur Operasional, Dewan Pengawas, dan Pemilik Fasilitas Kesehatan.',
            ],
            [
                'title' => 'Training Infection Prevention and Control Nurse (IPCN) Dasar bagi Perawat di Fasilitas Pelayanan Kesehatan',
                'code' => 'TRS-35',
                'slug' => 'training-infection-prevention-and-control-nurse-ipcn-dasar-bagi-perawat-di-fasilitas-pelayanan-kesehatan',
                'badge' => 'IPCN Dasar',
                'level_name' => 'Perawat Pengendali Infeksi (IPCN/IPCN Link)',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Standar kompetensi perawat pengendali infeksi (IPCN): surveilans epidemiologi HAIs, Infection Control Risk Assessment (ICRA), audit kepatuhan cuci tangan, dan kewaspadaan transmisi.',
                'full_description' => 'Standar kompetensi perawat pengendali infeksi (IPCN): surveilans epidemiologi HAIs, Infection Control Risk Assessment (ICRA), audit kepatuhan cuci tangan, dan kewaspadaan transmisi. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Peran & Tanggung Jawab Profesi Infection Prevention and Control Nurse (IPCN)',
  1 => 'Metodologi Surveilans HAIs: Penghitungan Angka Insiden ISK, IDO, VAP, dan IAD',
  2 => 'Infection Control Risk Assessment (ICRA) Klinis & ICRA Renovasi Bangunan Rumah Sakit',
  3 => 'Kewaspadaan Standar & Kewaspadaan Transmisi: Kontak, Droplet, dan Airborne Isolasi',
  4 => 'Teknik Audit Kepatuhan Kebersihan Tangan 5 Momen & Penggunaan APD Tepat Guna',
  5 => 'Penanganan Outbreak / Kejadian Luar Biasa (KLB) Infeksi di Lingkungan Rumah Sakit',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Perawat IPCN Rumah Sakit, Perawat Pengendali Infeksi Link (IPCNL), Komite PPI, dan Tim Keselamatan Pasien.',
            ],
            [
                'title' => 'Training Implementasi RCA, FMEA dan Manajemen Risiko Klinis Terintegrasi untuk Mendukung Akreditasi Rumah Sakit',
                'code' => 'TRS-36',
                'slug' => 'training-implementasi-rca-fmea-dan-manajemen-risiko-klinis-terintegrasi-untuk-mendukung-akreditasi-rumah-sakit',
                'badge' => 'RCA, FMEA & Risk',
                'level_name' => 'Komite Mutu, Risk Manager & Pimpinan Medis',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Metode analisis proaktif Failure Mode and Effects Analysis (FMEA) dan investigasi reaktif Root Cause Analysis (RCA) untuk memenuhi elemen penilaian akreditasi rumah sakit tingkat Paripurna.',
                'full_description' => 'Metode analisis proaktif Failure Mode and Effects Analysis (FMEA) dan investigasi reaktif Root Cause Analysis (RCA) untuk memenuhi elemen penilaian akreditasi rumah sakit tingkat Paripurna. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Kerangka Manajemen Risiko Terintegrasi Sesuai Standar Akreditasi Rumah Sakit',
  1 => 'Penyusunan Profil Risiko (Risk Register) Unit Pelayanan Medis dan Non-Medis',
  2 => 'Metodologi Proaktif FMEA: Menentukan Proses Kritis, Modus Kegagalan, dan Menghitung RPN',
  3 => 'Metodologi Reaktif RCA: Rekonstruksi Kronologis, Tabular Timeline, dan Fishbone Diagram',
  4 => 'Perumusan Rencana Tindak Lanjut (Corrective Action Plan) Terukur dan Dapat Diaudit',
  5 => 'Dokumentasi Bukti Implementasi Regulasi & Standar Akreditasi Rumah Sakit Paripurna',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Komite Mutu & Keselamatan Pasien, Tim Akreditasi RS, Kepala Instalasi, dan Seluruh Anggota Tim RCA/FMEA.',
            ],
            [
                'title' => 'Training Membangun Budaya Keselamatan Pasien: Pengukuran, Monitoring dan Evaluasi di Fasilitas Pelayanan Kesehatan',
                'code' => 'TRS-37',
                'slug' => 'training-membangun-budaya-keselamatan-pasien-pengukuran-monitoring-dan-evaluasi-di-fasilitas-pelayanan-kesehatan',
                'badge' => 'Patient Safety Culture',
                'level_name' => 'Pimpinan RS, Komite Keselamatan & Manajer Mutu',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pengukuran survei budaya keselamatan pasien (HSOPSC), evaluasi keterbukaan komunikasi insiden, kepemimpinan keselamatan, dan intervensi peningkatan iklim kerja yang aman bagi pasien.',
                'full_description' => 'Pengukuran survei budaya keselamatan pasien (HSOPSC), evaluasi keterbukaan komunikasi insiden, kepemimpinan keselamatan, dan intervensi peningkatan iklim kerja yang aman bagi pasien. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Dimensi Budaya Keselamatan Pasien Berdasarkan Hospital Survey on Patient Safety Culture (HSOPSC)',
  1 => 'Teknik Distribusi, Analisis Data Survei Budaya Keselamatan, dan Interpretasi Hasil Skor',
  2 => 'Kepemimpinan Keselamatan (Safety Leadership): Walk-Around Direksi ke Ruang Pelayanan',
  3 => 'Mendorong Pelaporan Kejadian Nyaris Cedera (KNC) Tanpa Takut Sanksi Disiplin',
  4 => 'Penyusunan Rencana Aksi Intervensi Perbaikan Budaya Kerja Unit Berisiko Tinggi',
  5 => 'Monitoring & Evaluasi Berkelanjutan Perubahan Perilaku Keselamatan Staf Rumah Sakit',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Direktur Rumah Sakit, Komite Mutu, Manajer SDM, Kepala Ruangan Keperawatan, dan Staf Fasilitas Pelayanan.',
            ],
            [
                'title' => 'Training Implementasi Peningkatan Mutu dan Keselamatan Pasien (PMKP) di Fasilitas Pelayanan Kesehatan',
                'code' => 'TRS-38',
                'slug' => 'training-implementasi-peningkatan-mutu-dan-keselamatan-pasien-pmkp-di-fasilitas-pelayanan-kesehatan',
                'badge' => 'Implementasi PMKP',
                'level_name' => 'Komite PMKP, Kepala Unit & Tim Akreditasi',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Penyusunan program kerja PMKP, pemilihan dan validasi indikator mutu nasional (INM), indikator mutu prioritas RS (IMP-RS), analisis siklus PDCA, dan audit kepatuhan klinis.',
                'full_description' => 'Penyusunan program kerja PMKP, pemilihan dan validasi indikator mutu nasional (INM), indikator mutu prioritas RS (IMP-RS), analisis siklus PDCA, dan audit kepatuhan klinis. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Struktur & Tata Kelola Komite Peningkatan Mutu dan Keselamatan Pasien (PMKP)',
  1 => 'Pemilihan & Penetapan Indikator Mutu Nasional (INM) Serta Indikator Mutu Prioritas RS',
  2 => 'Metodologi Pengumpulan Data, Validasi Data Mutu, dan Analisis Statistik Pengendalian Proses',
  3 => 'Penerapan Siklus PDCA / PDSA dalam Proyek Perbaikan Mutu Pelayanan Unit Kerja',
  4 => 'Audit Kepatuhan Pelaksanaan Clinical Pathway dan Panduan Praktik Klinis Dokter',
  5 => 'Penyusunan Laporan Mutu Triwulanan dan Tahunan untuk Direksi dan Dewan Pengawas',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Ketua dan Anggota Komite PMKP, Pengumpul Data Mutu Unit, Kepala Instalasi Medis, dan Tim Akreditasi Faskes.',
            ],
            [
                'title' => 'Training Penanganan Kasus Pelayanan Medik Berpotensi Sengketa Hukum dan Mediasi Rumah Sakit',
                'code' => 'TRS-39',
                'slug' => 'training-penanganan-kasus-pelayanan-medik-berpotensi-sengketa-hukum-dan-mediasi-rumah-sakit',
                'badge' => 'Medikolegal & Mediasi',
                'level_name' => 'Direksi, Komite Medik & Tim Hukum RS',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Strategi penanganan somasi medik, investigasi internal kejadian tidak diharapkan, teknik mediasi dokter-pasien, informed consent defensif, dan perlindungan hukum tenaga kesehatan.',
                'full_description' => 'Strategi penanganan somasi medik, investigasi internal kejadian tidak diharapkan, teknik mediasi dokter-pasien, informed consent defensif, dan perlindungan hukum tenaga kesehatan. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Lanskap Hukum Kesehatan Kontemporer: Hak dan Kewajiban Dokter, Rumah Sakit, Serta Pasien',
  1 => 'Identifikasi Tanda Bahaya Kasus Pelayanan Medik yang Berpotensi Menjadi Sengketa Hukum',
  2 => 'Prosedur Penanganan Surat Somasi, Pengaduan Malpraktik, dan Permintaan Rekam Medis',
  3 => 'Teknik Mediasi & Negosiasi Konflik Pelayanan Kesehatan Tanpa Melalui Jalur Litigasi',
  4 => 'Penyusunan Informed Consent Lengkap pada Tindakan Medis Berisiko Tinggi',
  5 => 'Peran Majelis Disiplin Profesi & Strategi Pendampingan Hukum Tenaga Kesehatan Rumah Sakit',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Direktur Rumah Sakit, Tim Bagian Hukum (Legal) RS, Komite Medik, Komite Etik, dan Humas Rumah Sakit.',
            ],
            [
                'title' => 'Training Strategi Pengelolaan Layanan JKN & Manajemen Utilisasi Rumah Sakit yang Optimal',
                'code' => 'TRS-40',
                'slug' => 'training-strategi-pengelolaan-layanan-jkn-manajemen-utilisasi-rumah-sakit-yang-optimal',
                'badge' => 'Manajemen JKN',
                'level_name' => 'Tim Casemix, Manajer Medis & Keuangan RS',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pengelolaan operasional program Jaminan Kesehatan Nasional (JKN): optimalisasi clinical pathways, kendali biaya kendali mutu, pencegahan fraud klaim, dan mitigasi dispute pending klaim.',
                'full_description' => 'Pengelolaan operasional program Jaminan Kesehatan Nasional (JKN): optimalisasi clinical pathways, kendali biaya kendali mutu, pencegahan fraud klaim, dan mitigasi dispute pending klaim. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Kebijakan Penyelenggaraan Program Jaminan Kesehatan Nasional di Fasilitas Pelayanan Rumah Sakit',
  1 => 'Peran Strategis Tim Casemix dalam Harmonisasi Rekam Medis, Koding, dan Penagihan Klaim',
  2 => 'Penerapan Kendali Mutu dan Kendali Biaya (Cost & Quality Control) Pelayanan Peserta JKN',
  3 => 'Penyusunan & Kepatuhan Formularium Rumah Sakit Sesuai Formularium Nasional',
  4 => 'Mitigasi Klaim Dispute & Strategi Penyelesaian Pending Klaim Asuransi Sosial Kesehatan',
  5 => 'Pencegahan Potensi Kecurangan (Fraud) dalam Pelayanan Kesehatan Berbasis Sistem Pengawasan',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Tim Casemix RS, Manajer Pelayanan Pasien (Case Manager/MPP), Dokter Penelaah Klaim, dan Manajer Keuangan.',
            ],
            [
                'title' => 'Training Penguatan Koding Indonesian Case-Based Groups (INA-CBGs / IDRG): Menuju Klaim yang Valid dan Berbasis Bukti',
                'code' => 'TRS-41',
                'slug' => 'training-penguatan-koding-indonesian-case-based-groups-ina-cbgs-idrg-menuju-klaim-yang-valid-dan-berbasis-bukti',
                'badge' => 'Koding INA-CBGs',
                'level_name' => 'Koder Rekam Medis, Dokter Casemix & Staf Klaim',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Kaidah koding diagnosis ICD-10 dan prosedur tindakan ICD-9-CM presisi, pemahaman grouping INA-CBGs/IDRG, kelengkapan resume medis dokter, dan pencegahan klaim tidak layak bayar.',
                'full_description' => 'Kaidah koding diagnosis ICD-10 dan prosedur tindakan ICD-9-CM presisi, pemahaman grouping INA-CBGs/IDRG, kelengkapan resume medis dokter, dan pencegahan klaim tidak layak bayar. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Prinsip Dasar Sistem Pembiayaan Prospektif Case-Based Groups (CBGs / IDRG)',
  1 => 'Kaidah Morbiditas ICD-10: Pemilihan Diagnosis Utama, Diagnosis Sekunder, dan Komorbiditas',
  2 => 'Kaidah Koding Tindakan Prosedural Medis & Bedah Menggunakan ICD-9-CM Tepat Sesuai Regulasi',
  3 => 'Analisis Dampak Diagnosis Komorbiditas Berat (Major Complication/Comorbidity - MCC) pada Tarif Klaim',
  4 => 'Bedah Kelengkapan Resume Medis Dokter Penanggung Jawab Pelayanan (DPJP) yang Kredibel',
  5 => 'Strategi Verifikasi Internal & Rekonsiliasi Hasil Koding Sebelum Pengajuan Berkas Klaim',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Perekam Medis (Koder), Dokter Penanggung Jawab Verifikasi Klaim, Tim Casemix, dan Staf Penagihan RS.',
            ],
            [
                'title' => 'Training Asesmen Kompetensi Perawat: Mewujudkan Layanan Berfokus pada Pasien (Patient-Centered Care / PCC) Berbasis Kompetensi',
                'code' => 'TRS-42',
                'slug' => 'training-asesmen-kompetensi-perawat-mewujudkan-layanan-berfokus-pada-pasien-patient-centered-care-pcc-berbasis-kompetensi',
                'badge' => 'Asesmen Kompetensi',
                'level_name' => 'Asesor Keperawatan & Komite Keperawatan',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Metodologi asesmen kompetensi perawat klinis berbasis standar kompetensi, observasi langsung di tempat kerja (DOPS), portofolio klinis, dan implementasi Patient-Centered Care (PCC).',
                'full_description' => 'Metodologi asesmen kompetensi perawat klinis berbasis standar kompetensi, observasi langsung di tempat kerja (DOPS), portofolio klinis, dan implementasi Patient-Centered Care (PCC). Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Konsep Dasar Patient-Centered Care (PCC) & Asuhan Terintegrasi Tenaga Keperawatan',
  1 => 'Standar Kompetensi Kerja Perawat & Penyusunan Indikator Kinerja Klinis Spesifik Unit',
  2 => 'Metodologi Asesmen Kompetensi: Direct Observation of Procedural Skills (DOPS) dan Portofolio',
  3 => 'Peran Asesor Internal Keperawatan dalam Menilai Kebugaran Praktik Klinis Staf',
  4 => 'Pemberian Umpan Balik Konstruktif (Constructive Feedback) & Perencanaan Pengembangan Keterampilan',
  5 => 'Integrasi Hasil Asesmen Kompetensi dengan Rekredensialing & Rincian Kewenangan Klinis (RKK)',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Asesor Keperawatan Rumah Sakit, Komite Keperawatan, Subkomite Kredensial, dan Kepala Bidang Keperawatan.',
            ],
            [
                'title' => 'Training Penguatan Implementasi Program Pengendalian Resistensi Antimikroba (PPRA) Sesuai Standar Akreditasi Rumah Sakit Terkini',
                'code' => 'TRS-43',
                'slug' => 'training-penguatan-implementasi-program-pengendalian-resistensi-antimikroba-ppra-sesuai-standar-akreditasi-rumah-sakit-terkini',
                'badge' => 'PPRA Antimikroba',
                'level_name' => 'Komite PPRA, Dokter Klinisi & Farmasis',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Tata laksana penggunaan antibiotik bijak, klasifikasi AWaRe (Access, Watch, Reserve), penyusunan antibiogram rumah sakit, surveilans resistensi mikroba, dan audit kuantitatif metode DDD.',
                'full_description' => 'Tata laksana penggunaan antibiotik bijak, klasifikasi AWaRe (Access, Watch, Reserve), penyusunan antibiogram rumah sakit, surveilans resistensi mikroba, dan audit kuantitatif metode DDD. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Ancaman Global Resistensi Antimikroba & Urgensi Program PPRA di Rumah Sakit',
  1 => 'Klasifikasi Antibiotik WHO AWaRe: Pengelompokan Access, Watch, dan Reserve secara Disiplin',
  2 => 'Penyusunan Pola Kuman (Antibiogram) Rumah Sakit sebagai Panduan Terapi Antibiotik Empiris',
  3 => 'Audit Kuantitatif Penggunaan Antibiotik Menggunakan Metode Defined Daily Dose (DDD)',
  4 => 'Audit Kualitatif Penggunaan Antibiotik Menggunakan Metode Alur Gyssens',
  5 => 'Peran Farmasi Klinis dalam Automatic Stop Order dan Konsultasi Antibiotik Reserve',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Komite PPRA, Dokter Spesialis Mikrobiologi Klinis, Dokter Spesialis Farmakologi, Farmasis Klinis, dan Dokter DPJP.',
            ],
            [
                'title' => 'Training 7 Langkah Strategis Menuju Rumah Sakit Zero Harm dan Berdaya Saing Tinggi',
                'code' => 'TRS-44',
                'slug' => 'training-7-langkah-strategis-menuju-rumah-sakit-zero-harm-dan-berdaya-saing-tinggi',
                'badge' => 'Zero Harm Hospital',
                'level_name' => 'Pimpinan RS, Komite Mutu & Kepala Instalasi',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Framework transformasi menyeluruh menuju institusi keandalan tinggi (High Reliability Organization / HRO), pencegahan cedera pasien nol, efisiensi operasional, dan reputasi unggul.',
                'full_description' => 'Framework transformasi menyeluruh menuju institusi keandalan tinggi (High Reliability Organization / HRO), pencegahan cedera pasien nol, efisiensi operasional, dan reputasi unggul. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Prinsip Dasar High Reliability Organization (HRO) dalam Pelayanan Kesehatan Rumah Sakit',
  1 => 'Langkah 1 & 2: Kepemimpinan Berkomitmen Nol Cedera (Zero Harm) & Transparansi Data Mutu',
  2 => 'Langkah 3 & 4: Desain Sistem Andal Pencegah Kesalahan Manusia & Peningkatan Ketahanan Proses',
  3 => 'Langkah 5 & 6: Keterlibatan Aktif Pasien/Keluarga Serta Standarisasi Prosedur Operasional Tanpa Cacat',
  4 => 'Langkah 7: Evaluasi Berkelanjutan & Pembelajaran Sistemik Pasca Kejadian Insiden Nyaris Cedera',
  5 => 'Membangun Keunggulan Kompetitif Rumah Sakit Melalui Pengakuan Mutu dan Kepercayaan Publik',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Direksi Rumah Sakit, Dewan Direksi, Kepala Bidang Pelayanan Medis, Komite Mutu, dan Manajer Rumah Sakit.',
            ],
            [
                'title' => 'Training Manajemen Pelayanan CSSD dan Laundry Linen Terpadu di Rumah Sakit',
                'code' => 'TRS-45',
                'slug' => 'training-manajemen-pelayanan-cssd-dan-laundry-linen-terpadu-di-rumah-sakit',
                'badge' => 'CSSD & Laundry RS',
                'level_name' => 'Kepala Instalasi CSSD, Penanggung Jawab Laundry & Perawat Bedah',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pengelolaan sterilisasi alat medis sentral (CSSD) dan pencucian linen infeksius: alur satu arah (unidirectional flow), validasi autoclave uap/plasma, dan pencegahan kontaminasi silang.',
                'full_description' => 'Pengelolaan sterilisasi alat medis sentral (CSSD) dan pencucian linen infeksius: alur satu arah (unidirectional flow), validasi autoclave uap/plasma, dan pencegahan kontaminasi silang. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Tata Ruang & Desain Alur Satu Arah Instalasi CSSD (Area Dekontaminasi, Setting, Sterilisasi, Distribusi)',
  1 => 'Prosedur Pembersihan, Disinfeksi Enzimatik, dan Pengeringan Instrumen Bedah Kompleks',
  2 => 'Pemantauan Proses Sterilisasi: Indikator Mekanik, Indikator Kimia Kelas 1-6, dan Uji Biologis',
  3 => 'Penyimpanan Instrumen Steril: Suhu, Kelembapan, dan Batas Kedaluwarsa Kemasan Steril',
  4 => 'Manajemen Laundry Linen Rumah Sakit: Pemisahan Linen Infeksius dan Non-Infeksius',
  5 => 'Proses Pencucian Termal-Kimiawi Linen, Pengeringan, Pelipatan, dan Distribusi Bebas Debu',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Kepala Instalasi CSSD, Kepala Unit Laundry, Perawat Kamar Operasi, Sanitarian, dan Teknisi Elektromedis.',
            ],
            [
                'title' => 'Training Transformasi Rumah Sakit Menuju Rumah Sakit Ramah Keselamatan Pasien (Patient Safety Friendly Hospital)',
                'code' => 'TRS-46',
                'slug' => 'training-transformasi-rumah-sakit-menuju-rumah-sakit-ramah-keselamatan-pasien-patient-safety-friendly-hospital',
                'badge' => 'PSF Hospital',
                'level_name' => 'Manajemen RS & Pengelola Standar Mutu',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Adopsi kerangka kerja Patient Safety Friendly Hospital Initiative (PSFHI): kepemimpinan keselamatan, pelibatan pasien dan keluarga, keselamatan obat, dan audit kepatuhan lingkungan fisik.',
                'full_description' => 'Adopsi kerangka kerja Patient Safety Friendly Hospital Initiative (PSFHI): kepemimpinan keselamatan, pelibatan pasien dan keluarga, keselamatan obat, dan audit kepatuhan lingkungan fisik. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Kerangka Kerja Standar Patient Safety Friendly Hospital Initiative (PSFHI)',
  1 => 'Kepemimpinan Berorientasi Keselamatan & Alokasi Anggaran Khusus Program Safety',
  2 => 'Pelibatan Pasien dan Keluarga sebagai Mitra Sejajar dalam Keputusan Perawatan Medis',
  3 => 'Standardisasi Keselamatan Prosedur Invasif, Pengobatan, dan Pengendalian Lingkungan Faskes',
  4 => 'Audit Kepatuhan Sarana Prasarana Ramah Pasien Disabilitas, Lansia, dan Anak-Anak',
  5 => 'Penyusunan Rencana Aksi Pemenuhan Standar Rumah Sakit Ramah Keselamatan Pasien Terverifikasi',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Direktur Pelayanan Medis, Komite Keselamatan Pasien, Manajer Fasilitas Rumah Sakit, dan Dokter Spesialis.',
            ],
            [
                'title' => 'Training Pengelolaan Teknis Limbah B3, Rekayasa Lingkungan dan Sertifikat Laik Fungsi (SLF) Gedung Rumah Sakit',
                'code' => 'TRS-47',
                'slug' => 'training-pengelolaan-teknis-limbah-b3-rekayasa-lingkungan-dan-sertifikat-laik-fungsi-slf-gedung-rumah-sakit',
                'badge' => 'Limbah B3 & SLF',
                'level_name' => 'Sanitarian, Bagian K3RS & Pengelola Sarana Gedung',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Kepatuhan pertek-rintek limbah medis B3, baku mutu air limbah IPAL, tata kelola TPS B3 berizin, proteksi radiasi dan kebakaran, serta uji kelaikan teknis SLF gedung faskes.',
                'full_description' => 'Kepatuhan pertek-rintek limbah medis B3, baku mutu air limbah IPAL, tata kelola TPS B3 berizin, proteksi radiasi dan kebakaran, serta uji kelaikan teknis SLF gedung faskes. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Regulasi Baku Mutu Lingkungan & Persetujuan Teknis (Pertek) Pengelolaan Limbah Fasyankes',
  1 => 'Manajemen Tempat Penyimpanan Sementara (TPS) Limbah B3 Medis Berizin Sesuai Standar',
  2 => 'Operasional & Pemeliharaan Instalasi Pengolahan Air Limbah (IPAL) Rumah Sakit Aerobik-Anaerobik',
  3 => 'Prosedur Pengelolaan Limbah Infeksius, Limbah Benda Tajam, dan Limbah Sitotoksik Kanker',
  4 => 'Persyaratan Teknis Keandalan Bangunan Gedung Rumah Sakit Menuju Sertifikat Laik Fungsi (SLF)',
  5 => 'Audit Keselamatan Struktur Gedung, Sistem Proteksi Kebakaran, dan Jalur Evakuasi Darurat',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Sanitarian Rumah Sakit, Staf Instalasi Pemeliharaan Sarana RS (IPSRS), Komite K3RS, dan Manajer Lingkungan Hidup.',
            ],
            [
                'title' => 'Training Bedah Laporan Keuangan dan Indikator Kinerja Keuangan Sehat Rumah Sakit',
                'code' => 'TRS-48',
                'slug' => 'training-bedah-laporan-keuangan-dan-indikator-kinerja-keuangan-sehat-rumah-sakit',
                'badge' => 'Keuangan Rumah Sakit',
                'level_name' => 'Direktur Keuangan, Manajer Akuntansi & Satuan Pengawas Internal',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Analisis mendalam laporan keuangan rumah sakit: dekomposisi rasio likuiditas, solvabilitas, analisis profit margin per unit layanan (rawat inap, farmasi, lab), dan mitigasi kebocoran anggaran.',
                'full_description' => 'Analisis mendalam laporan keuangan rumah sakit: dekomposisi rasio likuiditas, solvabilitas, analisis profit margin per unit layanan (rawat inap, farmasi, lab), dan mitigasi kebocoran anggaran. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Struktur Unik Laporan Keuangan Rumah Sakit (Pendapatan Medis, Beban Farmasi, Beban Jasa Medis)',
  1 => 'Analisis Rasio Keuangan Khusus Fasyankes: Cash Ratio, Current Ratio, dan Days Sales Outstanding Klaim',
  2 => 'Perhitungan Unit Cost Layanan Medis (Activity-Based Costing Rumah Sakit)',
  3 => 'Analisis Margin Kontribusi dan Titik Impas (Break-Even Point) Instalasi Diagnostik Canggih',
  4 => 'Pencegahan Kebocoran Pendapatan (Revenue Leakage) Mulai dari Registrasi hingga Penagihan',
  5 => 'Penyusunan Anggaran Operasional dan Proyeksi Arus Kas Rumah Sakit Berbasis Bukti',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Direktur Keuangan, Manajer Akuntansi RS, Staf Satuan Pengawas Internal (SPI), dan Anggota Dewan Pengawas.',
            ],
            [
                'title' => 'Training Membangun Sistem Keselamatan Pasien yang Adaptif dan Berkelanjutan di Rumah Sakit',
                'code' => 'TRS-49',
                'slug' => 'training-membangun-sistem-keselamatan-pasien-yang-adaptif-dan-berkelanjutan-di-rumah-sakit',
                'badge' => 'Sistem Adaptif RS',
                'level_name' => 'Pimpinan RS & Komite Mutu',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Membangun ekosistem keselamatan pasien yang tangguh menghadapi perubahan krisis, evaluasi beban kerja nakes, implementasi sistem peringatan dini (Early Warning System / EWS), dan resiliensi sistem.',
                'full_description' => 'Membangun ekosistem keselamatan pasien yang tangguh menghadapi perubahan krisis, evaluasi beban kerja nakes, implementasi sistem peringatan dini (Early Warning System / EWS), dan resiliensi sistem. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Konsep Resiliensi Sistem Pelayanan Kesehatan Menghadapi Tekanan Beban Kerja Ekstrem',
  1 => 'Penerapan Early Warning Score (EWS, MEOWS, PEWS) untuk Deteksi Dini Perburukan Kondisi Klinis',
  2 => 'Pengorganisasian Tim Respon Cepat (Medical Emergency Team / Rapid Response Team)',
  3 => 'Manajemen Kelelahan Tenaga Medis (Burnout & Fatigue Management) Pencegah Kesalahan Fatal',
  4 => 'Sistem Monitoring & Evaluasi Digital Indikator Keselamatan Pasien di Setiap Ruang Perawatan',
  5 => 'Membangun Komitmen Berkelanjutan Pimpinan dan Staf Medis Menjaga Standar Keamanan Pasien',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Komite Keselamatan Pasien, Kepala Ruangan Keperawatan, Dokter Ruang Intensif, dan Direktur Pelayanan Medik.',
            ],
            [
                'title' => 'Training Implementasi Health Technology Assessment (HTA) Rumah Sakit (Tingkat Dasar)',
                'code' => 'TRS-50',
                'slug' => 'training-implementasi-health-technology-assessment-hta-rumah-sakit-tingkat-dasar',
                'badge' => 'HTA Rumah Sakit',
                'level_name' => 'Komite Medik, Farmasis & Tim Penilai Teknologi RS',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Metodologi penilaian efektivitas klinis, analisis efektivitas biaya (Cost-Effectiveness Analysis / CEA), dan kelayakan adopsi obat atau alat kesehatan baru di rumah sakit.',
                'full_description' => 'Metodologi penilaian efektivitas klinis, analisis efektivitas biaya (Cost-Effectiveness Analysis / CEA), dan kelayakan adopsi obat atau alat kesehatan baru di rumah sakit. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Pengantar Health Technology Assessment (HTA) & Relevansinya bagi Manajemen Rumah Sakit',
  1 => 'Metodologi Penelusuran Bukti Ilmiah Berbasis Bukti (Evidence-Based Medicine)',
  2 => 'Analisis Efektivitas Biaya: Cost-Effectiveness Analysis (CEA) dan Cost-Utility Analysis (CUA)',
  3 => 'Evaluasi Keamanan, Efikasi, dan Dampak Anggaran (Budget Impact Analysis) Alat Medis Baru',
  4 => 'Peran Komite HTA Rumah Sakit dalam Seleksi Obat Formularium dan Pengadaan Alat Medis',
  5 => 'Penyusunan Ringkasan Rekomendasi Kebijakan HTA bagi Jajaran Direksi Rumah Sakit',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Komite Farmasi dan Terapi (KFT), Komite Medik, Apoteker Klinis, Manajer Pengadaan Medis, dan Direktur Layanan.',
            ],
            [
                'title' => 'Training Asuhan Keperawatan Kardiovaskular & Manajemen Pasien Jantung di Rumah Sakit',
                'code' => 'TRS-51',
                'slug' => 'training-asuhan-keperawatan-kardiovaskular-manajemen-pasien-jantung-di-rumah-sakit',
                'badge' => 'Keperawatan Jantung',
                'level_name' => 'Perawat Kardiovaskular, ICCU & Ruang Jantung',
                'duration' => '3 Hari (Pelatihan Tatap Muka / In-House / Online Interaktif)',
                'certification' => 'Sertifikat Kompetensi Resmi Rumah Sakit & Standar Pelayanan Mutu',
                'method' => 'Workshop Interaktif, Studi Kasus Nyata & Simulasi Praktik',
                'price_note' => 'Investasi Kompetitif Fasyankes (Tersedia Paket In-House RS)',
                'icon' => 'bi-hospital-fill',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Asuhan keperawatan pasien sindrom koroner akut, gagal jantung kongestif, pemantauan pasca kateterisasi jantung (PCI), interpretasi rekaman EKG aritmia, dan rehabilitasi jantung.',
                'full_description' => 'Asuhan keperawatan pasien sindrom koroner akut, gagal jantung kongestif, pemantauan pasca kateterisasi jantung (PCI), interpretasi rekaman EKG aritmia, dan rehabilitasi jantung. Program pelatihan ini membekali peserta dengan standar operasional mutakhir, kepatuhan regulasi kesehatan, studi kasus klinis riil, dan lembar kerja evaluasi terstandarisasi untuk diaplikasikan di fasyankes.',
                'curriculum' => array (
  0 => 'Anatomi dan Fisiologi Sistem Kardiovaskular & Sirkulasi Koroner Jantung',
  1 => 'Asuhan Keperawatan Pasien Sindrom Koroner Akut (UAP, NSTEMI, STEMI) Fase Akut',
  2 => 'Perawatan Pasca Tindakan Percutaneous Coronary Intervention (PCI): Manajemen Akses Femoral & Radial',
  3 => 'Interpretasi Cepat Rekaman EKG 12 Sandapan pada Kasus Kegawatan Jantung & Blok AV',
  4 => 'Penatalaksanaan Syok Kardiogenik dan Asuhan Pasien Gagal Jantung Kongestif Berat',
  5 => 'Program Edukasi Pemulihan Pasien Jantung: Modifikasi Gaya Hidup & Latihan Fisik Terkendali',
),
                'requirements' => [
                    'Dokter, Perawat, Bidan, Tenaga Kesehatan, atau Manajemen Fasilitas Kesehatan',
                    'Membawa identitas diri dan surat tugas dari fasyankes bila mewakili instansi',
                    'Komitmen menerapkan standar mutu dan keselamatan pelayanan pasien'
                ],
                'facilities' => [
                    'Modul Materi Lengkap, Template Lembar Kerja & Dokumen SPO Acuan',
                    'Sertifikat Kompetensi Resmi dengan Nomor Registrasi Terverifikasi',
                    'Akses Diskusi & Konsultasi Berkelanjutan dengan Instruktur Praktisi',
                    'Toolkit Panduan Praktis Siap Implementasi di Seluruh Unit Fasilitas Kesehatan'
                ],
                'target_audience' => 'Perawat Ruang Rawat Jantung, Perawat ICCU, Perawat Ruang Kateterisasi (Cathlab), dan Dokter Jaga Ruang Jantung.',
            ]        ];
    }

    /**
     * 10 Rumah Sakit & Institusi Kesehatan Rujukan Terkemuka (Mitra & Standar Acuan)
     */
    public static function getPartners(): array
    {
        return [
            ['name' => 'RSUP Nasional Dr. Cipto Mangunkusumo (RSCM)', 'role' => 'Pusat Rujukan Nasional & Rumah Sakit Pendidikan Utama', 'category' => 'Rumah Sakit Vertikal'],
            ['name' => 'RS Jantung & Pembuluh Darah Harapan Kita', 'role' => 'Pusat Jantung Terpadu & Rujukan Kardiovaskular Nasional', 'category' => 'Rumah Sakit Khusus'],
            ['name' => 'Siloam Hospitals Group', 'role' => 'Jejaring Rumah Sakit Swasta Berstandar Internasional', 'category' => 'Jejaring Rumah Sakit'],
            ['name' => 'RS Mitra Keluarga Group', 'role' => 'Layanan Kesehatan Keluarga & Unggulan Mutu Pelayanan', 'category' => 'Jejaring Rumah Sakit'],
            ['name' => 'RS Pondok Indah Group', 'role' => 'Standar Patient Safety & Layanan Medis Modern Terpadu', 'category' => 'Rumah Sakit Swasta'],
            ['name' => 'Mayapada Hospital Group', 'role' => 'Inovasi Pelayanan Medis & Fasilitas Mutakhir', 'category' => 'Jejaring Rumah Sakit'],
            ['name' => 'RS Kanker Dharmais', 'role' => 'Pusat Kanker Nasional & Penanganan Onkologi Terpadu', 'category' => 'Rumah Sakit Khusus'],
            ['name' => 'RS Hermina Group', 'role' => 'Rujukan Pelayanan Ibu & Anak Serta Kesehatan Umum', 'category' => 'Jejaring Rumah Sakit'],
            ['name' => 'RS Premier Group', 'role' => 'Pelayanan Spesialistik & Kepatuhan Standar Akreditasi', 'category' => 'Rumah Sakit Swasta'],
            ['name' => 'RS Columbia Asia Indonesia', 'role' => 'Layanan Medis Modern, Patient Centered Care & Kualitas Unggul', 'category' => 'Rumah Sakit Swasta'],
        ];
    }

    /**
     * FAQ Khusus Training Rumah Sakit
     */
    public static function getFaqs(): array
    {
        return [
            [
                'question' => 'Mengapa pelatihan keselamatan pasien, kegawatdaruratan, dan tata kelola klinis sangat penting bagi faskes?',
                'answer' => 'Rumah sakit merupakan institusi padat modal, padat teknologi, dan padat karya yang menuntut standar keamanan nol cacat (zero patient harm). Pelatihan terstruktur memberikan bekal pengetahuan mendalam bagi tenaga kesehatan dan manajemen untuk mematuhi regulasi, meningkatkan kepuasan pasien, meminimalkan risiko tuntutan hukum medis, serta mempertahankan standar akreditasi rumah sakit tingkat Paripurna.',
            ],
            [
                'question' => 'Apakah materi pelatihan (Dialisis, PPGD, BTCLS/ACLS, PALS, USG, PPI, MFK, dll) mencakup praktik langsung?',
                'answer' => 'Ya, seluruh pelatihan klinis dan teknis kami memadukan 30% teori komprehensif dan 70% simulasi praktis (hands-on workshop), seperti simulasi mega-code resusitasi, hands-on probe sonografi USG, bedah kasus investigasi RCA/FMEA, serta praktik pemeliharaan instrumen medis steril.',
            ],
            [
                'question' => 'Apakah sertifikat pelatihan diakui untuk pemenuhan elemen penilaian akreditasi rumah sakit?',
                'answer' => 'Ya, seluruh sertifikat kelulusan program pelatihan dilengkapi dengan silabus resmi, jam pelatihan (JPL) terinci, nomor registrasi unik, serta QR Code verifikasi online. Sertifikat ini dapat diajukan sebagai bukti dokumen kompetensi staf medis dan non-medis untuk pemenuhan elemen penilaian regulasi dan akreditasi rumah sakit.',
            ],
            [
                'question' => 'Bagaimana skema pelaksanaan pelatihan rumah sakit yang tersedia?',
                'answer' => 'Kami menyelenggarakan 3 skema fleksibel: (1) In-House Training langsung di rumah sakit Anda dengan studi kasus nyata internal faskes; (2) Public Workshop tatap muka di kota-kota besar; dan (3) Interactive Live Webinar melalui platform video conference interaktif dengan pendampingan langsung oleh praktisi rumah sakit senior.',
            ],
            [
                'question' => 'Siapa saja yang menjadi instruktur dan narasumber pelatihan?',
                'answer' => 'Seluruh sesi pelatihan dipandu oleh para praktisi senior perumahsakitan, mantan direktur rumah sakit, dokter spesialis konsultan, Infection Preventionist (IPCN/IPCD) senior, surveyor akreditasi berpengalaman, serta ahli keselamatan kerja rumah sakit (K3RS) dengan jam terbang lebih dari 15 tahun.',
            ],
            [
                'question' => 'Bagaimana cara mendaftar atau mengajukan proposal in-house training untuk rumah sakit kami?',
                'answer' => 'Anda dapat langsung menghubungi Hotline WhatsApp Utama kami di 0813-9981-0272 atau 3 hotline resmi lainnya. Tim konsultan kami akan membantu menganalisis kebutuhan rumah sakit Anda dan mengirimkan silabus lengkap beserta penawaran proposal resmi dalam waktu 1x24 jam.',
            ],
        ];
    }

    /**
     * Kategori Topik Artikel Teknis
     */
    public static function getArticleTopics(): array
    {
        return [
            ['name' => 'Semua Topik', 'slug' => 'semua'],
            ['name' => 'Training Dialisis & Hemodialisa', 'slug' => 'training-dialisis-hemodialisa'],
            ['name' => 'Training Patient Safety & RCA', 'slug' => 'training-keselamatan-pasien-rca'],
            ['name' => 'Training Kegawatdaruratan & PPGD', 'slug' => 'training-kegawatdaruratan-ppgd'],
            ['name' => 'Training BTCLS, BLS & ACLS', 'slug' => 'training-btcls-acls'],
            ['name' => 'Training Pelayanan Maternal & ANC USG', 'slug' => 'training-anc-usg'],
            ['name' => 'Training Pelayanan Intensif (ICU/PICU)', 'slug' => 'training-pelayanan-icu'],
            ['name' => 'Training Pencegahan Infeksi (PPI/IPCN)', 'slug' => 'training-ppi-ipcn'],
            ['name' => 'Training Fasilitas & K3 Rumah Sakit', 'slug' => 'training-mfk-k3rs'],
            ['name' => 'Training Standar Akreditasi & Mutu (PMKP)', 'slug' => 'training-akreditasi-mutu'],
            ['name' => 'Training JKN & Koding INA-CBGs', 'slug' => 'training-jkn-koding'],
            ['name' => 'Training Perawatan Luka & Sirkumsisi Modern', 'slug' => 'training-luka-sirkumsisi'],
            ['name' => 'Training Keuangan & Transformasi EBITDA RS', 'slug' => 'training-keuangan-ebitda-rs'],
        ];
    }

    /**
     * Generator 200 Artikel per Daerah (6000-9000 kata per artikel)
     * Judul selalu diawali "Training"
     */
    /**
     * Generator 200 Artikel per Daerah (6000-9000 kata per artikel)
     * Judul selalu diawali "Training" sesuai 51 program kesehatan & rumah sakit
     */
    public static function getRegionalArticleList(array|string $regionData, int $limit = 200): array
    {
        $province = is_array($regionData) ? ($regionData['province'] ?? 'Indonesia') : $regionData;
        $city = is_array($regionData) ? ($regionData['city'] ?? '') : '';
        $district = is_array($regionData) ? ($regionData['district'] ?? '') : '';

        $regionName = $district ? "Kecamatan {$district}, {$city}" : ($city ?: $province);

        $programs = self::getPrograms();
        $totalPrograms = count($programs);

        $subSpecialties = [
            'Instalasi Gawat Darurat (IGD) & Triase Cepat',
            'Instalasi Bedah Sentral (IBS) & Ruang Operasi',
            'Intensive Care Unit (ICU) & Pelayanan Kritis',
            'Bangsal Rawat Inap Medikal Bedah Terpadu',
            'Poliklinik Spesialis & Rawat Jalan Terpadu',
            'Unit Dialisis & Hemodialisa Klinis',
            'Instalasi Kebidanan & Kamar Bersalin VK',
            'Unit Kardiovaskular & Pelayanan Jantung Terpadu',
            'Instalasi Farmasi & Pemantauan Terapi Obat',
            'Instalasi CSSD & Pusat Sterilisasi Rumah Sakit',
            'Laboratorium Patologi Klinik & Bank Darah',
            'Instalasi Radiologi Diagnostik & Imejing',
            'Unit Manajemen Risiko & Komite Mutu Faskes',
            'Tim Akreditasi & Tata Kelola Standar Pelayanan',
        ];

        $articles = [];
        for ($i = 1; $i <= $limit; $i++) {
            $pIndex = ($i - 1) % $totalPrograms;
            $selectedProg = $programs[$pIndex];

            if ($i <= $totalPrograms) {
                $title = "{$selectedProg['title']} di {$regionName}";
            } else {
                $cycle = floor(($i - 1) / $totalPrograms);
                $sIndex = ($cycle - 1) % count($subSpecialties);
                $specialty = $subSpecialties[$sIndex];
                $title = "{$selectedProg['title']} di {$regionName} — Implementasi Klinis Unit {$specialty}";
            }

            // Memastikan judul selalu diawali kata "Training"
            if (!str_starts_with($title, 'Training')) {
                $title = 'Training ' . $title;
            }

            $slug = \Illuminate\Support\Str::slug($title);
            $views = 295 + ($i * 8);

            $articles[] = (object)[
                'index' => $i,
                'title' => $title,
                'slug' => $slug,
                'excerpt' => "Panduan implementasi teknis mengenai {$title} mencakup tata kelola klinis komprehensif, evaluasi risiko medis, studi kasus nyata, dan lembar kerja keselamatan pasien di fasyankes {$regionName}.",
                'views_count' => $views,
                'author' => 'Tim Ahli Manajemen & Pelayanan Medis Rumah Sakit',
                'created_at' => now()->subDays(200 - $i)->format('Y-m-d H:i:s'),
                'content' => self::buildFullArticleContent($title, $regionName, $selectedProg),
            ];
        }

        return $articles;
    }

    /**
     * Membangun artikel 6.000 - 9.000 kata yang berbobot klinis, edukatif dan profesional
     * Tanpa teks pemerintah dan tanpa teks AI
     */
    public static function buildFullArticleContent(string $title, string $regionName, ?array $program): string
    {
        $progTitle = $program['title'] ?? $title;
        $progBadge = $program['badge'] ?? 'Standar Mutu Pelayanan Kesehatan';
        $progLevel = $program['level_name'] ?? 'Tenaga Medis & Manajemen Rumah Sakit';
        $shortDesc = $program['short_description'] ?? 'Pelatihan komprehensif peningkatan mutu klinis, tata kelola fasilitas kesehatan, dan keselamatan pasien.';
        $fullDesc = $program['full_description'] ?? 'Program komprehensif untuk standarisasi operasional dan akreditasi rumah sakit.';

        $curriculumList = '';
        if (!empty($program['curriculum'])) {
            foreach ($program['curriculum'] as $idx => $curr) {
                $num = $idx + 1;
                $curriculumList .= "<li><strong>Modul Utama {$num}:</strong> {$curr}. Pembahasan mencakup kerangka konseptual, telaah literatur klinis terkini, studi kasus komparatif, dan simulasi penanganan kasus nyata di fasyankes.</li>";
            }
        } else {
            $curriculumList = "<li><strong>Modul Utama:</strong> Konsep dasar tata kelola klinis, mitigasi risiko medis, dan evaluasi berkala kepatuhan prosedur di lingkungan pelayanan.</li>";
        }

        $safeTitle = htmlspecialchars($title);
        $safeRegion = htmlspecialchars($regionName);
        $safeBadge = htmlspecialchars($progBadge);
        $safeLevel = htmlspecialchars($progLevel);
        $safeDesc = htmlspecialchars($fullDesc);
        $urlTitle = urlencode($title);
        $urlRegion = urlencode($regionName);

        return <<<HTML
<article class="article-rich-content">
    <div class="article-lead-box" style="background: #f0fdf4; border-left: 5px solid #16a34a; padding: 24px; margin-bottom: 32px; border-radius: 10px;">
        <h2 style="color: #065f46; font-size: 1.45rem; font-weight: 800; margin-top: 0; margin-bottom: 12px;">{$safeTitle} di {$safeRegion}</h2>
        <p style="font-size: 1.05rem; line-height: 1.85; color: #064e3b; margin: 0; font-weight: 500;">
            Penyelenggaraan pelayanan kesehatan berkualitas tinggi, aman, dan berkesinambungan merupakan tuntutan mutlak bagi setiap institusi rumah sakit, klinik, dan fasilitas pelayanan kesehatan di seluruh wilayah <strong>{$safeRegion}</strong>. Menghadapi dinamika kebutuhan medis yang semakin kompleks, program <strong>{$safeTitle}</strong> hadir sebagai landasan strategis dalam mengintegrasikan keunggulan tata kelola klinis, kompetensi profesional tenaga medis, serta kepatuhan penuh terhadap standar mutu akreditasi nasional dan internasional.
        </p>
    </div>

    <!-- PANDUAN RINGKAS MODUL -->
    <div class="program-overview-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; margin-bottom: 35px; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
        <h3 style="color: #1e293b; font-size: 1.25rem; font-weight: 700; margin-top: 0; border-bottom: 2px solid #10b981; padding-bottom: 10px;">Ikhtisar Teknis Program Pelatihan</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; margin-top: 15px;">
            <div style="background: #f8fafc; padding: 14px; border-radius: 8px;">
                <span style="display: block; font-size: 0.8rem; color: #64748b; font-weight: 600; text-transform: uppercase;">Kategori Program</span>
                <strong style="color: #0f172a; font-size: 0.95rem;">{$safeBadge}</strong>
            </div>
            <div style="background: #f8fafc; padding: 14px; border-radius: 8px;">
                <span style="display: block; font-size: 0.8rem; color: #64748b; font-weight: 600; text-transform: uppercase;">Sasaran Partisipan</span>
                <strong style="color: #0f172a; font-size: 0.95rem;">{$safeLevel}</strong>
            </div>
            <div style="background: #f8fafc; padding: 14px; border-radius: 8px;">
                <span style="display: block; font-size: 0.8rem; color: #64748b; font-weight: 600; text-transform: uppercase;">Fokus Wilayah Layanan</span>
                <strong style="color: #0f172a; font-size: 0.95rem;">{$safeRegion}</strong>
            </div>
        </div>
        <p style="margin-top: 18px; line-height: 1.8; color: #334155; font-size: 0.98rem;">
            {$safeDesc}
        </p>
    </div>

    <!-- BAB 1 -->
    <section class="content-chapter" id="bab-1" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 1: Lanskap Pelayanan Kesehatan Modern & Urgensi Standardisasi Mutu Rumah Sakit di {$safeRegion}</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Dinamika sektor kesehatan abad ke-21 menuntut transformasi fundamental pada cara fasilitas pelayanan kesehatan merancang, menyelenggarakan, dan mengevaluasi seluruh mata rantai pelayanannya. Fasilitas perumahsakitan di {$safeRegion} kini beroperasi di bawah pengawasan publik yang sangat kritis, di mana kecepatan penyebaran informasi dan transparansi rekam jejak mutu pelayanan menjadi faktor penentu reputasi serta kelangsungan hidup institusi.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Setiap proses klinis yang berlangsung di dalam rumah sakit—mulai dari penerimaan awal di Instalasi Gawat Darurat (IGD), proses triase terpadu, pemeriksaan diagnostik canggih di laboratorium dan radiologi, tindakan operatif di Instalasi Bedah Sentral (IBS), asuhan intensif di Intensive Care Unit (ICU), hingga pelayanan farmasi dan pemulangan pasien—mengandung spektrum risiko biologis, teknologis, dan manusiawi yang luar biasa tinggi. Kesalahan minor dalam verifikasi identitas pasien, keterlambatan membaca tanda bahaya perburukan klinis (clinical deterioration), atau ketidakpatuhan terhadap prosedur sterilisasi instrumen bedah dapat berakibat fatal berupa kecacatan permanen hingga kehilangan nyawa.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Standardisasi melalui <strong>{$safeTitle}</strong> di {$safeRegion} bertujuan untuk mereduksi variabilitas tindakan klinis yang tidak perlu, meniadakan kesenjangan pengetahuan antar personel medis, serta membangun ekosistem kerja yang tangguh (resilient healthcare system). Keberhasilan pelayanan medis modern tidak lagi disandarkan semata pada kecakapan individual seorang klinisi, melainkan pada keandalan sistem interdisipliner yang bekerja secara sinkron dengan komunikasi tertutup (closed-loop communication), protokol terstandarisasi, dan budaya keselamatan yang terinternalisasi secara menyeluruh.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Kondisi demografis dan epidemiologis di {$safeRegion} memperlihatkan peningkatan prevalensi penyakit tidak menular (seperti kardiovaskular, stroke, diabetes melitus, gagal ginjal kronik, dan keganasan) berdampingan dengan ancaman penyakit infeksi saluran pernapasan dan infeksi menular lainnya. Karakteristik morbiditas ganda ini mengharuskan rumah sakit memiliki kesiapan sumber daya manusia yang adaptif, memiliki kompetensi klinis yang tervalidasi, serta mampu menerapkan prinsip kedokteran berbasis bukti (evidence-based medicine) dan asuhan keperawatan holistik (holistic nursing care).
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Dalam kerangka akreditasi fasilitas kesehatan, konsistensi operasional merupakan parameter penilaian paling fundamental. Penilai akreditasi tidak semata melihat kelengkapan dokumen regulasi di atas kertas, melainkan menguji bagaimana staf lapangan mengimplementasikan panduan tersebut saat menghadapi pasien riil. Oleh karena itu, penguatan kapasitas sumber daya manusia di {$safeRegion} melalui modul terstruktur menjadi investasi terpenting guna mempertahankan reputasi institusi dan melindungi segenap civitas hospitalia.
        </p>
    </section>

    <!-- BAB 2 -->
    <section class="content-chapter" id="bab-2" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 2: Pilar Tata Kelola Rumah Sakit (Corporate & Clinical Governance) Berkelanjutan</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Fondasi keberhasilan sebuah fasilitas kesehatan bersandar pada keselarasan dua pilar utama: Tata Kelola Korporasi (Corporate Governance) dan Tata Kelola Klinis (Clinical Governance). Ketimpangan antara kedua pilar ini menjadi akar penyebab utama timbulnya konflik internal, inefisiensi alokasi anggaran operasional, sengketa medikolegal, serta penurunan mutu pelayanan secara sistemik.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Tata Kelola Korporasi berfokus pada kepemimpinan visioner jajaran direksi, perencanaan strategis jangka panjang, tata kelola keuangan yang akuntabel, pengelolaan modal insan (human capital), serta penyediaan infrastruktur dan sarana prasarana penunjang yang andal di {$safeRegion}. Di sisi lain, Tata Kelola Klinis merupakan mekanisme terstruktur di mana staf medis, keperawatan, dan tenaga kesehatan lainnya bertanggung jawab secara moral dan profesional untuk terus-menerus meningkatkan mutu pelayanan serta mengamankan standar asuhan yang tinggi dengan menciptakan lingkungan kerja yang kondusif bagi keunggulan klinis.
        </p>
        <h4 style="color: #1e293b; font-size: 1.15rem; font-weight: 700; margin-top: 20px; margin-bottom: 10px;">Komponen Esensial Tata Kelola Klinis Modern</h4>
        <ul style="line-height: 1.85; color: #334155; margin-bottom: 15px; padding-left: 20px;">
            <li><strong>Kredensialing & Penugasan Klinis:</strong> Verifikasi keabsahan ijazah, surat tanda registrasi, sertifikat kompetensi keahlian, dan riwayat etika profesi seluruh dokter, perawat, bidan, serta tenaga kesehatan lainnya sebelum diterbitkan Surat Penugasan Klinis (SPK) dengan Rincian Kewenangan Klinis (RKK) yang spesifik.</li>
            <li><strong>Audit Klinis Komprehensif:</strong> Evaluasi sistematis dan kritis terhadap kepatuhan pelaksanaan clinical pathway dan panduan praktik klinis (PPK) pada kasus-kasus prioritas untuk mendeteksi variasi asuhan, underuse, overuse, maupun misuse tindakan medis.</li>
            <li><strong>Pendidikan & Pelatihan Berkelanjutan:</strong> Pemenuhan jam pelatihan profesional bagi seluruh staf guna memastikan pembaruan keilmuan mutakhir dan kemahiran keterampilan teknis prosedural.</li>
            <li><strong>Manajemen Efektivitas Klinis:</strong> Penerapan riset terkini, uji kelayakan teknologi kesehatan (health technology assessment), dan formularium obat yang rasional untuk menjamin pasien menerima terapi yang tepat guna dan bernilai tinggi (high-value care).</li>
            <li><strong>Keterlibatan Pasien & Komunitas:</strong> Membuka kanal umpan balik transparan bagi pasien dan keluarga untuk menyampaikan pengalaman asuhan (patient experience) yang direspons secara proaktif oleh tim manajemen mutu rumah sakit.</li>
        </ul>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Integrasi kedua tata kelola ini menjamin bahwa setiap kebijakan operasional yang diambil oleh manajemen rumah sakit senantiasa berpijak pada keselamatan pasien dan nilai-nilai etika luhur profesi kesehatan, sehingga rumah sakit di {$safeRegion} mampu meraih keberlanjutan finansial tanpa pernah mengorbankan mutu keselamatan penerima layanan.
        </p>
    </section>

    <!-- BAB 3 -->
    <section class="content-chapter" id="bab-3" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 3: Implementasi Holistik 6 Sasaran Keselamatan Pasien (SKP) Berstandar Paripurna</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Sasaran Keselamatan Pasien (SKP) merupakan denyut nadi operasional rumah sakit yang dirancang untuk mencegah terjadinya kesalahan medis sistemik yang paling sering menimbulkan dampak fatal bagi pasien. Implementasi SKP di {$safeRegion} bukan sekadar pemenuhan dokumen ceklis saat persiapan survei akreditasi, melainkan pembiasaan perilaku tanpa kompromi dalam setiap sentuhan asuhan klinis harian.
        </p>
        
        <div style="background: #f1f5f9; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
            <h4 style="color: #0f172a; margin-top: 0; font-weight: 700;">1. Ketepatan Identifikasi Pasien (SKP 1)</h4>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                Kesalahan identifikasi dapat berujung pada pemberian obat yang salah, tindakan bedah pada organ yang keliru, hingga transfusi darah dengan golongan yang tidak cocok. Prosedur baku mewajibkan penggunaan minimal dua parameter identifikasi aktif (nama lengkap pasien dan tanggal lahir atau nomor rekam medis unik) yang diverifikasi langsung dengan pasien atau keluarga yang kompeten. Verifikasi dilakukan sebelum pemberian obat, pengambilan spesimen darah/cairan tubuh, intervensi radiologi diagnostik, dan pelaksanaan prosedur bedah/invasif. Penggunaan gelang identifikasi berkode warna (biru muda untuk pria, merah muda untuk wanita, merah untuk alergi, kuning untuk risiko jatuh, dan ungu untuk status Do Not Resuscitate) harus dipasang dengan edukasi aktif kepada pasien di {$safeRegion}.
            </p>
        </div>

        <div style="background: #f1f5f9; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
            <h4 style="color: #0f172a; margin-top: 0; font-weight: 700;">2. Peningkatan Komunikasi Efektif Antar Staf Medis (SKP 2)</h4>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                Komunikasi yang terdistorsi atau terburu-buru merupakan kontributor tertinggi timbulnya insiden keselamatan pasien di lingkungan kritis. Rumah sakit di {$safeRegion} menerapkan teknik pelaporan terstandarisasi SBAR (Situation, Background, Assessment, Recommendation) pada saat serah terima pasien antar shift jaga (handover), transfer pasien antar unit rawat, maupun pelaporan kondisi kritis kepada dokter penanggung jawab pelayanan (DPJP). Untuk instruksi verbal atau pelaporan hasil nilai kritis (critical values) via telepon, protokol Tulis-Baca-Konfirmasi Ulang (Write down, Read back, Confirmation / CABAK) wajib dilaksanakan secara disiplin dengan tanda tangan konfirmasi DPJP dalam kurun waktu 1x24 jam.
            </p>
        </div>

        <div style="background: #f1f5f9; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
            <h4 style="color: #0f172a; margin-top: 0; font-weight: 700;">3. Peningkatan Keamanan Obat Berisiko Tinggi / High-Alert Medications (SKP 3)</h4>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                Obat-obatan yang memiliki risiko tinggi menimbulkan bahaya bermakna jika terjadi kesalahan dalam penggunaannya mencakup elektrolit konsentrat pekat (seperti Kalium Klorida 7.46%, Natrium Klorida 3%), insulin, agen kemoterapi sitostatika, antikoagulan heparin, dan obat-obatan narkotika. Pengelolaan ketat meliputi penyimpanan di lemari terkunci dengan akses terbatas, penempelan label peringatan merah menyala bertuliskan "HIGH ALERT", pemisahan penataan obat Look-Alike Sound-Alike (LASA / NORUM) dengan metode Tall Man Lettering, serta kewajiban verifikasi ganda independen (independent double check) oleh dua perawat berbeda sebelum obat disuntikkan kepada pasien di {$safeRegion}.
            </p>
        </div>

        <div style="background: #f1f5f9; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
            <h4 style="color: #0f172a; margin-top: 0; font-weight: 700;">4. Kepastian Tepat-Lokasi, Tepat-Prosedur, Tepat-Pasien Operasi (SKP 4)</h4>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                Kamar operasi merupakan lingkungan bertekanan tinggi yang rentan terhadap salah sisi dan salah pasien jika protokol perioperatif diabaikan. Pelaksanaan Surgical Safety Checklist (SSC) yang diadopsi secara global wajib dijalankan dalam 3 fase kritis: Sign In (sebelum induksi anestesi oleh perawat sirkuler dan penata anestesi), Time Out (jeda waktu hening sesaat sebelum sayatan pertama dipimpin oleh dokter spesialis bedah bersama seluruh tim operasi), dan Sign Out (sebelum menutup rongga tubuh dan memindahkan pasien dari kamar bedah untuk memastikan kelengkapan kassa, jarum, instrumen, dan penandaan spesimen jaringan). Penandaan sisi operasi (site marking) menggunakan tanda permanen yang jelas wajib dilakukan oleh operator utama saat pasien dalam kondisi sadar di ruang rawat atau pra-operasi.
            </p>
        </div>

        <div style="background: #f1f5f9; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
            <h4 style="color: #0f172a; margin-top: 0; font-weight: 700;">5. Pengurangan Risiko Infeksi Terkait Pelayanan Kesehatan / HAIs (SKP 5)</h4>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                Pencegahan infeksi nosokomial bertumpu pada disiplin kebersihan tangan (hand hygiene) seluruh insan rumah sakit. Implementasi 6 langkah kebersihan tangan standar dengan sabun antiseptik berbasis air mengalir atau handrub berbasis alkohol wajib dipraktikkan pada 5 Momen Kritis: (1) sebelum menyentuh pasien, (2) sebelum melakukan tindakan aseptik, (3) setelah terpapar cairan tubuh pasien, (4) setelah menyentuh pasien, dan (5) setelah menyentuh lingkungan sekitar pasien. Ketersediaan dispenser handrub di setiap titik kontak asuhan di {$safeRegion} harus dipantau secara berkesinambungan oleh Infection Prevention and Control Nurse (IPCN).
            </p>
        </div>

        <div style="background: #f1f5f9; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
            <h4 style="color: #0f172a; margin-top: 0; font-weight: 700;">6. Pengurangan Risiko Cedera Pasien Akibat Jatuh (SKP 6)</h4>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                Jatuh di rumah sakit dapat mengakibatkan fraktur panggul, trauma kepala berat, pemanjangan hari rawat (length of stay), hingga komplikasi fatal pada pasien lansia atau pasien pasca bedah. Skrining dan asesmen risiko jatuh dilakukan sejak kontak pertama di poliklinik dan IGD menggunakan instrumen tervalidasi (seperti Get Up and Go Test, Skala Morse Fall Scale untuk pasien dewasa rawat inap, Humpty Dumpty untuk pediatrik, dan Skala Ontario untuk rawat inap geriatri). Pasien dengan risiko sedang hingga tinggi diberikan tanda gelang kuning, stiker risiko jatuh pada bed dan rekam medis, pemasangan pengaman tempat tidur (side rails), lantai anti-licin, pencahayaan memadai, serta pendampingan saat mobilisasi ke kamar mandi.
            </p>
        </div>
    </section>

    <!-- BAB 4 -->
    <section class="content-chapter" id="bab-4" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 4: Manajemen Insiden Keselamatan Pasien (IKP), Grading Matriks Risiko & Investigasi Root Cause Analysis (RCA)</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Setiap fasilitas pelayanan kesehatan yang matang menyadari bahwa kesalahan manusia tidak dapat dieliminasi secara total, namun sistem yang kokoh mampu mendeteksi dan menjerat kesalahan tersebut sebelum mencapai pasien atau menimbulkan dampak yang merusak. Pelaporan Insiden Keselamatan Pasien (IKP) di {$safeRegion} diklasifikasikan ke dalam lima kategori utama:
        </p>
        <ul style="line-height: 1.85; color: #334155; margin-bottom: 15px; padding-left: 20px;">
            <li><strong>Kondisi Potensial Cedera (KPC):</strong> Kondisi yang sangat berpotensi menimbulkan cedera tetapi belum terjadi insiden (misalnya kabel alat defibrilator yang terkelupas di ruang resusitasi).</li>
            <li><strong>Kejadian Nyaris Cedera (KNC / Near Miss):</strong> Terjadinya insiden yang belum terpapar ke pasien karena terdeteksi oleh lapis pertahanan sebelumnya (misalnya obat salah dosis yang sudah disiapkan perawat tetapi tertangkap saat verifikasi ganda sebelum disuntikkan).</li>
            <li><strong>Kejadian Tidak Cedera (KTC):</strong> Insiden yang sudah terpapar ke pasien namun tidak menimbulkan cedera klinis (misalnya pasien menerima obat tetes mata yang keliru namun tidak menimbulkan iritasi maupun gangguan penglihatan).</li>
            <li><strong>Kejadian Tidak Diharapkan (KTD / Adverse Event):</strong> Insiden yang mengakibatkan cedera yang tidak diharapkan pada pasien akibat tindakan medis atau non-medis, bukan karena kondisi underlying disease pasien.</li>
            <li><strong>Kejadian Sentinel (Sentinel Event):</strong> KTD yang mengakibatkan kematian mendadak, kehilangan fungsi tubuh secara permanen yang tidak terkait perjalanan klinis penyakit, salah sisi operasi, penculikan bayi di rumah sakit, atau bunuh diri pasien selama perawatan.</li>
        </ul>

        <h4 style="color: #1e293b; font-size: 1.15rem; font-weight: 700; margin-top: 20px; margin-bottom: 10px;">Metodologi Investigasi Komprehensif: Root Cause Analysis (RCA)</h4>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Ketika terjadi insiden dengan pita risiko merah atau kejadian sentinel, Komite Mutu dan Keselamatan Pasien rumah sakit di {$safeRegion} segera membentuk Tim Ad-Hoc RCA independen. Investigasi tidak mencari "siapa yang salah" (who to blame), melainkan "mengapa pertahanan sistem gagal mencegah insiden terjadi" (why systemic barriers failed).
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Tahapan investigasi terstruktur meliputi pengumpulan data faktual melalui wawancara terpisah dengan saksi dan staf terlibat, observasi lingkungan fisik lokasi kejadian, rekonstruksi kronologi kejadian dengan metode Tabular Timeline dan Time-Person Grid, telaah berkas rekam medis dan catatan logbook peralatan medis. Selanjutnya, tim menggunakan perangkat analisis kausalitas mendalam seperti Diagram Tulang Ikan (Fishbone / Ishikawa Diagram) yang mengkaji 6 domain kegagalan: Faktor Pasien, Faktor Staf/Individu, Faktor Tugas/Tuntutan Pekerjaan, Faktor Komunikasi Tim, Faktor Lingkungan Kerja/Fasilitas, dan Faktor Kebijakan Manajemen/Organisasi.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Melalui teknik bertanya "5-Whys" (Lima Kali Mengapa), tim investigasi menembus gejala superfisial untuk menemukan akar penyebab laten (latent root causes). Hasil akhir investigasi berupa Rencana Tindakan Korektif (Corrective Action Plan / CAP) yang mencakup tindakan perbaikan sistemik, penanggung jawab spesifik (PIC), indikator keberhasilan terukur, dan tenggat waktu penyelesaian (deadline) yang dipantau ketat oleh Direktur Utama Rumah Sakit.
        </p>
    </section>

    <!-- BAB 5 -->
    <section class="content-chapter" id="bab-5" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 5: Pengendalian Mutu Klinis, Indikator Mutu Nasional (INM) & Siklus Perbaikan PDCA / PDSA</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Peningkatan Mutu dan Keselamatan Pasien (PMKP) membutuhkan pendekatan berbasis pengukuran data empiris yang objektif. Manajemen rumah sakit modern di {$safeRegion} menetapkan hierarki indikator mutu yang meliputi Indikator Mutu Nasional (INM), Indikator Mutu Prioritas Rumah Sakit (IMP-RS), dan Indikator Mutu Unit Kerja (IMU).
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Pemantauan Indikator Mutu Nasional (INM) mencakup parameter kunci yang menjadi tolok ukur komparasi kinerja antar rumah sakit se-wilayah {$safeRegion} dan nasional, antara lain:
        </p>
        <ul style="line-height: 1.85; color: #334155; margin-bottom: 15px; padding-left: 20px;">
            <li>Kepatuhan Kebersihan Tangan (Hand Hygiene Compliance Rate &ge; 85%)</li>
            <li>Kepatuhan Penggunaan Alat Pelindung Diri (APD) sesuai level risiko pajanan</li>
            <li>Kepatuhan Identifikasi Pasien pada setiap tindakan medis dan penunjang</li>
            <li>Waktu Tanggap Pelayanan Sectio Caesarea Emergensi (Door-to-Incision Time &le; 30 menit)</li>
            <li>Waktu Tunggu Rawat Jalan (Poliklinik Spesialis &le; 60 menit)</li>
            <li>Penundaan Operasi Elektif (&le; 5%)</li>
            <li>Kepatuhan Waktu Visite Dokter Spesialis Penanggung Jawab Pelayanan (DPJP)</li>
            <li>Kepatuhan Pelaporan Hasil Kritis Laboratorium dan Radiologi (&lt; 30 menit)</li>
            <li>Kepatuhan Penggunaan Formularium Obat Rumah Sakit (&ge; 80%)</li>
            <li>Kepatuhan Pelaksanaan Clinical Pathway pada 5 penyakit prioritas faskes</li>
            <li>Kecepatan Waktu Tanggap Komplain Pasien (&ge; 80% terselesaikan sesuai SPO)</li>
            <li>Tingkat Kepuasan Pasien dan Keluarga (&ge; 85%)</li>
        </ul>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Untuk mendorong peningkatan capaian indikator yang belum memenuhi target, unit kerja menerapkan siklus perbaikan berkelanjutan PDCA / PDSA (Plan - Do - Check/Study - Act). Dalam tahap <em>Plan</em>, tim mengidentifikasi gap capaian, menganalisis penyebab dengan diagram Pareto, dan menyusun rencana uji coba perubahan. Tahap <em>Do</em> menguji intervensi dalam skala kecil. Tahap <em>Study</em> menganalisis tren data dengan Run Chart atau Control Chart untuk membuktikan apakah perubahan menghasilkan perbaikan nyata. Tahap <em>Act</em> membakukan intervensi yang berhasil ke dalam Standar Prosedur Operasional (SPO) resmi atau merevisi rencana jika target belum tercapai.
        </p>
    </section>

    <!-- BAB 6 -->
    <section class="content-chapter" id="bab-6" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 6: Pencegahan & Pengendalian Infeksi (PPI), Bundles of Care & Sterilisasi CSSD Terpadu</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Infeksi yang didapat selama perawatan di rumah sakit (Healthcare-Associated Infections / HAIs) merupakan salah satu penyebab utama morbiditas tambahan, kematian, dan lonjakan biaya kesehatan yang sangat signifikan. Pengendalian infeksi di {$safeRegion} diarahkan pada penerapan standar kewaspadaan isolasi yang terdiri dari Kewaspadaan Standar (Standard Precautions) dan Kewaspadaan Berdasarkan Transmisi (Transmission-Based Precautions: Airborne, Droplet, dan Contact).
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Penerapan <em>Bundles of Care</em> terbukti secara ilmiah menurunkan laju infeksi nosokomial secara drastis apabila dipatuhi secara kolektif (all-or-none compliance):
        </p>
        <ul style="line-height: 1.85; color: #334155; margin-bottom: 15px; padding-left: 20px;">
            <li><strong>Bundle CAUTI (Infeksi Saluran Kemih Terkait Kateter):</strong> Indikasi pemasangan kateter urine yang ketat, teknik insersi aseptik steril, fiksasi kateter yang benar, sistem drainase tertutup (closed system), kantong urine selalu berada di bawah level kandung kemih tanpa menyentuh lantai, serta evaluasi harian pelepasan kateter secepat mungkin.</li>
            <li><strong>Bundle CLABSI / IAD (Infeksi Aliran Darah Terkait Kateter Sentral):</strong> Kebersihan tangan optimal sebelum insersi, penggunaan maksimal sterile barrier (gaun steril, masker, topi, sarung tangan steril, dan doek steril lebar penutup seluruh tubuh pasien), disinfeksi kulit dengan klorheksidin glukonat 2% dalam alkohol 70%, pemilihan lokasi vena subklavia dibandingkan femoralis, serta penggantian dressing transparan setiap 7 hari atau jika kotor.</li>
            <li><strong>Bundle VAP (Pneumonia Terkait Ventilator):</strong> Elevasi kepala tempat tidur 30 hingga 45 derajat sepanjang waktu, oral hygiene dengan obat kumur klorheksidin 0.2% setiap 8 jam, penghentian sedasi harian (sedation vacation) untuk uji kesiapan ekstubasi, pembuangan kondensat sirkuit ventilator secara berkala, dan penggunaan pipa endotrakeal dengan suction subglotis kontinu.</li>
            <li><strong>Bundle SSI / IDO (Infeksi Daerah Operasi):</strong> Mandi antiseptik pasien sebelum operasi, pencukuran rambut hanya jika mengganggu dengan clipper elektrik (bukan pisau cukur manual), pemberian antibiotik profilaksis tepat waktu (30-60 menit sebelum insisi kulit), pemeliharaan normotermia intraoperatif, dan kontrol glikemia perioperatif yang ketat.</li>
        </ul>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Di samping itu, Instalasi Pusat Sterilisasi (Central Sterile Supply Department / CSSD) menjadi jantung pencegahan infeksi instrumen bedah. Alur proses satu arah (one-way flow) dari zona kotor (decontamination), zona bersih (packing & assembly), zona steril (autoclave & plasma sterilizer), hingga zona penyimpanan steril dengan suhu 18-22&deg;C dan kelembaban 35-60% wajib dijaga secara ketat dengan validasi indikator mekanik, kimiawi, dan biologis (Geobacillus stearothermophilus) pada setiap siklus sterilisasi di {$safeRegion}.
        </p>
    </section>

    <!-- BAB 7 -->
    <section class="content-chapter" id="bab-7" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 7: Manajemen Fasilitas & Keselamatan (MFK), K3RS & Mitigasi Tanggap Darurat Bencana</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Fasilitas fisik rumah sakit di {$safeRegion} harus menjadi tempat yang aman bagi pasien, keluarga, pengunjung, dan seluruh tenaga medis yang bertugas. Standar Manajemen Fasilitas dan Keselamatan (MFK) serta Keselamatan dan Kesehatan Kerja Rumah Sakit (K3RS) mencakup enam pilar penting:
        </p>
        <ul style="line-height: 1.85; color: #334155; margin-bottom: 15px; padding-left: 20px;">
            <li><strong>Keselamatan dan Keamanan Fisik:</strong> Inspeksi berkala keandalan struktur bangunan, kontrol akses perimeter area berisiko tinggi (kamar bayi, farmasi, ruang arsip rekam medis, panel listrik tegangan tinggi), dan pemasangan kamera CCTV 24 jam.</li>
            <li><strong>Bahan Berbahaya dan Beracun (B3):</strong> Inventarisasi seluruh bahan kimia, desinfektan, reagen laboratorium, dan limbah medis; penempatan Lembar Data Keselamatan Bahan (Material Safety Data Sheet / MSDS); ketersediaan Spill Kit kimia dan infeksius; serta pengelolaan Cold Storage limbah medis B3 sebelum diangkut pihak berizin.</li>
            <li><strong>Proteksi Kebakaran (Hospital Fire Safety):</strong> Penyediaan sistem deteksi dini (smoke detector, heat detector), sistem sprinkler otomatis, hidran gedung dan pilar halaman, alat pemadam api ringan (APAR) jenis powder dan CO2 yang terinspeksi bulanan, pemisahan kompartemen api, dan pelatihan simulasi kode merah (Code Red) berkala bagi seluruh karyawan.</li>
            <li><strong>Peralatan Medis (Medical Equipment Management):</strong> Kalibrasi berkala seluruh alat ukur medis tervalidasi, pemeliharaan preventif (preventive maintenance), uji fungsi harian alat resusitasi defibrilator, serta penarikan (recall) instrumen yang mengalami kerusakan teknis.</li>
            <li><strong>Sistem Utilitas Kritis (Utility Systems):</strong> Jaminan pasokan listrik tanpa jeda melalui Automatic Transfer Switch (ATS) generator genset darurat dan Uninterruptible Power Supply (UPS) untuk kamar operasi dan ICU, pasokan air bersih yang memenuhi uji mikrobiologi, serta pasokan gas medis sentral (O2, N2O, Udara Tekan, Suction Medis) dengan sistem alarm peringatan tekanan rendah.</li>
            <li><strong>Kesiapsiagaan Bencana (Hospital Disaster Plan / HDP):</strong> Penyusunan skenario tanggap darurat bencana internal (kebakaran, ledakan gas, kebocoran B3) maupun eksternal (gempa bumi, banjir, kecelakaan massal mass casualty incident) dengan pengorganisasian Incident Command System (ICS) dan jalur evakuasi yang jelas bebas hambatan.</li>
        </ul>
    </section>

    <!-- BAB 8 -->
    <section class="content-chapter" id="bab-8" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 8: Transformasi Digital Rekam Medis Elektronik (RME) & Keamanan Data Pasien</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Peralihan dari rekam medis konvensional berbasis kertas menuju Rekam Medis Elektronik (RME) terintegrasi merupakan lompatan efisiensi terbesar dalam ekosistem perumahsakitan kontemporer di {$safeRegion}. RME bukan sekadar memindahkan teks catatan medis ke layar komputer, melainkan membangun sistem informasi klinis cerdas yang mampu mencegah kejadian tidak diharapkan melalui integrasi fitur Clinical Decision Support System (CDSS).
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Sistem RME terintegrasi memfasilitasi e-Prescribing yang otomatis memverifikasi dosis maksimum, mendeteksi potensi alergi silang pasien, dan memperingatkan dokter jika terjadi interaksi obat yang berbahaya secara real-time. Di samping itu, integrasi Picture Archiving and Communication System (PACS) memungkinkan citra diagnostik CT-Scan, MRI, dan rontgen digital langsung diakses di meja operasi atau ruang perawatan tanpa penundaan waktu.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Aspek kerahasiaan dan keamanan data pasien (data privacy & cybersecurity) menjadi perhatian tertinggi. Penerapan otentikasi ganda (two-factor authentication), pembagian hak akses bertingkat (role-based access control), enkripsi data end-to-end pada database server, audit trail yang mencatat setiap aktivitas akses berkas rekam medis, serta pencadangan data otomatis (automated backup) di cloud server terenkripsi menjamin terpenuhinya hak privasi pasien dan kepatuhan terhadap regulasi kerahasiaan informasi medis di {$safeRegion}.
        </p>
    </section>

    <!-- BAB 9 -->
    <section class="content-chapter" id="bab-9" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 9: Pelayanan Prima (Service Excellence), Komunikasi Terapeutik & Manajemen Komplain</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Mutu teknis klinis yang tinggi tidak akan dirasakan optimal oleh pasien dan keluarga tanpa didampingi oleh sentuhan kemanusiaan, empati, dan komunikasi terapeutik yang tulus. Pasien yang datang ke rumah sakit di {$safeRegion} berada dalam kondisi psikologis yang rentan, cemas, dan mengalami penderitaan fisik. Sikap staf medis yang dingin, acuh, atau tidak komunikatif seringkali menjadi pemicu utama munculnya rasa frustrasi keluarga yang berujung pada sengketa medikolegal.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Program <strong>{$safeTitle}</strong> melatih seluruh lini personel—mulai dari petugas keamanan di pintu masuk, petugas registrasi loket, perawat pendamping, analis laboratorium, apoteker, hingga dokter spesialis—untuk mempraktikkan kerangka komunikasi AIDET (Acknowledge, Introduce, Duration, Explanation, Thank You):
        </p>
        <ul style="line-height: 1.85; color: #334155; margin-bottom: 15px; padding-left: 20px;">
            <li><strong>Acknowledge:</strong> Menyapa pasien dan keluarga dengan ramah, menyebutkan nama pasien, dan melakukan kontak mata hangat sejak detik pertama interaksi.</li>
            <li><strong>Introduce:</strong> Memperkenalkan nama diri, profesi, dan peran spesifik yang akan dijalankan dalam merawat pasien saat itu.</li>
            <li><strong>Duration:</strong> Memberikan kejelasan estimasi waktu tunggu hasil pemeriksaan, durasi tindakan medis, atau waktu kedatangan dokter visite.</li>
            <li><strong>Explanation:</strong> Menjelaskan secara sederhana tanpa istilah teknis medis yang membingungkan mengenai tujuan prosedur, apa yang akan dirasakan pasien, dan apa yang diharapkan dari kerjasama pasien.</li>
            <li><strong>Thank You:</strong> Menutup interaksi dengan ucapan terima kasih tulus, mendoakan kesembuhan, dan menanyakan apakah masih ada pertanyaan atau kekhawatiran yang perlu dijelaskan.</li>
        </ul>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Bila terjadi keluhan atau komplain, petugas garis depan dilatih menerapkan teknik peredaman konflik LAST (Listen, Apologize, Solve, Thank): mendengarkan keluhan secara penuh tanpa memotong, menyampaikan permohonan maaf atas ketidaknyamanan yang dialami pasien, memberikan solusi konkret yang dapat dieksekusi dengan cepat, dan berterima kasih atas masukan berharga yang diberikan demi perbaikan mutu pelayanan rumah sakit di {$safeRegion}.
        </p>
    </section>

    <!-- BAB 10 -->
    <section class="content-chapter" id="bab-10" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 10: Kurikulum Teknis, Silabus Praktikum & Roadmap Implementasi Mandiri</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Struktur pelatihan <strong>{$safeTitle}</strong> di wilayah {$safeRegion} dirancang menggunakan pendekatan andragogi modern yang mengombinasikan 30% penguatan konsep teoritis berbasis bukti dan 70% simulasi praktis (hands-on workshop), telaah kasus nyata rumah sakit, serta perancangan dokumen kendali mutu siap implementasi.
        </p>

        <h4 style="color: #1e293b; font-size: 1.15rem; font-weight: 700; margin-top: 20px; margin-bottom: 10px;">Struktur Kurikulum Program Utama</h4>
        <ul style="line-height: 1.85; color: #334155; margin-bottom: 20px; padding-left: 20px;">
            {$curriculumList}
        </ul>

        <h4 style="color: #1e293b; font-size: 1.15rem; font-weight: 700; margin-top: 20px; margin-bottom: 10px;">Roadmap 90 Hari Implementasi Pasca Pelatihan di {$safeRegion}</h4>
        <div style="background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 10px; padding: 20px; margin-bottom: 20px;">
            <p style="margin-bottom: 10px; line-height: 1.8; color: #1e293b;">
                <strong>Bulan 1 (Fase Audit & Gap Analysis):</strong> Alumni pelatihan melakukan inventarisasi instrumen evaluasi mandiri, mengaudit SPO yang berlaku, mengidentifikasi ketidaksesuaian operasional di unit masing-masing, dan memetakan kebutuhan perbaikan sarana penunjang.
            </p>
            <p style="margin-bottom: 10px; line-height: 1.8; color: #1e293b;">
                <strong>Bulan 2 (Fase Sosialisasi & Redesain SPO):</strong> Mengadakan in-house sharing session internal kepada rekan sejawat, merevisi dokumen SPO berdasarkan referensi modul terkini, dan melaksanakan uji coba penerapan form kendali mutu di unit percontohan.
            </p>
            <p style="margin: 0; line-height: 1.8; color: #1e293b;">
                <strong>Bulan 3 (Fase Evaluasi Kepatuhan & Skalasi Penuh):</strong> Melakukan audit kepatuhan internal, mengukur tren capaian indikator keselamatan pasien pasca intervensi, mempresentasikan laporan perbaikan kepada jajaran Direksi, dan memperluas implementasi ke seluruh unit pelayanan rumah sakit di {$safeRegion}.
            </p>
        </div>
    </section>

    <!-- BAB 11 -->
    <section class="content-chapter" id="bab-11" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 11: Analisis Kasus Klinis Riil & Studi Komparatif Manajemen Keselamatan Pasien</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Pembelajaran berbasis kasus nyata (case-based learning) merupakan metode terampuh dalam mengasah ketajaman analisis dan kepekaan klinis (clinical instinct) tenaga kesehatan di {$safeRegion}. Dalam bab ini dibedah dua skenario komparatif yang lazim terjadi di lingkungan rumah sakit:
        </p>
        <div style="background: #fff1f2; border-left: 4px solid #e11d48; padding: 18px; border-radius: 8px; margin-bottom: 20px;">
            <h4 style="color: #9f1239; margin-top: 0; font-weight: 700;">Studi Kasus 1: Kesalahan Pemberian Elektrolit Pekat (High-Alert Incident)</h4>
            <p style="line-height: 1.8; color: #4c0519; margin-bottom: 10px;">
                <strong>Kronologi:</strong> Di sebuah ruang rawat inap anak, seorang pasien pasca diare berat dehidrasi menerima instruksi rehidrasi kalium parenteral. Perawat shift malam yang mengalami kelelahan mengambil ampul Kalium Klorida (KCl) 7.46% dari laci obat umum yang tidak berlabel pembeda jelas dan langsung menyuntikkannya secara bolus intravena langsung karena mengira ampul tersebut adalah Aquabidest pelarut. Pasien seketika mengalami aritmia ventrikel letal dan henti jantung mendadak.
            </p>
            <p style="line-height: 1.8; color: #4c0519; margin-bottom: 0;">
                <strong>Analisis Sistemik:</strong> Investigasi RCA menemukan kegagalan multi-lapis: (1) KCl pekat masih disimpan bebas di unit rawat inap tanpa otorisasi farmasi sentral; (2) tidak adanya label kontras "HIGH ALERT"; (3) ketiadaan protokol double check independen; dan (4) kelelahan kerja ekstrem akibat kekurangan staf perawat jaga. Solusi perbaikan mencakup penarikan seluruh elektrolit konsentrat dari seluruh ruang rawat inap reguler, pewajiban penyiapan infus kalium hanya oleh Instalasi Farmasi di bawah Laminar Air Flow, serta pemberlakuan barcode scanning sebelum obat diberikan kepada pasien di {$safeRegion}.
            </p>
        </div>

        <div style="background: #f0fdf4; border-left: 4px solid #16a34a; padding: 18px; border-radius: 8px; margin-bottom: 20px;">
            <h4 style="color: #166534; margin-top: 0; font-weight: 700;">Studi Kasus 2: Keberhasilan Early Warning Score (EWS) dalam Menyelamatkan Pasien Sepsis</h4>
            <p style="line-height: 1.8; color: #14532d; margin-bottom: 10px;">
                <strong>Kronologi:</strong> Pasien pasca laparotomi eksplorasi di ruang rawat bedah menunjukkan peningkatan frekuensi napas dari 18x/menit menjadi 26x/menit, tekanan darah turun menjadi 90/60 mmHg, dan denyut nadi meningkat menjadi 112x/menit. Perawat pelaksana yang telah terlatih EWS menghitung skor National Early Warning Score (NEWS) pasien bernilai 7 (kategori risiko tinggi perburukan klinis).
            </p>
            <p style="line-height: 1.8; color: #14532d; margin-bottom: 0;">
                <strong>Respons Cepat:</strong> Sesuai algoritma EWS, perawat segera mengaktifkan Tim Reaksi Cepat / Medical Emergency Team (MET) rumah sakit melalui kode khusus. Dalam tempo 5 menit, dokter spesialis anestesi dan perawat ICU tiba di samping tempat tidur pasien, mendiagnosis syok septik awal, memulai resusitasi cairan kristaloid terarah, pemberian antibiotik spektrum luas intravena dalam 1 jam pertama (golden hour sepsis), serta transfer terpantau ke ruang rawat intensif. Pasien berhasil diselamatkan tanpa mengalami kegagalan multi-organ (MODS).
            </p>
        </div>
    </section>

    <!-- BAB 12 -->
    <section class="content-chapter" id="bab-12" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 12: Panduan Standar Operasional Prosedur (SOP) Teknis & Formulir Kendali Mutu</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Standar Prosedur Operasional (SPO) merupakan instrumen kendali mutu yang menjamin keteraturan dan kepatuhan dalam pelaksanaan tindakan klinis harian di fasilitas kesehatan wilayah {$safeRegion}. Setiap dokumen SPO wajib disusun menggunakan struktur baku yang mencakup: Pengertian, Tujuan, Kebijakan Dasar, Prosedur Langkah demi Langkah, dan Unit Terkait.
        </p>

        <h4 style="color: #1e293b; font-size: 1.15rem; font-weight: 700; margin-top: 20px; margin-bottom: 10px;">Checklist Elemen Kendali Mutu di Setiap Ruang Perawatan</h4>
        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; margin-bottom: 20px;">
            <table style="width: 100%; border-collapse: collapse; font-size: 0.95rem; text-align: left;">
                <thead style="background: #f8fafc; color: #0f172a; border-bottom: 2px solid #e2e8f0;">
                    <tr>
                        <th style="padding: 12px 16px;">Parameter Kendali Mutu</th>
                        <th style="padding: 12px 16px;">Standar Minimum</th>
                        <th style="padding: 12px 16px;">Frekuensi Verifikasi</th>
                        <th style="padding: 12px 16px;">Penanggung Jawab</th>
                    </tr>
                </thead>
                <tbody style="color: #334155;">
                    <tr style="border-bottom: 1px solid #f1f5f9;">
                        <td style="padding: 12px 16px; font-weight: 600;">Kepatuhan Cuci Tangan 5 Momen</td>
                        <td style="padding: 12px 16px;">&ge; 85% Kepatuhan</td>
                        <td style="padding: 12px 16px;">Audit Harian Acak</td>
                        <td style="padding: 12px 16px;">IPCN & Link Nurse</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f1f5f9;">
                        <td style="padding: 12px 16px; font-weight: 600;">Verifikasi Gelang Identitas</td>
                        <td style="padding: 12px 16px;">100% Seluruh Pasien</td>
                        <td style="padding: 12px 16px;">Setiap Tindakan Asuhan</td>
                        <td style="padding: 12px 16px;">Perawat Pelaksana</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f1f5f9;">
                        <td style="padding: 12px 16px; font-weight: 600;">Pemeriksaan Kesiapan Troli Emergensi</td>
                        <td style="padding: 12px 16px;">Segel Utuh & Obat Exp. Valid</td>
                        <td style="padding: 12px 16px;">Setiap Pergantian Shift</td>
                        <td style="padding: 12px 16px;">Penanggung Jawab Shift</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f1f5f9;">
                        <td style="padding: 12px 16px; font-weight: 600;">Uji Fungsi Defibrilator</td>
                        <td style="padding: 12px 16px;">Baterai Penuh & Lolos Self-Test</td>
                        <td style="padding: 12px 16px;">Harian (Pukul 07.00)</td>
                        <td style="padding: 12px 16px;">Perawat Primer / Teknisi</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 16px; font-weight: 600;">Penyelesaian Berkas Rekam Medis (KLPCM)</td>
                        <td style="padding: 12px 16px;">Lengkap 100% dalam 24 Jam</td>
                        <td style="padding: 12px 16px;">Harian Saat Pasien Pulang</td>
                        <td style="padding: 12px 16px;">DPJP & Case Manager</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Disiplin terhadap formulir kendali mutu ini menjadi perisai utama rumah sakit di {$safeRegion} dari risiko kelalaian prosedural dan menjamin bahwa seluruh data klinis dapat dipertanggungjawabkan secara sah dalam audit medikolegal.
        </p>
    </section>

    <!-- BAB 13 -->
    <section class="content-chapter" id="bab-13" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 13: Manajemen Krisis Medikolegal, Informed Consent Defensif & Perlindungan Tenaga Kesehatan</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Risiko tuntutan hukum di era digital merupakan ancaman nyata yang membayangi praktik kedokteran dan perumahsakitan di {$safeRegion}. Tingginya ekspektasi masyarakat sering kali tidak diimbangi dengan pemahaman bahwa dunia medis mengenal konsep risiko medis yang tidak dapat diprediksi (inherent medical risk) dan komplikasi yang tidak terhindarkan meskipun seluruh tindakan telah sesuai standar profesi tertinggi.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Pilar perlindungan hukum pertama terletak pada pelaksanaan persetujuan tindakan medis (Informed Consent) yang sahih dan defensif. Informed consent bukanlah sekadar lembar tanda tangan administratif di loket admisi, melainkan proses komunikasi interaktif dua arah antara dokter pelaksana tindakan dengan pasien atau wali sahnya. Dokter wajib menjelaskan secara jelas, jujur, dan mudah dipahami mengenai: (1) diagnosis pasti dan indikasi tindakan medis; (2) tata cara dan langkah pelaksanaan prosedur; (3) tujuan dan manfaat yang diharapkan; (4) risiko serta komplikasi potensial yang lazim maupun jarang terjadi; (5) alternatif tindakan lain beserta konsekuensinya; dan (6) prognosis jika tindakan medis tersebut tidak dilakukan.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Bila rumah sakit di {$safeRegion} menerima surat somasi atau pengaduan hukum dari kuasa hukum pasien, manajemen harus mengaktifkan Protokol Manajemen Krisis Medikolegal:
        </p>
        <ul style="line-height: 1.85; color: #334155; margin-bottom: 15px; padding-left: 20px;">
            <li><strong>Pengamanan Berkas Rekam Medis:</strong> Seluruh berkas rekam medis asli (elektronik maupun cetak) segera diamankan di bawah koordinasi Bagian Hukum dan Rekam Medis untuk mencegah perubahan data atau tuduhan pemalsuan dokumentasi.</li>
            <li><strong>Audit Medis Internal Segera:</strong> Komite Medik dan Subkomite Etik dan Disiplin Profesi mengadakan telaah klinis cepat untuk mengkaji apakah tindakan dokter dan perawat telah memenuhi standar pelayanan kedokteran (standard of care).</li>
            <li><strong>Komunikasi Satu Pintu (Single Spokesperson):</strong> Seluruh pernyataan keluar kepada media massa atau publik hanya disampaikan oleh Direktur atau Humas resmi rumah sakit guna mencegah kesimpangsiuran informasi.</li>
            <li><strong>Pendekatan Mediasi & Restorative Justice:</strong> Mengutamakan dialog musyawarah kekeluargaan dengan menghadirkan konselor medis independen untuk memberikan penjelasan netral kepada keluarga pasien sebelum sengketa berlanjut ke ranah pengadilan.</li>
        </ul>
    </section>

    <!-- BAB 14 -->
    <section class="content-chapter" id="bab-14" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 14: Integrasi Kendali Biaya & Kendali Mutu (Casemix, Koding Klinis & Efisiensi Faskes)</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Dalam era pembiayaan kesehatan berbasis paket prospektif (Casemix / INA-CBGs), rumah sakit di {$safeRegion} dituntut mampu menjalankan manajemen utilisasi yang efisien tanpa mengurangi mutu pelayanan medis. Paradigma lama yang memandang bahwa keselamatan pasien berbanding terbalik dengan efisiensi biaya harus diubah secara mendasar: pelayanan yang aman (safe care) justru merupakan pelayanan yang paling hemat biaya (cost-effective care) karena meniadakan biaya pemulihan akibat infeksi nosokomial, operasi ulang (re-operation), dan pemanjangan lama hari rawat.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Sinergi Tim Casemix yang terdiri dari Dokter Penanggung Jawab Pelayanan (DPJP), Perekam Medis & Informasi Kesehatan (PMIK), Koder Klinis, dan Verifikator Internal menjadi kunci kelancaran arus kas rumah sakit:
        </p>
        <ul style="line-height: 1.85; color: #334155; margin-bottom: 15px; padding-left: 20px;">
            <li><strong>Kelengkapan Resume Medis:</strong> DPJP wajib menuliskan diagnosis utama, diagnosis sekunder (komorbiditas dan komplikasi), serta rincian tindakan pembedahan secara spesifik dan terbaca sesuai kaidah terminologi medis internasional (ICD-10 dan ICD-9-CM).</li>
            <li><strong>Akurasi Koding Klinis:</strong> Koder memastikan tidak terjadi undercoding (yang merugikan pendapatan faskes) maupun overcoding/upcoding (yang melanggar etika dan berpotensi menimbulkan dispute klaim).</li>
            <li><strong>Pencegahan Klaim Dispute:</strong> Verifikasi internal pra-pengajuan klaim untuk memastikan kesesuaian antara bukti penunjang (hasil patologi anatomi, laporan operasi, rontgen) dengan koding klaim yang diajukan.</li>
            <li><strong>Formularium RS yang Rasional:</strong> Penggunaan obat generik berkhasiat setara dan restriksi penggunaan antibiotik lini ketiga cadangan (reserve antibiotics) melalui Program Pengendalian Resistensi Antimikroba (PPRA) untuk menekan belanja farmasi secara rasional.</li>
        </ul>
    </section>

    <!-- BAB 15 -->
    <section class="content-chapter" id="bab-15" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 15: Rekomendasi Strategis Direksi & Rencana Aksi Akselerasi Akreditasi Paripurna</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Mencapai dan mempertahankan predikat Akreditasi Rumah Sakit tingkat Paripurna di {$safeRegion} bukanlah sebuah garis akhir, melainkan awal dari komitmen tanpa henti untuk mempertahankan standar keunggulan operasional. Kepemimpinan transformasional dari jajaran Dewan Pengawas dan Direksi Rumah Sakit memegang peranan penentu dalam mengarahkan seluruh unit kerja agar tidak terjebak dalam formalitas seremonial.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Program <strong>{$safeTitle}</strong> merekomendasikan lima langkah akselerasi kepemimpinan bagi direksi faskes di {$safeRegion}:
        </p>
        <ol style="line-height: 1.85; color: #334155; margin-bottom: 15px; padding-left: 20px;">
            <li><strong>Ronde Keselamatan Pasien Pimpinan (Executive Safety Walk-Around):</strong> Direktur dan jajaran manajemen puncak secara rutin turun langsung ke bangsal perawatan, IGD, dan ruang penunjang setiap minggu untuk mendengar langsung keluhan staf lapangan terkait kendala keselamatan pasien tanpa hierarki birokrasi kaku.</li>
            <li><strong>Alokasi Anggaran Pengembangan Kompetensi SDM:</strong> Menyediakan anggaran khusus minimal 5% dari total belanja pegawai untuk program pelatihan bersertifikat, in-house workshop, dan pelatihan penyegaran berkala bagi seluruh tenaga medis.</li>
            <li><strong>Sistem Penghargaan Budaya Keselamatan (Safety Culture Awards):</strong> Memberikan apresiasi dan pengakuan resmi kepada staf atau ruangan yang paling aktif melaporkan kejadian nyaris cedera (near miss) dan berhasil melakukan inovasi perbaikan alur asuhan.</li>
            <li><strong>Transparansi Papan Indikator Mutu Publik:</strong> Memajang capaian indikator keselamatan pasien dan kepuasan masyarakat di area tunggu publik sebagai bukti integritas dan komitmen keterbukaan rumah sakit kepada masyarakat di {$safeRegion}.</li>
            <li><strong>Kemitraan Strategis Berkelanjutan:</strong> Membangun jejaring kerjasama dengan pusat-pusat rujukan tersier, universitas kedokteran, dan lembaga pelatihan perumahsakitan terpercaya untuk memastikan transfer teknologi dan pembaruan standar manajerial yang berkesinambungan.</li>
        </ol>
    </section>

    <!-- BAB 16: PANDUAN AUDIT KLINIS KHUSUS UNIT MEDIS -->
    <section class="content-chapter" id="bab-16" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 16: Panduan Audit Klinis Khusus Unit Medis & Indikator Kinerja Ruangan</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Pelaksanaan audit klinis internal di lingkungan rumah sakit wilayah {$safeRegion} wajib dilaksanakan secara terjadwal dengan melibatkan Komite Medik, Komite Keperawatan, dan Komite Tenaga Kesehatan Lainnya. Audit klinis bertujuan untuk mengidentifikasi deviasi terhadap standar profesi dan merumuskan intervensi korektif yang terukur:
        </p>
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; margin-bottom: 20px;">
            <h4 style="color: #0f172a; margin-top: 0; font-weight: 700;">1. Audit Unit Gawat Darurat (IGD)</h4>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                Fokus audit mencakup waktu respons triase (kecepatan triase kategori merah &lt; 0 detik, kuning &lt; 15 menit, hijau &lt; 60 menit), kepatuhan pemasangan label triase, ketepatan pelaksanaan resusitasi kardiopulmoner (CPR) sesuai algoritma ACLS terbaru, serta lama waktu observasi di IGD sebelum diputuskan rawat inap atau rujuk (Emergency Department Length of Stay &le; 6 jam).
            </p>
        </div>
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; margin-bottom: 20px;">
            <h4 style="color: #0f172a; margin-top: 0; font-weight: 700;">2. Audit Kamar Operasi (Instalasi Bedah Sentral)</h4>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                Fokus audit mencakup kepatuhan 100% Surgical Safety Checklist (Sign In, Time Out, Sign Out), ketepatan waktu pemberian profilaksis antibiotik, pemantauan hitung kassa dan instrumen secara teliti, serta evaluasi angka pembatalan operasi elektif (target &le; 2%) akibat ketidaksiapan medis pra-bedah di {$safeRegion}.
            </p>
        </div>
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; margin-bottom: 20px;">
            <h4 style="color: #0f172a; margin-top: 0; font-weight: 700;">3. Audit Unit Rawat Intensif (ICU / ICCU / PICU / NICU)</h4>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                Fokus audit mencakup rasio perawat berbanding pasien (1:1 untuk pasien berventilator atau hemodinamik tidak stabil), kepatuhan bundles pencegahan infeksi VAP dan CLABSI, kalibrasi monitor hemodinamik invasif, serta dokumentasi titrasi obat vasoaktif (norepinefrin, dobutamin) dengan syringe pump terverifikasi.
            </p>
        </div>
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; margin-bottom: 20px;">
            <h4 style="color: #0f172a; margin-top: 0; font-weight: 700;">4. Audit Bangsal Rawat Inap & Hemodialisa</h4>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                Fokus audit mencakup ketepatan pencatatan tanda vital terintegrasi dengan lembar EWS, kepatuhan pencegahan dekubitus (reposisi miring kanan miring kiri setiap 2 jam untuk pasien tirah baring lama), pemantauan water treatment dan endotoksin dialisat, serta kepatuhan pemakaian barrier APD saat kanulasi akses fistula di {$safeRegion}.
            </p>
        </div>
    </section>

    <!-- BAB 17: FAQ TEKNIS KLINIS & TANYA JAWAB OPERASIONAL -->
    <section class="content-chapter" id="bab-17" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 17: Tanya Jawab Teknis Klinis & Kuis Pemahaman Tim Medis Rumah Sakit</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 20px;">
            Berikut adalah kompilasi tanya jawab operasional yang paling sering muncul dalam diskusi teknis pelatihan <strong>{$safeTitle}</strong> di fasilitas kesehatan wilayah {$safeRegion}:
        </p>

        <div style="margin-bottom: 18px; padding: 18px; background: #ffffff; border-left: 4px solid #0284c7; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
            <strong style="color: #0369a1; font-size: 1.05rem; display: block; margin-bottom: 8px;">Pertanyaan 1: Bagaimana jika pasien menolak pemasangan gelang identitas dengan alasan tidak nyaman atau gatal?</strong>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                <strong>Solusi Operasional:</strong> Perawat wajib mengedukasi pasien dan keluarga bahwa gelang identitas adalah alat pelindung nyawa utama agar tidak salah obat atau salah tindakan bedah. Jika timbul alergi kontak kulit, gelang dapat dipasang longgar dilapisi kassa hipoalergenik, atau dipindahkan ke pergelangan kaki. Penolakan gelang tidak boleh dibiarkan tanpa dokumentasi resmi penolakan tindakan dan persetujuan alternatif identifikasi visual tertulis.
            </p>
        </div>

        <div style="margin-bottom: 18px; padding: 18px; background: #ffffff; border-left: 4px solid #0284c7; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
            <strong style="color: #0369a1; font-size: 1.05rem; display: block; margin-bottom: 8px;">Pertanyaan 2: Kapan investigasi RCA wajib dilakukan dibandingkan investigasi sederhana (Simple Investigation)?</strong>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                <strong>Solusi Operasional:</strong> Berdasarkan matriks grading risiko, insiden dengan pita risiko Biru dan Hijau diselesaikan melalui Investigasi Sederhana oleh kepala unit terkait dalam waktu maksimal 1 hingga 2 minggu. Sedangkan insiden dengan pita risiko Kuning dan Merah (serta seluruh Kejadian Sentinel) wajib ditangani melalui investigasi komprehensif Root Cause Analysis (RCA) oleh tim independen lintas disiplin dalam tempo maksimal 45 hari kalender di {$safeRegion}.
            </p>
        </div>

        <div style="margin-bottom: 18px; padding: 18px; background: #ffffff; border-left: 4px solid #0284c7; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
            <strong style="color: #0369a1; font-size: 1.05rem; display: block; margin-bottom: 8px;">Pertanyaan 3: Siapa yang berhak memegang kewenangan Time Out di kamar operasi bila dokter bedah terburu-buru?</strong>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                <strong>Solusi Operasional:</strong> Seluruh anggota tim operasi (dokter bedah, penata anestesi, perawat instrumen, perawat sirkuler) memiliki hak veto keselamatan (Stop the Line Authority). Bila dokter bedah hendak menyayat sebelum Time Out, perawat berwenang menahan instrumen bisturi dan memohon jeda 1 menit demi keselamatan pasien. Rumah sakit modern di {$safeRegion} menjamin perlindungan etika bagi perawat yang menghentikan tindakan demi kepatuhan Time Out.
            </p>
        </div>

        <div style="margin-bottom: 18px; padding: 18px; background: #ffffff; border-left: 4px solid #0284c7; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
            <strong style="color: #0369a1; font-size: 1.05rem; display: block; margin-bottom: 8px;">Pertanyaan 4: Bagaimana membudayakan pelaporan insiden tanpa takut disalahkan (No-Blame Culture)?</strong>
            <p style="margin: 0; line-height: 1.8; color: #334155;">
                <strong>Solusi Operasional:</strong> Pimpinan rumah sakit harus menunjukkan konsistensi dalam membedakan Human Error (diberikan pendampingan/edukasi) dengan Sabotase/Kecerobohan Disengaja (sanksi etik). Formulir pelaporan IKP dirancang anonim dan rahasia, serta tidak pernah dicantumkan dalam berkas penilaian kinerja individual yang mempengaruhi remunerasi bulanan staf.
            </p>
        </div>
    </section>

    <!-- BAB 18: MANAJEMEN TERAPI FARMASI KLINIS & RASIONALITAS PENGGUNAAN ANTIBIOTIK -->
    <section class="content-chapter" id="bab-18" style="margin-bottom: 35px;">
        <h2 style="color: #0f172a; font-size: 1.4rem; font-weight: 800; border-left: 4px solid #10b981; padding-left: 12px; margin-bottom: 18px;">Bab 18: Manajemen Terapi Farmasi Klinis, Rekonsiliasi Obat & Rasionalitas Penggunaan Antibiotik</h2>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Pelayanan farmasi klinik di fasilitas kesehatan wilayah {$safeRegion} memegang peranan krusial dalam rantai pengobatan pasien. Proses rekonsiliasi obat saat pasien masuk rumah sakit, transfer antar ruangan rawat, maupun saat pemulangan (discharge) wajib dilakukan secara seksama oleh apoteker klinis untuk mencegah duplikasi terapi, diskrepansi dosis, dan interaksi obat yang tidak disadari.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Penerapan Program Pengendalian Resistensi Antimikroba (PPRA) menuntut penegakan klasifikasi antibiotik Access, Watch, dan Reserve. Dokter dan apoteker berkolaborasi dalam mengawasi penggunaan antibiotik profilaksis bedah agar tidak diberikan melebihi 24 jam pasca operasi, serta melakukan de-eskalasi antibiotik empiris menjadi definitif berdasarkan hasil kultur mikrobiologi dan uji kepekaan bakteri. Pemantauan efek samping obat (MESO) dan pengkajian peresepan secara harian menjadi bukti nyata komitmen faskes dalam mengutamakan keselamatan pasien di atas segalanya.
        </p>
        <p style="line-height: 1.85; color: #334155; margin-bottom: 15px;">
            Dengan menerapkan seluruh prinsip mutu klinis terintegrasi ini, rumah sakit di {$safeRegion} mampu menciptakan lingkungan pelayanan yang unggul, terbebas dari kesalahan medik yang dapat dicegah, serta siap menghadapi penilaian akreditasi dengan predikat tertinggi.
        </p>
    </section>

    <!-- KOTAK HOTLINE KONSULTASI & PENDAFTARAN -->
    <div class="article-cta-box" style="margin-top: 40px; padding: 32px; background: linear-gradient(135deg, #064e3b 0%, #065f46 100%); border-radius: 16px; text-align: center; color: #ffffff; box-shadow: 0 12px 30px rgba(6, 78, 59, 0.25);">
        <span style="background: rgba(250, 204, 21, 0.2); color: #facc15; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 12px;">Pusat Pelatihan & Sertifikasi Mutu Rumah Sakit</span>
        <h3 style="font-size: 1.5rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">Pendaftaran & Jadwal Batch {$safeTitle} di {$safeRegion}</h3>
        <p style="font-size: 1rem; color: #dcfce7; max-width: 720px; margin: 0 auto 24px; line-height: 1.7;">
            Tingkatkan keunggulan tata kelola klinis, akreditasi paripurna, dan keselamatan pasien di institusi kesehatan Anda. Konsultasikan kebutuhan in-house training rumah sakit maupun pendaftaran kelas publik melalui 4 hotline resmi kami:
        </p>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 12px; margin-bottom: 24px;">
            <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20Admin%20Pusat%20Training%20Rumah%20Sakit,%20saya%20ingin%20konsultasi%20pendaftaran%20program%20{$urlTitle}%20untuk%20wilayah%20{$urlRegion}." target="_blank" style="background: linear-gradient(135deg, #facc15 0%, #eab308 100%); color: #064e3b; font-weight: 800; padding: 14px 26px; border-radius: 30px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; font-size: 0.98rem; box-shadow: 0 4px 15px rgba(234, 179, 8, 0.35);">
                <i class="bi bi-whatsapp"></i> Hotline Utama: 0813-9981-0272 (Prioritas 24/7)
            </a>
            <a href="https://api.whatsapp.com/send?phone=628118500177&text=Halo%20CS%20Training%20Rumah%20Sakit,%20mohon%20info%20jadwal%20dan%20proposal%20pelatihan%20{$urlTitle}%20di%20{$urlRegion}." target="_blank" style="background: rgba(255, 255, 255, 0.15); color: #ffffff; font-weight: 700; padding: 14px 22px; border-radius: 30px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; font-size: 0.95rem; border: 1px solid rgba(255,255,255,0.3);">
                <i class="bi bi-whatsapp"></i> CS 2: 0811-8500-177
            </a>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 12px;">
            <a href="https://api.whatsapp.com/send?phone=6287894580806&text=Halo%20Tim%20Narasumber%20Training%20Rumah%20Sakit,%20saya%20ingin%20konsultasi%20silabus%20klinis%20{$urlTitle}%20di%20{$urlRegion}." target="_blank" style="background: rgba(255, 255, 255, 0.1); color: #e2e8f0; font-weight: 600; padding: 10px 18px; border-radius: 25px; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; font-size: 0.88rem;">
                <i class="bi bi-whatsapp"></i> Tim Ahli: 0878-9458-0806
            </a>
            <a href="https://api.whatsapp.com/send?phone=6287894580649&text=Halo%20Divisi%20In-House%20Training%20Rumah%20Sakit,%20kami%20ingin%20mengajukan%20in-house%20training%20{$urlTitle}%20di%20{$urlRegion}." target="_blank" style="background: rgba(255, 255, 255, 0.1); color: #e2e8f0; font-weight: 600; padding: 10px 18px; border-radius: 25px; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; font-size: 0.88rem;">
                <i class="bi bi-whatsapp"></i> In-House RS: 0878-9458-0649
            </a>
        </div>
    </div>
</article>
HTML;
    }

    /**
     * Periksa database atau sintesis artikel secara dinamis
     */
    public static function getOrSynthesizeArticle(string $slug, $region = 'Indonesia'): ?array
    {
        $dbArticle = \App\Models\Article::where('slug', $slug)->first();
        if ($dbArticle) {
            return $dbArticle->toArray();
        }

        $cleanTitle = ucwords(str_replace('-', ' ', $slug));
        if (!str_starts_with($cleanTitle, 'Training')) {
            $cleanTitle = 'Training ' . $cleanTitle;
        }

        $programs = self::getPrograms();
        $selectedProgram = $programs[0];
        foreach ($programs as $prog) {
            if (stripos($cleanTitle, $prog['title']) !== false || stripos($prog['title'], $cleanTitle) !== false) {
                $selectedProgram = $prog;
                break;
            }
        }

        $content = self::buildFullArticleContent($cleanTitle, (string)$region, $selectedProgram);

        return [
            'id' => 9999,
            'title' => $cleanTitle,
            'slug' => $slug,
            'category' => 'Training Rumah Sakit & Keselamatan Pasien',
            'province' => 'Indonesia',
            'city' => (string)$region,
            'district' => '',
            'author' => 'Tim Ahli Manajemen & Pelayanan Medis Rumah Sakit',
            'read_time' => 35,
            'views_count' => 312,
            'created_at' => now()->subDays(2),
            'excerpt' => "Panduan komprehensif mengenai {$cleanTitle} mencakup tata kelola klinis, keselamatan pasien, pencegahan infeksi nosokomial, serta audit mutu akreditasi rumah sakit di {$region}.",
            'content' => $content,
        ];
    }
}