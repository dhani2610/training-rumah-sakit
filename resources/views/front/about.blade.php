@extends('layouts.front')

@section('title', 'Tentang Kami | Profil, Sejarah, Visi, Misi & Kredibilitas Training Rumah Sakit')
@section('meta_description', 'Profil lengkap, sejarah pendirian, visi, misi, dan kredibilitas lembaga Training Rumah Sakit: Pelatihan Akreditasi Rumah Sakit, Keselamatan Pasien & RCA, PPI, MFK-K3RS, RME, & Manajemen Faskes.')

@section('content')

    <!-- HERO ABOUT -->
    <section class="hero-section" style="padding: 56px 0 50px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-hospital"></i>
                Pusat Pelatihan & Konsultasi Manajemen Mutu Rumah Sakit & Keselamatan Pasien Nasional
            </div>

            <h1 class="hero-title" style="font-size: 2.35rem;">
                Membangun Keunggulan & Integritas <span>Tata Kelola Rumah Sakit</span> di Seluruh Indonesia
            </h1>

            <p class="hero-lead" style="max-width: 840px;">
                Mendedikasikan keahlian manajemen klinis dan standar akreditasi paripurna untuk mencetak tenaga kesehatan profesional, komite mutu faskes yang handal, serta tata kelola rumah sakit modern berorientasi keselamatan pasien.
            </p>
        </div>
    </section>

    <!-- SEJARAH, VISI & MISI SECTION -->
    <section class="section-py">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; margin-bottom: 56px; align-items: center;">
                <div>
                    <span class="section-tag" style="background: #f0fdf4; color: #166534; font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase;">Sejarah Kami</span>
                    <h2 class="section-title" style="font-size: 1.85rem; margin: 10px 0 18px;">
                        Lembaga Pendidikan & Pelatihan Manajemen Rumah Sakit Terpercaya di Indonesia
                    </h2>
                    <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                        Penyelenggaraan pelayanan kesehatan di era modern menuntut kesiapan rumah sakit menghadapi standar akreditasi berkelanjutan, transformasi digital rekam medis elektronik (RME), dan penerapan budaya keselamatan pasien (Just Culture) tanpa kompromi.
                    </p>
                    <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 20px;">
                        Didirikan oleh para praktisi manajemen rumah sakit, mantan direktur RS, dokter spesialis, konsultan mutu klinis, dan surveyor akreditasi berpengalaman, <strong>Training Rumah Sakit</strong> hadir untuk memberikan solusi peningkatan kapasitas sumber daya manusia faskes di 38 provinsi di Indonesia.
                    </p>
                    <div style="display: flex; gap: 18px; flex-wrap: wrap;">
                        <div style="background: #f0fdf4; border-left: 4px solid #16a34a; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #064e3b;">1.250+</div>
                            <div style="font-size: 0.78rem; color: #166534; font-weight: 600;">Rumah Sakit & Faskes Didampingi</div>
                        </div>
                        <div style="background: #f0fdf4; border-left: 4px solid #16a34a; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #064e3b;">38</div>
                            <div style="font-size: 0.78rem; color: #166534; font-weight: 600;">Provinsi Jangkauan Program</div>
                        </div>
                        <div style="background: #f0fdf4; border-left: 4px solid #16a34a; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #064e3b;">35.000+</div>
                            <div style="font-size: 0.78rem; color: #166534; font-weight: 600;">Tenaga Kesehatan Terlatih</div>
                        </div>
                    </div>
                </div>

                <div style="background: #ffffff; border: 1px solid #bbf7d0; border-radius: var(--radius-xl); padding: 32px; box-shadow: 0 8px 24px rgba(22, 163, 74, 0.06);">
                    <div style="margin-bottom: 28px;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                            <div style="width: 38px; height: 38px; background: #f0fdf4; color: #16a34a; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                                <i class="bi bi-eye-fill"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #064e3b; margin: 0;">Visi Lembaga</h3>
                        </div>
                        <p style="font-size: 0.9rem; color: #475569; line-height: 1.65; margin: 0;">
                            Menjadi pusat keunggulan dan rujukan utama nasional dalam pelatihan manajemen rumah sakit, peningkatan mutu pelayanan klinis, kepatuhan akreditasi paripurna, dan penguatan budaya keselamatan pasien di seluruh fasilitas pelayanan kesehatan.
                        </p>
                    </div>

                    <div style="border-top: 1px solid #e2e8f0; padding-top: 24px;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                            <div style="width: 38px; height: 38px; background: #fefce8; color: #ca8a04; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #064e3b; margin: 0;">Misi Lembaga</h3>
                        </div>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: #475569;">
                            <li style="display: flex; align-items: flex-start; gap: 8px;">
                                <i class="bi bi-check-circle-fill" style="color: #16a34a; font-size: 1rem; margin-top: 2px;"></i>
                                <span>Menyelenggarakan pelatihan dan pendampingan akreditasi rumah sakit berbasis standar nasional dan internasional secara sistematis dan aplikatif.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 8px;">
                                <i class="bi bi-check-circle-fill" style="color: #16a34a; font-size: 1rem; margin-top: 2px;"></i>
                                <span>Mengembangkan kompetensi komite mutu, komite medik, dan perawat dalam manajemen risiko klinis, investigasi IKP, Root Cause Analysis (RCA), dan FMEA.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 8px;">
                                <i class="bi bi-check-circle-fill" style="color: #16a34a; font-size: 1rem; margin-top: 2px;"></i>
                                <span>Memfasilitasi peningkatan tata kelola pencegahan infeksi (PPI), manajemen fasilitas dan keselamatan faskes (MFK-K3RS), serta digitalisasi Rekam Medis Elektronik (RME).</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 8px;">
                                <i class="bi bi-check-circle-fill" style="color: #16a34a; font-size: 1rem; margin-top: 2px;"></i>
                                <span>Mendorong terwujudnya rumah sakit unggul dengan pelayanan prima (service excellence), kepuasan pasien optimal, dan operasional berkelanjutan.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- LEGALITAS & AKREDITASI -->
            <div style="background: linear-gradient(145deg, #064e3b 0%, #065f46 100%); color: #ffffff; border-radius: 20px; padding: 36px 32px; border: 1px solid rgba(34, 197, 94, 0.4); box-shadow: 0 12px 32px rgba(6, 78, 59, 0.25);">
                <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
                    <div>
                        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(34, 197, 94, 0.2); border: 1px solid rgba(34, 197, 94, 0.35); color: #86efac; font-size: 0.74rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase; margin-bottom: 12px;">
                            <i class="bi bi-patch-check-fill"></i> Standar Mutu Faskes & Kredibilitas Resmi
                        </div>
                        <h3 style="font-size: 1.45rem; font-weight: 800; margin-bottom: 8px; color: #ffffff;">Standar Mutu Pelayanan Rumah Sakit & Kepatuhan Kompetensi</h3>
                        <p style="font-size: 0.88rem; color: #dcfce7; max-width: 680px; margin: 0; line-height: 1.6;">
                            Seluruh silabus pelatihan mengacu pada standar akreditasi faskes terdepan, pedoman 6 Sasaran Keselamatan Pasien (SKP) WHO, regulasi digitalisasi rekam medis, dan standar tata kelola rumah sakit modern.
                        </p>
                    </div>
                    <div>
                        <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Training Rumah Sakit, saya ingin konsultasi penawaran pelatihan manajemen rumah sakit dan akreditasi faskes.') }}" target="_blank" class="btn-primary-green" style="font-size: 0.88rem; padding: 12px 22px;">
                            <i class="bi bi-whatsapp"></i> Hubungi Hotline Utama: 0813-9981-0272
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
