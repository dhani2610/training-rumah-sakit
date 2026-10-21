@extends('layouts.front')

@section('title', 'Training Rumah Sakit ' . $kabkotName . ' | Sertifikasi Manajemen RS & Mutu Klinis')
@section('meta_description', 'Layanan resmi program pelatihan dan sertifikasi kompetensi Training Rumah Sakit di ' . $kabkotName . ', ' . $province['name'] . '. Hubungi WhatsApp 081399810272.')

@section('content')

    <!-- HERO KABKOT -->
    <section class="hero-section" style="padding: 48px 0 44px; text-align: left;">
        <div class="container">
            <div style="font-size: 0.82rem; color: #86efac; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                <a href="{{ route('home') }}" style="color: #cbd5e1;"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('wilayah.provinsi', $province['slug']) }}" style="color: #cbd5e1;">Provinsi {{ $province['name'] }}</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 700;">{{ $kabkotName }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <span class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-geo-alt-fill"></i> {{ $kabkotName }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(34, 197, 94, 0.25); border-color: #4ade80; color: #86efac;">
                    <i class="bi bi-diagram-3-fill"></i> {{ count($kecamatanList) }} Kecamatan
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(234, 179, 8, 0.2); border-color: #facc15; color: #fef08a;">
                    <i class="bi bi-shield-check"></i> 8 Skema Sertifikasi Rumah Sakit
                </span>
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.35rem; line-height: 1.25; margin-bottom: 14px;">
                Training Rumah Sakit <span>{{ $kabkotName }}</span>
            </h1>

            <p class="hero-lead" style="margin-left: 0; max-width: 880px; margin-bottom: 22px;">
                Penyelenggaraan program pelatihan manajemen rumah sakit, peningkatan mutu klinis, dan pendampingan akreditasi faskes paripurna di {{ $kabkotName }}, Provinsi {{ $province['name'] }}. Menguasai tata kelola keselamatan pasien (RCA IKP), pencegahan infeksi (PPI), manajemen fasilitas K3RS, serta rekam medis elektronik (RME).
            </p>

            <div class="hero-cta" style="justify-content: flex-start; margin-bottom: 0;">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-green">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi Wilayah {{ $kabkotName }}
                </a>
                <a href="#kecamatan-list" class="btn-outline-white">
                    <i class="bi bi-pin-map-fill"></i>
                    Lihat Daftar Kecamatan
                </a>
            </div>
        </div>
    </section>

    <!-- PROGRAM PELATIHAN DI KABKOT INI -->
    <section class="section-py">
        <div class="container">
            <div class="section-header" style="text-align: center; max-width: 720px; margin: 0 auto 36px;">
                <span class="section-tag" style="background: #f0fdf4; color: #166534; font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase;">8 Program Resmi di {{ $kabkotName }}</span>
                <h2 class="section-title" style="font-size: 1.85rem; color: #064e3b; margin: 10px 0;">Pilih Jenjang Program Training Rumah Sakit</h2>
                <p class="section-desc" style="font-size: 0.9rem; color: #64748b;">
                    Tersedia 8 program pelatihan profesional yang masing-masing memiliki panduan kurikulum dan materi rumah sakit di {{ $kabkotName }}:
                </p>
            </div>

            <div class="programs-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 48px;">
                @foreach($programs as $prog)
                    @php
                        $progObj = (object)$prog;
                        $progDetailUrl = route('wilayah.kabkot.program', [$province['slug'], $kabkotSlug, $progObj->slug]);
                    @endphp
                    <div class="program-card" style="background: #ffffff; border: 1px solid #bbf7d0; border-radius: 14px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 4px 12px rgba(22, 163, 74, 0.05);">
                        <div class="program-body" style="padding: 22px; display: flex; flex-direction: column; flex-grow: 1;">
                            <div class="program-level" style="font-size: 0.72rem; font-weight: 800; color: #166534; background: #f0fdf4; padding: 3px 10px; border-radius: 4px; display: inline-block; width: fit-content; text-transform: uppercase; margin-bottom: 10px;">{{ $progObj->level_name ?? 'Training Rumah Sakit' }}</div>
                            <h3 class="program-title" style="font-size: 1.1rem; font-weight: 800; color: #064e3b; margin-bottom: 8px; line-height: 1.4;">{{ $progObj->title }}</h3>
                            <p class="program-desc" style="font-size: 0.85rem; color: #64748b; line-height: 1.6; margin-bottom: 16px; flex-grow: 1;">
                                {{ Str::limit($progObj->short_description ?? ($progObj->full_description ?? ''), 125) }}
                            </p>

                            <div class="program-meta" style="display: flex; gap: 14px; font-size: 0.78rem; color: #64748b; margin-bottom: 16px;">
                                <div><i class="bi bi-geo-alt" style="color: #16a34a;"></i> {{ $kabkotName }}</div>
                                <div><i class="bi bi-journal-check" style="color: #16a34a;"></i> Modul Panduan Terintegrasi</div>
                            </div>

                            <div class="program-footer-btn">
                                <a href="{{ $progDetailUrl }}" class="btn-primary-green" style="width: 100%; justify-content: center; font-size: 0.84rem; padding: 10px 14px;">
                                    <i class="bi bi-collection-play-fill"></i> Buka Direktori Panduan {{ $kabkotName }}
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
                        <i class="bi bi-telephone-inbound-fill" style="color: #facc15; margin-right: 8px;"></i> 4 Nomor WhatsApp Resmi Layanan di {{ $kabkotName }}
                    </h3>
                    <p style="font-size: 0.88rem; color: #dcfce7;">Hubungi petugas spesialis kami untuk konsultasi silabus materi, jadwal pelatihan terdekat, atau in-house training di faskes Anda:</p>
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

            <!-- DAFTAR KECAMATAN (SEBELUM ARTIKEL AGAR AKSES CEPAT TANPA SCROLL JAUH) -->
            <div id="kecamatan-list" style="background: linear-gradient(180deg, #ffffff 0%, #f0fdf4 100%); border: 2px solid #bbf7d0; border-radius: var(--radius-xl); padding: 32px; margin-bottom: 48px; box-shadow: 0 10px 30px -5px rgba(22, 163, 74, 0.08);">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px; flex-wrap: wrap; gap: 12px;">
                    <div>
                        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                            <a href="{{ route('wilayah.provinsi', $province['slug']) }}" style="font-size: 0.78rem; font-weight: 700; color: #166534; background: #ffffff; border: 1px solid #bbf7d0; padding: 4px 10px; border-radius: 6px; text-decoration: none;">
                                <i class="bi bi-arrow-left"></i> Provinsi {{ $province['name'] }}
                            </a>
                            <span style="font-size: 0.78rem; font-weight: 800; background: #064e3b; color: #86efac; padding: 4px 12px; border-radius: 20px;">
                                <i class="bi bi-pin-map-fill"></i> {{ count($kecamatanList) }} Kecamatan
                            </span>
                        </div>
                        <h2 style="font-size: 1.45rem; font-weight: 800; color: #064e3b; margin: 0;">
                            Pilih Kecamatan di {{ $kabkotName }}
                        </h2>
                    </div>
                    <div style="font-size: 0.84rem; color: #166534; font-weight: 700; background: #ffffff; padding: 6px 14px; border-radius: 8px; border: 1px solid #bbf7d0;">
                        <i class="bi bi-geo-alt-fill"></i> Langsung ke materi & layanan lokal
                    </div>
                </div>

                <p style="font-size: 0.88rem; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                    Pilih kecamatan di bawah ini untuk membuka lingkup pelatihan, modul panduan faskes, dan jadwal pelaksanaan program training Training Rumah Sakit khusus area {{ $kabkotName }}:
                </p>

                <!-- Filter Pencarian Cepat Nama Kecamatan -->
                <div style="margin-bottom: 20px; position: relative; max-width: 480px;">
                    <i class="bi bi-search" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #94a3b8;"></i>
                    <input type="text" id="filterKecamatanInput" class="form-control" placeholder="Cari nama Kecamatan di {{ $kabkotName }}..." style="padding: 10px 14px 10px 38px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.88rem; width: 100%;">
                </div>

                <!-- Grid Buttons Kecamatan -->
                <div id="kecamatanGridContainer" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: 12px;">
                    @foreach($kecamatanList as $kec)
                        @php
                            $kecSlug = Str::slug($kec);
                            $kecUrl = route('wilayah.kecamatan', [$province['slug'], $kabkotSlug, $kecSlug]);
                        @endphp
                        <a href="{{ $kecUrl }}" class="province-chip kecamatan-card-item" data-name="{{ strtolower($kec) }}" style="background: #ffffff; border: 1px solid #cbd5e1; padding: 12px 16px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; text-decoration: none; transition: all 0.2s ease;">
                            <span style="font-size: 0.88rem; font-weight: 700; color: #064e3b;"><i class="bi bi-pin-map-fill" style="color: #16a34a; margin-right: 8px;"></i> Kec. {{ $kec }}</span>
                            <i class="bi bi-arrow-right-short" style="color: #16a34a; font-size: 1.25rem;"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- MODUL ARTIKEL REGIONAL DIRECTORY VIA JS -->
            <div id="daftar-artikel-wilayah" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 32px; margin-bottom: 48px; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                <!-- Quick Anchor Banner to Kecamatan -->
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 12px 18px; margin-bottom: 22px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.86rem; color: #064e3b;">
                        <i class="bi bi-compass-fill" style="color: #16a34a; font-size: 1.1rem;"></i>
                        <span>Ingin memilih kecamatan spesifik di {{ $kabkotName }}?</span>
                    </div>
                    <a href="#kecamatan-list" class="btn-sm" style="background: #f0fdf4; color: #166534; border: 1px solid #bbf7d0; border-radius: 6px; padding: 6px 14px; font-weight: 700; font-size: 0.82rem; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                        <i class="bi bi-arrow-up-circle-fill"></i> Lihat Daftar Kecamatan di Atas
                    </a>
                </div>

                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px; flex-wrap: wrap; gap: 10px;">
                    <div>
                        <span class="section-tag" style="margin-bottom: 6px; background: #f0fdf4; color: #166534; font-size: 0.74rem; font-weight: 800; padding: 3px 10px; border-radius: 12px;">Direktori Panduan Rumah Sakit</span>
                        <h2 style="font-size: 1.4rem; font-weight: 800; color: #064e3b; margin: 0;">
                            Direktori Panduan Training Rumah Sakit di {{ $kabkotName }}
                        </h2>
                    </div>
                    <span style="font-size: 0.8rem; font-weight: 700; color: #166534; background: #f0fdf4; padding: 6px 14px; border-radius: 20px; border: 1px solid #bbf7d0;">
                        <i class="bi bi-shield-check"></i> Sertifikasi Manajemen Rumah Sakit Resmi
                    </span>
                </div>

                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 24px;">
                    Pilih salah satu topik di bawah ini untuk membaca ulasan panduan komprehensif mengenai akreditasi faskes, investigasi keselamatan pasien (RCA IKP), kepatuhan PPI, keselamatan fasilitas MFK-K3RS, dan tata kelola klinis di {{ $kabkotName }}:
                </p>

                @php
                    $articlesJson = [];
                    if(isset($articles) && count($articles) > 0) {
                        foreach($articles as $idx => $art) {
                            $artObj = is_array($art) ? (object)$art : $art;
                            $u = route('article.detail', $artObj->slug);
                            $articlesJson[] = [
                                'index' => $idx + 1,
                                'title' => $artObj->title,
                                'url' => $u,
                                'excerpt' => $artObj->excerpt ?? Str::limit(strip_tags($artObj->content ?? ''), 140),
                                'region' => $kabkotName ?? ($province['name'] ?? 'Indonesia'),
                            ];
                        }
                    }
                @endphp

                <!-- Controls: Live Search + Items Per Page -->
                <div style="display: flex; gap: 12px; margin-bottom: 20px; flex-wrap: wrap;">
                    <div style="flex: 1; min-width: 240px; position: relative;">
                        <i class="bi bi-search" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #94a3b8;"></i>
                        <input type="text" id="articleSearchInput" class="form-control" placeholder="Cari topik panduan di {{ $kabkotName }} (misal: Akreditasi RS, RCA IKP, PPI, MFK, RME)..." style="padding: 11px 16px 11px 38px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.9rem; width: 100%;">
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <label style="font-size: 0.82rem; font-weight: 700; color: #475569; white-space: nowrap;">Tampilkan:</label>
                        <select id="perPageSelect" class="form-control" style="width: auto; padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.86rem; font-weight: 600;">
                            <option value="10" selected>10 Modul / Hal</option>
                            <option value="20">20 Modul / Hal</option>
                            <option value="50">50 Modul / Hal</option>
                        </select>
                    </div>
                </div>

                <!-- Info Count -->
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; font-size: 0.82rem; color: #64748b;">
                    <div id="pagingInfoText">Memuat direktori panduan teknis...</div>
                    <div id="activePageBadge" style="font-weight: 700; color: #166534;">Halaman 1</div>
                </div>

                <!-- DYNAMIC FAST JS CONTAINER (0 LAG) -->
                <div id="articlesListContainer" style="display: flex; flex-direction: column; gap: 14px; min-height: 200px;">
                    <!-- Rendered cleanly by JS without DOM bloat -->
                </div>

                <!-- PAGINATION CONTROLS -->
                <div id="paginationNav" style="display: flex; align-items: center; justify-content: center; gap: 6px; margin-top: 26px; flex-wrap: wrap;">
                    <!-- Generated by JS -->
                </div>
            </div>

            <!-- GOOGLE MAPS EMBED -->
            <div style="margin-top: 56px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 24px;">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #064e3b; margin-bottom: 14px;">
                    <i class="bi bi-map-fill" style="color: #16a34a;"></i> Peta Wilayah {{ $kabkotName }}
                </h3>
                <div style="height: 320px; border-radius: 12px; overflow: hidden; border: 1px solid #e2e8f0;">
                    <iframe src="{{ $mapsUrl ?? 'https://maps.google.com/maps?q=' . urlencode($kabkotName . ', ' . $province['name'] . ', Indonesia') . '&t=&z=11&ie=UTF8&iwloc=&output=embed' }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
(function() {
    // RAW ARTICLES DATA (IN MEMORY VIA JS - 0 LAG)
    const rawArticles = @json($articlesJson);
    let filteredArticles = [...rawArticles];
    let currentPage = 1;
    let perPage = 10;

    const container = document.getElementById('articlesListContainer');
    const paginationNav = document.getElementById('paginationNav');
    const searchInput = document.getElementById('articleSearchInput');
    const perPageSelect = document.getElementById('perPageSelect');
    const pagingInfoText = document.getElementById('pagingInfoText');
    const activePageBadge = document.getElementById('activePageBadge');

    function renderPage(page, scrollUp = false) {
        currentPage = page;
        const total = filteredArticles.length;
        const totalPages = Math.ceil(total / perPage) || 1;

        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        const startIndex = (currentPage - 1) * perPage;
        const endIndex = Math.min(startIndex + perPage, total);
        const currentItems = filteredArticles.slice(startIndex, endIndex);

        // Update info text
        if (total === 0) {
            if (pagingInfoText) pagingInfoText.textContent = "Tidak ditemukan modul artikel yang sesuai.";
            if (activePageBadge) activePageBadge.textContent = "0 Hasil";
            container.innerHTML = `
                <div style="text-align: center; padding: 48px 20px; background: #f8fafc; border-radius: 12px; border: 1px dashed #cbd5e1;">
                    <i class="bi bi-search" style="font-size: 2.2rem; color: #94a3b8; display: block; margin-bottom: 10px;"></i>
                    <h4 style="font-size: 1rem; font-weight: 700; color: #064e3b;">Tidak ada modul yang cocok dengan kata kunci</h4>
                    <p style="font-size: 0.84rem; color: #64748b; margin-top: 4px;">Coba gunakan kata kunci lain seperti: Training Akreditasi RS, RCA IKP, PPI, MFK, atau RME.</p>
                </div>
            `;
            paginationNav.innerHTML = '';
            return;
        }

        if (pagingInfoText) pagingInfoText.innerHTML = `Menampilkan <strong>${startIndex + 1} - ${endIndex}</strong> dari <strong>${total}</strong> modul artikel`;
        if (activePageBadge) activePageBadge.textContent = `Halaman ${currentPage} dari ${totalPages}`;

        // Render Cards
        let html = '';
        currentItems.forEach(item => {
            html += `
                <div class="article-topic-item" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px 20px; transition: all 0.2s ease; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 8px; flex-wrap: wrap; gap: 8px;">
                        <span style="font-size: 0.72rem; font-weight: 800; background: #f0fdf4; color: #166534; padding: 3px 10px; border-radius: 4px; border: 1px solid #bbf7d0;">
                            MODUL ${item.index} DARI 200
                        </span>
                        <span style="font-size: 0.74rem; font-weight: 700; color: #166534; background: #dcfce7; padding: 2px 8px; border-radius: 4px;">
                            <i class="bi bi-journal-check"></i> Standar Akreditasi & Mutu RS
                        </span>
                    </div>

                    <h4 style="font-size: 1.02rem; font-weight: 800; color: #064e3b; margin-bottom: 8px; line-height: 1.4;">
                        <a href="${item.url}" style="color: inherit; text-decoration: none;" class="article-link-title" onmouseover="this.style.color='#16a34a'" onmouseout="this.style.color='#064e3b'">
                            ${item.title}
                        </a>
                    </h4>

                    <p style="font-size: 0.84rem; color: #64748b; line-height: 1.6; margin-bottom: 12px;">
                        ${item.excerpt}
                    </p>

                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px dashed #e2e8f0; padding-top: 10px;">
                        <span style="font-size: 0.76rem; color: #94a3b8;">
                            <i class="bi bi-geo-alt"></i> ${item.region}
                        </span>
                        <a href="${item.url}" style="font-size: 0.82rem; font-weight: 700; color: #16a34a; display: inline-flex; align-items: center; gap: 4px; text-decoration: none;">
                            Baca Modul Lengkap <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>
            `;
        });
        container.innerHTML = html;

        // Render Pagination Buttons
        renderPaginationButtons(totalPages);

        if (scrollUp) {
            const anchor = document.getElementById('daftar-artikel-wilayah');
            if (anchor) {
                anchor.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }

    function renderPaginationButtons(totalPages) {
        if (totalPages <= 1) {
            paginationNav.innerHTML = '';
            return;
        }

        let navHtml = '';

        // Previous button
        const prevDisabled = currentPage === 1 ? 'disabled style="opacity: 0.4; pointer-events: none;"' : '';
        navHtml += `
            <button type="button" class="btn-page-ctrl" data-page="${currentPage - 1}" ${prevDisabled} style="padding: 7px 14px; border-radius: 6px; border: 1px solid #cbd5e1; background: #ffffff; color: #064e3b; font-size: 0.82rem; font-weight: 700; cursor: pointer;">
                <i class="bi bi-chevron-left"></i> Prev
            </button>
        `;

        // Page numbers logic (sliding window)
        const delta = 2;
        const range = [];
        for (let i = Math.max(2, currentPage - delta); i <= Math.min(totalPages - 1, currentPage + delta); i++) {
            range.push(i);
        }

        range.unshift(1);
        if (totalPages > 1 && !range.includes(totalPages)) {
            range.push(totalPages);
        }

        let prevNum = 0;
        range.forEach(num => {
            if (prevNum && num - prevNum > 1) {
                navHtml += `<span style="padding: 6px 10px; color: #94a3b8; font-weight: 700;">...</span>`;
            }
            const isActive = num === currentPage;
            const activeStyle = isActive 
                ? 'background: #16a34a; color: #ffffff; border-color: #16a34a; font-weight: 800;' 
                : 'background: #ffffff; color: #064e3b; border-color: #cbd5e1; font-weight: 600;';
            navHtml += `
                <button type="button" class="btn-page-ctrl" data-page="${num}" style="padding: 7px 13px; border-radius: 6px; border: 1px solid; ${activeStyle} font-size: 0.82rem; cursor: pointer;">
                    ${num}
                </button>
            `;
            prevNum = num;
        });

        // Next button
        const nextDisabled = currentPage === totalPages ? 'disabled style="opacity: 0.4; pointer-events: none;"' : '';
        navHtml += `
            <button type="button" class="btn-page-ctrl" data-page="${currentPage + 1}" ${nextDisabled} style="padding: 7px 14px; border-radius: 6px; border: 1px solid #cbd5e1; background: #ffffff; color: #064e3b; font-size: 0.82rem; font-weight: 700; cursor: pointer;">
                Next <i class="bi bi-chevron-right"></i>
            </button>
        `;

        paginationNav.innerHTML = navHtml;

        // Attach clicks
        paginationNav.querySelectorAll('.btn-page-ctrl').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const p = parseInt(this.getAttribute('data-page'));
                if (!isNaN(p)) {
                    renderPage(p, true);
                }
            });
        });
    }

    // Search filter event with debounce
    let searchTimeout = null;
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                const q = searchInput.value.toLowerCase().trim();
                if (!q) {
                    filteredArticles = [...rawArticles];
                } else {
                    filteredArticles = rawArticles.filter(item => {
                        return item.title.toLowerCase().includes(q) || 
                               item.excerpt.toLowerCase().includes(q) ||
                               ("modul " + item.index).includes(q);
                    });
                }
                renderPage(1, false);
            }, 120);
        });
    }

    // Per Page Select event
    if (perPageSelect) {
        perPageSelect.addEventListener('change', function() {
            perPage = parseInt(this.value) || 10;
            renderPage(1, false);
        });
    }

    // Kecamatan Live Filter
    const filterKecamatanInput = document.getElementById('filterKecamatanInput');
    const kecamatanItems = document.querySelectorAll('.kecamatan-card-item');
    if (filterKecamatanInput) {
        filterKecamatanInput.addEventListener('input', function() {
            const kw = this.value.toLowerCase().trim();
            kecamatanItems.forEach(el => {
                const name = el.getAttribute('data-name') || '';
                if (!kw || name.includes(kw)) {
                    el.style.display = 'flex';
                } else {
                    el.style.display = 'none';
                }
            });
        });
    }

    // Initial render
    renderPage(1, false);
})();
</script>
@endpush
