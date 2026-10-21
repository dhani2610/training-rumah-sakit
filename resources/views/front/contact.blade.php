@extends('layouts.front')

@section('title', 'Hubungi Kami | Konsultasi & Pendaftaran Training Rumah Sakit')
@section('meta_description', 'Hubungi kami untuk informasi jadwal, proposal in-house rumah sakit, pendampingan akreditasi faskes, keselamatan pasien, dan sertifikasi resmi Training Rumah Sakit. WhatsApp 081399810272.')

@section('content')

    <!-- HERO KONTAK -->
    <section class="hero-section" style="padding: 56px 0 48px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-headset"></i> Layanan Konsultasi & Pendaftaran Resmi
            </div>

            <h1 class="hero-title" style="font-size: 2.35rem; margin-bottom: 14px;">
                Hubungi Tim <span>Training Rumah Sakit</span>
            </h1>

            <p class="hero-lead" style="max-width: 820px; margin: 0 auto; color: #cbd5e1; font-size: 1rem; line-height: 1.7;">
                Konsultasikan kebutuhan program pelatihan akreditasi faskes, keselamatan pasien (IKP & RCA), PPI, MFK-K3RS, rekam medis elektronik, serta proposal in-house hospital training di seluruh 38 provinsi Indonesia bersama konsultan resmi kami.
            </p>
        </div>
    </section>

    <!-- CONTACT FORM & INFO -->
    <section class="section-py" style="background: #f8fafc;">
        <div class="container">
            
            @if(session('success'))
                <div style="background: #f0fdf4; border: 1.5px solid #16a34a; border-radius: 12px; padding: 20px 24px; color: #166534; font-size: 0.95rem; font-weight: 600; margin-bottom: 32px; display: flex; align-items: center; gap: 14px; box-shadow: 0 4px 16px rgba(22, 163, 74, 0.12);">
                    <div style="width: 40px; height: 40px; background: #16a34a; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; flex-shrink: 0;">
                        <i class="bi bi-check-lg"></i>
                    </div>
                    <div>
                        <div style="font-weight: 800; font-size: 1.05rem; margin-bottom: 2px;">Permohonan Berhasil Terkirim!</div>
                        <div>{{ session('success') }}</div>
                    </div>
                </div>
            @endif

            <div class="contact-layout-grid">
                
                <!-- Contact Info Sidebar -->
                <div>
                    <div style="background: linear-gradient(160deg, #064e3b 0%, #065f46 100%); color: #ffffff; border-radius: 16px; padding: 36px 28px; border: 1px solid rgba(34, 197, 94, 0.35); box-shadow: 0 12px 30px rgba(6, 78, 59, 0.3);">
                        <div style="display: inline-flex; align-items: center; gap: 6px; background: rgba(34, 197, 94, 0.2); border: 1px solid rgba(34, 197, 94, 0.35); color: #86efac; font-size: 0.74rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 14px;">
                            <i class="bi bi-shield-check"></i> Kontak Resmi Pelatihan
                        </div>
                        <h3 style="font-size: 1.4rem; font-weight: 800; margin-bottom: 8px; color: #ffffff;">Saluran Hotline Resmi</h3>
                        <p style="font-size: 0.85rem; color: #dcfce7; line-height: 1.6; margin-bottom: 24px;">
                            Hubungi 4 nomor WhatsApp resmi kami sesuai kebutuhan pelatihan dan pendampingan rumah sakit Anda:
                        </p>

                        <div style="display: flex; flex-direction: column; gap: 14px; margin-bottom: 28px;">
                            <!-- WA 2 (Utama / Prioritas) -->
                            <a href="https://api.whatsapp.com/send?phone=6281399810272" target="_blank" style="display: flex; align-items: center; gap: 14px; padding: 14px 16px; background: rgba(34, 197, 94, 0.25); border: 1.5px solid #22c55e; border-radius: 10px; text-decoration: none; transition: all 0.2s ease; box-shadow: 0 4px 14px rgba(34, 197, 94, 0.25);" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='none'">
                                <div style="width: 42px; height: 42px; background: linear-gradient(135deg, #16a34a 0%, #ca8a04 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.3rem; flex-shrink: 0;">
                                    <i class="bi bi-whatsapp"></i>
                                </div>
                                <div style="flex-grow: 1;">
                                    <div style="display: flex; align-items: center; gap: 6px;">
                                        <span style="font-size: 0.70rem; color: #fef08a; text-transform: uppercase; font-weight: 800; letter-spacing: 0.5px;">Hotline Utama (Prioritas)</span>
                                        <span style="font-size: 0.65rem; background: #eab308; color: #713f12; font-weight: 800; padding: 1px 6px; border-radius: 10px;">Fast Response</span>
                                    </div>
                                    <div style="font-size: 1.05rem; font-weight: 900; color: #4ade80;">0813-9981-0272</div>
                                </div>
                                <i class="bi bi-chevron-right" style="color: #4ade80; font-size: 1rem;"></i>
                            </a>

                            <!-- WA 1 -->
                            <a href="https://api.whatsapp.com/send?phone=628118500177" target="_blank" style="display: flex; align-items: center; gap: 14px; padding: 12px 14px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px; text-decoration: none; transition: all 0.2s ease;" onmouseover="this.style.background='rgba(34,197,94,0.15)'; this.style.borderColor='#22c55e'" onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.1)'">
                                <div style="width: 40px; height: 40px; background: rgba(34, 197, 94, 0.25); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #4ade80; font-size: 1.2rem; flex-shrink: 0;">
                                    <i class="bi bi-calendar-check"></i>
                                </div>
                                <div style="flex-grow: 1;">
                                    <div style="font-size: 0.72rem; color: #86efac; text-transform: uppercase; font-weight: 700; letter-spacing: 0.3px;">Hotline 2 (Jadwal & Kuota Pelatihan)</div>
                                    <div style="font-size: 1rem; font-weight: 800; color: #ffffff;">0811-8500-177</div>
                                </div>
                                <i class="bi bi-chevron-right" style="color: #86efac; font-size: 0.85rem;"></i>
                            </a>

                            <!-- WA 3 -->
                            <a href="https://api.whatsapp.com/send?phone=6287894580806" target="_blank" style="display: flex; align-items: center; gap: 14px; padding: 12px 14px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px; text-decoration: none; transition: all 0.2s ease;" onmouseover="this.style.background='rgba(34,197,94,0.15)'; this.style.borderColor='#22c55e'" onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.1)'">
                                <div style="width: 40px; height: 40px; background: rgba(34, 197, 94, 0.25); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #4ade80; font-size: 1.2rem; flex-shrink: 0;">
                                    <i class="bi bi-journal-check"></i>
                                </div>
                                <div style="flex-grow: 1;">
                                    <div style="font-size: 0.72rem; color: #86efac; text-transform: uppercase; font-weight: 700; letter-spacing: 0.3px;">Hotline 3 (Silabus & Akreditasi Faskes)</div>
                                    <div style="font-size: 1rem; font-weight: 800; color: #ffffff;">0878-9458-0806</div>
                                </div>
                                <i class="bi bi-chevron-right" style="color: #86efac; font-size: 0.85rem;"></i>
                            </a>

                            <!-- WA 4 -->
                            <a href="https://api.whatsapp.com/send?phone=6287894580649" target="_blank" style="display: flex; align-items: center; gap: 14px; padding: 12px 14px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px; text-decoration: none; transition: all 0.2s ease;" onmouseover="this.style.background='rgba(34,197,94,0.15)'; this.style.borderColor='#22c55e'" onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.1)'">
                                <div style="width: 40px; height: 40px; background: rgba(34, 197, 94, 0.25); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #4ade80; font-size: 1.2rem; flex-shrink: 0;">
                                    <i class="bi bi-hospital"></i>
                                </div>
                                <div style="flex-grow: 1;">
                                    <div style="font-size: 0.72rem; color: #86efac; text-transform: uppercase; font-weight: 700; letter-spacing: 0.3px;">Hotline 4 (In-House Rumah Sakit & Faskes)</div>
                                    <div style="font-size: 1rem; font-weight: 800; color: #ffffff;">0878-9458-0649</div>
                                </div>
                                <i class="bi bi-chevron-right" style="color: #86efac; font-size: 0.85rem;"></i>
                            </a>
                        </div>

                        <!-- Email & Info Operasional -->
                        <div style="border-top: 1px solid rgba(255,255,255,0.12); padding-top: 20px; margin-bottom: 24px;">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                                <div style="width: 36px; height: 36px; background: rgba(255, 255, 255, 0.08); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1rem; flex-shrink: 0;">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div>
                                    <div style="font-size: 0.70rem; color: #86efac; text-transform: uppercase; font-weight: 700;">Email Resmi:</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #ffffff;">info@trainingrumahsakit.my.id</div>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 36px; height: 36px; background: rgba(255, 255, 255, 0.08); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1rem; flex-shrink: 0;">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div>
                                    <div style="font-size: 0.70rem; color: #86efac; text-transform: uppercase; font-weight: 700;">Jam Operasional:</div>
                                    <div style="font-size: 0.82rem; color: #e2e8f0;">Senin – Sabtu, 08:00 – 18:00 WIB</div>
                                </div>
                            </div>
                        </div>

                        <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Training Rumah Sakit, saya ingin konsultasi pendaftaran program pelatihan.') }}" target="_blank" class="btn-primary-green" style="width: 100%; justify-content: center; font-size: 0.92rem; padding: 12px 18px; border-radius: 10px; box-shadow: 0 4px 14px rgba(22, 163, 74, 0.4);">
                            <i class="bi bi-whatsapp"></i> Chat Hotline Utama WhatsApp: 0813-9981-0272
                        </a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 36px 32px; box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);">
                        
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 6px; flex-wrap: wrap; gap: 10px;">
                            <span style="font-size: 0.76rem; font-weight: 800; background: #f0fdf4; color: #166534; padding: 4px 14px; border-radius: 20px; border: 1px solid #bbf7d0; text-transform: uppercase;">
                                <i class="bi bi-lightning-charge-fill"></i> Respon Cepat < 15 Menit
                            </span>
                            <span style="font-size: 0.78rem; color: #94a3b8;">
                                <i class="bi bi-shield-check"></i> Bebas Biaya Konsultasi
                            </span>
                        </div>

                        <h3 style="font-size: 1.45rem; font-weight: 800; color: #064e3b; margin-bottom: 8px; line-height: 1.3;">
                            Formulir Permohonan Informasi & Proposal Program Training
                        </h3>
                        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 28px; line-height: 1.6;">
                            Silakan lengkapi formulir di bawah ini. Tim konsultan manajemen rumah sakit kami akan segera mengirimkan proposal silabus materi, jadwal terdekat, dan estimasi biaya pelatihan langsung ke WhatsApp Anda.
                        </p>

                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf

                            <!-- Baris 1: Nama & WhatsApp -->
                            <div class="form-row-two-col">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-person"></i> Nama Lengkap <span class="req">*</span>
                                    </label>
                                    <input type="text" name="name" class="form-control" required placeholder="Contoh: dr. Budi Santoso, Sp.A / Ns. Siti Rahayu, S.Kep">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-whatsapp"></i> Nomor WhatsApp / HP <span class="req">*</span>
                                    </label>
                                    <input type="tel" name="phone" class="form-control" required placeholder="Contoh: 081234567890">
                                </div>
                            </div>

                            <!-- Baris 2: Email & Perusahaan / RS -->
                            <div class="form-row-two-col">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-envelope"></i> Alamat Email <span class="req">*</span>
                                    </label>
                                    <input type="email" name="email" class="form-control" required placeholder="nama@rumahsakit.co.id">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-building"></i> Nama Rumah Sakit / Klinik / Faskes
                                    </label>
                                    <input type="text" name="company" class="form-control" placeholder="RSUD / RS Swasta / Klinik (Opsional)">
                                </div>
                            </div>

                            <!-- Baris 3: Program & Wilayah -->
                            <div class="form-row-two-col">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-award"></i> Pilih Skema Program Training Rumah Sakit
                                    </label>
                                    <select name="program_id" class="form-control">
                                        <option value="">-- Pilih Skema Program Pelatihan --</option>
                                        @foreach($programs as $p)
                                            <option value="{{ $p->id }}">{{ $p->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-geo-alt"></i> Wilayah / Lokasi Rumah Sakit
                                    </label>
                                    <input type="text" name="region" class="form-control" placeholder="Contoh: Jakarta, Surabaya, Medan, Makassar...">
                                </div>
                            </div>

                            <!-- Baris 4: Pesan / Kebutuhan -->
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="bi bi-chat-left-text"></i> Pesan / Kebutuhan Pelatihan Khusus <span class="req">*</span>
                                </label>
                                <textarea name="message" rows="4" class="form-control" required placeholder="Tuliskan jumlah peserta nakes, tipe rumah sakit (A/B/C/D), kebutuhan telusur akreditasi, rencana tanggal pelatihan, atau kebutuhan in-house training di rumah sakit Anda..."></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn-primary-green" style="width: 100%; justify-content: center; padding: 14px 28px; font-size: 1rem; font-weight: 800; border-radius: 10px; border: none; cursor: pointer; box-shadow: 0 4px 16px rgba(22, 163, 74, 0.35); margin-top: 8px;">
                                <i class="bi bi-send-fill"></i> Kirim Permohonan & Minta Penawaran Resmi
                            </button>

                            <div style="font-size: 0.78rem; color: #94a3b8; text-align: center; margin-top: 14px; display: flex; align-items: center; justify-content: center; gap: 6px;">
                                <i class="bi bi-shield-lock-fill" style="color: #16a34a;"></i> Data Anda aman dan hanya digunakan untuk keperluan konfirmasi program training resmi.
                            </div>
                        </form>

                    </div>
                </div>

            </div>

            <!-- 3 VALUE GUARANTEES -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin-top: 56px;">
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; display: flex; gap: 16px; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #16a34a; font-size: 1.3rem; flex-shrink: 0;">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1rem; font-weight: 800; color: #064e3b; margin-bottom: 4px;">Sertifikasi Kompetensi Resmi</h4>
                        <p style="font-size: 0.82rem; color: #64748b; line-height: 1.5; margin: 0;">Sertifikat pelatihan manajemen faskes resmi berstandar mutu perumahsakitan yang diakui luas.</p>
                    </div>
                </div>

                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; display: flex; gap: 16px; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; background: #fefce8; border: 1px solid #fef08a; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #ca8a04; font-size: 1.3rem; flex-shrink: 0;">
                        <i class="bi bi-person-badge-fill"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1rem; font-weight: 800; color: #064e3b; margin-bottom: 4px;">Fasilitator & Surveyor Senior</h4>
                        <p style="font-size: 0.82rem; color: #64748b; line-height: 1.5; margin: 0;">Tenaga ahli praktisi rumah sakit, dokter spesialis, komite mutu, dan mantan direktur rumah sakit berpengalaman.</p>
                    </div>
                </div>

                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; display: flex; gap: 16px; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #16a34a; font-size: 1.3rem; flex-shrink: 0;">
                        <i class="bi bi-buildings-fill"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1rem; font-weight: 800; color: #064e3b; margin-bottom: 4px;">In-House Faskes Se-Indonesia</h4>
                        <p style="font-size: 0.82rem; color: #64748b; line-height: 1.5; margin: 0;">Melayani in-house training dan pendampingan telusur akreditasi langsung di rumah sakit Anda di 38 provinsi.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
