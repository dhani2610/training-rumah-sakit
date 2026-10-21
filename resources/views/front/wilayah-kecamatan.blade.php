@extends('layouts.front')

@section('title', 'Training Rumah Sakit ' . $kecamatanData['name'] . ', ' . $kecamatanData['kabkot']['name'] . ' | Sertifikasi Manajemen RS & Mutu Klinis')
@section('meta_description', 'Layanan resmi program pelatihan dan sertifikasi kompetensi Training Rumah Sakit di Kecamatan ' . $kecamatanData['name'] . ', ' . $kecamatanData['kabkot']['name'] . ', ' . $kecamatanData['province']['name'] . '. Hubungi WhatsApp 081399810272.')

@section('content')

    <!-- HERO KECAMATAN -->
    <section class="hero-section" style="padding: 48px 0 44px; text-align: left;">
        <div class="container">
            <div style="font-size: 0.82rem; color: #86efac; margin-bottom: 16px; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                <a href="{{ route('home') }}" style="color: #cbd5e1;"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('wilayah.provinsi', $kecamatanData['province']['slug']) }}" style="color: #cbd5e1;">Provinsi {{ $kecamatanData['province']['name'] }}</a>
                <span>/</span>
                <a href="{{ route('wilayah.kabkot', [$kecamatanData['province']['slug'], $kecamatanData['kabkot']['slug']]) }}" style="color: #cbd5e1;">{{ $kecamatanData['kabkot']['name'] }}</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 700;">Kecamatan {{ $kecamatanData['name'] }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <span class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-geo-alt-fill"></i> Kecamatan {{ $kecamatanData['name'] }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(34, 197, 94, 0.25); border-color: #4ade80; color: #86efac;">
                    <i class="bi bi-buildings"></i> {{ $kecamatanData['kabkot']['name'] }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(234, 179, 8, 0.2); border-color: #facc15; color: #fef08a;">
                    <i class="bi bi-shield-check"></i> Standar Akreditasi & Mutu RS Resmi
                </span>
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.2rem; line-height: 1.25; margin-bottom: 14px;">
                Training Rumah Sakit <span>Kecamatan {{ $kecamatanData['name'] }}</span>
            </h1>

            <p class="hero-lead" style="margin-left: 0; max-width: 880px; margin-bottom: 22px;">
                Penyelenggaraan program pelatihan manajemen faskes, sertifikasi kompetensi tenaga kesehatan, dan pendampingan akreditasi rumah sakit paripurna di Kecamatan {{ $kecamatanData['name'] }}, {{ $kecamatanData['kabkot']['name'] }}, Provinsi {{ $kecamatanData['province']['name'] }}.
            </p>

            <div class="hero-cta" style="justify-content: flex-start; margin-bottom: 0;">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-green">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi Wilayah {{ $kecamatanData['name'] }}
                </a>
                <a href="#kecamatan-nav-box" class="btn-outline-white">
                    <i class="bi bi-pin-map-fill"></i>
                    Pilih Kecamatan Lain
                </a>
            </div>
        </div>
    </section>

    <!-- 8 PROGRAM PELATIHAN -->
    <section class="section-py">
        <div class="container">
            <div class="section-header" style="text-align: center; max-width: 720px; margin: 0 auto 36px;">
                <span class="section-tag" style="background: #f0fdf4; color: #166534; font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase;">8 Program Resmi di {{ $kecamatanData['name'] }}</span>
                <h2 class="section-title" style="font-size: 1.85rem; color: #064e3b; margin: 10px 0;">Layanan Training Rumah Sakit & Mutu Pelayanan Klinis Komprehensif</h2>
                <p class="section-desc" style="font-size: 0.9rem; color: #64748b;">
                    Tersedia 8 program pelatihan profesional yang masing-masing memiliki panduan kurikulum dan materi rumah sakit di Kecamatan {{ $kecamatanData['name'] }}:
                </p>
            </div>

            <div class="programs-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 48px;">
                @foreach($programs as $prog)
                    @php
                        $progObj = (object)$prog;
                        $progDetailUrl = route('wilayah.kecamatan.program', [$kecamatanData['province']['slug'], $kecamatanData['kabkot']['slug'], $kecamatanData['slug'], $progObj->slug]);
                    @endphp
                    <div class="program-card" style="background: #ffffff; border: 1px solid #bbf7d0; border-radius: 14px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 4px 12px rgba(22, 163, 74, 0.05);">
                        <div class="program-body" style="padding: 22px; display: flex; flex-direction: column; flex-grow: 1;">
                            <div class="program-level" style="font-size: 0.72rem; font-weight: 800; color: #166534; background: #f0fdf4; padding: 3px 10px; border-radius: 4px; display: inline-block; width: fit-content; text-transform: uppercase; margin-bottom: 10px;">{{ $progObj->level_name ?? 'Training Rumah Sakit' }}</div>
                            <h3 class="program-title" style="font-size: 1.1rem; font-weight: 800; color: #064e3b; margin-bottom: 8px; line-height: 1.4;">{{ $progObj->title }}</h3>
                            <p class="program-desc" style="font-size: 0.85rem; color: #64748b; line-height: 1.6; margin-bottom: 16px; flex-grow: 1;">
                                {{ Str::limit($progObj->short_description ?? ($progObj->full_description ?? ''), 130) }}
                            </p>

                            <div class="program-meta" style="display: flex; gap: 14px; font-size: 0.78rem; color: #64748b; margin-bottom: 16px;">
                                <div><i class="bi bi-geo-alt" style="color: #16a34a;"></i> {{ $kecamatanData['name'] }}</div>
                                <div><i class="bi bi-journal-check" style="color: #16a34a;"></i> Modul Panduan Terintegrasi</div>
                            </div>

                            <div class="program-footer-btn">
                                <a href="{{ $progDetailUrl }}" class="btn-primary-green" style="width: 100%; justify-content: center; font-size: 0.84rem; padding: 10px 14px;">
                                    <i class="bi bi-collection-play-fill"></i> Buka Direktori Panduan {{ $kecamatanData['name'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 4 WHATSAPP HOTLINES -->
            <div class="wa-hotlines-box" style="background: linear-gradient(145deg, #064e3b 0%, #065f46 100%); border-radius: 18px; padding: 32px; color: #ffffff; border: 1px solid rgba(34, 197, 94, 0.4); margin-bottom: 48px;">
                <div class="wa-hotlines-header" style="text-align: center; max-width: 680px; margin: 0 auto 26px;">
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
                        <i class="bi bi-telephone-inbound-fill" style="color: #facc15; margin-right: 8px;"></i> 4 Nomor WhatsApp Resmi Layanan di {{ $kecamatanData['name'] }}
                    </h3>
                    <p style="font-size: 0.88rem; color: #dcfce7;">Silakan hubungi kontak resmi kami untuk konsultasi jadwal pelatihan, pendampingan akreditasi, dan proposal in-house di rumah sakit Anda:</p>
                </div>

                <div class="wa-cards-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px;">
                    @foreach($waNumbers as $wa)
                        <div class="wa-hotline-card" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.12); border-radius: 12px; padding: 18px; color: #ffffff; display: flex; flex-direction: column; {{ !empty($wa['primary']) ? 'border: 2px solid #facc15;' : '' }}">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <div style="width: 36px; height: 36px; background: rgba(34, 197, 94, 0.25); color: #facc15; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.1rem;">
                                    <i class="bi {{ $wa['icon'] }}"></i>
                                </div>
                                <span style="font-size: 0.72rem; font-weight: 800; background: rgba(34, 197, 94, 0.2); color: #86efac; padding: 2px 8px; border-radius: 4px;">{{ $wa['badge'] }}</span>
                            </div>
                            <h4 style="font-size: 0.95rem; font-weight: 800; margin-bottom: 4px; color: #ffffff;">{{ $wa['title'] }}</h4>
                            <p style="font-size: 0.78rem; color: #cbd5e1; margin-bottom: 14px; flex-grow: 1;">{{ $wa['desc'] }}</p>
                            <a href="{{ $wa['url'] }}" target="_blank" class="btn-primary-green" style="padding: 8px 14px; font-size: 0.84rem; justify-content: center;">
                                <i class="bi bi-whatsapp"></i> Chat {{ $wa['number'] }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- NAVIGASI KECAMATAN LAIN (SEBELUM ARTIKEL AGAR AKSES CEPAT TANPA SCROLL JAUH) -->
            @if(isset($kecamatanList) && count($kecamatanList) > 0)
                <div id="kecamatan-nav-box" style="background: linear-gradient(180deg, #ffffff 0%, #f0fdf4 100%); border: 2px solid #bbf7d0; border-radius: var(--radius-xl); padding: 32px; margin-bottom: 48px; box-shadow: 0 10px 30px -5px rgba(22, 163, 74, 0.08);">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px; flex-wrap: wrap; gap: 12px;">
                        <div>
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <a href="{{ route('wilayah.kabkot', [$kecamatanData['province']['slug'], $kecamatanData['kabkot']['slug']]) }}" style="font-size: 0.78rem; font-weight: 700; color: #166534; background: #ffffff; border: 1px solid #bbf7d0; padding: 4px 10px; border-radius: 6px; text-decoration: none;">
                                    <i class="bi bi-arrow-left"></i> {{ $kecamatanData['kabkot']['name'] }}
                                </a>
                                <span style="font-size: 0.78rem; font-weight: 800; background: #064e3b; color: #86efac; padding: 4px 12px; border-radius: 20px;">
                                    <i class="bi bi-geo-alt-fill"></i> Kecamatan di {{ $kecamatanData['kabkot']['name'] }}
                                </span>
                            </div>
                            <h2 style="font-size: 1.4rem; font-weight: 800; color: #064e3b; margin: 0;">
                                Pilih Kecamatan Lain di {{ $kecamatanData['kabkot']['name'] }}
                            </h2>
                        </div>
                        <a href="{{ route('wilayah.provinsi', $kecamatanData['province']['slug']) }}" style="font-size: 0.82rem; color: #166534; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                            <i class="bi bi-globe"></i> Semua Kota di {{ $kecamatanData['province']['name'] }}
                        </a>
                    </div>

                    <p style="font-size: 0.88rem; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                        Beralih ke kecamatan lain di lingkungan {{ $kecamatanData['kabkot']['name'] }} untuk melihat jangkauan program pelatihan Training Rumah Sakit terdekat:
                    </p>

                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 10px;">
                        @foreach($kecamatanList as $kec)
                            @php
                                $kecSlug = Str::slug($kec);
                                $isCurrent = ($kecSlug === $kecamatanData['slug']);
                                $kecUrl = route('wilayah.kecamatan', [$kecamatanData['province']['slug'], $kecamatanData['kabkot']['slug'], $kecSlug]);
                            @endphp
                            <a href="{{ $kecUrl }}" style="padding: 10px 14px; border-radius: 8px; text-decoration: none; font-size: 0.86rem; font-weight: 700; display: flex; align-items: center; justify-content: space-between; border: 1px solid {{ $isCurrent ? '#16a34a' : '#cbd5e1' }}; background: {{ $isCurrent ? '#f0fdf4' : '#ffffff' }}; color: {{ $isCurrent ? '#166534' : '#064e3b' }};">
                                <span><i class="bi {{ $isCurrent ? 'bi-check-circle-fill' : 'bi-pin-map' }}" style="color: #16a34a; margin-right: 6px;"></i> Kec. {{ $kec }}</span>
                                @if($isCurrent)
                                    <span style="font-size: 0.7rem; background: #16a34a; color: #fff; padding: 2px 6px; border-radius: 4px;">Aktif</span>
                                @else
                                    <i class="bi bi-chevron-right" style="color: #94a3b8; font-size: 0.8rem;"></i>
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- MODUL ARTIKEL PANDUAN KECAMATAN -->
            <div id="daftar-artikel" class="section-header" style="margin-top: 48px; text-align: left;">
                <span class="section-tag" style="background: #f0fdf4; color: #166534; font-size: 0.74rem; font-weight: 800; padding: 3px 10px; border-radius: 12px;">Panduan Training Rumah Sakit</span>
                <h2 class="section-title" style="font-size: 1.6rem; color: #064e3b;">Daftar Direktori Panduan Lengkap Training Rumah Sakit di Kecamatan {{ $kecamatanData['name'] }}</h2>
                <p class="section-desc" style="margin-left: 0; font-size: 0.88rem; color: #64748b;">
                    Kumpulan panduan modul komprehensif mencakup akreditasi faskes, investigasi keselamatan pasien (RCA IKP), pencegahan infeksi (PPI), manajemen fasilitas K3RS, dan rekam medis elektronik di Kecamatan {{ $kecamatanData['name'] }}, {{ $kecamatanData['kabkot']['name'] }}:
                </p>
            </div>

            <div class="articles-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 20px;">
                @foreach($regionalArticles as $art)
                    @php
                        $artObj = (object)$art;
                        $artUrl = route('article.detail', $artObj->slug);
                    @endphp
                    <div class="article-card" style="background: #ffffff; border: 1px solid #bbf7d0; border-radius: 12px; padding: 20px; display: flex; flex-direction: column;">
                        <div class="article-badge" style="font-size: 0.72rem; font-weight: 800; color: #166534; background: #f0fdf4; padding: 3px 10px; border-radius: 4px; width: fit-content; margin-bottom: 10px;">
                            <i class="bi bi-bookmark-fill me-1"></i> Modul #{{ $loop->iteration }}
                        </div>
                        <h3 class="article-title" style="font-size: 1.05rem; font-weight: 800; color: #064e3b; margin-bottom: 8px; line-height: 1.4;">
                            <a href="{{ $artUrl }}" style="color: inherit; text-decoration: none;">{{ $artObj->title }}</a>
                        </h3>
                        <p class="article-excerpt" style="font-size: 0.84rem; color: #64748b; line-height: 1.6; margin-bottom: 16px; flex-grow: 1;">
                            Panduan teknis dan standar operasional Training Rumah Sakit di Kecamatan {{ $kecamatanData['name'] }}. Mengulas praktik perumahsakitan terbaik, kepatuhan akreditasi faskes, keselamatan pasien, pencegahan infeksi, dan integrasi data rekam medis elektronik.
                        </p>
                        <div class="article-footer" style="display: flex; align-items: center; justify-content: space-between; border-top: 1px dashed #e2e8f0; padding-top: 10px; font-size: 0.78rem;">
                            <span><i class="bi bi-clock me-1"></i> {{ $artObj->read_time ?? 35 }} Menit Baca</span>
                            <a href="{{ $artUrl }}" class="btn-link" style="color: #16a34a; font-weight: 700; text-decoration: none;">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- GOOGLE MAPS EMBED -->
            <div style="margin-top: 64px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.05);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #064e3b; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                    <i class="bi bi-map-fill" style="color: #16a34a;"></i> Peta Lokasi Wilayah Kecamatan {{ $kecamatanData['name'] }}, {{ $kecamatanData['kabkot']['name'] }}
                </h3>
                <p style="font-size: 0.86rem; color: #64748b; margin-bottom: 18px;">
                    Kami menyelenggarakan pelatihan dan pendampingan sertifikasi kompetensi Training Rumah Sakit baik kelas publik daring/luring, maupun in-house training langsung ke fasilitas rumah sakit atau klinik Anda di area Kecamatan {{ $kecamatanData['name'] }} dan sekitarnya.
                </p>
                <div style="width: 100%; height: 350px; border-radius: 12px; overflow: hidden; border: 1px solid #cbd5e1;">
                    <iframe src="{{ $mapUrl }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
