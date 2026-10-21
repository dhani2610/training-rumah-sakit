@extends('layouts.front')

@section('title', 'Artikel & Panduan Manajemen Rumah Sakit | Training Rumah Sakit')
@section('meta_description', 'Kumpulan artikel dan panduan teknis akreditasi faskes, keselamatan pasien (IKP & RCA), PPI, MFK-K3RS, rekam medis elektronik (RME), dan tata kelola klinis di seluruh Indonesia.')

@section('content')

    <!-- HERO ARTIKEL -->
    <section class="hero-section" style="padding: 50px 0 44px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-book-half"></i>
                Pusat Literasi & Panduan Manajemen Rumah Sakit Terpadu
            </div>

            <h1 class="hero-title" style="font-size: 2.35rem;">
                Artikel & Panduan Teknis <span>Training Rumah Sakit</span>
            </h1>

            <p class="hero-lead" style="max-width: 800px;">
                Materi komprehensif dan panduan resmi mengenai standar akreditasi rumah sakit, pencegahan dan pengendalian infeksi (PPI), keselamatan fasilitas fisik K3RS, investigasi insiden keselamatan pasien (RCA IKP), dan tata kelola rekam medis elektronik.
            </p>

            <!-- Search Form -->
            <form action="{{ route('articles') }}" method="GET" style="max-width: 580px; margin: 0 auto; display: flex; gap: 10px;">
                <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari topik modul pelatihan atau nama daerah..." class="form-control" style="background: rgba(255,255,255,0.95); border: none; padding: 12px 18px; border-radius: 8px; font-size: 0.92rem;">
                <button type="submit" class="btn-primary-green" style="padding: 12px 22px; flex-shrink: 0;">
                    <i class="bi bi-search"></i> Cari
                </button>
            </form>
        </div>
    </section>

    <!-- ARTIKEL LIST -->
    <section class="section-py">
        <div class="container">
            <div class="articles-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 24px; margin-bottom: 40px;">
                @forelse($articles as $art)
                    <div class="article-card" style="background: #ffffff; border: 1px solid #bbf7d0; border-radius: 14px; padding: 22px; display: flex; flex-direction: column;">
                        <span class="article-badge" style="font-size: 0.72rem; font-weight: 800; color: #166534; background: #f0fdf4; padding: 3px 10px; border-radius: 4px; width: fit-content; margin-bottom: 10px;">
                            <i class="bi bi-award"></i> {{ $art->category ?? 'Training Rumah Sakit' }}
                        </span>

                        <h3 class="article-title" style="font-size: 1.1rem; font-weight: 800; color: #064e3b; margin-bottom: 10px; line-height: 1.4;">
                            <a href="{{ route('article.detail', $art->slug) }}" style="color: inherit; text-decoration: none;">
                                {{ $art->title }}
                            </a>
                        </h3>

                        <p class="article-excerpt" style="font-size: 0.85rem; color: #64748b; line-height: 1.6; margin-bottom: 16px; flex-grow: 1;">
                            {{ Str::limit($art->excerpt ?? strip_tags($art->content), 150) }}
                        </p>

                        <div class="article-footer" style="display: flex; align-items: center; justify-content: space-between; font-size: 0.78rem; color: #64748b; margin-bottom: 12px;">
                            <div><i class="bi bi-person-fill"></i> {{ $art->author ?? 'Instruktur Training Rumah Sakit' }}</div>
                            <div><i class="bi bi-eye"></i> {{ number_format($art->views_count ?? 300) }} x dibaca</div>
                        </div>

                        <div style="margin-top: auto; padding-top: 10px; border-top: 1px dashed #e2e8f0; display: flex; align-items: center; justify-content: space-between;">
                            <span style="font-size: 0.74rem; font-weight: 700; color: #166534;">
                                <i class="bi bi-shield-check"></i> Modul Terverifikasi
                            </span>
                            <a href="{{ route('article.detail', $art->slug) }}" style="font-size: 0.82rem; font-weight: 700; color: #16a34a; display: flex; align-items: center; gap: 4px; text-decoration: none;">
                                Baca Selengkapnya <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; color: #64748b;">
                        <i class="bi bi-journal-x" style="font-size: 3rem; color: #cbd5e1; display: block; margin-bottom: 12px;"></i>
                        <p style="font-size: 1.1rem; font-weight: 700;">Tidak ada artikel yang cocok dengan kata kunci pencarian Anda.</p>
                        <a href="{{ route('articles') }}" class="btn-primary-green" style="display: inline-flex; margin-top: 12px;">Lihat Semua Artikel</a>
                    </div>
                @endforelse
            </div>

            <!-- PAGINATION -->
            <div style="display: flex; justify-content: center; margin-bottom: 50px;">
                {{ $articles->links() }}
            </div>

            <!-- 4 WHATSAPP HOTLINES -->
            <div class="wa-hotlines-box" style="background: linear-gradient(145deg, #064e3b 0%, #065f46 100%); border-radius: 18px; padding: 32px; color: #ffffff; border: 1px solid rgba(34, 197, 94, 0.4);">
                <div class="wa-hotlines-header" style="text-align: center; max-width: 680px; margin: 0 auto 26px;">
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
                        <i class="bi bi-headset" style="color: #facc15; margin-right: 8px;"></i> 4 Nomor Kontak WhatsApp Layanan Konsultasi
                    </h3>
                    <p style="font-size: 0.88rem; color: #dcfce7;">Hubungi petugas spesialis kami mengenai silabus pelatihan perumahsakitan terdekat atau in-house training:</p>
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

            <!-- DIREKTORI INTERAKTIF MODUL ARTIKEL VIA JS -->
            <div id="eksplorasi-200-artikel" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 32px; margin-top: 56px; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px; flex-wrap: wrap; gap: 10px;">
                    <div>
                        <span class="section-tag" style="margin-bottom: 6px; background: #f0fdf4; color: #166534; font-size: 0.74rem; font-weight: 800; padding: 3px 10px; border-radius: 12px;">Eksplorasi Cepat via JS (0 Lag)</span>
                        <h2 style="font-size: 1.4rem; font-weight: 800; color: #064e3b; margin: 0;">
                            Pusat Eksplorasi Direktori Panduan Training Rumah Sakit Se-Indonesia
                        </h2>
                    </div>
                    <span style="font-size: 0.8rem; font-weight: 700; color: #166534; background: #f0fdf4; padding: 6px 14px; border-radius: 20px; border: 1px solid #bbf7d0;">
                        <i class="bi bi-speedometer2"></i> Akses Instan Tanpa Lag
                    </span>
                </div>

                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 22px;">
                    Pilih provinsi dan kabupaten/kota yang ingin Anda jelajahi di bawah ini. Sistem JavaScript akan langsung menyesuaikan daftar materi artikel panduan untuk wilayah tersebut secara instan:
                </p>

                <!-- Filter Row: Provinsi + Kabkot + Search -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 12px; margin-bottom: 20px;">
                    <div>
                        <label style="font-size: 0.82rem; font-weight: 700; color: #064e3b; margin-bottom: 6px; display: block;">Pilih Provinsi:</label>
                        <select id="provSelect" class="form-control" style="padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.88rem; width: 100%;">
                            @foreach($provinces as $p)
                                <option value="{{ $p['slug'] }}" data-name="{{ $p['name'] }}" {{ $loop->first ? 'selected' : '' }}>{{ $p['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 0.82rem; font-weight: 700; color: #064e3b; margin-bottom: 6px; display: block;">Pilih Kabupaten / Kota:</label>
                        <select id="kabkotSelect" class="form-control" style="padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.88rem; width: 100%;">
                            <!-- Populated dynamically by JS -->
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 0.82rem; font-weight: 700; color: #064e3b; margin-bottom: 6px; display: block;">Cari Topik Artikel:</label>
                        <input type="text" id="articleLiveSearch" class="form-control" placeholder="Ketik kata kunci (Akreditasi, Keselamatan Pasien, RCA, PPI, MFK-K3RS, RME)..." style="padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.88rem; width: 100%;">
                    </div>
                </div>

                <!-- Info bar -->
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; font-size: 0.82rem; color: #64748b;">
                    <div id="hubInfoText">Memuat daftar materi artikel...</div>
                    <div id="hubPageBadge" style="font-weight: 700; color: #166534;">Halaman 1</div>
                </div>

                <!-- DYNAMIC CARDS VIA JS -->
                <div id="hubArticlesContainer" style="display: flex; flex-direction: column; gap: 14px; min-height: 200px;">
                    <!-- Rendered by JS -->
                </div>

                <!-- PAGINATION CONTROLS -->
                <div id="hubPaginationNav" style="display: flex; align-items: center; justify-content: center; gap: 6px; margin-top: 26px; flex-wrap: wrap;">
                    <!-- Rendered by JS -->
                </div>
            </div>

            <!-- DIREKTORI 38 WILAYAH -->
            <div style="margin-top: 56px;">
                <div class="section-header" style="text-align: center; max-width: 720px; margin: 0 auto 32px;">
                    <span class="section-tag" style="background: #f0fdf4; color: #166534; font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase;">Direktori Panduan per Daerah</span>
                    <h2 class="section-title" style="font-size: 1.85rem; color: #064e3b; margin: 10px 0;">Jelajahi Direktori Panduan di 38 Provinsi</h2>
                    <p class="section-desc" style="font-size: 0.9rem; color: #64748b;">
                        Setiap provinsi dan kabupaten/kota memiliki direktori panduan tata kelola rumah sakit yang siap diakses:
                    </p>
                </div>

                <div class="provinces-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: 12px;">
                    @foreach($provinces as $prov)
                        <a href="{{ route('wilayah.provinsi', $prov['slug']) }}" class="province-chip" style="background: #ffffff; border: 1px solid #bbf7d0; border-radius: 8px; padding: 10px 14px; display: flex; align-items: center; justify-content: space-between; text-decoration: none; color: #064e3b; font-size: 0.86rem; font-weight: 600;">
                            <span>{{ $prov['name'] }}</span>
                            <i class="bi bi-chevron-right" style="color: #16a34a;"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
(function() {
    const rawProvinces = @json($provinces ?? []);
    const masterTopics = @json($allTopics ?? []);

    const provSelect = document.getElementById('provSelect');
    const kabkotSelect = document.getElementById('kabkotSelect');
    const searchInput = document.getElementById('articleLiveSearch');
    const container = document.getElementById('hubArticlesContainer');
    const paginationNav = document.getElementById('hubPaginationNav');
    const infoText = document.getElementById('hubInfoText');
    const pageBadge = document.getElementById('hubPageBadge');

    let currentProvSlug = provSelect ? provSelect.value : '';
    let currentKabkotSlug = '';
    let currentRegionName = '';
    let filteredTopics = [...masterTopics];
    let currentPage = 1;
    const perPage = 10;

    function populateKabkot() {
        if (!provSelect || !kabkotSelect) return;
        const pSlug = provSelect.value;
        const provData = rawProvinces.find(p => p.slug === pSlug);
        kabkotSelect.innerHTML = '';

        if (provData && provData.kabkot && provData.kabkot.length > 0) {
            provData.kabkot.forEach((kk, idx) => {
                const opt = document.createElement('option');
                opt.value = kk.slug;
                opt.textContent = kk.name;
                if (idx === 0) opt.selected = true;
                kabkotSelect.appendChild(opt);
            });
            currentKabkotSlug = provData.kabkot[0].slug;
            currentRegionName = provData.kabkot[0].name;
        } else {
            const opt = document.createElement('option');
            opt.value = '';
            opt.textContent = provData ? provData.name : 'Wilayah';
            kabkotSelect.appendChild(opt);
            currentKabkotSlug = '';
            currentRegionName = provData ? 'Provinsi ' + provData.name : 'Indonesia';
        }
    }

    function renderPage(page, scrollUp = false) {
        currentPage = page;
        const total = filteredTopics.length;
        const totalPages = Math.ceil(total / perPage) || 1;

        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        const startIndex = (currentPage - 1) * perPage;
        const endIndex = Math.min(startIndex + perPage, total);
        const currentItems = filteredTopics.slice(startIndex, endIndex);

        if (total === 0) {
            infoText.textContent = "Tidak ditemukan topik artikel yang sesuai.";
            pageBadge.textContent = "0 Hasil";
            container.innerHTML = `
                <div style="text-align: center; padding: 48px 20px; background: #f8fafc; border-radius: 12px; border: 1px dashed #cbd5e1;">
                    <i class="bi bi-search" style="font-size: 2.2rem; color: #94a3b8; display: block; margin-bottom: 10px;"></i>
                    <h4 style="font-size: 1rem; font-weight: 700; color: #064e3b;">Tidak ada modul yang cocok dengan kata kunci</h4>
                </div>
            `;
            paginationNav.innerHTML = '';
            return;
        }

        infoText.innerHTML = `Menampilkan <strong>${startIndex + 1} - ${endIndex}</strong> dari <strong>${total}</strong> modul artikel untuk <strong>${currentRegionName}</strong>`;
        pageBadge.textContent = `Halaman ${currentPage} dari ${totalPages}`;

        let html = '';
        currentItems.forEach(item => {
            const artTitle = item.title.startsWith('Training') ? item.title : `Training Rumah Sakit ${item.title}`;
            const fullTitle = `${artTitle} di ${currentRegionName}`;
            const artSlug = (item.slug || ('training-rumah-sakit-' + item.index)) + '-di-' + (currentRegionName.toLowerCase().replace(/[^a-z0-9]+/g, '-'));
            
            // Build dynamic route link
            const defaultProgSlug = 'training-akreditasi-rumah-sakit-standar-paripurna';
            const linkUrl = currentKabkotSlug 
                ? `/wilayah/${currentProvSlug}/${currentKabkotSlug}/program/${defaultProgSlug}/artikel/${artSlug}`
                : `/wilayah/${currentProvSlug}/program/${defaultProgSlug}/artikel/${artSlug}`;

            html += `
                <div class="article-topic-item" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px 20px; transition: all 0.2s ease;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 8px; flex-wrap: wrap; gap: 8px;">
                        <span style="font-size: 0.72rem; font-weight: 800; background: #f0fdf4; color: #166534; padding: 3px 10px; border-radius: 4px; border: 1px solid #bbf7d0;">
                            MODUL ${item.index} DARI 200
                        </span>
                        <span style="font-size: 0.74rem; font-weight: 700; color: #166534; background: #dcfce7; padding: 2px 8px; border-radius: 4px;">
                            <i class="bi bi-journal-check"></i> Standar Akreditasi & Mutu RS
                        </span>
                    </div>

                    <h4 style="font-size: 1.02rem; font-weight: 800; color: #064e3b; margin-bottom: 8px; line-height: 1.4;">
                        <a href="${linkUrl}" style="color: inherit; text-decoration: none;" onmouseover="this.style.color='#16a34a'" onmouseout="this.style.color='#064e3b'">
                            ${fullTitle}
                        </a>
                    </h4>

                    <p style="font-size: 0.84rem; color: #64748b; line-height: 1.6; margin-bottom: 12px;">
                        ${item.excerpt}
                    </p>

                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px dashed #e2e8f0; padding-top: 10px;">
                        <span style="font-size: 0.76rem; color: #94a3b8;">
                            <i class="bi bi-geo-alt"></i> ${currentRegionName}
                        </span>
                        <a href="${linkUrl}" style="font-size: 0.82rem; font-weight: 700; color: #16a34a; display: inline-flex; align-items: center; gap: 4px; text-decoration: none;">
                            Baca Modul Lengkap <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>
            `;
        });
        container.innerHTML = html;

        renderPaginationButtons(totalPages);

        if (scrollUp) {
            const anchor = document.getElementById('eksplorasi-200-artikel');
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
        const prevDisabled = currentPage === 1 ? 'disabled style="opacity: 0.4; pointer-events: none;"' : '';
        navHtml += `
            <button type="button" class="btn-hub-ctrl" data-page="${currentPage - 1}" ${prevDisabled} style="padding: 7px 14px; border-radius: 6px; border: 1px solid #cbd5e1; background: #ffffff; color: #064e3b; font-size: 0.82rem; font-weight: 700; cursor: pointer;">
                <i class="bi bi-chevron-left"></i> Prev
            </button>
        `;

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
                <button type="button" class="btn-hub-ctrl" data-page="${num}" style="padding: 7px 13px; border-radius: 6px; border: 1px solid; ${activeStyle} font-size: 0.82rem; cursor: pointer;">
                    ${num}
                </button>
            `;
            prevNum = num;
        });

        const nextDisabled = currentPage === totalPages ? 'disabled style="opacity: 0.4; pointer-events: none;"' : '';
        navHtml += `
            <button type="button" class="btn-hub-ctrl" data-page="${currentPage + 1}" ${nextDisabled} style="padding: 7px 14px; border-radius: 6px; border: 1px solid #cbd5e1; background: #ffffff; color: #064e3b; font-size: 0.82rem; font-weight: 700; cursor: pointer;">
                Next <i class="bi bi-chevron-right"></i>
            </button>
        `;

        paginationNav.innerHTML = navHtml;

        paginationNav.querySelectorAll('.btn-hub-ctrl').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const p = parseInt(this.getAttribute('data-page'));
                if (!isNaN(p)) renderPage(p, true);
            });
        });
    }

    // Events
    if (provSelect) {
        provSelect.addEventListener('change', function() {
            currentProvSlug = this.value;
            populateKabkot();
            renderPage(1, false);
        });
    }

    if (kabkotSelect) {
        kabkotSelect.addEventListener('change', function() {
            currentKabkotSlug = this.value;
            currentRegionName = this.options[this.selectedIndex].text;
            renderPage(1, false);
        });
    }

    let searchTimer = null;
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimer);
            searchTimer = setTimeout(() => {
                const q = searchInput.value.toLowerCase().trim();
                if (!q) {
                    filteredTopics = [...masterTopics];
                } else {
                    filteredTopics = masterTopics.filter(t => {
                        return t.title.toLowerCase().includes(q) || 
                               t.excerpt.toLowerCase().includes(q) ||
                               ("modul " + t.index).includes(q);
                    });
                }
                renderPage(1, false);
            }, 120);
        });
    }

    // Initialize
    populateKabkot();
    renderPage(1, false);
})();
</script>
@endpush
