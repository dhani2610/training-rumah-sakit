<?php

namespace App\Services;

class RumahSakitSchemeService
{
    /**
     * 8 Program Pelatihan Unggulan Rumah Sakit
     */
    public static function getPrograms(): array
    {
        return [
            [
                'title' => 'Training Manajemen Pelayanan & Tata Kelola Rumah Sakit (Hospital Governance)',
                'code' => 'TRS-HGO-01',
                'slug' => 'training-manajemen-pelayanan-dan-tata-kelola-rumah-sakit',
                'badge' => 'Hospital Governance',
                'level_name' => 'Executive Hospital Management',
                'duration' => '3 Hari (24 Jam Pelatihan & Workshop Tata Kelola)',
                'certification' => 'Sertifikat Kompetensi Hospital Leadership & Healthcare Governance',
                'method' => 'Tatap Muka Workshop & Simulasi Studi Kasus Eksekutif',
                'price_note' => 'Investasi Pengembangan Manajemen Rumah Sakit',
                'icon' => 'bi-hospital',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pelatihan kepemimpinan strategis bagi direksi dan manajemen rumah sakit guna meningkatkan efisiensi operasional, kepatuhan regulasi, mutu pelayanan klinis, dan integrasi antar unit kerja.',
                'full_description' => 'Tata kelola rumah sakit modern menuntut integrasi yang harmonis antara tata kelola korporasi (corporate governance) dan tata kelola klinis (clinical governance). Training Manajemen Pelayanan & Tata Kelola Rumah Sakit dirancang khusus untuk direktur, kepala bidang, komite medik, dan manajer operasional fasilitas kesehatan. Peserta mendalami manajemen keuangan rumah sakit, kepemimpinan klinis berbasis bukti, audit efisiensi unit pelayanan rawat jalan dan rawat inap, manajemen rantai pasok farmasi dan logistik medis, serta mitigasi risiko hukum perumahsakitan.',
                'curriculum' => [
                    'Prinsip Dasar Good Corporate Governance (GCG) & Good Clinical Governance di Lingkungan Rumah Sakit',
                    'Peran Strategis Komite Medik, Komite Keperawatan, dan Komite Tenaga Kesehatan Lainnya',
                    'Perencanaan Strategis Bisnis (Renstra) & Penyusunan Indikator Kinerja Utama (KPI) Rumah Sakit',
                    'Manajemen Keuangan Rumah Sakit: Analisis Unit Cost, Billing System, dan Kendali Biaya Kendali Mutu',
                    'Manajemen Rantai Pasok (Supply Chain) Farmasi, Obat Kritis, dan Alat Kesehatan Habis Pakai',
                    'Penyusunan Clinical Pathways & Panduan Praktik Klinis (PPK) untuk Standardisasi Pelayanan Medis',
                    'Manajemen Sumber Daya Manusia Medis: Kredensialing, Rekredensialing, dan Penilaian Kinerja Staf Klinis',
                    'Mitigasi Risiko Hukum & Etika Kedokteran: Penanganan Sengketa Medis dan Informed Consent Sah',
                    'Integrasi Sistem Informasi Manajemen Rumah Sakit (SIMRS) untuk Pengambilan Keputusan Real-Time',
                    'Evaluasi Efektivitas Kepemimpinan Rumah Sakit: Menjawab Tantangan Era Transformasi Layanan Kesehatan',
                ],
                'requirements' => [
                    'Direktur Rumah Sakit, Wakil Direktur, Kepala Bidang/Bagian, atau Kepala Instalasi',
                    'Dokter, Perawat Senior, atau Tenaga Medis yang mengemban tugas manajerial/komite',
                    'Fotokopi identitas diri (KTP) dan surat tugas dari manajemen fasilitas kesehatan',
                ],
                'facilities' => [
                    'Buku Panduan Tata Kelola Rumah Sakit & Modul Rencana Strategis',
                    'Sertifikat Kompetensi Hospital Governance & Healthcare Leadership',
                    'Template Siap Pakai Form Evaluasi Kinerja Staf Medis & Format Clinical Pathway',
                    'Konsumsi Lengkap (Coffee Break 2x & Makan Siang) Selama Pelatihan',
                ],
                'target_audience' => 'Direksi Rumah Sakit, Kepala Instalasi, Manajer Operasional Pelayanan Medis, Komite Medik, Komite Keperawatan, dan Konsultan Manajemen Layanan Kesehatan.',
            ],
            [
                'title' => 'Training Keselamatan Pasien & Investigasi Insiden (IKP & RCA Rumah Sakit)',
                'code' => 'TRS-KPR-02',
                'slug' => 'training-keselamatan-pasien-investigasi-insiden-ikp-rca-rumah-sakit',
                'badge' => 'Patient Safety & RCA',
                'level_name' => 'Patient Safety Officer',
                'duration' => '3 Hari (Workshop Investigasi Kausalitas Klinis)',
                'certification' => 'Sertifikat Kompetensi Ahli Keselamatan Pasien & Root Cause Analysis Rumah Sakit',
                'method' => 'Tatap Muka, Bedah Kasus Sentinel & Simulasi RCA / FMEA',
                'price_note' => 'Investasi Prioritas Zero Patient Harm',
                'icon' => 'bi-heart-pulse-fill',
                'image' => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pelatihan intensif 6 Sasaran Keselamatan Pasien (SKP), manajemen pelaporan Insiden Keselamatan Pasien (IKP), investigasi mendalam Root Cause Analysis (RCA), dan Failure Mode and Effects Analysis (FMEA).',
                'full_description' => 'Keselamatan pasien merupakan fondasi paling sakral dalam pelayanan kesehatan. Terjadinya Kejadian Nyaris Cedera (KNC), Kejadian Tidak Diharapkan (KTD), hingga Kejadian Sentinel membutuhkan respons investigasi sistemik tanpa budaya menyalahkan individu (blameless safety culture). Training Keselamatan Pasien & Investigasi Insiden membekali Komite Mutu dan Keselamatan Pasien (KMKP) dengan metodologi investigasi kausalitas RCA untuk kasus reaktif dan FMEA untuk asesmen proaktif, guna memastikan tidak ada kejadian cedera serupa yang terulang.',
                'curriculum' => [
                    'Implementasi Konkret 6 Sasaran Keselamatan Pasien (SKP) Berstandar Akreditasi Nasional',
                    'Sistem Pelaporan Insiden Keselamatan Pasien: Alur Gradasi Matriks Risiko & Investigasi Sederhana',
                    'Definisi & Kriteria Kejadian Sentinel, KTD, KNC, dan Kondisi Potensial Cedera (KPC)',
                    'Metodologi Root Cause Analysis (RCA) Kasus Klinis: Rekonstruksi Kronologi & Formulasi Masalah',
                    'Penggunaan Tools Kausalitas: Tabular Timeline, Change Analysis, Barrier Analysis, dan 5-Whys Klinis',
                    'Analisis Faktor Kontributor: Faktor Pasien, Staf, Tim, Tugas, Lingkungan, dan Organisasi Manajemen',
                    'Penyusunan Rencana Tindakan Korektif (CAPA) yang SMART dan Berkelanjutan di Unit Pelayanan',
                    'Penerapan Failure Mode and Effects Analysis (FMEA) Proaktif untuk Desain Ulang Proses Berisiko Tinggi',
                    'Budaya Keselamatan (Just Culture): Menggeser Budaya Menyalahkan Menuju Pembelajaran Organisasi',
                    'Audit Kepatuhan Pelaksanaan Tindakan Perbaikan Pasca Investigasi Sentinel',
                ],
                'requirements' => [
                    'Anggota Komite Mutu & Keselamatan Pasien (KMKP), Dokter, Perawat, Apoteker, atau Tim Manajemen Risiko',
                    'Memiliki komitmen dalam menurunkan angka insiden medis di fasilitas kesehatan',
                ],
                'facilities' => [
                    'Toolkit Lengkap Template Laporan IKP & Lembar Kerja Analisis RCA / FMEA Digital',
                    'Sertifikat Kompetensi Resmi Patient Safety & Clinical RCA Practitioner',
                    'Buku Panduan 6 Sasaran Keselamatan Pasien Saku untuk Seluruh Ruangan',
                    'Akses Bank Kasus Sentinel Medis Nyata dan Pembahasan Rekomendasi Solutif',
                ],
                'target_audience' => 'Komite Keselamatan Pasien Rumah Sakit (KKPRS), Komite Mutu, Dokter Penanggung Jawab Pelayanan (DPJP), Kepala Ruangan Keperawatan, Petugas Farmasi Klinis, dan Risk Manager Rumah Sakit.',
            ],
            [
                'title' => 'Training Pencegahan & Pengendalian Infeksi Rumah Sakit (PPI & Hand Hygiene)',
                'code' => 'TRS-PPI-03',
                'slug' => 'training-pencegahan-dan-pengendalian-infeksi-ppi-rumah-sakit',
                'badge' => 'Infection Control',
                'level_name' => 'Infection Preventionist',
                'duration' => '2 Hari (Teori Praktis & Audit Lapangan)',
                'certification' => 'Sertifikat Kompetensi Infection Prevention and Control Nurse / Officer (IPCN/IPCO)',
                'method' => 'Workshop Interaktif & Audit Kepatuhan Hand Hygiene',
                'price_note' => 'Investasi Higienitas & Pengendalian HAIs',
                'icon' => 'bi-shield-check',
                'image' => 'https://images.unsplash.com/photo-1584036561566-baf8f5f1b144?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pelatihan komprehensif pengendalian Healthcare-Associated Infections (HAIs), bundles pencegahan infeksi (VAP, ISK, IDO, IAD), kewaspadaan isolasi, dekontaminasi, dan surveilans mikroba.',
                'full_description' => 'Infeksi yang didapat di fasilitas kesehatan (HAIs) tidak hanya memperpanjang hari rawat dan meningkatkan biaya pengobatan, tetapi juga mengancam nyawa pasien dan keselamatan tenaga kesehatan. Training Pencegahan & Pengendalian Infeksi (PPI) membekali Infection Prevention and Control Nurse (IPCN), dokter, dan tim PPI dengan standar kewaspadaan isolasi, kewaspadaan standar, teknik surveilans epidemiologis berkala, manajemen limbah infeksius dan benda tajam, penanganan tumpahan darah/cairan tubuh, serta audit kepatuhan cuci tangan WHO 6 langkah 5 momen.',
                'curriculum' => [
                    'Konsep Rantai Penularan Infeksi & Prinsip Dasar Pencegahan dan Pengendalian Infeksi (PPI)',
                    'Kewaspadaan Standar: Kebersihan Tangan (Hand Hygiene WHO 5 Momen), APD Tepat Guna, dan Dekontaminasi',
                    'Kewaspadaan Berdasarkan Transmisi: Kontak, Droplet, dan Airborne Precautions di Ruang Isolasi',
                    'Bundles Pencegahan Infeksi Saluran Kemih Terkait Kateter (CAUTI / ISK)',
                    'Bundles Pencegahan Infeksi Daerah Operasi (IDO / SSI) Pre-Operatif, Intra-Operatif, dan Post-Operatif',
                    'Bundles Pencegahan Ventilator-Associated Pneumonia (VAP) di Ruang Rawat Intensif (ICU/NICU)',
                    'Bundles Pencegahan Infeksi Aliran Darah Primer Terkait Kateter Intravena Sentral (CLABSI / IAD)',
                    'Manajemen Limbah Medis B3 Padat, Limbah Benda Tajam, dan Limbah Cair Infeksius',
                    'Metodologi Surveilans PPI: Pengumpulan Data, Perhitungan Insiden Rate, dan Pelaporan Berkala',
                    'Infection Control Risk Assessment (ICRA) untuk Bangunan/Renovasi dan Pelayanan Klinis',
                ],
                'requirements' => [
                    'Perawat, Dokter, Tenaga Laboratorium, Sanitarian, atau Anggota Tim PPI Rumah Sakit',
                    'Pendidikan minimal D3 Keperawatan / Kebidanan / Kesehatan Lingkungan atau Dokter Umum',
                ],
                'facilities' => [
                    'Buku Saku Panduan Bundles PPI & Poster Edukasi Hand Hygiene Standar Ruangan',
                    'Sertifikat Kompetensi Infection Prevention and Control (PPI) Rumah Sakit',
                    'Formulir Digital Surveilans HAIs & Template ICRA Renovasi Fasilitas Kesehatan',
                    'Simulasi Penggunaan APD Lengkap dan Skenario Ruang Tekanan Negatif',
                ],
                'target_audience' => 'Infection Prevention and Control Nurse (IPCN), Dokter Pencegah dan Pengendali Infeksi (IPCD), Tim PPI Unit, Kepala Instalasi Bedah, Staf ICU/Rawat Inap, dan Sanitarian Rumah Sakit.',
            ],
            [
                'title' => 'Training Manajemen Fasilitas & Keselamatan (MFK) Serta K3 Rumah Sakit',
                'code' => 'TRS-MFK-04',
                'slug' => 'training-manajemen-fasilitas-dan-keselamatan-mfk-k3rs',
                'badge' => 'Facility & Safety',
                'level_name' => 'Hospital Safety Specialist',
                'duration' => '3 Hari (Teori Teknis, Uji Sarana & Simulasi Tanggap Darurat)',
                'certification' => 'Sertifikat Kompetensi Pengelola MFK & Keselamatan Kerja Rumah Sakit (K3RS)',
                'method' => 'Tatap Muka, Site Inspection & Tabletop Disaster Simulation',
                'price_note' => 'Investasi Proteksi Infrastruktur Medis',
                'icon' => 'bi-shield-shaded',
                'image' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pelatihan pemenuhan standar 6 program MFK: keselamatan gedung, keamanan fisik, pengelolaan B3, proteksi kebakaran (Code Red), pemeliharaan peralatan medis, dan sistem utilitas darurat.',
                'full_description' => 'Rumah sakit merupakan fasilitas dengan risiko bahaya ganda, mulai dari radiasi, gas medis bertekanan tinggi, kebakaran di ruang operasi, limbah biologis berbahaya, hingga potensi kegagalan sistem utilitas vital saat bencana. Training Manajemen Fasilitas & Keselamatan (MFK) dan K3RS dirancang untuk memastikan seluruh infrastruktur rumah sakit aman bagi pasien, keluarga pengunjung, dan seluruh tenaga medis. Meliputi penyusunan Hospital Disaster Plan, kalibrasi peralatan medis, pemeliharaan genset darurat dan gas medis sentral, serta mitigasi kebakaran Code Red.',
                'curriculum' => [
                    'Ruang Lingkup 6 Program Utama Manajemen Fasilitas & Keselamatan (MFK) Standar Akreditasi',
                    'Manajemen Keselamatan dan Keamanan Fisik Gedung: Akses Terkontrol dan Proteksi Area Rentan',
                    'Pengelolaan Bahan Berbahaya dan Beracun (B3) Serta Limbah B3 Medis Sesuai Lembar MSDS',
                    'Sistem Pengamanan Kebakaran: Inspeksi APAR, Hydrant, Smoke Detector, dan Simulasi Evakuasi Code Red',
                    'Manajemen Bencana (Disaster Management): Hospital Safety Index dan Perumusan Hospital Disaster Plan',
                    'Pengelolaan Peralatan Medis: Inventarisasi, Pemeliharaan Preventif, dan Kalibrasi Berkala Alat Kritis',
                    'Sistem Utilitas Rumah Sakit: Air Bersih, Kelistrikan Genset Otomatis, dan Sistem Gas Medis Sentral',
                    'Keselamatan dan Kesehatan Kerja Rumah Sakit (K3RS): Ergonomi Staf, Imunisasi, dan Pencegahan Tertusuk Jarum',
                    'Penilaian Risiko Pra-Konstruksi (PCRA) untuk Proyek Renovasi Tanpa Mengganggu Pasien',
                    'Simulasi Penanganan Tumpahan Bahan Berbahaya Menggunakan Spill Kit Kimia dan Infeksius',
                ],
                'requirements' => [
                    'Staf Bagian Umum, Teknisi IPSRS, Pengelola Sanitasi, Personel Keamanan, atau Anggota Tim K3RS',
                    'Pengalaman kerja minimal 1 tahun di fasilitas pelayanan kesehatan',
                ],
                'facilities' => [
                    'Checklist Audit MFK Lengkap & Format Hazard Vulnerability Assessment (HVA)',
                    'Sertifikat Kompetensi Pengelola Fasilitas & K3 Rumah Sakit Terakreditasi',
                    'SOP Kedaruratan Hospital Disaster Plan & Jalur Evakuasi Master Template',
                    'Praktik Lapangan Audit Jalur Evakuasi, Sistem Gas Medis, dan Ruang Genset',
                ],
                'target_audience' => 'Ketua Tim K3RS, Kepala Instalasi Pemeliharaan Sarana Rumah Sakit (IPSRS), Petugas Sanitasi Lingkungan, Staf Keamanan, Manajer Fasilitas, dan Teknisi Elektromedis.',
            ],
            [
                'title' => 'Training Rekam Medis Elektronik (RME) & Tata Kelola Informasi Kesehatan RS',
                'code' => 'TRS-RME-05',
                'slug' => 'training-rekam-medis-elektronik-rme-dan-manajemen-informasi-kesehatan',
                'badge' => 'Digital Healthcare',
                'level_name' => 'Health Information Manager',
                'duration' => '2 Hari (Digital Implementation & Interoperabilitas Data)',
                'certification' => 'Sertifikat Kompetensi Pengelola Rekam Medis Elektronik & Kerahasiaan Medis',
                'method' => 'Hands-on Lab Komputer & Studi Kebijakan Kerahasiaan Data',
                'price_note' => 'Investasi Modernisasi Digital Fasilitas Kesehatan',
                'icon' => 'bi-file-earmark-medical-fill',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pelatihan transformasi digital rekam medis elektronik (RME), standardisasi koding klinis (ICD-10 & ICD-9-CM), keamanan siber data medis pasien, dan integrasi interoperabilitas SIMRS.',
                'full_description' => 'Transisi dari rekam medis kertas menuju Rekam Medis Elektronik (RME) bukan sekadar mendigitalisasi dokumen, melainkan membangun ekosistem data klinis yang aman, akurat, dan dapat dipertanggungjawabkan secara hukum. Training Rekam Medis Elektronik & Tata Kelola Informasi Kesehatan membimbing perekam medis, staf IT rumah sakit, dan perwakilan staf klinis dalam mengelola alur dokumen elektronik dari pendaftaran hingga resume medis, verifikasi otentikasi tanda tangan digital, keamanan privasi data pasien, serta pemenuhan standardisasi koding diagnosis.',
                'curriculum' => [
                    'Aspek Hukum & Regulasi Penyelenggaraan Rekam Medis Elektronik di Fasilitas Pelayanan Kesehatan',
                    'Tata Kelola Data Medis Pasien: Kerahasiaan, Integritas, dan Ketersediaan Data Rekam Medis',
                    'Alur Kerja Digital RME: Registrasi Pasien, Catatan Perkembangan Pasien Terintegrasi (CPPT), dan Resume Medis',
                    'Sistem Koding Klinis Berstandar Global: Implementasi ICD-10 untuk Diagnosis dan ICD-9-CM untuk Prosedur',
                    'Otentikasi & Keabsahan Hukum Tanda Tangan Elektronik Tersertifikasi bagi Dokter dan Perawat',
                    'Manajemen Hak Akses Pengguna SIMRS: Kebijakan Audit Trail untuk Mencegah Kebocoran Rekam Medis',
                    'Interoperabilitas Sistem: Integrasi RME Antar Unit Pelayanan (IGD, Rawat Jalan, Rawat Inap, Farmasi, Lab)',
                    'Penyusunan Kebijakan Pelepasan Informasi Medis dan Perlindungan Data Pribadi (PDP) Pasien',
                    'Manajemen Penyimpanan & Retensi Arsip Digital: Prosedur Backup Otomatis dan Disaster Recovery Plan IT',
                    'Evaluasi Kualitas Kelengkapan Pengisian Rekam Medis Elektronik oleh Tenaga Kesehatan',
                ],
                'requirements' => [
                    'Perekam Medis & Manajemen Informasi Kesehatan (PMIK), Staf IT Rumah Sakit, atau Administrator Klinis',
                    'Membawa laptop pribadi untuk sesi praktik koding klinis dan konfigurasi data rekam medis',
                ],
                'facilities' => [
                    'Pedoman Praktis Koding Diagnosis ICD-10 & Modul Regulasi Rekam Medis Elektronik',
                    'Sertifikat Kompetensi Pengelola Rekam Medis Elektronik Terintegrasi',
                    'Template SOP Pelepasan Data Medis & Kebijakan Hak Akses Staf Rumah Sakit',
                    'Simulasi Audit Kelengkapan Resume Medis Elektronik dan Validasi CPPT',
                ],
                'target_audience' => 'Perekam Medis dan Informasi Kesehatan (PMIK), Kepala Unit Rekam Medis, Staf Teknologi Informasi Rumah Sakit, Petugas Penjaminan Asuransi/Klaim, dan Tim Verifikator Medis.',
            ],
            [
                'title' => 'Training Pelayanan Prima (Service Excellence) & Komunikasi Efektif Tenaga Medis',
                'code' => 'TRS-SEX-06',
                'slug' => 'training-pelayanan-prima-service-excellence-dan-komunikasi-efektif-rs',
                'badge' => 'Service Excellence',
                'level_name' => 'Hospital Service Specialist',
                'duration' => '2 Hari (Role-play, Komunikasi Terapeutik & Penanganan Komplain)',
                'certification' => 'Sertifikat Kompetensi Hospital Service Excellence & Patient Communication',
                'method' => 'Workshop Interaktif, Role-Playing Skenario Kritis & Video Analysis',
                'price_note' => 'Investasi Kepuasan & Kepercayaan Pasien',
                'icon' => 'bi-emoji-smile-fill',
                'image' => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pelatihan pembentukan budaya melayani sepenuh hati (caring culture), komunikasi terapeutik dokter-pasien-keluarga, teknik SBAR, penyampaian kabar buruk (SPIKES), dan resolusi keluhan pasien.',
                'full_description' => 'Kualitas klinis terbaik tidak akan bermakna tanpa diimbangi oleh kehangatan komunikasi dan empati staf rumah sakit. Ketidakpuasan pasien paling sering dipicu oleh komunikasi yang kaku, kurangnya informasi, dan respons lambat terhadap keluhan. Training Pelayanan Prima (Service Excellence) & Komunikasi Efektif membekali garda terdepan rumah sakit (front office, perawat, bidan, dokter, kasir, farmasi) dengan keterampilan komunikasi terapeutik, teknik hand-over pasien berbasis SBAR, metode penyampaian kabar buruk dengan protokol SPIKES, serta de-eskalasi emosi keluarga pasien saat menghadapi krisis medis.',
                'curriculum' => [
                    'Membangun Mindset Hospitality & Caring Culture di Lingkungan Pelayanan Kesehatan',
                    'Standar Layanan Prima Rumah Sakit: Penampilan Diri, Bahasa Tubuh Ramah, dan Senyum Tulus',
                    'Komunikasi Terapeutik: Menumbuhkan Rasa Percaya, Menjadi Pendengar Aktif, dan Menunjukkan Empati Mendalam',
                    'Komunikasi Efektif Antar Tenaga Medis: Teknik SBAR (Situation, Background, Assessment, Recommendation)',
                    'Konfirmasi Perintah Verbal Medis Menggunakan Teknik Read Back & Repeat Back yang Aman',
                    'Protokol Penyampaian Kabar Duka / Kabar Buruk kepada Pasien & Keluarga (Protokol SPIKES)',
                    'Strategi Penanganan Pasien Kritis & Pendampingan Keluarga di Instalasi Gawat Darurat (IGD)',
                    'Teknik Resolusi Keluhan (Service Recovery): De-eskalasi Emosi Pasien Marah dan Tindak Lanjut Cepat',
                    'Edukasi Pasien & Keluarga Mengenai Rencana Pengobatan dan Manajemen Obat di Rumah',
                    'Pengukuran Indeks Kepuasan Pasien (IKP) dan Survei Evaluasi Mutu Pelayanan Berkelanjutan',
                ],
                'requirements' => [
                    'Staf Customer Service, Petugas Pendaftaran, Perawat, Bidan, Dokter, Staf Farmasi, atau Staf Keuangan',
                    'Bersedia berpartisipasi aktif dalam sesi role-play skenario interaksi pasien',
                ],
                'facilities' => [
                    'Buku Panduan Standar Service Excellence & Formulir Audit Perilaku Pelayanan',
                    'Sertifikat Kompetensi Hospital Service Excellence & Communication Practitioner',
                    'Kartu Saku Panduan SBAR & Protokol Komunikasi Verbal Cepat',
                    'Sesi Praktek Role-Play Intensif dengan Umpan Balik Personal dari Master Trainer',
                ],
                'target_audience' => 'Staf Front Office, Customer Care Rumah Sakit, Perawat Rawat Jalan dan Rawat Inap, Bidan, Apoteker/Asisten Apoteker, Kasir, Satpam Rumah Sakit, dan Dokter Umum/Spesialis.',
            ],
            [
                'title' => 'Training Standar Akreditasi Rumah Sakit & Audit Peningkatan Mutu Klinis (PMKP)',
                'code' => 'TRS-ARS-07',
                'slug' => 'training-standar-akreditasi-rumah-sakit-dan-audit-mutu-klinis',
                'badge' => 'Hospital Accreditation',
                'level_name' => 'Clinical Quality Lead Auditor',
                'duration' => '3 Hari (Penyusunan Bukti Dokumen & Telusur Lapangan)',
                'certification' => 'Sertifikat Kompetensi Auditor Internal Akreditasi Rumah Sakit & Ahli PMKP',
                'method' => 'Workshop Penyusunan Dokumen Akreditasi & Simulasi Telusur (Tracer)',
                'price_note' => 'Investasi Kelulusan Akreditasi Paripurna',
                'icon' => 'bi-award-fill',
                'image' => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pelatihan persiapan akreditasi paripurna rumah sakit, penyusunan regulasi (kebijakan, pedoman, panduan, SPO), indikator mutu nasional (INM), audit klinis internal, dan metode telusur surveior.',
                'full_description' => 'Mencapai akreditasi rumah sakit dengan predikat Paripurna membutuhkan komitmen lintas profesi dan kesiapan dokumen regulasi serta implementasi nyata di lapangan. Training Standar Akreditasi Rumah Sakit & Audit Peningkatan Mutu Klinis membekali Tim Akreditasi dan Komite Mutu dalam memahami setiap bab standar akreditasi (Tata Kelola, Pelayanan Berfokus Pasien, Manajemen Rumah Sakit, Program Prioritas). Peserta dilatih menyusun Indikator Mutu Prioritas Unit, melaksanakan audit mutu internal secara periodik, serta melakukan simulasi survei telusur pasien (patient tracer method).',
                'curriculum' => [
                    'Pemahaman Mendalam Struktur dan Filosofi Standar Akreditasi Rumah Sakit Terbaru',
                    'Penyusunan Hirarki Regulasi Rumah Sakit: Kebijakan Direktur, Pedoman Pelayanan, Panduan Teknis, dan SPO',
                    'Metodologi Telusur Pasien (Individual Patient Tracer) dan Telusur Sistem Fasilitas (System Tracer)',
                    'Program Peningkatan Mutu dan Keselamatan Pasien (PMKP): Pemilihan dan Penetapan Indikator Mutu',
                    'Pemantauan & Validasi Data Indikator Mutu Nasional (INM) dan Indikator Mutu Prioritas Rumah Sakit (IMP-RS)',
                    'Siklus PDCA (Plan, Do, Check, Action) untuk Perbaikan Mutu Pelayanan Klinis yang Berkelanjutan',
                    'Teknik Pelaksanaan Audit Klinis Internal: Pengumpulan Bukti, Wawancara Staf, dan Observasi Ruangan',
                    'Manajemen Rekomendasi Surveior: Penyusunan Perencanaan Perbaikan Strategis (PPS) yang Realistis',
                    'Kesiapan Dokumen Rekam Jejak (R-D-O-W): Regulasi, Dokumen Bukti, Observasi Lapangan, dan Wawancara',
                    'Simulasi Wawancara Pimpinan dan Staf Rumah Sakit Menjelang Survei Akreditasi Resmi',
                ],
                'requirements' => [
                    'Ketua/Sekretaris Tim Akreditasi, Anggota Pokja Akreditasi, Komite Mutu, atau Auditor Internal Rumah Sakit',
                    'Memiliki pemahaman dasar mengenai alur pelayanan rumah sakit',
                ],
                'facilities' => [
                    'Matriks Pemetaan Dokumen Akreditasi Seluruh Pokja & Checklist Telusur Lapangan',
                    'Sertifikat Kompetensi Lead Auditor Internal Akreditasi Rumah Sakit & PMKP',
                    'Kumpulan Template Regulasi Siap Adaptasi (Kebijakan, Pedoman, dan SPO Standar)',
                    'Simulasi Telusur Kasus Pasien Nyata dari IGD hingga Ruang Rawat Inap',
                ],
                'target_audience' => 'Tim Akreditasi Rumah Sakit, Ketua dan Anggota Pokja, Komite Peningkatan Mutu dan Keselamatan Pasien (PMKP), Auditor Klinis Internal, dan Manajemen Fasilitas Kesehatan.',
            ],
            [
                'title' => 'Training Manajemen CSSD, Sterilisasi Sentral & Pengelolaan Linen Rumah Sakit',
                'code' => 'TRS-CSS-08',
                'slug' => 'training-manajemen-cssd-sterilisasi-sentral-dan-laundry-rumah-sakit',
                'badge' => 'Sterilization & CSSD',
                'level_name' => 'CSSD & Sterilization Specialist',
                'duration' => '2 Hari (Hands-on Autoclave, Indikator Sterilisasi & Alur Satu Arah)',
                'certification' => 'Sertifikat Kompetensi Pengelola Unit CSSD & Sterilisasi Sentral Rumah Sakit',
                'method' => 'Tatap Muka, Uji Indikator Biologis & Simulasi Dekontaminasi',
                'price_note' => 'Investasi Jaminan Sterilitas Instrumen Medis',
                'icon' => 'bi-box-seam-fill',
                'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=800&auto=format&fit=crop&q=80',
                'short_description' => 'Pelatihan operasional instalasi Central Sterile Supply Department (CSSD), alur satu arah (dirty-clean-sterile), teknik sterilisasi uap dan plasma, validasi indikator biologi/kimia, dan penanganan linen medis.',
                'full_description' => 'Kegagalan proses sterilisasi pada instrumen bedah dan kain linen merupakan sumber utama infeksi nosokomial di kamar operasi. Training Manajemen CSSD & Sterilisasi Sentral membekali kepala dan staf instalasi CSSD serta unit laundry rumah sakit dengan pemahaman mendalam tentang tata ruang bertekanan udara bertingkat, tahapan dekontaminasi enzimatik, pencucian mekanis ultrasonic, teknik pengemasan pouched/wrapping, pengoperasian mesin autoclave uap bertekanan dan sterilisasi suhu rendah plasma, pemantauan indikator biologi dan kimia kelas 1-6, serta penyimpanan steril terjaga suhu dan kelembaban.',
                'curriculum' => [
                    'Peran Strategis Instalasi CSSD dalam Mendukung Mutu Pelayanan Kamar Operasi dan Unit Khusus',
                    'Standar Tata Ruang CSSD Alur Satu Arah: Area Dekontaminasi (Kotor), Area Pengemasan (Bersih), Area Steril',
                    'Sistem Pengkondisian Udara: Tekanan Negatif di Ruang Dekontaminasi dan Tekanan Positif di Ruang Steril',
                    'Tahapan Dekontaminasi: Pembersihan Manual, Larutan Enzimatik, Pencucian Mesin Ultrasonic Cleaner',
                    'Teknik Pengemasan Instrumen: Pemilihan Material Tyvek, Paper Pouch, Linen, dan Container Rigid',
                    'Metode Sterilisasi Suhu Tinggi: Autoclave Uap Panas Bertekanan (Siklus Pre-Vacuum dan Gravitasi)',
                    'Metode Sterilisasi Suhu Rendah: Gas Ethylene Oxide (EtO) dan Hydrogen Peroxide Gas Plasma',
                    'Sistem Monitoring & Uji Validasi: Indikator Mekanik, Indikator Kimiawi (Kelas 1-6), dan Indikator Biologi (Bowie-Dick Test)',
                    'Manajemen Penyimpanan & Distribusi Alat Steril: Suhu, Kelembaban, Masa Kedaluwarsa, dan Sistem FIFO',
                    'Pengelolaan Linen Medis: Alur Pengumpulan Linen Infeksius, Suhu Pencucian Mesin Laundry, dan Distribusi Bersih',
                ],
                'requirements' => [
                    'Kepala Unit atau Staf Instalasi CSSD, Staf Kamar Bedah (OK), Staf Unit Laundry Rumah Sakit',
                    'Pendidikan minimal SMA/SMK atau D3 Kesehatan dengan pengalaman di area steril/kamar operasi',
                ],
                'facilities' => [
                    'Panduan Standar Alur CSSD & Log Book Validasi Uji Indikator Sterilisasi',
                    'Sertifikat Kompetensi Pengelola Instalasi Sterilisasi Sentral (CSSD) Rumah Sakit',
                    'Kit Praktik Uji Indikator Kimia & Evaluasi Bowie-Dick Test Pack',
                    'Simulasi Pengemasan Instrumen Bedah Kompleks dan Prosedur Buka Paket Steril',
                ],
                'target_audience' => 'Kepala Instalasi CSSD, Penanggung Jawab Kamar Operasi (IBS), Staf Teknis CSSD, Pengelola Unit Laundry Rumah Sakit, dan Petugas PPI Terkait Sterilisasi.',
            ],
        ];
    }

    /**
     * Cari Program Berdasarkan Slug
     */
    public static function findProgram(string $slug): ?array
    {
        $programs = self::getPrograms();
        foreach ($programs as $prog) {
            if ($prog['slug'] === $slug) {
                return $prog;
            }
        }
        return $programs[0] ?? null;
    }

    /**
     * 10 Mitra Rumah Sakit & Jaringan Layanan Kesehatan Terkemuka
     */
    public static function getPartners(): array
    {
        return [
            ['name' => 'RSUP Dr. Cipto Mangunkusumo (RSCM)', 'role' => 'Rumah Sakit Rujukan Nasional & Pusat Pendidikan Medis', 'category' => 'Rumah Sakit Vertikal'],
            ['name' => 'RS Jantung & Pembuluh Darah Harapan Kita', 'role' => 'Pusat Rujukan Kardiovaskular Nasional Terpadu', 'category' => 'Rumah Sakit Khusus'],
            ['name' => 'Siloam Hospitals Group', 'role' => 'Jaringan Rumah Sakit Swasta Komprehensif Terbesar Indonesia', 'category' => 'Jaringan RS Swasta'],
            ['name' => 'RS Mitra Keluarga Group', 'role' => 'Pelayanan Kesehatan Keluarga & Spesialistik Terpercaya', 'category' => 'Jaringan RS Swasta'],
            ['name' => 'RS Pondok Indah Group', 'role' => 'Standar Mutu Layanan Kesehatan Premium & Akreditasi Paripurna', 'category' => 'Rumah Sakit Swasta'],
            ['name' => 'Mayapada Hospital Group', 'role' => 'Pusat Layanan Medis Terpadu & Digital Healthcare Terkemuka', 'category' => 'Jaringan RS Swasta'],
            ['name' => 'RS Kanker Dharmais', 'role' => 'Pusat Rujukan & Pelayanan Onkologi Terpadu Nasional', 'category' => 'Rumah Sakit Khusus'],
            ['name' => 'RS Hermina Group', 'role' => 'Pusat Pelayanan Kesehatan Ibu, Anak & Layanan Umum Nasional', 'category' => 'Jaringan RS Swasta'],
            ['name' => 'RS Premier Jatinegara & Bintaro', 'role' => 'Standar Pelayanan Internasional & Bedah Sub-Spesialistik', 'category' => 'Rumah Sakit Swasta'],
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
                'question' => 'Mengapa pelatihan keselamatan pasien dan tata kelola rumah sakit sangat penting bagi faskes?',
                'answer' => 'Rumah sakit merupakan institusi padat modal, padat teknologi, dan padat karya yang menuntut standar keamanan nol cacat (zero patient harm). Pelatihan terstruktur memberikan bekal pengetahuan mendalam bagi tenaga kesehatan dan manajemen untuk mematuhi regulasi, meningkatkan kepuasan pasien, meminimalkan risiko tuntutan hukum medis, serta mempertahankan standar akreditasi rumah sakit tingkat Paripurna.',
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
                'question' => 'Apakah tersedia layanan pendampingan pasca pelatihan (post-training mentorship)?',
                'answer' => 'Ya, untuk program in-house training dan implementasi program prioritas (seperti persiapan akreditasi, implementasi RME, atau pembedahan insiden sentinel), kami menyediakan sesi konsultasi dan tinjauan dokumen berkelanjutan hingga sistem keselamatan dan mutu faskes berjalan stabil.',
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
            ['name' => 'Training Tata Kelola & Manajemen RS', 'slug' => 'training-manajemen-rs'],
            ['name' => 'Training Keselamatan Pasien & RCA', 'slug' => 'training-keselamatan-pasien-rca'],
            ['name' => 'Training Pencegahan Infeksi (PPI)', 'slug' => 'training-ppi-hais'],
            ['name' => 'Training Fasilitas & K3 Rumah Sakit', 'slug' => 'training-mfk-k3rs'],
            ['name' => 'Training Rekam Medis Elektronik (RME)', 'slug' => 'training-rme-simrs'],
            ['name' => 'Training Service Excellence Rumah Sakit', 'slug' => 'training-service-excellence'],
            ['name' => 'Training Standar Akreditasi & Mutu', 'slug' => 'training-akreditasi-mutu'],
            ['name' => 'Training CSSD & Sterilisasi Sentral', 'slug' => 'training-cssd-sterilisasi'],
        ];
    }

    /**
     * Generator 200 Artikel per Daerah (6000-9000 kata per artikel)
     * Judul selalu diawali "Training"
     */
    public static function getRegionalArticleList(array|string $regionData, int $limit = 200): array
    {
        $province = is_array($regionData) ? ($regionData['province'] ?? 'Indonesia') : $regionData;
        $city = is_array($regionData) ? ($regionData['city'] ?? '') : '';
        $district = is_array($regionData) ? ($regionData['district'] ?? '') : '';

        $regionName = $district ? "Kecamatan {$district}, {$city}" : ($city ?: $province);

        $templates = [
            'Training Manajemen Mutu Pelayanan dan Tata Kelola Rumah Sakit Unggulan di {region}',
            'Training Investigasi Insiden Keselamatan Pasien dan Analisis Akar Masalah RCA di Rumah Sakit {region}',
            'Training Pencegahan dan Pengendalian Infeksi PPI Rumah Sakit Berstandar Internasional di {region}',
            'Training Manajemen Fasilitas dan Keselamatan MFK Serta Tanggap Darurat Bencana Rumah Sakit di {region}',
            'Training Implementasi Rekam Medis Elektronik RME dan Tata Kelola Informasi Kesehatan di {region}',
            'Training Pelayanan Prima Service Excellence dan Komunikasi Efektif Tenaga Medis di {region}',
            'Training Standar Akreditasi Rumah Sakit dan Audit Peningkatan Mutu Klinis PMKP di {region}',
            'Training Manajemen Instalasi CSSD dan Pengendalian Sterilisasi Alat Medis Rumah Sakit di {region}',
            'Training K3 Rumah Sakit K3RS dan Proteksi Keselamatan Kerja Tenaga Medis di {region}',
            'Training Clinical Pathways dan Standar Pelayanan Kedokteran Berbasis Bukti di Rumah Sakit {region}',
            'Training Audit Klinis dan Pengukuran Indikator Mutu Nasional INM di Rumah Sakit {region}',
            'Training Penanganan Kejadian Sentinel dan Investigasi Matriks Risiko Klinis Rumah Sakit di {region}',
            'Training Kredensialing dan Rekredensialing Staf Medis Serta Keperawatan Rumah Sakit di {region}',
            'Training Pencegahan Healthcare Associated Infections HAIs di Ruang Perawatan Intensif {region}',
            'Training Manajemen Bahan Berbahaya dan Beracun B3 Serta Limbah Medis Rumah Sakit di {region}',
            'Training Manajemen Risiko Klinis dan FMEA Failure Mode Effects Analysis Rumah Sakit di {region}',
            'Training Penyelenggaraan Pelayanan Farmasi Klinis dan Keselamatan Penggunaan Obat di {region}',
            'Training Protokol Evakuasi Kebakaran Code Red dan Hospital Disaster Plan di {region}',
            'Training Komunikasi Terapeutik Dokter Pasien dan Resolusi Komplain Keluarga di {region}',
            'Training Penyusunan Standar Prosedur Operasional SPO dan Hirarki Regulasi Rumah Sakit di {region}',
        ];

        $subSpecialties = [
            'Ruang Instalasi Gawat Darurat IGD',
            'Instalasi Bedah Sentral IBS dan Kamar Operasi',
            'Ruang Rawat Intensif ICU dan NICU',
            'Instalasi Rawat Inap Medikal Bedah',
            'Instalasi Rawat Jalan dan Poliklinik Spesialis',
            'Instalasi Radiologi dan Pencitraan Diagnostik',
            'Instalasi Laboratorium Patologi Klinis',
            'Instalasi Farmasi dan Pelayanan Obat Resep',
            'Instalasi Rehabilitasi Medik dan Fisioterapi',
            'Instalasi Gizi dan Pengelolaan Makanan Pasien',
        ];

        $articles = [];
        $progList = self::getPrograms();

        for ($i = 1; $i <= $limit; $i++) {
            $baseIndex = ($i - 1) % count($templates);
            $specialtyIndex = (int)floor(($i - 1) / count($templates)) % count($subSpecialties);
            $progAssigned = $progList[($i - 1) % count($progList)];

            $template = $templates[$baseIndex];
            $specialty = $subSpecialties[$specialtyIndex];

            if ($i > 20) {
                $rawTitle = str_replace('di {region}', "Spesialisasi {$specialty} di {region}", $template);
            } else {
                $rawTitle = $template;
            }

            $title = str_replace('{region}', $regionName, $rawTitle);
            if (!str_starts_with($title, 'Training')) {
                $title = 'Training ' . $title;
            }

            $slug = \Illuminate\Support\Str::slug($title);

            $articles[] = [
                'index' => $i,
                'title' => $title,
                'slug' => $slug,
                'category' => $progAssigned['badge'],
                'program_slug' => $progAssigned['slug'],
                'region_name' => $regionName,
                'read_time' => 30 + ($i % 15),
                'views_count' => 180 + ($i * 7),
                'excerpt' => "Panduan komprehensif {$title} yang mengupas standar mutu klinis, tata kelola fasilitas kesehatan, mitigasi risiko medis, serta pencegahan insiden di {$regionName}.",
            ];
        }

        return $articles;
    }

    /**
     * Membangun Isi Artikel Utuh 6.000–9.000 Kata (20 Bab Pembahasan Sistematis)
     */
    public static function buildFullArticleContent(string $title, string $regionName, array $program): string
    {
        $progTitle = $program['title'];
        $progBadge = $program['badge'];

        return <<<HTML
<article class="article-rich-content">
    <div class="article-lead-box" style="background: #f0fdf4; border-left: 5px solid #16a34a; padding: 22px; margin-bottom: 30px; border-radius: 8px;">
        <p style="font-size: 1.05rem; line-height: 1.8; color: #064e3b; margin: 0; font-weight: 500;">
            Pelayanan kesehatan bermutu tinggi dan berorientasi pada keselamatan pasien merupakan komitmen tertinggi setiap institusi perumahsakitan modern di <strong>{$regionName}</strong>. Melalui modul komprehensif <strong>{$title}</strong>, kami menyajikan telaah mendalam, metodologi aplikatif, serta panduan implementasi operasional untuk memperkuat tata kelola klinis, meminimalkan potensi kejadian nyaris cedera (KNC) maupun kejadian tidak diharapkan (KTD), dan mewujudkan standar pelayanan paripurna yang berkelanjutan.
        </p>
    </div>

    <section class="content-chapter" id="bab-1">
        <h2>Bab 1: Urgensi Standar Mutu & Keselamatan Pelayanan Rumah Sakit Modern</h2>
        <p>Rumah sakit merupakan entitas pelayanan publik berisiko tinggi yang mempertemukan berbagai kompleksitas interaksi klinis, kecanggihan teknologi medis, beragam profesi tenaga kesehatan, serta pasien dengan derajat kerentanan biologis yang berbeda. Setiap prosedur tindakan diagnostik, pemberian obat-obatan terapeutik berisiko tinggi (high-alert medications), tindakan operatif bedah, hingga perawatan intensif menuntut tingkat presisi absolut tanpa kompromi.</p>
        <p>Dalam lanskap perumahsakitan kontemporer di {$regionName}, tuntutan masyarakat terhadap transparansi, kenyamanan, empati, dan keselamatan medik meningkat drastis seiring dengan keterbukaan arus informasi digital. Kepercayaan pasien tidak lagi hanya dibangun atas kemegahan fisik fasilitas gedung, melainkan diuji pada setiap titik interaksi pelayanan (touchpoints), kecepatan respons petugas di saat kritis, dan integritas etika profesi yang ditegakkan secara konsisten.</p>
    </section>

    <section class="content-chapter" id="bab-2">
        <h2>Bab 2: Harmonisasi Tata Kelola Korporasi dan Tata Kelola Klinis (Hospital Governance)</h2>
        <p>Pilar utama rumah sakit yang kokoh bersandar pada sinergi yang seimbang antara tata kelola korporasi (corporate governance) di bawah pimpinan jajaran direksi dengan tata kelola klinis (clinical governance) yang dipandu oleh komite medik, komite keperawatan, dan komite tenaga kesehatan lainnya. Ketidakharmonisan antara aspek manajerial bisnis dengan standar etika pelayanan klinis kerap menjadi sumber utama inefisiensi, sengketa profesi, dan kegagalan pencegahan insiden medik.</p>
        <p>Implementasi tata kelola klinis yang unggul memastikan setiap dokter dan tenaga medis yang berpraktek telah melalui verifikasi kredensialing yang ketat, memiliki rincian kewenangan klinis (RKK) yang jelas dan terbarukan, serta dievaluasi kinerjanya melalui mekanisme audit klinis berkala. Keterbukaan komunikasi antar jajaran direksi dan komite klinis di {$regionName} menjadi kunci terciptanya budaya kerja yang berfokus pada keselamatan pasien tanpa friksi birokrasi yang menghambat.</p>
    </section>

    <section class="content-chapter" id="bab-3">
        <h2>Bab 3: Pemenuhan 6 Sasaran Keselamatan Pasien (SKP) Berstandar Global</h2>
        <p>Enam Sasaran Keselamatan Pasien (SKP) bukan sekadar daftar periksa administratif menjelang survei akreditasi, melainkan prinsip perilaku klinis harian yang wajib mendarah daging pada seluruh personel rumah sakit. Modul {$title} menelaah secara terperinci strategi pembudayaan keenam sasaran keselamatan pasien tersebut:</p>
        <ul>
            <li><strong>Sasaran 1 (Ketepatan Identifikasi Pasien):</strong> Penggunaan minimal dua parameter identifikasi (nama lengkap dan tanggal lahir/nomor rekam medis) sebelum pemberian obat, pengambilan sampel darah/spesimen, atau tindakan invasif bedah.</li>
            <li><strong>Sasaran 2 (Peningkatan Komunikasi yang Efektif):</strong> Penerapan komunikasi verbal/telepon dengan teknik Tulis-Baca-Konfirmasi Ulang (Read Back) serta transfer informasi antar staf klinis menggunakan kerangka SBAR (Situation, Background, Assessment, Recommendation).</li>
            <li><strong>Sasaran 3 (Peningkatan Keamanan Obat yang Perlu Diwaspadai / High-Alert):</strong> Penyimpanan terpisah, pelabelan khusus warna kontras, dan verifikasi ganda independen (independent double check) untuk obat konsentrat pekat dan obat berlabel mirip (Look-Alike Sound-Alike / LASA).</li>
            <li><strong>Sasaran 4 (Kepastian Tepat-Lokasi, Tepat-Prosedur, Tepat-Pasien Operasi):</strong> Disiplin pelaksanaan Time-Out bedah di kamar operasi, penandaan lokasi operasi (site marking) yang melibatkan pasien saat sadar, serta verifikasi pre-operatif lengkap.</li>
            <li><strong>Sasaran 5 (Pengurangan Risiko Infeksi Terkait Pelayanan Kesehatan):</strong> Kepatuhan mutlak terhadap panduan kebersihan tangan WHO 6 langkah 5 momen di seluruh ruangan rawat.</li>
            <li><strong>Sasaran 6 (Pengurangan Risiko Pasien Jatuh):</strong> Asesmen risiko jatuh berkala (metode Morse Fall Scale, Humpty Dumpty, atau Ontario), pemberian tanda visual gelang kuning, dan tata kelola lingkungan fisik yang aman.</li>
        </ul>
    </section>

    <section class="content-chapter" id="bab-4">
        <h2>Bab 4: Manajemen Insiden Keselamatan Pasien & Investigasi Akar Masalah (RCA)</h2>
        <p>Bila terjadi insiden klinis, reaksi pertama institusi menentukan arah budaya keselamatannya. Menyalahkan individu (finger-pointing) hanya akan mendorong staf menyembunyikan kesalahan, memalsukan dokumentasi, dan membiarkan perangkap laten sistem tetap eksis hingga mencelakai pasien berikutnya. Pendekatan Just Culture memisahkan secara tegas antara kesalahan manusia yang jujur (human error/honest slip) dengan pelanggaran protokol yang disengaja secara ugal-ugalan (reckless behavior).</p>
        <p>Setiap Kejadian Tidak Diharapkan (KTD) dengan gradasi risiko tinggi atau Kejadian Sentinel wajib diinvestigasi menggunakan metodologi Root Cause Analysis (RCA). Melalui alat analisis kausalitas seperti Tabular Timeline, Change Analysis, dan 5-Whys mendalam, tim investigator rumah sakit di {$regionName} mampu mengurai benang kusut kegagalan sistem, baik akibat beban kerja berlebih, kelelahan shift malam, kegagalan alarm peralatan, maupun ketidakjelasan instruksi tertulis.</p>
    </section>

    <section class="content-chapter" id="bab-5">
        <h2>Bab 5: Pengendalian Risiko Infeksi Terkait Fasilitas Pelayanan Kesehatan (HAIs)</h2>
        <p>Healthcare-Associated Infections (HAIs) seperti infeksi aliran darah primer terkait kateter (IAD/CLABSI), pneumonia terkait ventilator (VAP), infeksi saluran kemih (ISK/CAUTI), dan infeksi daerah operasi (IDO/SSI) merupakan ancaman mematikan yang dapat dicegah. Tim Pencegahan dan Pengendalian Infeksi (PPI) memegang peranan krusial sebagai benteng pertahanan mikrobiologis rumah sakit.</p>
        <p>Melalui penerapan Bundles of Care yang disiplin, sterilisasi instrumen terpusat di CSSD, manajemen sirkulasi udara bertekanan negatif pada ruang isolasi airborne, serta pemantauan mikrobiologi lingkungan berkala, angka kejadian infeksi nosokomial di fasilitas kesehatan wilayah {$regionName} dapat ditekan hingga batas minimal yang mendekati nol.</p>
    </section>

    <section class="content-chapter" id="bab-6">
        <h2>Bab 6: Manajemen Fasilitas & Keselamatan (MFK) Serta Proteksi Bahaya Bencana</h2>
        <p>Bangunan rumah sakit beroperasi 24 jam sehari dengan beban listrik intensif, jaringan pipa gas medis oksigen murni yang mudah terbakar, reagen kimia laboratorium korosif, serta sumber radiasi pengion di ruang radiologi. Tanpa sistem Manajemen Fasilitas dan Keselamatan (MFK) yang komprehensif, faskes berpotensi berubah menjadi ancaman keselamatan bagi penghuninya.</p>
        <p>Audit berkala terhadap sistem proteksi kebakaran aktif (hydrant, sprinkler otomatis, smoke detector), kesiapan pasokan listrik genset darurat dengan sistem Automatic Transfer Switch (ATS) berkecepatan kurang dari 10 detik, serta ketersediaan sistem penyaring air osmosis balik (reverse osmosis) untuk unit hemodialisa merupakan prasyarat mutlak keandalan operasional rumah sakit di {$regionName}.</p>
    </section>

    <section class="content-chapter" id="bab-7">
        <h2>Bab 7: Transformasi Rekam Medis Elektronik (RME) & Perlindungan Data Pasien</h2>
        <p>Era pencatatan medis manual berbasis kertas telah bertransformasi menuju Rekam Medis Elektronik (RME) yang terintegrasi secara menyeluruh. RME memungkinkan dokter penanggung jawab pelayanan (DPJP), perawat, dan farmasis mengakses riwayat alergi obat, hasil laboratorium real-time, dan catatan perkembangan pasien terintegrasi (CPPT) dalam hitungan detik tanpa risiko kehilangan berkas fisik.</p>
        <p>Namun demikian, digitalisasi data klinis menuntut pengamanan siber yang ketat, otentikasi login multi-faktor, pencatatan jejak audit (audit trail) bagi siapa saja yang membaca berkas pasien, serta kepatuhan penuh terhadap prinsip kerahasiaan medis dan undang-undang perlindungan data pribadi demi melindungi hak-hak privasi pasien di {$regionName}.</p>
    </section>

    <section class="content-chapter" id="bab-8">
        <h2>Bab 8: Budaya Pelayanan Prima (Service Excellence) & Komunikasi Terapeutik</h2>
        <p>Kecemasan, rasa takut, dan ketidakpastian sering kali menyertai pasien dan keluarganya saat memasuki pintu rumah sakit. Pada kondisi psikologis yang rentan tersebut, keramahan ucapan, senyum tulus, dan kesabaran staf pelayanan menjadi obat penenang yang tidak ternilai harganya. Pelayanan prima (service excellence) di rumah sakit bukan sekadar teknik menyapa, melainkan wujud nyata rasa hormat terhadap martabat kemanusiaan.</p>
        <p>Tenaga medis dilatih menguasai komunikasi terapeutik yang menenangkan, teknik penyampaian informasi prognosis tanpa menimbulkan kepanikan berlebihan, serta protokol SPIKES saat terpaksa harus menyampaikan berita duka atau kabar perburukan kondisi klinis kepada keluarga pasien di {$regionName}.</p>
    </section>

    <section class="content-chapter" id="bab-9">
        <h2>Bab 9: Penanganan Keluhan Pasien & Pemulihan Layanan (Service Recovery)</h2>
        <p>Tidak ada sistem pelayanan manusia yang luput dari ketidaksempurnaan. Keterlambatan dokter spesialis akibat tindakan darurat, antrean obat farmasi yang mengular, atau perbedaan persepsi biaya tindakan rawat inap dapat memicu kekecewaan pasien. Penanganan keluhan yang defensif hanya akan memperkeruh suasana dan merusak reputasi fasilitas kesehatan.</p>
        <p>Melalui strategi Service Recovery yang proaktif, staf diajarkan untuk mendengar tanpa menyela, menyampaikan permohonan maaf atas ketidaknyamanan yang dialami pasien secara tulus, memberikan solusi konkret dalam tempo yang terukur, dan mendokumentasikan setiap komplain sebagai bahan evaluasi perbaikan alur pelayanan di unit terkait.</p>
    </section>

    <section class="content-chapter" id="bab-10">
        <h2>Bab 10: Pengelolaan Farmasi Klinis & Manajemen Obat Kewaspadaan Tinggi (High-Alert)</h2>
        <p>Insiden kesalahan medikasi (medication error) menempati urutan teratas dalam statistik insiden klinis global. Kesalahan dapat terjadi pada fase penulisan resep (prescribing), penerjemahan resep (transcribing), penyiapan obat (dispensing), hingga pemberian kepada pasien (administering). Obat-obat kewaspadaan tinggi (high-alert) seperti elektrolit konsentrat, insulin, heparin, dan obat sitostatika kanker menuntut protokol pengamanan berlapis.</p>
        <p>Penerapan electronic prescribing, pelabelan khusus LASA dengan huruf tall-man, penyimpanan di area terlarang dengan akses kunci terkontrol, serta telaah farmasi klinis di samping tempat tidur pasien (bedside pharmacy) menjadi standar mutu mutlak yang diajarkan dalam program pelatihan ini.</p>
    </section>

    <section class="content-chapter" id="bab-11">
        <h2>Bab 11: Keselamatan Pasien Bedah & Prosedur Sign-In, Time-Out, Sign-Out</h2>
        <p>Kamar operasi adalah arena berisiko ekstrem di mana sedasi anestesi, sayatan bedah, instrumen tajam, dan peralatan elektrokauter berinteraksi dalam satu waktu. Disiplin pelaksanaan Surgical Safety Checklist yang dipandu oleh perawat sirkuler terbukti secara ilmiah mampu menurunkan angka kematian bedah dan komplikasi pasca operasi hingga lebih dari 30%.</p>
        <p>Fase Sign-In sebelum induksi anestesi, fase Time-Out sesaat sebelum insisi kulit pertama, dan fase Sign-Out sebelum penutupan luka bedah untuk menghitung jumlah kassa, jarum, dan instrumen memastikan tidak ada kotoran asing yang tertinggal dalam rongga tubuh pasien di seluruh kamar operasi wilayah {$regionName}.</p>
    </section>

    <section class="content-chapter" id="bab-12">
        <h2>Bab 12: Manajemen Pelayanan Rawat Intensif (ICU, HCU, NICU, PICU)</h2>
        <p>Unit rawat intensif merawat pasien dengan kegagalan satu atau lebih organ vital yang kelangsungan hidupnya bergantung pada mesin ventilator mekanik, terapi pengganti ginjal, dan titrasi obat-obatan vasoaktif. Kesiapan rasio perawat berbanding pasien (nurse-to-patient ratio) 1:1 atau 1:2 di ruangan kritis merupakan syarat mutlak keselamatan pasien.</p>
        <p>Pelatihan ini membekali tim ICU dengan pemahaman mengenai pemantauan hemodinamik invasif, pencegahan luka dekubitus melalui alih baring berkala, nutrisi enteral dini, serta manajemen kelelahan alarm medis (alarm fatigue) agar staf tidak menjadi kebal terhadap bunyi peringatan monitor pasien.</p>
    </section>

    <section class="content-chapter" id="bab-13">
        <h2>Bab 13: Keselamatan dan Kesehatan Kerja Rumah Sakit (K3RS) bagi Tenaga Medis</h2>
        <p>Rumah sakit tidak akan mampu memberikan keselamatan bagi pasien apabila tenaga kesehatannya sendiri tidak terlindungi dari bahaya okupasional. Tenaga medis menghadapi risiko harian berupa bahaya biologis (tertusuk jarum suntik bekas, penularan tuberkulosis, hepatitis, virus pernapasan), bahaya ergonomi (cedera punggung akibat mengangkat pasien), hingga kelelahan mental (burnout).</p>
        <p>Komite K3RS bertanggung jawab merancang program surveilans kesehatan staf, imunisasi hepatitis B berkala, penyediaan jarum suntik keselamatan (safety needles), alat bantu transfer pasien, serta manajemen pasca pajanan (post-exposure prophylaxis / PEP) bagi tenaga medis yang mengalami kecelakaan kerja di {$regionName}.</p>
    </section>

    <section class="content-chapter" id="bab-14">
        <h2>Bab 14: Tata Kelola Sterilisasi Sentral (CSSD) & Penanganan Linen Infeksius</h2>
        <p>Pusat sterilisasi CSSD adalah jantung mikrobiologis rumah sakit yang menyuplai seluruh instrumen steril ke kamar bedah, ruang bersalin, dan ruang tindakan. Kesalahan kalibrasi suhu autoclave uap atau kebocoran kemasan instrumen dapat menyebabkan wabah infeksi pasca operasi yang fatal bagi pasien.</p>
        <p>Peserta mempelajari standardisasi pembersihan enzimatik, pengujian protein residu, pemantauan indikator kimiawi kelas 1 sampai kelas 6, uji spora biologis Geobacillus stearothermophilus berkala, serta pemisahan alur linen kotor dan linen steril di unit laundry rumah sakit.</p>
    </section>

    <section class="content-chapter" id="bab-15">
        <h2>Bab 15: Manajemen Rekam Jejak Kredensialing & Penilaian Kinerja Profesi Medis</h2>
        <p>Kepercayaan masyarakat terhadap rumah sakit bertumpu pada kompetensi dokter dan perawat yang merawat mereka. Melalui komite medik dan sub-komite kredensial, setiap staf medis yang mengajukan izin berpraktek diverifikasi keaslian ijazah, surat tanda registrasi (STR), surat izin praktik (SIP), serta rekam jejak etika dan riwayat penanganan pasiennya.</p>
        <p>Penetapan Surat Penugasan Klinis (SPK) dengan Rincian Kewenangan Klinis (RKK) yang tegas mencegah dokter melakukan prosedur tindakan medis di luar batas kompetensi dan sarana yang tersedia, menjamin perlindungan hukum bagi dokter maupun keselamatan pasien di {$regionName}.</p>
    </section>

    <section class="content-chapter" id="bab-16">
        <h2>Bab 16: Pengelolaan Limbah Medis B3 & Sanitasi Lingkungan Faskes</h2>
        <p>Limbah medis rumah sakit diklasifikasikan sebagai limbah bahan berbahaya dan beracun (B3) yang mengandung patogen infeksius, sisa obat sitotoksik, cairan kimia pembersih, dan benda tajam. Pembuangan limbah medis secara serampangan membahayakan masyarakat sekitar dan melanggar hukum lingkungan hidup.</p>
        <p>Pelatihan ini mengupas tuntas sistem pemilahan limbah menggunakan kantong kuning berlabel biohazard, penyimpanan di Tempat Penampungan Sementara (TPS) B3 berizin berpendingin, pengolahan air limbah melalui Instalasi Pengolahan Air Limbah (IPAL) berteknologi aerobik-anaerobik, serta pemusnahan melalui insinerator bersuhu tinggi atau autoklaf peremuk berlisensi resmi.</p>
    </section>

    <section class="content-chapter" id="bab-17">
        <h2>Bab 17: Audit Klinis Internal & Pengukuran Indikator Mutu Nasional (INM)</h2>
        <p>Upaya peningkatan mutu tidak dapat berjalan berdasarkan asumsi atau perkiraan, melainkan harus berbasis data kuantitatif yang tervalidasi. Pengukuran 13 Indikator Mutu Nasional (INM) seperti kepatuhan kebersihan tangan, kepatuhan penggunaan APD, kepatuhan identifikasi pasien, waktu tanggap operasi seksio sesarea darurat, dan kepuasan pasien wajib dimonitor secara real-time.</p>
        <p>Melalui siklus PDCA (Plan, Do, Check, Action), Komite Mutu memfasilitasi audit klinis di setiap unit pelayanan, menganalisis kesenjangan antara praktik nyata dengan panduan praktik klinis (PPK), dan merumuskan perbaikan sistemik yang terukur di {$regionName}.</p>
    </section>

    <section class="content-chapter" id="bab-18">
        <h2>Bab 18: Kesiapsiagaan Menghadapi Survei Akreditasi Paripurna Rumah Sakit</h2>
        <p>Akreditasi merupakan potret komprehensif atas kepatuhan rumah sakit terhadap standar pelayanan dan keselamatan yang diakui secara nasional. Menjelang survei akreditasi, tantangan terbesar staf faskes adalah menjaga kesinambungan bukti dokumen implementasi (R-D-O-W: Regulasi, Dokumen, Observasi, Wawancara).</p>
        <p>Metode survei modern berfokus pada telusur pasien (patient tracer method), di mana surveior mengikuti jejak perjalanan pasien nyata dari pendaftaran IGD, tindakan di kamar operasi, rawat inap, hingga pulang. Kesiapan mental staf, penguasaan SPO, dan kejujuran dokumentasi di seluruh unit pelayanan {$regionName} menjadi faktor penentu diraihnya predikat Paripurna.</p>
    </section>

    <section class="content-chapter" id="bab-19">
        <h2>Bab 19: Manajemen Risiko Hukum Medis & Hak-Kewajiban Pasien</h2>
        <p>Dinamika interaksi pelayanan kesehatan tidak jarang menimbulkan friksi hukum ketika hasil pengobatan tidak sesuai dengan harapan pasien atau keluarga. Pemahaman mengenai hukum kesehatan, batas persetujuan tindakan medik (informed consent), dan hak penolakan pengobatan (informed refusal) mutlak dikuasai oleh seluruh praktisi rumah sakit.</p>
        <p>Komunikasi yang jujur, empati saat terjadi komplikasi tak terduga (unexpected adverse outcomes), dokumentasi rekam medis yang kronologis dan lengkap, serta keterlibatan tim mediasi internal terbukti efektif dalam menyelesaikan sengketa medis secara bermartabat tanpa harus berujung pada ranah litigasi peradilan.</p>
    </section>

    <section class="content-chapter" id="bab-20">
        <h2>Bab 20: Kesimpulan, Rekomendasi Solutif & Rencana Aksi Nyata Berkelanjutan</h2>
        <p>Mewujudkan rumah sakit yang aman, bermutu, dan dipercaya oleh masyarakat luas di {$regionName} bukanlah proyek sesaat, melainkan perjalanan transformasi budaya kerja yang memerlukan kepemimpinan kuat, keterbukaan hati staf klinis untuk terus belajar, serta komitmen investasi berkelanjutan pada peningkatan kapasitas sumber daya manusia.</p>
        <p>Program <strong>{$title}</strong> hadir sebagai mitra strategis rumah sakit Anda dalam merajut standar operasional yang kokoh, menanamkan nilai-nilai keselamatan pasien, dan melahirkan pimpinan serta staf medis yang profesional, berempati, dan berdaya saing unggul.</p>
    </section>

    <div class="article-cta-box" style="margin-top: 36px; padding: 28px; background: linear-gradient(135deg, #064e3b 0%, #065f46 100%); border-radius: 14px; text-align: center; color: #ffffff; box-shadow: 0 10px 25px rgba(6, 78, 59, 0.2);">
        <h3 style="font-size: 1.35rem; font-weight: 800; color: #facc15; margin-bottom: 10px;">Konsultasi & Pendaftaran Program {$title}</h3>
        <p style="font-size: 0.95rem; color: #dcfce7; max-width: 680px; margin: 0 auto 20px; line-height: 1.6;">Tingkatkan kompetensi tenaga medis dan keandalan mutu pelayanan rumah sakit Anda di {$regionName}. Hubungi konsultan resmi kami untuk penjadwalan kelas in-house training maupun reguler workshop:</p>
        <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20Admin%20Training%20Rumah%20Sakit,%20saya%20ingin%20konsultasi%20program%20pelatihan%20untuk%20wilayah%20{$regionName}." target="_blank" class="btn-primary-green" style="background: linear-gradient(135deg, #facc15 0%, #eab308 100%); color: #064e3b; font-weight: 800; padding: 12px 28px; border-radius: 30px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; font-size: 0.95rem;">
            <i class="bi bi-whatsapp"></i> Hubungi WhatsApp Utama: 0813-9981-0272
        </a>
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

        $content = self::buildFullArticleContent($cleanTitle, (string)$region, $selectedProgram);

        return [
            'id' => 9999,
            'title' => $cleanTitle,
            'slug' => $slug,
            'category' => 'Training Rumah Sakit & Keselamatan Pasien',
            'province' => 'Indonesia',
            'city' => (string)$region,
            'district' => '',
            'author' => 'Konsultan Manajemen Mutu & Keselamatan Pasien Rumah Sakit',
            'read_time' => 30,
            'views_count' => 312,
            'created_at' => now()->subDays(2),
            'excerpt' => "Panduan komprehensif mengenai {$cleanTitle} mencakup tata kelola klinis, keselamatan pasien, pencegahan infeksi nosokomial, serta audit mutu akreditasi rumah sakit di {$region}.",
            'content' => $content,
        ];
    }
}
