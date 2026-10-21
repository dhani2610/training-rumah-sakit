@extends('layouts.front')

@section('title', 'Training Rumah Sakit | Pusat Pelatihan & Sertifikasi Manajemen Rumah Sakit, Akreditasi & Mutu Klinis Indonesia')
@section('meta_description', 'Lembaga pelatihan dan pengembangan kompetensi manajemen rumah sakit terpadu di Indonesia: Standar Akreditasi Rumah Sakit, Keselamatan Pasien (IKP & RCA), PPI, MFK-K3RS, Rekam Medis Elektronik (RME), dan Pelayanan Prima Nakes.')

@section('content')
    <!-- HERO SLIDER SECTION (TANPA FOTO - HIGH-TECH HOSPITAL MANAGEMENT & PATIENT SAFETY TELEMETRY HUD) -->
    <section class="gas-hero-wrapper" style="background: radial-gradient(circle at 80% 20%, rgba(34, 197, 94, 0.22) 0%, transparent 45%), radial-gradient(circle at 10% 80%, rgba(234, 179, 8, 0.15) 0%, transparent 50%), #064e3b; color: #ffffff; padding: 60px 0 70px; position: relative; overflow: hidden;">
        <!-- Background Grid Pattern -->
        <div style="position: absolute; inset: 0; background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 36px 36px; pointer-events: none;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            
            <!-- Hero Slider Container -->
            <div class="hero-slider-container" id="heroSlider" style="position: relative; min-height: 480px;">
                
                <!-- SLIDE 1: Pelatihan Manajemen RS & Akreditasi -->
                <div class="hero-slide active" data-slide="1" style="display: block; transition: all 0.5s ease;">
                    <div class="hero-slide-grid">
                        <div>
                            <div class="hero-badge" style="background: rgba(34, 197, 94, 0.2); border: 1px solid rgba(34, 197, 94, 0.5); color: #86efac; font-size: 0.78rem; font-weight: 800; padding: 6px 16px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px;">
                                <i class="bi bi-hospital"></i> Standar Akreditasi & Mutu Pelayanan Rumah Sakit
                            </div>

                            <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 18px; color: #ffffff; letter-spacing: -0.5px;">
                                Pusat Pelatihan & Sertifikasi Kompetensi Resmi <span style="background: linear-gradient(135deg, #22c55e 0%, #facc15 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Training Rumah Sakit</span>
                            </h1>

                            <p style="font-size: 1.02rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 28px; max-width: 620px;">
                                Membekali jajaran direksi, komite medis, perawat, dan manajemen fasilitas kesehatan menguasai standar akreditasi rumah sakit, keselamatan pasien (IKP & RCA klinis), pencegahan infeksi (PPI), manajemen fasilitas & keselamatan (MFK-K3RS), hingga rekam medis elektronik (RME).
                            </p>

                            <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 32px;">
                                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Utama Training Rumah Sakit, saya ingin konsultasi pendaftaran resmi program pelatihan manajemen rumah sakit dan akreditasi.') }}" target="_blank" class="btn-primary-green" style="box-shadow: 0 4px 18px rgba(22, 163, 74, 0.45); background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);">
                                    <i class="bi bi-whatsapp"></i> Hotline Utama: 0813-9981-0272
                                </a>
                                <a href="#program" class="btn-outline-white" style="border: 1px solid rgba(255,255,255,0.25); background: rgba(255,255,255,0.06);">
                                    <i class="bi bi-grid-fill"></i> 8 Program Unggulan
                                </a>
                            </div>

                            <div style="display: flex; align-items: center; gap: 24px; color: #94a3b8; font-size: 0.85rem; flex-wrap: wrap;">
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #22c55e;"></i> Sertifikasi Manajemen RS Resmi
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #22c55e;"></i> Narasumber Praktisi Klinis Senior
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #22c55e;"></i> Pendampingan Akreditasi Paripurna
                                </div>
                            </div>
                        </div>

                        <!-- SIMULATED HOSPITAL MANAGEMENT & CLINICAL QUALITY HUD -->
                        <div>
                            <div style="background: linear-gradient(145deg, #065f46 0%, #064e3b 100%); border: 2px solid rgba(34, 197, 94, 0.4); border-radius: 20px; padding: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.55), inset 0 1px 0 rgba(255,255,255,0.1); position: relative;">
                                <!-- Top Status Bar -->
                                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 12px; margin-bottom: 18px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <span style="display: inline-block; width: 10px; height: 10px; background: #22c55e; border-radius: 50%; box-shadow: 0 0 10px #22c55e; animation: pulse 2s infinite;"></span>
                                        <span style="font-size: 0.78rem; font-weight: 800; color: #86efac; text-transform: uppercase; letter-spacing: 0.8px;">HOSPITAL MANAGEMENT & QUALITY HUD</span>
                                    </div>
                                    <span style="font-size: 0.72rem; background: rgba(34, 197, 94, 0.25); color: #86efac; padding: 3px 10px; border-radius: 12px; border: 1px solid rgba(34, 197, 94, 0.4); font-weight: 700;">AKREDITASI PARIPURNA &bull; VERIFIED</span>
                                </div>

                                <!-- Metric Cards Grid -->
                                <div class="hud-metrics-grid">
                                    <div style="background: rgba(6, 78, 59, 0.7); border: 1px solid rgba(34, 197, 94, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #86efac; text-transform: uppercase; margin-bottom: 4px;">Nakes & Manajemen Terlatih</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #22c55e;">18,500+ <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">NAKES</span></div>
                                        <div style="font-size: 0.68rem; color: #86efac; margin-top: 2px;">Dokter, Perawat & Manajemen RS</div>
                                    </div>

                                    <div style="background: rgba(6, 78, 59, 0.7); border: 1px solid rgba(34, 197, 94, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #86efac; text-transform: uppercase; margin-bottom: 4px;">Kelulusan Akreditasi</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #facc15;">99.2% <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">LULUS</span></div>
                                        <div style="font-size: 0.68rem; color: #fef08a; margin-top: 2px;">Tingkat Kelulusan Paripurna</div>
                                    </div>

                                    <div style="background: rgba(6, 78, 59, 0.7); border: 1px solid rgba(34, 197, 94, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #86efac; text-transform: uppercase; margin-bottom: 4px;">RS & Faskes Mitra</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #38bdf8;">450+ <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">FASKES</span></div>
                                        <div style="font-size: 0.68rem; color: #bae6fd; margin-top: 2px;">RS Vertikal, RSUD & RS Swasta</div>
                                    </div>

                                    <div style="background: rgba(6, 78, 59, 0.7); border: 1px solid rgba(34, 197, 94, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #86efac; text-transform: uppercase; margin-bottom: 4px;">Indeks Kepuasan Mutu</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #22c55e;">98.7% <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">PUAS</span></div>
                                        <div style="font-size: 0.68rem; color: #86efac; margin-top: 2px;">Standar Mutu & Keselamatan Pasien</div>
                                    </div>
                                </div>

                                <!-- Lower Status Highlights -->
                                <div style="background: rgba(6, 78, 59, 0.5); border-radius: 10px; padding: 12px 14px; display: flex; justify-content: space-between; align-items: center; font-size: 0.78rem;">
                                    <span style="color: #cbd5e1;"><i class="bi bi-shield-check text-success"></i> Standar Tata Kelola Klinis:</span>
                                    <span style="font-weight: 700; color: #86efac;">PATIENT SAFETY FIRST &bull; CLINICAL RISK GOVERNANCE</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2: Keselamatan Pasien & Investigasi Insiden (IKP & RCA) -->
                <div class="hero-slide" data-slide="2" style="display: none; transition: all 0.5s ease;">
                    <div class="hero-slide-grid">
                        <div>
                            <div class="hero-badge" style="background: rgba(234, 179, 8, 0.2); border: 1px solid rgba(234, 179, 8, 0.5); color: #facc15; font-size: 0.78rem; font-weight: 800; padding: 6px 16px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px;">
                                <i class="bi bi-shield-plus"></i> Keselamatan Pasien & Investigasi Insiden Klinis (IKP)
                            </div>

                            <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 18px; color: #ffffff; letter-spacing: -0.5px;">
                                Patient Safety: <span style="background: linear-gradient(135deg, #facc15 0%, #eab308 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Investigasi IKP & Root Cause Analysis</span>
                            </h1>

                            <p style="font-size: 1.02rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 28px; max-width: 620px;">
                                Pelatihan mendalam pelaporan Insiden Keselamatan Pasien (KTD, KNC, KTC, Sentinel), investigasi 5 langkah Root Cause Analysis (RCA) klinis, analisis faktor kontributor, serta perumusan rekomendasi perbaikan mutu faskes tanpa budaya menyalahkan (Just Culture).
                            </p>

                            <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 32px;">
                                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Tim Training Rumah Sakit, saya ingin konsultasi program pelatihan Keselamatan Pasien dan Investigasi Insiden IKP RCA.') }}" target="_blank" class="btn-primary-green" style="background: linear-gradient(135deg, #eab308 0%, #ca8a04 100%); color: #064e3b; font-weight: 800;">
                                    <i class="bi bi-whatsapp"></i> Konsultasi IKP RCA: 0813-9981-0272
                                </a>
                                <a href="{{ route('program.detail', 'training-keselamatan-pasien-investigasi-insiden-ikp-rca-rumah-sakit') }}" class="btn-outline-white">
                                    <i class="bi bi-file-medical-fill"></i> Detail Modul IKP & RCA
                                </a>
                            </div>

                            <div style="display: flex; align-items: center; gap: 24px; color: #94a3b8; font-size: 0.85rem; flex-wrap: wrap;">
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #facc15;"></i> Investigasi Kejadian Sentinel 45 Hari
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #facc15;"></i> Matrix Grading Risiko Klinis
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #facc15;"></i> Penerapan Budaya Just Culture
                                </div>
                            </div>
                        </div>

                        <!-- SIMULATED PATIENT SAFETY TELEMETRY -->
                        <div>
                            <div style="background: linear-gradient(145deg, #065f46 0%, #064e3b 100%); border: 2px solid rgba(234, 179, 8, 0.4); border-radius: 20px; padding: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.55);">
                                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 12px; margin-bottom: 18px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <span style="display: inline-block; width: 10px; height: 10px; background: #facc15; border-radius: 50%; box-shadow: 0 0 10px #facc15;"></span>
                                        <span style="font-size: 0.78rem; font-weight: 800; color: #fef08a; text-transform: uppercase; letter-spacing: 0.8px;">PATIENT SAFETY & IKP RCA DIAGNOSTIC HUD</span>
                                    </div>
                                    <span style="font-size: 0.72rem; background: rgba(234, 179, 8, 0.2); color: #facc15; padding: 3px 10px; border-radius: 12px; border: 1px solid rgba(234, 179, 8, 0.35); font-weight: 700;">SENTINEL AUDIT READY &bull; JUST CULTURE</span>
                                </div>

                                <div class="hud-metrics-grid">
                                    <div style="background: rgba(6, 78, 59, 0.7); border: 1px solid rgba(234, 179, 8, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #fef08a; text-transform: uppercase; margin-bottom: 4px;">Akurasi Analisis RCA</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #facc15;">99.1% <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">PRESISI</span></div>
                                        <div style="font-size: 0.68rem; color: #fef08a; margin-top: 2px;">Faktor Sistemik Terpetakan</div>
                                    </div>

                                    <div style="background: rgba(6, 78, 59, 0.7); border: 1px solid rgba(234, 179, 8, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #fef08a; text-transform: uppercase; margin-bottom: 4px;">Waktu Respons Insiden</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #22c55e;">-40% <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">CEPAT</span></div>
                                        <div style="font-size: 0.68rem; color: #86efac; margin-top: 2px;">SOP Grading Risiko Klinis Cepat</div>
                                    </div>

                                    <div style="background: rgba(6, 78, 59, 0.7); border: 1px solid rgba(234, 179, 8, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #fef08a; text-transform: uppercase; margin-bottom: 4px;">Komite Mutu Terlatih</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #38bdf8;">450+ <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">TIM MUTU</span></div>
                                        <div style="font-size: 0.68rem; color: #bae6fd; margin-top: 2px;">Seluruh Wilayah Indonesia</div>
                                    </div>

                                    <div style="background: rgba(6, 78, 59, 0.7); border: 1px solid rgba(234, 179, 8, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #fef08a; text-transform: uppercase; margin-bottom: 4px;">Kesiapan Telusur Akreditasi</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #22c55e;">100%</div>
                                        <div style="font-size: 0.68rem; color: #86efac; margin-top: 2px;">Lolos Verifikasi Surveyor</div>
                                    </div>
                                </div>

                                <div style="background: rgba(6, 78, 59, 0.5); border-radius: 10px; padding: 12px 14px; display: flex; justify-content: space-between; align-items: center; font-size: 0.78rem;">
                                    <span style="color: #cbd5e1;"><i class="bi bi-patch-check text-warning"></i> Standar Keselamatan Pasien:</span>
                                    <span style="font-weight: 700; color: #fef08a;">WHO PATIENT SAFETY &bull; 6 SASARAN KESELAMATAN PASIEN</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 3: PPI, MFK-K3RS & Rekam Medis Elektronik -->
                <div class="hero-slide" data-slide="3" style="display: none; transition: all 0.5s ease;">
                    <div class="hero-slide-grid">
                        <div>
                            <div class="hero-badge" style="background: rgba(34, 197, 94, 0.2); border: 1px solid rgba(34, 197, 94, 0.5); color: #86efac; font-size: 0.78rem; font-weight: 800; padding: 6px 16px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px;">
                                <i class="bi bi-hospital"></i> Tata Kelola PPI, MFK-K3RS & Rekam Medis Elektronik
                            </div>

                            <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 18px; color: #ffffff; letter-spacing: -0.5px;">
                                Operational Excellence: <span style="background: linear-gradient(135deg, #22c55e 0%, #38bdf8 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">PPI, MFK-K3RS & Digitalisasi RME</span>
                            </h1>

                            <p style="font-size: 1.02rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 28px; max-width: 620px;">
                                Kuasai kewaspadaan standar dan isolasi pencegahan infeksi (PPI), manajemen proteksi kebakaran dan keselamatan fasilitas fisik faskes (MFK-K3RS), serta interoperabilitas rekam medis elektronik (RME) yang aman dan terintegrasi.
                            </p>

                            <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 32px;">
                                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Training Rumah Sakit, saya ingin konsultasi modul pelatihan PPI, MFK-K3RS dan Rekam Medis Elektronik RME.') }}" target="_blank" class="btn-primary-green" style="background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);">
                                    <i class="bi bi-whatsapp"></i> Konsultasi Operasional RS: 0813-9981-0272
                                </a>
                                <a href="{{ route('program.detail', 'training-rekam-medis-elektronik-rme-dan-manajemen-informasi-kesehatan') }}" class="btn-outline-white">
                                    <i class="bi bi-laptop"></i> Detail Modul RME
                                </a>
                            </div>

                            <div style="display: flex; align-items: center; gap: 24px; color: #94a3b8; font-size: 0.85rem; flex-wrap: wrap;">
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #22c55e;"></i> Bundles Pencegahan HAIs Nosokomial
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #22c55e;"></i> Proteksi Bencana & K3 Rumah Sakit
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #22c55e;"></i> Keamanan & Kerahasiaan Data RME
                                </div>
                            </div>
                        </div>

                        <!-- SIMULATED HOSPITAL OPERATIONAL TELEMETRY -->
                        <div>
                            <div style="background: linear-gradient(145deg, #065f46 0%, #064e3b 100%); border: 2px solid rgba(56, 189, 248, 0.4); border-radius: 20px; padding: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.55);">
                                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 12px; margin-bottom: 18px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <span style="display: inline-block; width: 10px; height: 10px; background: #38bdf8; border-radius: 50%; box-shadow: 0 0 10px #38bdf8;"></span>
                                        <span style="font-size: 0.78rem; font-weight: 800; color: #bae6fd; text-transform: uppercase; letter-spacing: 0.8px;">HOSPITAL OPERATIONS & INFRASTRUCTURE HUD</span>
                                    </div>
                                    <span style="font-size: 0.72rem; background: rgba(56, 189, 248, 0.2); color: #38bdf8; padding: 3px 10px; border-radius: 12px; border: 1px solid rgba(56, 189, 248, 0.35); font-weight: 700;">PPI &bull; MFK &bull; RME CERTIFIED</span>
                                </div>

                                <div class="hud-metrics-grid">
                                    <div style="background: rgba(6, 78, 59, 0.7); border: 1px solid rgba(56, 189, 248, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #bae6fd; text-transform: uppercase; margin-bottom: 4px;">Kepatuhan Cuci Tangan</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #38bdf8;">+78% <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">OPTIMAL</span></div>
                                        <div style="font-size: 0.68rem; color: #bae6fd; margin-top: 2px;">Audit 6 Langkah WHO</div>
                                    </div>

                                    <div style="background: rgba(6, 78, 59, 0.7); border: 1px solid rgba(56, 189, 248, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #bae6fd; text-transform: uppercase; margin-bottom: 4px;">Keandalan Proteksi MFK</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #22c55e;">99.6% <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">SIAP</span></div>
                                        <div style="font-size: 0.68rem; color: #86efac; margin-top: 2px;">Inspeksi Alat Medis & Gedung</div>
                                    </div>

                                    <div style="background: rgba(6, 78, 59, 0.7); border: 1px solid rgba(56, 189, 248, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #bae6fd; text-transform: uppercase; margin-bottom: 4px;">Integrasi RME Digital</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #facc15;">100% <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">DIGITAL</span></div>
                                        <div style="font-size: 0.68rem; color: #fef08a; margin-top: 2px;">Satu Sehat & Standar Klinis</div>
                                    </div>

                                    <div style="background: rgba(6, 78, 59, 0.7); border: 1px solid rgba(56, 189, 248, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #bae6fd; text-transform: uppercase; margin-bottom: 4px;">Penurunan Infeksi HAIs</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #22c55e;">-45% <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">SIGNIFIKAN</span></div>
                                        <div style="font-size: 0.68rem; color: #86efac; margin-top: 2px;">Hasil Bundles PPI Terpadu</div>
                                    </div>
                                </div>

                                <div style="background: rgba(6, 78, 59, 0.5); border-radius: 10px; padding: 12px 14px; display: flex; justify-content: space-between; align-items: center; font-size: 0.78rem;">
                                    <span style="color: #cbd5e1;"><i class="bi bi-shield-check text-info"></i> Fasilitas & Rekam Medis:</span>
                                    <span style="font-weight: 700; color: #bae6fd;">K3 RUMAH SAKIT &bull; ELECTRONIC MEDICAL RECORD COMPLIANT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Navigation Dots -->
            <div style="display: flex; justify-content: center; align-items: center; gap: 10px; margin-top: 32px;">
                <button type="button" class="slider-dot" data-target="1" style="width: 32px; height: 10px; border-radius: 6px; background: #22c55e; border: none; cursor: pointer; transition: all 0.3s ease;"></button>
                <button type="button" class="slider-dot" data-target="2" style="width: 10px; height: 10px; border-radius: 6px; background: rgba(255,255,255,0.3); border: none; cursor: pointer; transition: all 0.3s ease;"></button>
                <button type="button" class="slider-dot" data-target="3" style="width: 10px; height: 10px; border-radius: 6px; background: rgba(255,255,255,0.3); border: none; cursor: pointer; transition: all 0.3s ease;"></button>
            </div>

        </div>
    </section>

    <!-- KEUNGGULAN INTERAKTIF SLIDER -->
    <section class="section-py" style="background: #ffffff; border-bottom: 1px solid #e2e8f0; overflow: hidden;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 36px;">
                <span class="section-tag">Keunggulan Pusat Pelatihan</span>
                <h2 class="section-title">Mengapa Memilih Training Rumah Sakit?</h2>
                <p class="section-desc" style="max-width: 760px; margin: 0 auto;">
                    Pendekatan terpadu tata kelola rumah sakit modern yang memadukan mutu pelayanan klinis, kepatuhan akreditasi paripurna, manajemen fasilitas, dan digitalisasi faskes:
                </p>
            </div>

            <!-- Interactive Slider Track -->
            <div style="position: relative;">
                <div style="display: flex; gap: 20px; overflow-x: auto; padding: 12px 4px 28px; scroll-snap-type: x mandatory; scrollbar-width: thin;" id="keunggulanSlider">
                    
                    <div class="keunggulan-card" style="scroll-snap-align: start;">
                        <div style="width: 48px; height: 48px; background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #16a34a; font-size: 1.4rem; margin-bottom: 16px;">
                            <i class="bi bi-hospital"></i>
                        </div>
                        <h3 style="font-size: 1.1rem; font-weight: 800; color: #064e3b; margin-bottom: 8px;">Konsultan & Surveyor RS Senior</h3>
                        <p style="font-size: 0.88rem; color: #475569; line-height: 1.6; margin: 0;">Dibimbing langsung oleh praktisi manajemen rumah sakit, mantan direktur RS, dan konsultan akreditasi yang menguasai implementasi regulasi faskes secara nyata.</p>
                    </div>

                    <div class="keunggulan-card" style="scroll-snap-align: start;">
                        <div style="width: 48px; height: 48px; background: #fefce8; border: 1px solid #fef08a; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #ca8a04; font-size: 1.4rem; margin-bottom: 16px;">
                            <i class="bi bi-shield-plus"></i>
                        </div>
                        <h3 style="font-size: 1.1rem; font-weight: 800; color: #064e3b; margin-bottom: 8px;">Budaya Keselamatan Pasien & RCA</h3>
                        <p style="font-size: 0.88rem; color: #475569; line-height: 1.6; margin: 0;">Metodologi komprehensif investigasi insiden keselamatan pasien (IKP), Root Cause Analysis (RCA), HFACS, FMEA risiko klinis, dan Just Culture bebas budaya menyalahkan.</p>
                    </div>

                    <div class="keunggulan-card" style="scroll-snap-align: start;">
                        <div style="width: 48px; height: 48px; background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #16a34a; font-size: 1.4rem; margin-bottom: 16px;">
                            <i class="bi bi-virus"></i>
                        </div>
                        <h3 style="font-size: 1.1rem; font-weight: 800; color: #064e3b; margin-bottom: 8px;">Bundles PPI & Pengendalian HAIs</h3>
                        <p style="font-size: 0.88rem; color: #475569; line-height: 1.6; margin: 0;">Pedoman kewaspadaan standar dan transmisi isolasi, program surveilans infeksi rumah sakit (HAIs), audit kepatuhan cuci tangan WHO, dan sterilisasi terpusat CSSD.</p>
                    </div>

                    <div class="keunggulan-card" style="scroll-snap-align: start;">
                        <div style="width: 48px; height: 48px; background: #fefce8; border: 1px solid #fef08a; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #ca8a04; font-size: 1.4rem; margin-bottom: 16px;">
                            <i class="bi bi-building-check"></i>
                        </div>
                        <h3 style="font-size: 1.1rem; font-weight: 800; color: #064e3b; margin-bottom: 8px;">Manajemen Fasilitas & K3RS (MFK)</h3>
                        <p style="font-size: 0.88rem; color: #475569; line-height: 1.6; margin: 0;">Proteksi keselamatan gedung faskes, tanggap darurat bencana medis (HDP), mitigasi bahaya B3 medis, inspeksi sistem utilitas vital, dan kalibrasi alat elektromedis.</p>
                    </div>

                    <div class="keunggulan-card" style="scroll-snap-align: start;">
                        <div style="width: 48px; height: 48px; background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #16a34a; font-size: 1.4rem; margin-bottom: 16px;">
                            <i class="bi bi-laptop-fill"></i>
                        </div>
                        <h3 style="font-size: 1.1rem; font-weight: 800; color: #064e3b; margin-bottom: 8px;">Interoperabilitas RME Digital</h3>
                        <p style="font-size: 0.88rem; color: #475569; line-height: 1.6; margin: 0;">Digitalisasi Rekam Medis Elektronik (RME), arsitektur integrasi sistem informasi manajemen RS (SIMRS), kerahasiaan data medis, dan interoperabilitas data kesehatan.</p>
                    </div>

                    <div class="keunggulan-card" style="scroll-snap-align: start;">
                        <div style="width: 48px; height: 48px; background: #fefce8; border: 1px solid #fef08a; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #ca8a04; font-size: 1.4rem; margin-bottom: 16px;">
                            <i class="bi bi-patch-check-fill"></i>
                        </div>
                        <h3 style="font-size: 1.1rem; font-weight: 800; color: #064e3b; margin-bottom: 8px;">Sertifikat Kompetensi Resmi Berbarcode</h3>
                        <p style="font-size: 0.88rem; color: #475569; line-height: 1.6; margin: 0;">Setiap peserta yang lulus menerima sertifikat kompetensi resmi dengan ID registrasi unik dan QR code verifikasi online yang diakui luas oleh faskes seluruh Indonesia.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 8 PROGRAM RESMI TRAINING RUMAH SAKIT -->
    <section class="section-py" id="program" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 40px;">
                <span class="section-tag">Skema Pelatihan Manajemen Rumah Sakit & Layanan Klinis</span>
                <h2 class="section-title">8 Program Unggulan Training Rumah Sakit</h2>
                <p class="section-desc" style="max-width: 780px; margin: 0 auto;">
                    Program komprehensif yang dirancang untuk menjawab tantangan akreditasi rumah sakit, keselamatan pasien (IKP & RCA), pencegahan infeksi (PPI), manajemen fasilitas K3RS, serta rekam medis elektronik (RME):
                </p>
            </div>

            <div class="programs-grid">
                @foreach($programs as $prog)
                    <div class="program-card">
                        <div class="program-img-wrapper">
                            <img src="{{ $prog->image ?? 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80' }}" alt="{{ $prog->title }}" class="program-img" loading="lazy">
                            <span class="program-badge" style="background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);">{{ $prog->badge ?? 'Sertifikasi Resmi' }}</span>
                        </div>

                        <div class="program-body">
                            <div class="program-level" style="color: #16a34a;">{{ $prog->level_name ?? 'Program Sertifikasi Manajemen Rumah Sakit' }}</div>
                            <h3 class="program-title">{{ $prog->title }}</h3>
                            <p class="program-desc">
                                {{ Str::limit($prog->short_description ?? ($prog->full_description ?? ''), 130) }}
                            </p>

                            <div class="program-meta">
                                <div><i class="bi bi-clock-history" style="color: #16a34a;"></i> {{ $prog->duration ?? '3 Hari' }}</div>
                                <div><i class="bi bi-mortarboard-fill" style="color: #16a34a;"></i> {{ $prog->method ?? 'Workshop Klinis & Studi Kasus' }}</div>
                            </div>

                            <div class="program-footer-btn">
                                <a href="{{ route('program.detail', $prog->slug) }}" class="btn-primary-green" style="width: 100%; justify-content: center; font-size: 0.88rem; padding: 11px 16px; background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);">
                                    <i class="bi bi-info-circle-fill"></i> Detail Program & Silabus
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- STATISTIK (HIJAU & KUNING HUD) -->
    <section class="section-py" style="background: linear-gradient(135deg, #064e3b 0%, #065f46 50%, #047857 100%); color: #ffffff; position: relative;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px;">
                @foreach($statistics as $stat)
                    <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(34, 197, 94, 0.25); border-radius: 18px; padding: 28px 22px; text-align: center; position: relative; overflow: hidden; backdrop-filter: blur(8px);">
                        <div style="width: 56px; height: 56px; background: rgba(34, 197, 94, 0.2); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #facc15; font-size: 1.6rem; border: 1px solid rgba(250, 204, 21, 0.4);">
                            <i class="bi {{ $stat->icon ?? 'bi-bar-chart-fill' }}"></i>
                        </div>
                        <div style="font-size: 2.6rem; font-weight: 800; color: #facc15; line-height: 1; margin-bottom: 8px; letter-spacing: -1px;">
                            {{ $stat->value }}
                        </div>
                        <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 6px;">{{ $stat->label }}</h4>
                        <p style="font-size: 0.82rem; color: #cbd5e1; line-height: 1.5; margin: 0;">{{ $stat->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- OUR PARTNER / RUMAH SAKIT MITRA -->
    <section class="section-py" style="background: #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 34px;">
                <span class="section-tag">Jejaring Kemitraan Fasilitas Pelayanan Kesehatan</span>
                <h2 class="section-title">Dipercaya Rumah Sakit Rujukan & Faskes Terkemuka Indonesia</h2>
                <p class="section-desc" style="max-width: 760px; margin: 0 auto;">
                    Kami bangga mendampingi peningkatan mutu layanan klinis, keselamatan pasien, dan akreditasi di berbagai rumah sakit umum, rumah sakit swasta, dan jejaring faskes nasional:
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 16px;">
                @foreach($partners as $partner)
                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 18px 16px; text-align: center; transition: all 0.25s ease;">
                        <div style="font-size: 1rem; font-weight: 800; color: #064e3b; margin-bottom: 4px;">{{ $partner['name'] }}</div>
                        <div style="font-size: 0.74rem; color: #16a34a; font-weight: 600;">{{ $partner['role'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- KREDIBILITAS & PENGALAMAN (TRAINING RUMAH SAKIT) -->
    <section class="section-py" style="background: #f0fdf4; border-bottom: 1px solid #bbf7d0;">
        <div class="container">
            <div class="kredibilitas-grid">
                <div>
                    <span class="section-tag" style="background: #ecfdf5; color: #064e3b; border: 1px solid #bbf7d0;">Kredibilitas & Pengalaman Teruji</span>
                    <h2 class="section-title" style="text-align: left;">Integritas, Pengalaman & Standar Keunggulan Manajemen Rumah Sakit</h2>
                    <p style="font-size: 0.95rem; color: #475569; line-height: 1.7; margin-bottom: 22px;">
                        Lembaga Training Rumah Sakit didirikan dengan dedikasi mewujudkan tata kelola rumah sakit modern, mutu klinis paripurna, dan keselamatan pasien tingkat tinggi. Melalui kurikulum berbasis bukti ilmiah, pendampingan telusur akreditasi, serta bimbingan praktisi rumah sakit berpengalaman di 38 provinsi di Indonesia.
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 16px; margin-bottom: 28px;">
                        <div style="display: flex; gap: 14px; align-items: flex-start;">
                            <div style="width: 38px; height: 38px; background: #ecfdf5; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #16a34a; font-size: 1.2rem; flex-shrink: 0; border: 1px solid #bbf7d0;">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 0.98rem; font-weight: 700; color: #064e3b; margin-bottom: 3px;">Kesesuaian Standar Akreditasi Rumah Sakit & Keselamatan Pasien</h4>
                                <p style="font-size: 0.84rem; color: #64748b; line-height: 1.5; margin: 0;">Kurikulum pelatihan terintegrasi 6 Sasaran Keselamatan Pasien (SKP), tata kelola klinis, dan standar akreditasi faskes nasional maupun internasional.</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 14px; align-items: flex-start;">
                            <div style="width: 38px; height: 38px; background: #ecfdf5; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #16a34a; font-size: 1.2rem; flex-shrink: 0; border: 1px solid #bbf7d0;">
                                <i class="bi bi-qr-code-scan"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 0.98rem; font-weight: 700; color: #064e3b; margin-bottom: 3px;">Sertifikasi & Lisensi Resmi Terverifikasi Online</h4>
                                <p style="font-size: 0.84rem; color: #64748b; line-height: 1.5; margin: 0;">Sertifikat kelulusan manajemen mutu faskes dan nakes dilengkapi nomor registrasi resmi dan QR code verifikasi online mandiri yang dapat divalidasi kapan pun.</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 14px; align-items: flex-start;">
                            <div style="width: 38px; height: 38px; background: #ecfdf5; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #16a34a; font-size: 1.2rem; flex-shrink: 0; border: 1px solid #bbf7d0;">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 0.98rem; font-weight: 700; color: #064e3b; margin-bottom: 3px;">Fasilitator Direktur RS, Komite Medis & Surveyor Senior</h4>
                                <p style="font-size: 0.84rem; color: #64748b; line-height: 1.5; margin: 0;">Didukung oleh praktisi manajemen perumahsakitan, dokter spesialis, komite mutu keselamatan pasien, dan pakar K3RS yang berpengalaman memimpin rumah sakit tipe A dan B.</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('about') }}" class="btn-primary-green" style="background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);">
                        <i class="bi bi-info-circle-fill"></i> Profil Lengkap & Visi Misi Lembaga
                    </a>
                </div>

                <!-- Showcase Credibility Card -->
                <div>
                    <div style="background: #ffffff; border: 2px solid #bbf7d0; border-radius: 20px; padding: 32px; box-shadow: 0 16px 36px -4px rgba(22, 163, 74, 0.15);">
                        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px; margin-bottom: 20px;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <i class="bi bi-patch-check-fill" style="color: #16a34a; font-size: 1.8rem;"></i>
                                <div>
                                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #064e3b; margin: 0;">STANDAR MUTU RUMAH SAKIT</h4>
                                    <span style="font-size: 0.76rem; color: #64748b;">REGISTRASI: TRS-ACCREDITED/2026</span>
                                </div>
                            </div>
                            <span style="background: #f0fdf4; color: #15803d; font-size: 0.75rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; border: 1px solid #bbf7d0;">TERAKREDITASI</span>
                        </div>

                        <div style="display: flex; flex-direction: column; gap: 12px; font-size: 0.88rem; color: #334155;">
                            <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed #e2e8f0;">
                                <span style="color: #64748b;">Standar Akreditasi Faskes:</span>
                                <strong style="color: #064e3b;">Standar Akreditasi & Patient Safety</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed #e2e8f0;">
                                <span style="color: #64748b;">Manajemen Risiko Klinis:</span>
                                <strong style="color: #064e3b;">RCA, FMEA & 6 SKP Terpadu</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed #e2e8f0;">
                                <span style="color: #64748b;">PPI & Keselamatan Fasilitas:</span>
                                <strong style="color: #064e3b;">Bundles HAIs, MFK & K3RS</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed #e2e8f0;">
                                <span style="color: #64748b;">Sertifikat & Lisensi:</span>
                                <strong style="color: #16a34a;">Resmi, Sah & Terverifikasi Barcode</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 8px 0;">
                                <span style="color: #64748b;">Cakupan Wilayah Layanan:</span>
                                <strong style="color: #064e3b;">38 Provinsi Seluruh Indonesia</strong>
                            </div>
                        </div>

                        <div style="margin-top: 24px; padding: 14px; background: #f0fdf4; border-radius: 12px; text-align: center; border: 1px solid #bbf7d0;">
                            <span style="font-size: 0.82rem; color: #064e3b; font-weight: 700;">
                                <i class="bi bi-whatsapp me-1" style="color: #16a34a;"></i> Konsultasi Pelatihan Cepat WA: 0813-9981-0272
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DIREKTORI WILAYAH 38 PROVINSI, KABUPATEN/KOTA & KECAMATAN LENGKAP -->
    <style>
        .wilayah-section-wrap {
            background: #ffffff;
            border-bottom: 1px solid #e2e8f0;
        }
        .island-tab-btn {
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 0.82rem;
            font-weight: 700;
            border: 1px solid #cbd5e1;
            background: #f8fafc;
            color: #475569;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .island-tab-btn:hover {
            border-color: #16a34a;
            color: #15803d;
            background: #f0fdf4;
        }
        .island-tab-btn.active {
            background: #16a34a;
            border-color: #16a34a;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(22, 163, 74, 0.35);
        }
        .home-province-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.25s ease;
            box-shadow: 0 2px 6px rgba(0,0,0,0.02);
            margin-bottom: 16px;
        }
        .home-province-card:hover {
            border-color: #bbf7d0;
            box-shadow: 0 4px 16px rgba(22, 163, 74, 0.08);
        }
        .prov-header-toggle {
            padding: 14px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            background: #f8fafc;
            border-bottom: 1px solid transparent;
            flex-wrap: wrap;
            gap: 10px;
            transition: background 0.2s ease;
        }
        .prov-header-toggle.is-open {
            background: #f0fdf4;
            border-bottom-color: #bbf7d0;
        }
        .prov-preview-bar {
            padding: 8px 18px;
            background: #ffffff;
            border-bottom: 1px solid #f1f5f9;
            font-size: 0.77rem;
            color: #64748b;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 6px;
        }
        .prov-preview-tag {
            background: #f1f5f9;
            color: #334155;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.73rem;
            font-weight: 600;
        }
        .prov-drawer-body {
            padding: 18px;
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
        }
        .kabkot-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 12px;
        }
        .home-kabkot-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 12px 14px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.2s ease;
        }
        .home-kabkot-box:hover {
            background: #ffffff;
            border-color: #bbf7d0;
            box-shadow: 0 4px 12px rgba(22, 163, 74, 0.08);
        }
        .home-kec-pill {
            font-size: 0.72rem;
            color: #334155;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 2px 7px;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.15s ease;
            display: inline-block;
        }
        .home-kec-pill:hover {
            border-color: #16a34a;
            color: #15803d;
            background: #f0fdf4;
        }
    </style>

    <section class="section-py wilayah-section-wrap" id="wilayah">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 32px;">
                <span class="section-tag">Jangkauan Layanan 38 Provinsi • 514 Kab/Kota • Seluruh Kecamatan</span>
                <h2 class="section-title">Direktori Wilayah Pelaksanaan Training Rumah Sakit</h2>
                <p class="section-desc" style="max-width: 840px; margin: 0 auto;">
                    Kami menyelenggarakan program pelatihan reguler maupun in-house training akreditasi rumah sakit, keselamatan pasien (IKP & RCA), pencegahan infeksi (PPI), dan manajemen fasilitas fisik K3RS di seluruh 38 provinsi di Indonesia hingga ke tingkat kabupaten, kota, dan kecamatan. Akses langsung seluruh daerah berikut untuk melihat jadwal, silabus, dan modul teknis spesifik di wilayah Anda:
                </p>
            </div>

            @php
                // Build lightweight structure for Cascading Explorer & Live Search
                $regionsExplorerData = [];
                foreach($provinces as $pSlug => $pr) {
                    $kabkotItems = [];
                    foreach($pr['kabkot'] as $kk) {
                        $kabkotItems[] = [
                            'name' => $kk['name'],
                            'slug' => $kk['slug'],
                            'kecamatan' => $kk['kecamatan'] ?? []
                        ];
                    }
                    $regionsExplorerData[] = [
                        'name' => $pr['name'],
                        'slug' => $pr['slug'],
                        'island' => $pr['island'] ?? 'Lainnya',
                        'total_kabkot' => $pr['total_kabkot'] ?? count($kabkotItems),
                        'kabkot' => $kabkotItems
                    ];
                }
            @endphp

            <!-- 1. CASCADING REGION SELECTOR (PROVINSI -> KABKOT -> KECAMATAN) -->
            <div style="background: linear-gradient(135deg, #064e3b 0%, #065f46 100%); border-radius: 16px; padding: 24px; margin-bottom: 28px; box-shadow: 0 10px 25px rgba(6, 78, 59, 0.2);">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 16px; color: #ffffff;">
                    <i class="bi bi-funnel-fill" style="color: #facc15; font-size: 1.25rem;"></i>
                    <h3 style="font-size: 1.1rem; font-weight: 800; margin: 0;">Pilih Cepat Wilayah Pelaksanaan Training (3 Tingkat Bertingkat)</h3>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px; align-items: end;">
                    <!-- Dropdown Provinsi -->
                    <div>
                        <label style="font-size: 0.78rem; font-weight: 700; color: #bbf7d0; margin-bottom: 6px; display: block;">1. Pilih Provinsi:</label>
                        <select id="cascadeProvSelect" style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #16a34a; background: #ffffff; color: #0f172a; font-size: 0.86rem; font-weight: 600; outline: none;">
                            <option value="">-- Pilih Provinsi (38 Provinsi) --</option>
                            @foreach($regionsExplorerData as $p)
                                <option value="{{ $p['slug'] }}">{{ $p['name'] }} ({{ $p['total_kabkot'] }} Kab/Kota)</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Dropdown Kab/Kota -->
                    <div>
                        <label style="font-size: 0.78rem; font-weight: 700; color: #bbf7d0; margin-bottom: 6px; display: block;">2. Pilih Kab/Kota:</label>
                        <select id="cascadeKabkotSelect" disabled style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; background: #f1f5f9; color: #64748b; font-size: 0.86rem; font-weight: 600; outline: none;">
                            <option value="">-- Pilih Kab/Kota Terlebih Dahulu --</option>
                        </select>
                    </div>

                    <!-- Dropdown Kecamatan -->
                    <div>
                        <label style="font-size: 0.78rem; font-weight: 700; color: #bbf7d0; margin-bottom: 6px; display: block;">3. Pilih Kecamatan:</label>
                        <select id="cascadeKecSelect" disabled style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; background: #f1f5f9; color: #64748b; font-size: 0.86rem; font-weight: 600; outline: none;">
                            <option value="">-- Pilih Kecamatan Terlebih Dahulu --</option>
                        </select>
                    </div>

                    <!-- Tombol Eksekusi Buka Halaman Wilayah -->
                    <div>
                        <button type="button" id="btnGoToRegion" class="btn-primary-green" style="width: 100%; justify-content: center; padding: 10px 16px; font-size: 0.88rem; box-shadow: 0 4px 12px rgba(22, 163, 74, 0.4); background: linear-gradient(135deg, #facc15 0%, #eab308 100%); color: #064e3b; font-weight: 800;">
                            <i class="bi bi-box-arrow-up-right"></i> Buka Panduan Daerah
                        </button>
                    </div>
                </div>
            </div>

            <!-- 2. TABS PULAU INDONESIA -->
            <div style="display: flex; gap: 8px; flex-wrap: wrap; justify-content: center; margin-bottom: 28px;">
                <button type="button" class="island-tab-btn active" data-island="all">Semua Pulau (38)</button>
                <button type="button" class="island-tab-btn" data-island="Jawa">Jawa</button>
                <button type="button" class="island-tab-btn" data-island="Sumatera">Sumatera</button>
                <button type="button" class="island-tab-btn" data-island="Kalimantan">Kalimantan</button>
                <button type="button" class="island-tab-btn" data-island="Sulawesi">Sulawesi</button>
                <button type="button" class="island-tab-btn" data-island="Bali & Nusa Tenggara">Bali & Nusa Tenggara</button>
                <button type="button" class="island-tab-btn" data-island="Maluku & Papua">Maluku & Papua</button>
            </div>

            <!-- 3. ACCORDION 38 PROVINSI WITH FULL KABUPATEN, KOTA & KECAMATAN -->
            <div id="provincesAccordionContainer">
                @foreach($regionsExplorerData as $prov)
                    <div class="home-province-card" data-island="{{ $prov['island'] }}">
                        <div class="prov-header-toggle" onclick="toggleProvCard(this)">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 32px; height: 32px; border-radius: 8px; background: #f0fdf4; border: 1px solid #bbf7d0; display: flex; align-items: center; justify-content: center; color: #16a34a; font-size: 1rem;">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 0.98rem; font-weight: 800; color: #0f172a; margin: 0;">
                                        {{ $prov['name'] }}
                                    </h3>
                                    <span style="font-size: 0.74rem; color: #64748b;">Pulau {{ $prov['island'] }} &bull; {{ $prov['total_kabkot'] }} Kabupaten / Kota</span>
                                </div>
                            </div>

                            <div style="display: flex; align-items: center; gap: 10px;">
                                <a href="{{ route('wilayah.provinsi', $prov['slug']) }}" class="btn-primary-green" style="font-size: 0.74rem; padding: 4px 12px; border-radius: 20px; text-decoration: none; background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);" onclick="event.stopPropagation()">
                                    Buka Provinsi <i class="bi bi-arrow-right"></i>
                                </a>
                                <span class="badge-toggle-icon" style="color: #64748b; font-size: 1.1rem; transition: transform 0.25s ease;">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Preview Tag Kabkot Terpilih -->
                        <div class="prov-preview-bar">
                            <span style="font-weight: 700; color: #15803d;">Daftar Wilayah:</span>
                            @foreach(array_slice($prov['kabkot'], 0, 6) as $previewKk)
                                <span class="prov-preview-tag">{{ $previewKk['name'] }}</span>
                            @endforeach
                            @if(count($prov['kabkot']) > 6)
                                <span class="prov-preview-tag" style="background: #e2e8f0; color: #475569;">+{{ count($prov['kabkot']) - 6 }} lainnya</span>
                            @endif
                        </div>

                        <!-- Drawer Body: Full Kab/Kot & Kecamatan Inside -->
                        <div class="prov-drawer-body" style="display: none;">
                            <div class="kabkot-card-grid">
                                @foreach($prov['kabkot'] as $kk)
                                    <div class="home-kabkot-box">
                                        <div>
                                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 8px;">
                                                <a href="{{ route('wilayah.kabkot', [$prov['slug'], $kk['slug']]) }}" style="font-size: 0.88rem; font-weight: 700; color: #064e3b; text-decoration: none;" title="{{ $kk['name'] }}">
                                                    {{ $kk['name'] }}
                                                </a>
                                                <a href="{{ route('wilayah.kabkot', [$prov['slug'], $kk['slug']]) }}" style="font-size: 0.72rem; color: #16a34a; font-weight: 700; text-decoration: none;">
                                                    Buka <i class="bi bi-arrow-right-short"></i>
                                                </a>
                                            </div>

                                            <!-- Kecamatan Pills -->
                                            <div style="display: flex; flex-wrap: wrap; gap: 4px; margin-top: 6px;">
                                                @foreach(array_slice($kk['kecamatan'], 0, 8) as $kecName)
                                                    @php $kSlug = Str::slug($kecName); @endphp
                                                    <a href="{{ route('wilayah.kecamatan', [$prov['slug'], $kk['slug'], $kSlug]) }}" class="home-kec-pill" title="Kecamatan {{ $kecName }}">
                                                        {{ $kecName }}
                                                    </a>
                                                @endforeach
                                                @if(count($kk['kecamatan']) > 8)
                                                    <a href="{{ route('wilayah.kabkot', [$prov['slug'], $kk['slug']]) }}" class="home-kec-pill" style="background: #f1f5f9; color: #64748b;">
                                                        +{{ count($kk['kecamatan']) - 8 }} kec
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- ARTIKEL DAERAH TERBARU (3 CARDS DILIMIT SESUAI INSTRUKSI) -->
    <section class="section-py" style="background: #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 38px;">
                <span class="section-tag">Publikasi & Panduan Praktik</span>
                <h2 class="section-title">Wawasan & Panduan Investigasi Kecelakaan Kerja</h2>
                <p class="section-desc" style="max-width: 760px; margin: 0 auto;">
                    Artikel teknis komprehensif mengenai metodologi Root Cause Analysis (RCA), forensik insiden industri, taksonomi human error, dan perumusan Corrective and Preventive Action (CAPA):
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 36px;">
                @foreach($articles as $art)
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; display: flex; flex-direction: column; transition: all 0.25s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                        <div style="height: 200px; overflow: hidden; position: relative;">
                            <img src="{{ $art->featured_image ?? 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop&q=80' }}" alt="{{ $art->title }}" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                            <span style="position: absolute; top: 12px; left: 12px; background: rgba(6, 78, 59, 0.85); color: #facc15; font-size: 0.74rem; font-weight: 700; padding: 4px 12px; border-radius: 20px; backdrop-filter: blur(4px);">
                                {{ $art->category ?? 'Training Rumah Sakit' }}
                            </span>
                        </div>

                        <div style="padding: 22px; display: flex; flex-direction: column; flex-grow: 1;">
                            <div style="display: flex; align-items: center; gap: 14px; font-size: 0.78rem; color: #64748b; margin-bottom: 10px;">
                                <span><i class="bi bi-clock"></i> {{ $art->read_time ?? 25 }} menit</span>
                                <span><i class="bi bi-eye"></i> {{ number_format($art->views_count ?? 150) }} dibaca</span>
                            </div>

                            <h3 style="font-size: 1.1rem; font-weight: 800; color: #064e3b; line-height: 1.4; margin-bottom: 12px;">
                                <a href="{{ route('article.detail', $art->slug) }}" style="color: inherit; text-decoration: none;">
                                    {{ $art->title }}
                                </a>
                            </h3>

                            <p style="font-size: 0.86rem; color: #64748b; line-height: 1.6; margin-bottom: 18px; flex-grow: 1;">
                                {{ Str::limit($art->excerpt ?? strip_tags($art->content), 120) }}
                            </p>

                            <a href="{{ route('article.detail', $art->slug) }}" style="display: inline-flex; align-items: center; gap: 6px; color: #16a34a; font-weight: 700; font-size: 0.86rem; text-decoration: none;">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div style="text-align: center;">
                <a href="{{ route('articles') }}" class="btn-outline-white" style="color: #064e3b; border-color: #cbd5e1; background: #f8fafc; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="bi bi-journals"></i> Buka Seluruh Arsip Artikel & Panduan
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION (ACCORDION MODERN) -->
    <section class="section-py" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
        <div class="container" style="max-width: 880px;">
            <div class="section-header" style="text-align: center; margin-bottom: 36px;">
                <span class="section-tag">Pertanyaan Sering Diajukan</span>
                <h2 class="section-title">Frequently Asked Questions (FAQ)</h2>
                <p class="section-desc">
                    Pertanyaan umum seputar program pelatihan Training Rumah Sakit, pendampingan akreditasi faskes, tata kelola mutu klinis, keselamatan pasien, dan in-house hospital training:
                </p>
            </div>

            <div class="faq-list">
                @foreach($faqs as $faq)
                    <div class="faq-item" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; margin-bottom: 12px; overflow: hidden; transition: all 0.2s ease;">
                        <div class="faq-question" style="padding: 18px 22px; font-weight: 700; font-size: 0.96rem; color: #064e3b; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <span>{{ $faq->question }}</span>
                            <i class="bi bi-plus-lg faq-icon" style="color: #16a34a; font-size: 1.1rem; transition: transform 0.2s;"></i>
                        </div>
                        <div class="faq-answer" style="padding: 0 22px 18px; font-size: 0.88rem; color: #475569; line-height: 1.7; display: none;">
                            {{ $faq->answer }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Hero Slider Auto & Manual Toggle
    let currentSlide = 1;
    const totalSlides = 3;
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.slider-dot');

    function goToSlide(n) {
        slides.forEach(s => s.style.display = 'none');
        dots.forEach(d => {
            d.style.background = 'rgba(255,255,255,0.3)';
            d.style.width = '10px';
        });

        const activeSlide = document.querySelector(`.hero-slide[data-slide="${n}"]`);
        const activeDot = document.querySelector(`.slider-dot[data-target="${n}"]`);

        if (activeSlide) activeSlide.style.display = 'block';
        if (activeDot) {
            activeDot.style.background = '#22c55e';
            activeDot.style.width = '32px';
        }
        currentSlide = n;
    }

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            const target = parseInt(dot.getAttribute('data-target'));
            goToSlide(target);
        });
    });

    setInterval(() => {
        let next = currentSlide + 1;
        if (next > totalSlides) next = 1;
        goToSlide(next);
    }, 6500);

    // Island Tabs Filter
    const tabBtns = document.querySelectorAll('.island-tab-btn');
    const provCards = document.querySelectorAll('.home-province-card');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const island = btn.getAttribute('data-island');
            provCards.forEach(card => {
                if (island === 'all' || card.getAttribute('data-island') === island) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Toggle Province Drawer
    function toggleProvCard(header) {
        const card = header.closest('.home-province-card');
        const drawer = card.querySelector('.prov-drawer-body');
        const icon = header.querySelector('.badge-toggle-icon');

        if (drawer.style.display === 'none' || !drawer.style.display) {
            drawer.style.display = 'block';
            header.classList.add('is-open');
            if (icon) icon.style.transform = 'rotate(180deg)';
        } else {
            drawer.style.display = 'none';
            header.classList.remove('is-open');
            if (icon) icon.style.transform = 'rotate(0deg)';
        }
    }

    // Cascading Region Selector
    const cascadeData = @json($regionsExplorerData);
    const provSelect = document.getElementById('cascadeProvSelect');
    const kabkotSelect = document.getElementById('cascadeKabkotSelect');
    const kecSelect = document.getElementById('cascadeKecSelect');
    const btnGo = document.getElementById('btnGoToRegion');

    let selectedProv = null;
    let selectedKab = null;
    let selectedKec = null;

    if (provSelect) {
        provSelect.addEventListener('change', function() {
            const pSlug = this.value;
            kabkotSelect.innerHTML = '<option value="">-- Pilih Kab/Kota --</option>';
            kecSelect.innerHTML = '<option value="">-- Pilih Kecamatan Terlebih Dahulu --</option>';
            kecSelect.disabled = true;
            kecSelect.style.background = '#f1f5f9';

            if (!pSlug) {
                kabkotSelect.disabled = true;
                kabkotSelect.style.background = '#f1f5f9';
                selectedProv = null;
                return;
            }

            selectedProv = cascadeData.find(item => item.slug === pSlug);
            if (selectedProv && selectedProv.kabkot) {
                selectedProv.kabkot.forEach(k => {
                    const opt = document.createElement('option');
                    opt.value = k.slug;
                    opt.textContent = k.name;
                    kabkotSelect.appendChild(opt);
                });
                kabkotSelect.disabled = false;
                kabkotSelect.style.background = '#ffffff';
                kabkotSelect.style.border = '1px solid #16a34a';
            }
        });
    }

    if (kabkotSelect) {
        kabkotSelect.addEventListener('change', function() {
            const kSlug = this.value;
            kecSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';

            if (!kSlug || !selectedProv) {
                kecSelect.disabled = true;
                kecSelect.style.background = '#f1f5f9';
                selectedKab = null;
                return;
            }

            selectedKab = selectedProv.kabkot.find(item => item.slug === kSlug);
            if (selectedKab && selectedKab.kecamatan) {
                selectedKab.kecamatan.forEach(kec => {
                    const opt = document.createElement('option');
                    const cleanSlug = kec.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
                    opt.value = cleanSlug;
                    opt.textContent = kec;
                    kecSelect.appendChild(opt);
                });
                kecSelect.disabled = false;
                kecSelect.style.background = '#ffffff';
                kecSelect.style.border = '1px solid #16a34a';
            }
        });
    }

    if (kecSelect) {
        kecSelect.addEventListener('change', function() {
            selectedKec = this.value;
        });
    }

    if (btnGo) {
        btnGo.addEventListener('click', function() {
            const pVal = provSelect ? provSelect.value : '';
            const kVal = kabkotSelect ? kabkotSelect.value : '';
            const cVal = kecSelect ? kecSelect.value : '';

            if (pVal && kVal && cVal) {
                window.location.href = `/wilayah/${pVal}/${kVal}/${cVal}`;
            } else if (pVal && kVal) {
                window.location.href = `/wilayah/${pVal}/${kVal}`;
            } else if (pVal) {
                window.location.href = `/wilayah/${pVal}`;
            } else {
                alert('Silakan pilih minimal Provinsi terlebih dahulu.');
            }
        });
    }

    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(q => {
        q.addEventListener('click', () => {
            const item = q.parentElement;
            const ans = item.querySelector('.faq-answer');
            const icon = q.querySelector('.faq-icon');

            if (ans.style.display === 'block') {
                ans.style.display = 'none';
                icon.className = 'bi bi-plus-lg faq-icon';
            } else {
                ans.style.display = 'block';
                icon.className = 'bi bi-dash-lg faq-icon';
            }
        });
    });
</script>
@endpush
