<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexCorp Technologies — Solusi Transformasi Digital & Inovasi Teknologi</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --bs-primary: #0f172a;
            --bs-primary-rgb: 15, 23, 42;
            --accent-color: #38bdf8;
            --dark-bg: #090d16;
            --card-bg: #1e293b;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            overflow-x: hidden;
            background-color: #ffffff;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Navbar */
        .navbar {
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }

        .navbar.scrolled {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            background: rgba(255, 255, 255, 0.98);
        }

        .navbar-brand {
            font-weight: 800;
            letter-spacing: -0.5px;
            color: #0f172a !important;
        }

        /* Hero Section */
        .hero-section {
            background: radial-gradient(circle at top right, #1e293b 0%, #090d16 60%);
            color: #ffffff;
            padding: 160px 0 100px;
            position: relative;
        }

        .hero-badge {
            background: rgba(56, 189, 248, 0.1);
            color: var(--accent-color);
            border: 1px solid rgba(56, 189, 248, 0.2);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        /* Section Styling */
        section {
            padding: 90px 0;
        }

        .section-title {
            font-weight: 800;
            letter-spacing: -1px;
            color: #0f172a;
        }

        .section-subtitle {
            color: #64748b;
            font-size: 1.05rem;
        }

        /* Cards & Features */
        .tech-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            transition: all 0.3s ease;
            padding: 35px 30px;
        }

        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.06);
            border-color: #cbd5e1;
        }

        .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: #f8fafc;
            color: #0ea5e9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 24px;
            transition: all 0.3s ease;
        }

        .tech-card:hover .icon-box {
            background: #0ea5e9;
            color: #ffffff;
        }

        /* Stats Section */
        .stats-section {
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
            padding: 60px 0;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -1px;
        }

        /* Portfolio / Projects */
        .portfolio-card {
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            background: #fff;
            transition: all 0.3s ease;
        }

        .portfolio-card:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            transform: translateY(-4px);
        }

        .portfolio-img-wrapper {
            background: #e2e8f0;
            height: 220px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
            font-weight: 600;
        }

        /* Testimonials */
        .testimonial-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 30px;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #fff;
            border-radius: 24px;
            padding: 60px 40px;
            position: relative;
            overflow: hidden;
        }

        /* Footer */
        footer {
            background: #090d16;
            color: #94a3b8;
            padding: 80px 0 30px;
        }

        footer h5 {
            color: #fff;
            font-weight: 700;
            margin-bottom: 20px;
        }

        footer a {
            color: #94a3b8;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        footer a:hover {
            color: #38bdf8;
        }

        /* Buttons */
        .btn-custom-primary {
            background-color: #0f172a;
            color: #ffffff;
            border-radius: 8px;
            padding: 12px 28px;
            font-weight: 600;
            border: 1px solid #0f172a;
            transition: all 0.2s ease;
        }

        .btn-custom-primary:hover {
            background-color: #1e293b;
            color: #fff;
            border-color: #1e293b;
        }

        .btn-custom-outline {
            background-color: transparent;
            color: #0f172a;
            border-radius: 8px;
            padding: 12px 28px;
            font-weight: 600;
            border: 1px solid #cbd5e1;
            transition: all 0.2s ease;
        }

        .btn-custom-outline:hover {
            border-color: #0f172a;
            background-color: #f8fafc;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <i class="fa-solid fa-cube text-primary"></i>
                <span>NexCorp</span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center gap-lg-4 mb-3 mb-lg-0">
                    <li class="nav-item"><a class="nav-link fw-medium text-dark" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium text-dark" href="#tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium text-dark" href="#portofolio">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium text-dark" href="#testimoni">Testimoni</a></li>
                </ul>
                <div class="ms-lg-4">
                    <a href="#kontak" class="btn btn-custom-primary btn-sm px-4 py-2">Mulai Konsultasi</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container position-relative">
            <div class="row align-items-center min-vh-75 py-5">
                <div class="col-lg-7">
                    <div class="d-inline-flex align-items-center gap-2 hero-badge mb-4">
                        <i class="fa-solid fa-sparkles"></i>
                        <span>Inovasi Digital Kelas Dunia</span>
                    </div>
                    <h1 class="display-4 fw-bold mb-4 lh-tight">
                        Akselerasi Pertumbuhan Bisnis Lewat <span class="text-info">Teknologi Mutakhir</span>
                    </h1>
                    <p class="lead text-secondary mb-5 fw-normal" style="color: #94a3b8 !important;">
                        Kami membantu perusahaan enterprise dan skala menengah membangun infrastruktur software handal,
                        arsitektur cloud scalable, dan transformasi produk digital yang berorientasi pada hasil.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#kontak" class="btn btn-info text-dark fw-bold px-4 py-3 rounded-3">
                            Jadwalkan Diskusi <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                        <a href="#portofolio" class="btn btn-outline-light px-4 py-3 rounded-3 fw-semibold">
                            Lihat Karya Kami
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0 d-none d-lg-block">
                    <div class="p-4 rounded-4"
                        style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.1);">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="rounded-circle bg-danger" style="width: 12px; height: 12px;"></div>
                            <div class="rounded-circle bg-warning" style="width: 12px; height: 12px;"></div>
                            <div class="rounded-circle bg-success" style="width: 12px; height: 12px;"></div>
                            <span class="text-muted small ms-auto font-monospace">system_status.sh</span>
                        </div>
                        <div class="font-monospace text-info small lh-lg">
                            > Inisialisasi arsitektur cloud... [OK]<br>
                            > Optimasi performa database microservices... [OK]<br>
                            > Keamanan enkripsi end-to-end aktif.<br>
                            <span class="text-white">> Status: Siap melakukan deployment skala penuh.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Stats Bar -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-6 col-md-3">
                    <div class="stat-number">150+</div>
                    <div class="text-muted fw-medium mt-1">Proyek Selesai</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-number">98%</div>
                    <div class="text-muted fw-medium mt-1">Kepuasan Klien</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-number">8+</div>
                    <div class="text-muted fw-medium mt-1">Tahun Pengalaman</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-number">24/7</div>
                    <div class="text-muted fw-medium mt-1">Dukungan Sistem</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan / Services Section -->
    <section id="layanan">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6">
                    <span class="text-info fw-bold text-uppercase small tracking-wider">Layanan Utama</span>
                    <h2 class="section-title mt-2 mb-3">Kapabilitas Teknologi Kami</h2>
                    <p class="section-subtitle">Solusi end-to-end untuk merespons kompleksitas tantangan digital modern
                        Anda.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="tech-card h-100">
                        <div class="icon-box">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Custom Software Development</h4>
                        <p class="text-secondary mb-0">Pengembangan aplikasi web dan mobile kustom dengan arsitektur
                            bersih, skalabel, serta mudah dirawat untuk jangka panjang.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tech-card h-100">
                        <div class="icon-box">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Cloud & DevOps Engineering</h4>
                        <p class="text-secondary mb-0">Otomasi pipeline CI/CD, migrasi cloud AWS/GCP/Azure yang aman,
                            serta manajemen infrastruktur server dengan uptime tinggi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tech-card h-100">
                        <div class="icon-box">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Cybersecurity Audit</h4>
                        <p class="text-secondary mb-0">Evaluasi keamanan kode, penetasan kerentanan sistem, dan
                            proteksi data perusahaan dari ancaman siber kontemporer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="tentang" class="bg-light border-top border-bottom">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="text-info fw-bold text-uppercase small">Tentang NexCorp</span>
                    <h2 class="section-title mt-2 mb-4">Mitra Strategis Transformasi Digital Anda</h2>
                    <p class="text-secondary mb-4">
                        Didirikan oleh sekumpulan insinyur perangkat lunak berpengalaman, NexCorp berfokus pada kualitas
                        kode yang presisi, performa tinggi, dan ketepatan waktu pengiriman proyek.
                    </p>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-2 fw-semibold text-dark">
                                <i class="fa-solid fa-circle-check text-info"></i> Ininyur Tersertifikasi Global
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-2 fw-semibold text-dark">
                                <i class="fa-solid fa-circle-check text-info"></i> Metodologi Agile Murni
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-2 fw-semibold text-dark">
                                <i class="fa-solid fa-circle-check text-info"></i> Transparansi Progress Penuh
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-2 fw-semibold text-dark">
                                <i class="fa-solid fa-circle-check text-info"></i> Garansi Pemeliharaan Sistem
                            </div>
                        </div>
                    </div>
                    <a href="#kontak" class="btn btn-custom-primary">Kenali Tim Kami</a>
                </div>
                <div class="col-lg-6">
                    <div class="p-5 rounded-4 bg-white border shadow-sm">
                        <div class="d-flex align-items-center gap-4 mb-4">
                            <div class="bg-primary text-white rounded-3 p-3 d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="fa-solid fa-bullseye fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Misi Perusahaan</h5>
                                <p class="text-secondary mb-0 small">Menghadirkan rekayasa teknologi berkualitas tinggi
                                    yang mempercepat efisiensi operasional bisnis klien.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-4">
                            <div class="bg-primary text-white rounded-3 p-3 d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="fa-solid fa-eye fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Visi Jangka Panjang</h5>
                                <p class="text-secondary mb-0 small">Menjadi mercusuar inovasi teknologi terdepan di
                                    Asia Tenggara yang terpercaya dan berkelanjutan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portofolio Section -->
    <section id="portofolio">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6">
                    <span class="text-info fw-bold text-uppercase small">Portofolio Pilihan</span>
                    <h2 class="section-title mt-2 mb-3">Karya & Rekam Jejak</h2>
                    <p class="section-subtitle">Beberapa proyek berskala besar yang telah kami eksekusi dengan sukses.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="portfolio-card h-100">
                        <div class="portfolio-img-wrapper">
                            <i class="fa-solid fa-chart-line fs-2 me-2"></i> FinTech Core System
                        </div>
                        <div class="p-4">
                            <span class="badge bg-secondary-subtle text-secondary mb-2">Banking Solution</span>
                            <h5 class="fw-bold mb-2">Sistem Transaksi Mikro Finansial</h5>
                            <p class="text-secondary small mb-3">Membangun core banking berkecepatan tinggi dengan
                                kemampuan menangani 10.000 transaksi per detik.</p>
                            <a href="#" class="text-primary fw-semibold small text-decoration-none">Detail Studi
                                Kasus <i class="fa-solid fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-card h-100">
                        <div class="portfolio-img-wrapper">
                            <i class="fa-solid fa-truck-fast fs-2 me-2"></i> Supply Chain Logistics
                        </div>
                        <div class="p-4">
                            <span class="badge bg-secondary-subtle text-secondary mb-2">Logistics</span>
                            <h5 class="fw-bold mb-2">Platform Tracking Armada Real-time</h5>
                            <p class="text-secondary small mb-3">Integrasi IoT dan peta digital untuk optimalisasi rute
                                pengiriman logistik nasional secara otomatis.</p>
                            <a href="#" class="text-primary fw-semibold small text-decoration-none">Detail Studi
                                Kasus <i class="fa-solid fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-card h-100">
                        <div class="portfolio-img-wrapper">
                            <i class="fa-solid fa-hospital fs-2 me-2"></i> HealthTech Portal
                        </div>
                        <div class="p-4">
                            <span class="badge bg-secondary-subtle text-secondary mb-2">Healthcare</span>
                            <h5 class="fw-bold mb-2">Sistem Rekam Medis Terpadu</h5>
                            <p class="text-secondary small mb-3">Portal manajemen rumah sakit berbasis cloud yang
                                memangkas waktu tunggu administrasi pasien hingga 60%.</p>
                            <a href="#" class="text-primary fw-semibold small text-decoration-none">Detail Studi
                                Kasus <i class="fa-solid fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section id="testimoni" class="bg-light border-top">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6">
                    <span class="text-info fw-bold text-uppercase small">Testimoni Klien</span>
                    <h2 class="section-title mt-2 mb-3">Apa Kata Mereka</h2>
                    <p class="section-subtitle">Kepercayaan klien adalah tolok ukur utama standar kualitas kerja kami.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="testimonial-card h-100">
                        <div class="text-warning mb-3">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-secondary mb-4 fst-italic">"Kolaborasi dengan NexCorp mengubah total performa
                            infrastruktur digital kami. Pendekatan teknis mereka sangat matang dan terstruktur."</p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-dark text-white fw-bold d-flex align-items-center justify-content-center"
                                style="width: 48px; height: 48px;">AR</div>
                            <div>
                                <h6 class="fw-bold mb-0">Ahmad Ridwan</h6>
                                <small class="text-muted">CTO, Solusi Finansial Utama</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card h-100">
                        <div class="text-warning mb-3">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-secondary mb-4 fst-italic">"Ketepatan waktu dan kualitas dokumentasi kodenya
                            sangat rapi. Sangat jarang menemukan partner teknologi yang memiliki standar setinggi ini."
                        </p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-dark text-white fw-bold d-flex align-items-center justify-content-center"
                                style="width: 48px; height: 48px;">DS</div>
                            <div>
                                <h6 class="fw-bold mb-0">Dian Sastrowardoyo (Dummy)</h6>
                                <small class="text-muted">Product Head, Logistik Nusantara</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="cta-section text-center p-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-3">Siap Mengakselerasi Bisnis Anda?</h2>
                        <p class="text-muted mb-4" style="color: #94a3b8 !important;">Diskusikan kebutuhan spesifik
                            arsitektur dan produk digital Anda bersama tim ahli kami tanpa ikatan biaya.</p>
                        <a href="#kontak" class="btn btn-info text-dark fw-bold px-5 py-3 rounded-3">Jadwalkan
                            Konsultasi Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak / Footer Section -->
    <footer id="kontak">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <a class="navbar-brand text-white d-flex align-items-center gap-2 mb-3" href="#">
                        <i class="fa-solid fa-cube text-info"></i>
                        <span class="fs-4 fw-bold">NexCorp</span>
                    </a>
                    <p class="text-secondary small mb-4">Solusi rekayasa perangkat lunak dan infrastruktur digital
                        kelas enterprise yang handal dan terukur.</p>
                    <div class="d-flex gap-3 fs-5">
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <h5>Navigasi</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2 small">
                        <li><a href="#layanan">Layanan</a></li>
                        <li><a href="#tentang">Tentang Kami</a></li>
                        <li><a href="#portofolio">Portofolio</a></li>
                        <li><a href="#testimoni">Testimoni</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h5>Layanan</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2 small">
                        <li><a href="#">Custom Software</a></li>
                        <li><a href="#">Cloud & DevOps</a></li>
                        <li><a href="#">Cybersecurity</a></li>
                        <li><a href="#">IT Consulting</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Kantor Pusat</h5>
                    <p class="small text-secondary mb-2"><i class="fa-solid fa-location-dot text-info me-2"></i> SCBD
                        Sudirman, Jakarta Selatan, Indonesia</p>
                    <p class="small text-secondary mb-2"><i class="fa-solid fa-envelope text-info me-2"></i>
                        hello@nexcorp.tech</p>
                    <p class="small text-secondary"><i class="fa-solid fa-phone text-info me-2"></i> +62 21 5558 9021
                    </p>
                </div>
            </div>
            <div class="row border-top border-secondary pt-4 text-center small text-secondary">
                <div class="col-md-6 text-md-start mb-3 mb-md-0">
                    &copy; {{ date('Y') }} NexCorp Technologies. Hak Cipta Dilindungi.
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="me-3">Kebijakan Privasi</a>
                    <a href="#">Ketentuan Layanan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Navbar Scroll Effect Script -->
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
