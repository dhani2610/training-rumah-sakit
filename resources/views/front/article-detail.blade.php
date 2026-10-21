@extends('layouts.front')

@section('title', $article->title . ' | Panduan Training Rumah Sakit')
@section('meta_description', Str::limit($article->excerpt, 160))

@section('content')

    <!-- HERO ARTICLE DETAIL -->
    <section class="hero-section" style="padding: 46px 0 42px; text-align: left;">
        <div class="container">
            <div style="font-size: 0.82rem; color: #86efac; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                <a href="{{ route('home') }}" style="color: #cbd5e1;"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('articles') }}" style="color: #cbd5e1;">Artikel & Panduan</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 700;">{{ Str::limit($article->title, 42) }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <span class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-hospital"></i> {{ $article->category ?? 'Training Rumah Sakit' }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(34, 197, 94, 0.25); border-color: #4ade80; color: #86efac;">
                    <i class="bi bi-geo-alt-fill"></i> {{ $article->city ?? ($article->province ?? 'Indonesia') }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(234, 179, 8, 0.2); border-color: #facc15; color: #fef08a;">
                    <i class="bi bi-shield-check"></i> Sertifikasi Manajemen RS Resmi
                </span>
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.25rem; line-height: 1.25; margin-bottom: 14px;">
                {{ $article->title }}
            </h1>

            <div style="display: flex; align-items: center; gap: 16px; font-size: 0.82rem; color: #cbd5e1; flex-wrap: wrap;">
                <span><i class="bi bi-person-fill" style="color: #facc15;"></i> {{ $article->author ?? 'Konsultan Manajemen Mutu RS & Surveyor Akreditasi Senior' }}</span>
                <span>•</span>
                <span><i class="bi bi-clock-history" style="color: #facc15;"></i> Waktu Baca: 35-45 Menit</span>
                <span>•</span>
                <span><i class="bi bi-eye-fill" style="color: #facc15;"></i> {{ number_format($article->views_count ?? 380) }} x dibaca</span>
                <span>•</span>
                <span style="color: #86efac; font-weight: 700;"><i class="bi bi-patch-check-fill"></i> Standar Akreditasi & Patient Safety</span>
            </div>
        </div>
    </section>

    <!-- CONTENT WRAPPER -->
    <section class="section-py">
        <div class="container">
            <div class="content-sidebar-grid">
                
                <!-- Main Content Column -->
                <div>
                    <div class="article-content-card">
                        
                        <!-- Highlight Excerpt -->
                        <div style="font-size: 1.02rem; font-weight: 600; color: #064e3b; background: #f0fdf4; border-left: 4px solid #16a34a; padding: 16px 20px; border-radius: 8px; margin-bottom: 28px;">
                            <div style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.8px; color: #166534; margin-bottom: 6px; font-weight: 800;">
                                <i class="bi bi-bookmark-check-fill"></i> Ringkasan Eksekutif Materi Pelatihan
                            </div>
                            {{ $article->excerpt }}
                        </div>

                        <!-- 4 WHATSAPP HOTLINES CARD -->
                        <div class="wa-hotlines-box" style="background: linear-gradient(145deg, #064e3b 0%, #065f46 100%); border-radius: 18px; padding: 26px; color: #ffffff; border: 1px solid rgba(34, 197, 94, 0.4); margin: 0 0 32px 0;">
                            <div class="wa-hotlines-header" style="text-align: center; max-width: 680px; margin: 0 auto 22px;">
                                <h3 style="font-size: 1.3rem; font-weight: 800; color: #ffffff; margin-bottom: 6px;">
                                    <i class="bi bi-headset" style="color: #facc15; margin-right: 8px;"></i> 4 Nomor WhatsApp Resmi Layanan Konsultasi & Pendaftaran
                                </h3>
                                <p style="font-size: 0.86rem; color: #dcfce7;">Hubungi petugas spesialis kami untuk konsultasi teknis, silabus materi, atau penawaran in-house training rumah sakit:</p>
                            </div>

                            <div class="wa-hotlines-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px;">
                                @foreach($waNumbers as $hotline)
                                    <a href="{{ $hotline['url'] }}" target="_blank" class="wa-hotline-card" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.12); border-radius: 10px; padding: 14px; color: #ffffff; display: flex; flex-direction: column; text-decoration: none; {{ !empty($hotline['primary']) ? 'border: 2px solid #facc15;' : '' }}">
                                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                            <div style="width: 32px; height: 32px; background: rgba(34, 197, 94, 0.25); color: #facc15; border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: 1rem;">
                                                <i class="bi {{ $hotline['icon'] }}"></i>
                                            </div>
                                            <span style="font-size: 0.68rem; font-weight: 800; background: rgba(34, 197, 94, 0.2); color: #86efac; padding: 2px 6px; border-radius: 4px;">{{ $hotline['badge'] }}</span>
                                        </div>
                                        <div style="font-size: 0.9rem; font-weight: 800; margin-bottom: 2px;">{{ $hotline['title'] }}</div>
                                        <div style="font-size: 0.74rem; color: #cbd5e1; margin-bottom: 10px; flex-grow: 1;">{{ $hotline['desc'] }}</div>
                                        <div style="font-size: 0.84rem; font-weight: 800; color: #4ade80; display: flex; align-items: center; gap: 6px; font-family: monospace;">
                                            <i class="bi bi-whatsapp"></i> {{ $hotline['number'] }}
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- ARTICLE BODY TEXT (HTML RENDERED) -->
                        <div class="article-rich-text">
                            @if(str_contains($article->content, '<h2') || str_contains($article->content, '<p>') || str_contains($article->content, '<div'))
                                {!! $article->content !!}
                            @else
                                @php
                                    $paragraphs = explode("\n\n", $article->content);
                                @endphp
                                @foreach($paragraphs as $para)
                                    @if(str_starts_with(trim($para), 'BAB '))
                                        @php
                                             $lines = explode("\n", trim($para));
                                             $header = array_shift($lines);
                                             $body = implode("\n", $lines);
                                        @endphp
                                        <h2>{{ $header }}</h2>
                                        @if(!empty($body))
                                            <p>{{ $body }}</p>
                                        @endif
                                    @else
                                        <p>{{ trim($para) }}</p>
                                    @endif
                                @endforeach
                            @endif
                        </div>

                        <!-- CTA BANNER -->
                        <div style="background: linear-gradient(135deg, #064e3b 0%, #065f46 100%); border-radius: 12px; padding: 28px; color: #ffffff; margin-top: 40px; text-align: center;">
                            <div style="font-size: 0.8rem; color: #facc15; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
                                Pendaftaran & Sertifikasi Pelatihan Resmi
                            </div>
                            <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 12px;">
                                Konsultasi Pendaftaran Training Rumah Sakit Sekarang
                            </h3>
                            <p style="font-size: 0.88rem; color: #dcfce7; max-width: 600px; margin: 0 auto 20px; line-height: 1.6;">
                                Hubungi konsultan pendaftaran resmi kami untuk konfirmasi jadwal terdekat, silabus materi komprehensif, maupun program in-house training rumah sakit:
                            </p>
                            <a href="{{ $waLink }}" target="_blank" class="btn-primary-green" style="font-size: 0.95rem; padding: 12px 28px; display: inline-flex;">
                                <i class="bi bi-whatsapp"></i> Chat WhatsApp: 081399810272
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Column -->
                <div>
                    <!-- Sticky Sidebar -->
                    <div style="background: #ffffff; border: 1px solid #bbf7d0; border-radius: var(--radius-xl); padding: 26px; box-shadow: 0 4px 16px rgba(22, 163, 74, 0.05); position: sticky; top: 96px;">
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #064e3b; margin-bottom: 18px; border-bottom: 1px solid #f1f5f9; padding-bottom: 10px;">
                            Hotline WhatsApp
                        </h3>

                        <a href="{{ $waLink }}" target="_blank" class="btn-primary-green" style="width: 100%; justify-content: center; margin-bottom: 12px;">
                            <i class="bi bi-whatsapp"></i> Chat 0813-9981-0272
                        </a>

                        <div style="font-size: 0.82rem; color: #64748b; line-height: 1.6; margin-bottom: 20px;">
                            Layanan konsultasi resmi Training Rumah Sakit seluruh wilayah Indonesia.
                        </div>

                        <!-- 8 Program Resmi Links -->
                        <div style="border-top: 1px solid #f1f5f9; padding-top: 18px;">
                            <h4 style="font-size: 0.95rem; font-weight: 800; color: #064e3b; margin-bottom: 12px;">
                                8 Skema Program Training Rumah Sakit:
                            </h4>
                            <div style="display: flex; flex-direction: column; gap: 8px;">
                                @foreach($programs as $prog)
                                    <a href="{{ route('program.detail', $prog->slug) }}" style="font-size: 0.82rem; color: #064e3b; padding: 8px 10px; border-radius: 6px; background: #f8fafc; border: 1px solid #e2e8f0; text-decoration: none; font-weight: 600; display: flex; align-items: center; justify-content: space-between;">
                                        <span>{{ $prog->title }}</span>
                                        <i class="bi bi-chevron-right" style="color: #16a34a; font-size: 0.75rem;"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Artikel Terkait -->
                        @if(isset($relatedArticles) && $relatedArticles->count() > 0)
                            <div style="border-top: 1px solid #f1f5f9; padding-top: 18px; margin-top: 20px;">
                                <h4 style="font-size: 0.95rem; font-weight: 800; color: #064e3b; margin-bottom: 12px;">
                                    Artikel Terkait:
                                </h4>
                                <div style="display: flex; flex-direction: column; gap: 10px;">
                                    @foreach($relatedArticles as $rel)
                                        <a href="{{ route('article.detail', $rel->slug) }}" style="font-size: 0.82rem; color: #064e3b; line-height: 1.4; text-decoration: none; font-weight: 600;">
                                            • {{ $rel->title }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
