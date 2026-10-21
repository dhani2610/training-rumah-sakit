@extends('layouts.front')

@section('title', ($program->title ?? 'Program Pelatihan') . ' | Training Rumah Sakit Sertifikasi Kompetensi Resmi')
@section('meta_description', Str::limit($program->short_description ?? ($program->full_description ?? ''), 160))

@section('content')

    <!-- HERO PROGRAM DETAIL -->
    <section class="hero-section" style="padding: 50px 0 46px; text-align: left;">
        <div class="container">
            <div style="font-size: 0.82rem; color: #86efac; margin-bottom: 18px; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                <a href="{{ route('home') }}" style="color: #cbd5e1;"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('programs') }}" style="color: #cbd5e1;">Program Pelatihan</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 700;">{{ $program->title }}</span>
            </div>

            <div class="hero-badge">
                <i class="bi bi-hospital"></i>
                {{ $program->level_name ?? 'Sertifikasi Manajemen Rumah Sakit & Mutu Pelayanan Klinis Resmi' }}
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.35rem; margin-bottom: 14px;">
                {{ $program->title }}
            </h1>

            <p class="hero-lead" style="margin-left: 0; max-width: 860px; margin-bottom: 24px;">
                {{ $program->short_description ?? $program->full_description }}
            </p>

            <div class="hero-cta" style="justify-content: flex-start; margin-bottom: 0;">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-green">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi & Daftar: 081399810272
                </a>
                <a href="#wilayah-daerah" class="btn-outline-white">
                    <i class="bi bi-geo-alt-fill"></i>
                    Pilih Wilayah Pelaksanaan Pelatihan (38 Provinsi)
                </a>
            </div>
        </div>
    </section>

    <!-- CONTENT WRAPPER -->
    <section class="section-py">
        <div class="container">
            <div class="content-sidebar-grid" style="margin-bottom: 48px;">
                
                <!-- Main Content -->
                <div>
                    <!-- Deskripsi Lengkap -->
                    <div class="article-content-card" style="margin-bottom: 28px;">
                        <h2 style="font-size: 1.4rem; font-weight: 800; color: #064e3b; margin-bottom: 16px; display: flex; align-items: center; gap: 10px;">
                            <i class="bi bi-file-text-fill" style="color: #16a34a;"></i> Deskripsi & Tujuan Program Pelatihan
                        </h2>
                        <div style="font-size: 0.92rem; color: #475569; line-height: 1.8; margin-bottom: 24px;">
                            <p>{{ $program->full_description ?? $program->short_description }}</p>
                        </div>

                        <!-- Kurikulum & Modul Pelatihan -->
                        <h3 style="font-size: 1.25rem; font-weight: 800; color: #064e3b; margin-bottom: 16px; border-top: 1px solid #f1f5f9; padding-top: 24px;">
                            Kurikulum & Silabus Modul Pelatihan
                        </h3>
                        <p style="font-size: 0.86rem; color: #64748b; margin-bottom: 18px;">
                            Silabus disusun terstruktur berbasis standar praktik perumahsakitan terbaik dan aplikasi langsung di faskes:
                        </p>

                        <div style="display: flex; flex-direction: column; gap: 10px;">
                            @php
                                $cData = $program->curriculum ?? [];
                                if (is_string($cData)) {
                                    $cList = array_filter(array_map('trim', explode("\n", $cData)));
                                } elseif (is_array($cData)) {
                                    $cList = $cData;
                                } else {
                                    $cList = [];
                                }
                            @endphp
                            @foreach($cList as $idx => $item)
                                <div style="display: flex; align-items: flex-start; gap: 14px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 12px 16px;">
                                    <span style="width: 26px; height: 26px; background: #16a34a; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: 800; flex-shrink: 0;">
                                        {{ $idx + 1 }}
                                    </span>
                                    <span style="font-size: 0.88rem; font-weight: 600; color: #064e3b; margin-top: 2px;">
                                        {{ $item }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Persyaratan Peserta Pelatihan -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 28px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
                        <h3 style="font-size: 1.2rem; font-weight: 800; color: #064e3b; margin-bottom: 14px; display: flex; align-items: center; gap: 10px;">
                            <i class="bi bi-card-checklist" style="color: #16a34a;"></i> Sasaran Peserta & Kesiapan Pelatihan
                        </h3>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: #475569; padding: 0;">
                            @php
                                $rData = $program->requirements ?? [];
                                if (is_string($rData)) {
                                    $rList = array_filter(array_map('trim', explode("\n", $rData)));
                                } elseif (is_array($rData)) {
                                    $rList = $rData;
                                } else {
                                    $rList = [];
                                }
                            @endphp
                            @if(count($rList) > 0)
                                @foreach($rList as $req)
                                    <li style="display: flex; align-items: flex-start; gap: 10px;">
                                        <i class="bi bi-check2-circle" style="color: #16a34a; font-size: 1.1rem; flex-shrink: 0;"></i>
                                        <span>{{ $req }}</span>
                                    </li>
                                @endforeach
                            @else
                                <li style="display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="bi bi-check2-circle" style="color: #16a34a; font-size: 1.1rem; flex-shrink: 0;"></i>
                                    <span>Direktur Rumah Sakit, Komite Mutu & Keselamatan Pasien (KMKP), Komite Medis, Komite Keperawatan, dan Tim Akreditasi Faskes.</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="bi bi-check2-circle" style="color: #16a34a; font-size: 1.1rem; flex-shrink: 0;"></i>
                                    <span>Dokter, Perawat Penanggung Jawab Pelayanan (DPJP/PPJA), Tim K3RS, Komite PPI, dan Staf Rekam Medis / SIMRS.</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="bi bi-check2-circle" style="color: #16a34a; font-size: 1.1rem; flex-shrink: 0;"></i>
                                    <span>Membawa laptop untuk simulasi telusur dokumen akreditasi, pengisian formulir RCA IKP, atau telaah rekam medis elektronik.</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

                <!-- Sidebar Ringkasan -->
                <div>
                    <div style="background: #ffffff; border: 1px solid #bbf7d0; border-radius: var(--radius-xl); padding: 26px; position: sticky; top: 96px; box-shadow: 0 4px 16px rgba(22, 163, 74, 0.06);">
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #064e3b; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                            Ringkasan Program
                        </h3>

                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 16px; margin-bottom: 24px; padding: 0;">
                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-clock-fill" style="color: #16a34a; font-size: 1.15rem;"></i>
                                <div>
                                    <div style="font-size: 0.74rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Durasi Pelatihan</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #064e3b;">{{ $program->duration ?? '3-5 Hari (32 Jam Pembelajaran)' }}</div>
                                </div>
                            </li>

                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-award-fill" style="color: #16a34a; font-size: 1.15rem;"></i>
                                <div>
                                    <div style="font-size: 0.74rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Standar Sertifikasi</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #064e3b;">{{ $program->certification_body ?? 'Sertifikasi Kompetensi Training Rumah Sakit' }}</div>
                                </div>
                            </li>

                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-shield-lock-fill" style="color: #16a34a; font-size: 1.15rem;"></i>
                                <div>
                                    <div style="font-size: 0.74rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Fasilitas Praktik</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #064e3b;">Simulasi Hospital Walkthrough, Modul Telusur Akreditasi, Software RME, & Template Dokumen RS</div>
                                </div>
                            </li>
                        </ul>

                        <a href="{{ $waLink }}" target="_blank" class="btn-primary-green" style="width: 100%; justify-content: center; margin-bottom: 10px;">
                            <i class="bi bi-whatsapp"></i> Daftar Sekarang via WA
                        </a>

                        <a href="{{ route('contact') }}" class="btn-card-detail" style="width: 100%; display: block; text-align: center; border: 1px solid #cbd5e1; padding: 10px; border-radius: 8px; font-weight: 700; color: #064e3b;">
                            <i class="bi bi-envelope"></i> Permohonan In-House RS
                        </a>
                    </div>
                </div>
            </div>

            <!-- 4 WHATSAPP HOTLINES -->
            <div class="wa-hotlines-box" style="background: linear-gradient(145deg, #064e3b 0%, #065f46 100%); border-radius: 18px; padding: 32px; color: #ffffff; border: 1px solid rgba(34, 197, 94, 0.4);">
                <div class="wa-hotlines-header" style="text-align: center; max-width: 680px; margin: 0 auto 26px;">
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
                        <i class="bi bi-telephone-inbound-fill" style="color: #facc15; margin-right: 8px;"></i> 4 Nomor WhatsApp Resmi Layanan Pendaftaran & Konsultasi
                    </h3>
                    <p style="font-size: 0.88rem; color: #dcfce7;">Hubungi hotline resmi kami di bawah ini untuk konsultasi langsung mengenai {{ $program->title }}:</p>
                </div>

                <div class="wa-hotlines-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px;">
                    @foreach($waNumbers as $hotline)
                        <a href="{{ $hotline['url'] }}" target="_blank" class="wa-hotline-card" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.12); border-radius: 12px; padding: 18px; color: #ffffff; display: flex; flex-direction: column; text-decoration: none; {{ !empty($hotline['primary']) ? 'border: 2px solid #facc15;' : '' }}">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <div style="width: 36px; height: 36px; background: rgba(34, 197, 94, 0.25); color: #facc15; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.1rem;">
                                    <i class="bi {{ $hotline['icon'] }}"></i>
                                </div>
                                <span style="font-size: 0.72rem; font-weight: 800; background: rgba(34, 197, 94, 0.2); color: #86efac; padding: 2px 8px; border-radius: 4px;">{{ $hotline['badge'] }}</span>
                            </div>
                            <div style="font-size: 0.95rem; font-weight: 800; margin-bottom: 4px;">{{ $hotline['title'] }}</div>
                            <div style="font-size: 0.78rem; color: #cbd5e1; margin-bottom: 14px; flex-grow: 1;">{{ $hotline['desc'] }}</div>
                            <div style="font-size: 0.88rem; font-weight: 800; color: #4ade80; display: flex; align-items: center; gap: 6px; font-family: monospace;">
                                <i class="bi bi-whatsapp"></i> {{ $hotline['number'] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- REGIONAL SELECTOR (38 PROVINCES FOR THIS PROGRAM) -->
            <div id="wilayah-daerah" style="margin-top: 56px;">
                <div class="section-header" style="text-align: center; max-width: 720px; margin: 0 auto 32px;">
                    <span class="section-tag" style="background: #f0fdf4; color: #166534; font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase;">Direktori Wilayah</span>
                    <h2 class="section-title" style="font-size: 1.85rem; color: #064e3b; margin: 10px 0;">Pilih Wilayah Pelaksanaan Pelatihan {{ $program->title }}</h2>
                    <p class="section-desc" style="font-size: 0.9rem; color: #64748b;">
                        Klik provinsi tempat fasilitas pelayanan kesehatan atau domisili Anda untuk melihat jadwal pelatihan terdekat dan panduan manajemen rumah sakit di setiap daerah.
                    </p>
                </div>

                <div class="provinces-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: 12px;">
                    @foreach($provinces as $prov)
                        <a href="{{ route('wilayah.provinsi.program', [$prov['slug'], $program->slug]) }}" class="province-chip" style="background: #ffffff; border: 1px solid #bbf7d0; border-radius: 8px; padding: 10px 14px; display: flex; align-items: center; justify-content: space-between; text-decoration: none; color: #064e3b; font-size: 0.86rem; font-weight: 600; transition: all 0.2s ease;">
                            <span>{{ $prov['name'] }}</span>
                            <i class="bi bi-chevron-right" style="font-size: 0.9rem; color: #16a34a;"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
