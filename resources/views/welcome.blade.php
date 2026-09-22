@extends('layouts.landing')

@section('title', 'Bravo Creative Works — Digital Experiences That Matter')

@section('description',
    'Bravo Creative Works adalah digital agency yang membantu bisnis membangun website modern,
    profesional, cepat, dan scalable.')

@section('content')

    {{-- === HERO === --}}

    <section id="home" class="hero-section d-none d-lg-block">

        <div class="hero-grid"></div>
        <div class="hero-glow hero-glow-one"></div>
        <div class="hero-glow hero-glow-two"></div>

        <div class="container position-relative">
            <div class="row align-items-center min-vh-90 pt-5">
                <div class="col-lg-7">
                    <div class="hero-title reveal">
                        Solusi Pembuatan Website & Aplikasi
                        <span>yang Berdampak Nyata.</span>
                    </div>
                    <p class="hero-description reveal">
                        Kami membantu bisnis dan instansi berkembang melalui jasa pembuatan website profesional,
                        pengembangan aplikasi kustom, serta solusi digital kreatif yang inovatif dan terpercaya.
                    </p>

                    <div class="hero-actions reveal">
                        <a href="#contact" class="btn btn-primary-custom">
                            Mulai Proyek Anda

                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#portfolio" class="btn btn-outline-custom">
                            Lihat Portofolio

                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="hero-visual reveal">
                        <div class="hero-browser">
                            <img src="images/LOGO.png" alt="Bravo Creative Logo" class="hero-logo-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="home-mobile" class="hero-section-mobile d-lg-none">
        <div class="hero-glow-mobile"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <div class="hero-logo-mobile mt-5">
                        <img src="images/LOGO.png" alt="Bravo Creative Logo" class="img-fluid">
                    </div>

                    <h1 class="hero-title-mobile">
                        Jasa Pembuatan Website & Aplikasi
                        <span>yang Berdampak Nyata.</span>
                    </h1>

                    <p class="hero-description-mobile">
                        Kami membantu bisnis dan instansi berkembang melalui jasa pembuatan website profesional,
                        pengembangan aplikasi kustom, serta solusi digital kreatif yang inovatif dan terpercaya.
                    </p>

                    <div class="hero-actions-mobile">
                        <div class="row g-2">
                            <div class="col-6">
                                <a href="#contact" class="btn btn-primary-custom w-100 justify-content-center">
                                    Mulai Proyek
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#portfolio" class="btn btn-outline-custom w-100 justify-content-center">
                                    Lihat Portofolio
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- === MARQUEE === --}}

    <section class="brand-strip d-lg-none">
        <div class="brand-strip-track">
            <div class="brand-strip-inner">
                <span>WEB DEVELOPMENT</span>
                <i class="fa-solid fa-circle"></i>
                <span>UI / UX DESIGN</span>
                <i class="fa-solid fa-circle"></i>
                <span>DIGITAL SOLUTIONS</span>
                <i class="fa-solid fa-circle"></i>
                <span>WEB APPLICATION</span>
                <i class="fa-solid fa-circle"></i>
                <span>CREATIVE TECHNOLOGY</span>
                <i class="fa-solid fa-circle"></i>
            </div>
            <div class="brand-strip-inner" aria-hidden="true">
                <span>WEB DEVELOPMENT</span>
                <i class="fa-solid fa-circle"></i>
                <span>UI / UX DESIGN</span>
                <i class="fa-solid fa-circle"></i>
                <span>DIGITAL SOLUTIONS</span>
                <i class="fa-solid fa-circle"></i>
                <span>WEB APPLICATION</span>
                <i class="fa-solid fa-circle"></i>
                <span>CREATIVE TECHNOLOGY</span>
                <i class="fa-solid fa-circle"></i>
            </div>
        </div>
    </section>

    <section class="brand-strip d-none d-lg-block">
        <div class="container">
            <div class="brand-strip-inner-desktop">
                <span>WEB DEVELOPMENT</span>
                <i class="fa-solid fa-circle"></i>
                <span>UI / UX DESIGN</span>
                <i class="fa-solid fa-circle"></i>
                <span>DIGITAL SOLUTIONS</span>
                <i class="fa-solid fa-circle"></i>
                <span>WEB APPLICATION</span>
                <i class="fa-solid fa-circle"></i>
                <span>CREATIVE TECHNOLOGY</span>
            </div>
        </div>
    </section>

    {{-- === SERVICES === --}}

    <section id="services" class="section section-light">
        <div class="container">
            <div class="section-heading">
                <div class="section-label">
                    <span></span>
                    LAYANAN KAMI
                </div>

                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <h2>
                            Solusi Digital & Kreatif
                            <span>untuk Bisnis dan Instansi</span>
                        </h2>
                    </div>

                    <div class="col-lg-4 ms-auto">
                        <p>
                            Dari website profesional hingga aplikasi custom, kami merancang dan membangun solusi digital
                            yang berfokus pada pertumbuhan bisnis Anda.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Layanan 01 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-number">01</div>
                        <div class="service-icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <h3>E-Commerce</h3>
                        <p>
                            Bangun toko online yang aman, modern, dan dirancang khusus untuk memberikan pengalaman belanja
                            terbaik guna meningkatkan penjualan produk Anda.
                        </p>
                        <a href="#contact">
                            Mulai Konsultasi
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Layanan 02 (Featured) -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="service-card service-card-featured">
                        <div class="service-number">02</div>
                        <div class="service-icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <h3>Pembuatan Website</h3>
                        <p>
                            Jasa pembuatan website company profile dan web profesional yang cepat, responsif, serta
                            berstandar tinggi untuk mendongkrak kredibilitas bisnis.
                        </p>
                        <a href="#contact">
                            Mulai Konsultasi
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Layanan 03 -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="service-card">
                        <div class="service-number">03</div>
                        <div class="service-icon">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <h3>Pengembangan Aplikasi</h3>
                        <p>
                            Pembuatan aplikasi web custom (Web App) yang handal untuk mengotomatisasi dan mengoptimalkan
                            operasional perusahaan Anda.
                        </p>
                        <a href="#contact">
                            Mulai Konsultasi
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Layanan 04 -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="service-card">
                        <div class="service-number">04</div>
                        <div class="service-icon">
                            <i class="fa-solid fa-pen-ruler"></i>
                        </div>
                        <h3>UI / UX Design</h3>
                        <p>
                            Perancangan antarmuka produk digital yang bersih, intuitif, dan berpusat pada kenyamanan
                            pengguna (user experience) untuk hasil maksimal.
                        </p>
                        <a href="#contact">
                            Mulai Konsultasi
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Layanan 05 -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="service-card">
                        <div class="service-number">05</div>
                        <div class="service-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <h3>Landing Page</h3>
                        <p>
                            Pembuatan landing page berkonversi tinggi yang dioptimalkan khusus untuk kampanye pemasaran,
                            peluncuran produk, maupun personal branding.
                        </p>
                        <a href="#contact">
                            Mulai Konsultasi
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Layanan 06 -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="service-card">
                        <div class="service-number">06</div>
                        <div class="service-icon">
                            <i class="fa-solid fa-gears"></i>
                        </div>
                        <h3>Maintenance & Support</h3>
                        <p>
                            Layanan pemeliharaan berkala untuk memastikan website dan aplikasi Anda tetap aman, cepat,
                            selalu diperbarui, dan berjalan optimal.
                        </p>
                        <a href="#contact">
                            Mulai Konsultasi
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- === CLIENTS & PARTNERS === --}}

    <section id="clients" class="clients-section">
        <div class="container text-center mb-4">
            <h2 class="clients-title">
                Client & <span>Partner</span>
            </h2>
        </div>

        <div class="clients-marquee-container">
            <div class="clients-marquee-track">
                <div class="clients-marquee-inner">
                    <div class="client-logo-item">
                        <img src="{{ asset('assets/images/client-1.png') }}" alt="Client 1">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{ asset('assets/images/client-2.png') }}" alt="Client 2">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{ asset('assets/images/client-3.png') }}" alt="Client 3">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{ asset('assets/images/client-4.png') }}" alt="Client 4">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{ asset('assets/images/client-5.png') }}" alt="Client 5">
                    </div>
                </div>

                <div class="clients-marquee-inner" aria-hidden="true">
                    <div class="client-logo-item">
                        <img src="{{ asset('assets/images/client-1.png') }}" alt="Client 1">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{ asset('assets/images/client-2.png') }}" alt="Client 2">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{ asset('assets/images/client-3.png') }}" alt="Client 3">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{ asset('assets/images/client-4.png') }}" alt="Client 4">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{ asset('assets/images/client-5.png') }}" alt="Client 5">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- === ABOUT / WHY US === --}}

    <section id="about" class="section about-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-visual reveal">
                        <div class="about-box">
                            <div class="about-pattern"></div>
                            <div class="about-center">
                                <span>BRAVO</span>
                                <strong>
                                    Creative
                                    <br>
                                    Works
                                </strong>
                            </div>
                        </div>

                        <div class="about-stat">
                            <strong>100%</strong>
                            <span>
                                Dedikasi
                                <br>
                                Digital
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section-label">
                        <span></span>
                        MENGAPA BRAVO
                    </div>
                    <h2 class="about-title">
                        Ide Hebat Anda Layak
                        <span>Dieksekusi Sempurna.</span>
                    </h2>

                    <p class="about-text">
                        Kami percaya website atau aplikasi bukan sekadar barisan kode di internet, melainkan representasi
                        digital dan aset utama yang menentukan kredibilitas bisnis Anda.
                    </p>

                    <p class="about-text">
                        Oleh karena itu, setiap proyek selalu kami mulai dengan memahami kebutuhan mendalam, tujuan bisnis,
                        dan karakter brand Anda sebelum masuk ke tahap desain dan pengembangan.
                    </p>

                    <div class="about-features">
                        <div>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>
                                Desain Modern & Profesional
                            </span>
                        </div>

                        <div>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>
                                Responsif di Semua Perangkat
                            </span>
                        </div>

                        <div>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>
                                Berfokus pada Performa & Kecepatan
                            </span>
                        </div>

                        <div>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>
                                Dirancang untuk Skala Jangka Panjang
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- === PORTFOLIO === --}}

    <section id="portfolio" class="section portfolio-section">
        <div class="container">
            <div class="section-heading">
                <div class="section-label">
                    <span></span>
                    SELECTED WORK
                </div>
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <h2>
                            Work we're
                            <span>proud of.</span>
                        </h2>
                    </div>
                    <div class="col-lg-4 ms-auto">
                        <p>
                            Beberapa project yang kami bangun
                            untuk membantu brand tampil lebih profesional
                            di dunia digital.
                        </p>
                    </div>
                </div>
            </div>

            <!-- BARIS 1: 2 Project Terbaru (Kiri: 7, Kanan: 5) -->
            <div class="row g-4 mb-4">
                <!-- Project 1 (Kiri) -->
                <div class="col-lg-7 reveal">
                    <div class="portfolio-card portfolio-large h-100 d-flex flex-column">
                        <div class="portfolio-image">
                            <img src="https://picsum.photos/seed/project1/800/600" alt="Digital Corporate Experience"
                                class="portfolio-thumb-img">
                        </div>
                        <div class="portfolio-info mt-auto">
                            <div>
                                <span>Corporate Website</span>
                                <h3 class="portfolio-title">Digital Corporate Experience & Enterprise Solutions Platform
                                </h3>
                            </div>
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </div>
                    </div>
                </div>

                <!-- Project 2 (Kanan) -->
                <div class="col-lg-5 reveal">
                    <div class="portfolio-card h-100 d-flex flex-column">
                        <div class="portfolio-image">
                            <img src="https://picsum.photos/seed/project2/800/600" alt="Modern Online Store"
                                class="portfolio-thumb-img">
                        </div>
                        <div class="portfolio-info mt-auto">
                            <div>
                                <span>E-Commerce</span>
                                <h3 class="portfolio-title">Modern Online Store & Marketplace Ecosystem</h3>
                            </div>
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BARIS 2: 5 Project Marquee Berjalan Looping Tanpa Jeda -->
            <div class="portfolio-marquee-wrapper reveal">
                <div class="portfolio-track">
                    <!-- Kumpulan Set Project (Asli) -->
                    <div class="marquee-group">
                        <!-- Item 1 -->
                        <div class="portfolio-card marquee-card">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/seed/project3/800/600" alt="Fintech Banking App"
                                    class="portfolio-thumb-img">
                            </div>
                            <div class="portfolio-info">
                                <div><span>Mobile App</span>
                                    <h3 class="portfolio-title">Fintech Banking Application UI/UX Design</h3>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="portfolio-card marquee-card">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/seed/project4/800/600" alt="Cloud Dashboard"
                                    class="portfolio-thumb-img">
                            </div>
                            <div class="portfolio-info">
                                <div><span>SaaS Platform</span>
                                    <h3 class="portfolio-title">Cloud Infrastructure Management Dashboard</h3>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="portfolio-card marquee-card">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/seed/project5/800/600" alt="Creative Agency"
                                    class="portfolio-thumb-img">
                            </div>
                            <div class="portfolio-info">
                                <div><span>Branding</span>
                                    <h3 class="portfolio-title">Creative Agency Visual Identity & Guidelines</h3>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="portfolio-card marquee-card">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/seed/project6/800/600" alt="Web3 Crypto"
                                    class="portfolio-thumb-img">
                            </div>
                            <div class="portfolio-info">
                                <div><span>Web3 / Crypto</span>
                                    <h3 class="portfolio-title">Decentralized Exchange Web Application</h3>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                        <!-- Item 5 -->
                        <div class="portfolio-card marquee-card">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/seed/project7/800/600" alt="AI Analytics"
                                    class="portfolio-thumb-img">
                            </div>
                            <div class="portfolio-info">
                                <div><span>Dashboard</span>
                                    <h3 class="portfolio-title">AI Analytics & Data Visualization Tool</h3>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Kumpulan Set Project Duplikat (Untuk Efek Looping Tanpa Jeda / Seamless) -->
                    <div class="marquee-group" aria-hidden="true">
                        <!-- Item 1 (Duplicate) -->
                        <div class="portfolio-card marquee-card">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/seed/project3/800/600" alt="Fintech Banking App"
                                    class="portfolio-thumb-img">
                            </div>
                            <div class="portfolio-info">
                                <div><span>Mobile App</span>
                                    <h3 class="portfolio-title">Fintech Banking Application UI/UX Design</h3>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                        <!-- Item 2 (Duplicate) -->
                        <div class="portfolio-card marquee-card">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/seed/project4/800/600" alt="Cloud Dashboard"
                                    class="portfolio-thumb-img">
                            </div>
                            <div class="portfolio-info">
                                <div><span>SaaS Platform</span>
                                    <h3 class="portfolio-title">Cloud Infrastructure Management Dashboard</h3>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                        <!-- Item 3 (Duplicate) -->
                        <div class="portfolio-card marquee-card">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/seed/project5/800/600" alt="Creative Agency"
                                    class="portfolio-thumb-img">
                            </div>
                            <div class="portfolio-info">
                                <div><span>Branding</span>
                                    <h3 class="portfolio-title">Creative Agency Visual Identity & Guidelines</h3>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                        <!-- Item 4 (Duplicate) -->
                        <div class="portfolio-card marquee-card">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/seed/project6/800/600" alt="Web3 Crypto"
                                    class="portfolio-thumb-img">
                            </div>
                            <div class="portfolio-info">
                                <div><span>Web3 / Crypto</span>
                                    <h3 class="portfolio-title">Decentralized Exchange Web Application</h3>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                        <!-- Item 5 (Duplicate) -->
                        <div class="portfolio-card marquee-card">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/seed/project7/800/600" alt="AI Analytics"
                                    class="portfolio-thumb-img">
                            </div>
                            <div class="portfolio-info">
                                <div><span>Dashboard</span>
                                    <h3 class="portfolio-title">AI Analytics & Data Visualization Tool</h3>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- === PROCESS === --}}

    <section id="process" class="section process-workflow-section">
        <div class="container position-relative">

            <!-- SVG CONNECTOR LINES (Desktop Only) -->
            <svg class="workflow-svg-lines" width="100%" height="100%" viewBox="0 0 1100 300" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <!-- Garis dari Card 1 ke Card 2 -->
                <path class="workflow-flow-line" d="M 330 100 Q 400 100, 430 100" />
                <!-- Garis dari Card 2 ke Card 3 -->
                <path class="workflow-flow-line" d="M 710 100 Q 780 100, 810 100" />
                <!-- Garis lengkung dari Card 3 turun berbelok ke Card 4 (di tengah bawah) -->
                <path class="workflow-flow-line-curve" d="M 910 160 Q 910 230, 715 230 Q 550 230, 550 230" />
            </svg>

            <div class="section-heading text-center mb-5">
                <div class="section-label justify-content-center">
                    <span></span>
                    ALUR KERJA KAMI
                </div>
                <h2>
                    Bagaimana Kami
                    <span>Mewujudkan Proyek Anda.</span>
                </h2>
            </div>

            <div class="workflow-grid-container">
                <!-- Baris 1: 3 Kolom -->
                <div class="workflow-row-top">

                    <!-- Card 1 -->
                    <div class="workflow-card-wrapper reveal" id="step-1">
                        <div class="workflow-card">
                            <div class="workflow-card-front">
                                <div class="workflow-icon">
                                    <i class="fa-solid fa-comments"></i>
                                </div>
                                <h3>Konsultasi Awal</h3>
                            </div>
                            <div class="workflow-card-back">
                                <div class="workflow-icon-small">
                                    <i class="fa-solid fa-comments"></i>
                                </div>
                                <h3>Konsultasi Awal</h3>
                                <p>Kami memulai dengan memahami kebutuhan Anda secara menyeluruh melalui diskusi ringan
                                    namun terarah.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="workflow-card-wrapper reveal" id="step-2">
                        <div class="workflow-card">
                            <div class="workflow-card-front">
                                <div class="workflow-icon">
                                    <i class="fa-solid fa-compass-drafting"></i>
                                </div>
                                <h3>Perencanaan & Strategi</h3>
                            </div>
                            <div class="workflow-card-back">
                                <div class="workflow-icon-small">
                                    <i class="fa-solid fa-compass-drafting"></i>
                                </div>
                                <h3>Perencanaan & Strategi</h3>
                                <p>Menyusun rencana kerja yang jelas, jadwal pengerjaan, hingga target yang transparan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="workflow-card-wrapper reveal" id="step-3">
                        <div class="workflow-card">
                            <div class="workflow-card-front">
                                <div class="workflow-icon">
                                    <i class="fa-solid fa-laptop-code"></i>
                                </div>
                                <h3>Proses Produksi</h3>
                            </div>
                            <div class="workflow-card-back">
                                <div class="workflow-icon-small">
                                    <i class="fa-solid fa-laptop-code"></i>
                                </div>
                                <h3>Proses Produksi</h3>
                                <p>Mengerjakan proyek sesuai rencana dengan update berkala yang transparan bagi Anda.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Baris 2: 1 Kolom di Tengah -->
                <div class="workflow-row-bottom">

                    <!-- Card 4 -->
                    <div class="workflow-card-wrapper reveal" id="step-4">
                        <div class="workflow-card">
                            <div class="workflow-card-front">
                                <div class="workflow-icon">
                                    <i class="fa-solid fa-rocket"></i>
                                </div>
                                <h3>Peluncuran & Dukungan</h3>
                            </div>
                            <div class="workflow-card-back">
                                <div class="workflow-icon-small">
                                    <i class="fa-solid fa-rocket"></i>
                                </div>
                                <h3>Peluncuran & Dukungan</h3>
                                <p>Membantu proses peluncuran hingga mulus serta menyediakan dukungan berkelanjutan agar
                                    tetap optimal.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- === FAQ === --}}

    <section id="faq" class="section faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-label">
                        <span></span>
                        FAQ
                    </div>
                    <h2 class="faq-title">
                        Pertanyaan yang
                        <span>Sering Diajukan.</span>
                    </h2>
                    <p>
                        Temukan informasi seputar layanan, proses kerja, dan ketentuan proyek kami di sini.
                    </p>
                    <a href="#contact" class="btn btn-primary-custom">
                        Hubungi Kami
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <div class="col-lg-7">
                    <!-- Gunakan accordion bootstrap dengan id unik -->
                    <div class="accordion faq-accordion" id="faqAccordion">

                        <!-- Item FAQ 1 -->
                        <div class="faq-item-card reveal">
                            <div class="faq-header" id="faqHeadingOne">
                                <button class="faq-accordion-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    <span class="faq-title-text">Berapa lama waktu pengerjaan website?</span>
                                    <i class="fa-solid fa-chevron-down faq-arrow"></i>
                                </button>
                            </div>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                                <div class="faq-body">
                                    <p>
                                        Waktu pengerjaan umumnya 2–4 minggu, tergantung fitur dan kompleksitas. Kami selalu
                                        memberikan timeline yang jelas sebelum proyek dimulai.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item FAQ 2 -->
                        <div class="faq-item-card reveal">
                            <div class="faq-header" id="faqHeadingTwo">
                                <button class="faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseTwo" aria-expanded="false"
                                    aria-controls="faqCollapseTwo">
                                    <span class="faq-title-text">Apakah saya bisa revisi selama proses pengerjaan?</span>
                                    <i class="fa-solid fa-chevron-down faq-arrow"></i>
                                </button>
                            </div>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="faq-body">
                                    <p>
                                        Tentu. Kami menyediakan sesi revisi agar hasil akhir sesuai kebutuhan. Jumlah revisi
                                        disesuaikan dengan paket yang dipilih.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item FAQ 3 -->
                        <div class="faq-item-card reveal">
                            <div class="faq-header" id="faqHeadingThree">
                                <button class="faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseThree" aria-expanded="false"
                                    aria-controls="faqCollapseThree">
                                    <span class="faq-title-text">Apakah menyediakan layanan maintenance?</span>
                                    <i class="fa-solid fa-chevron-down faq-arrow"></i>
                                </button>
                            </div>
                            <div id="faqCollapseThree" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                                <div class="faq-body">
                                    <p>
                                        Ya, kami menyediakan layanan maintenance bulanan atau tahunan untuk memastikan
                                        website tetap aman, cepat, dan selalu up-to-date.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item FAQ 4 -->
                        <div class="faq-item-card reveal">
                            <div class="faq-header" id="faqHeadingFour">
                                <button class="faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseFour" aria-expanded="false"
                                    aria-controls="faqCollapseFour">
                                    <span class="faq-title-text">Apakah desain bisa dibuat sesuai brand saya?</span>
                                    <i class="fa-solid fa-chevron-down faq-arrow"></i>
                                </button>
                            </div>
                            <div id="faqCollapseFour" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion">
                                <div class="faq-body">
                                    <p>
                                        Bisa. Kami menyesuaikan desain dengan identitas brand Anda mulai dari warna, tone,
                                        gaya visual, hingga gaya komunikasi.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item FAQ 5 -->
                        <div class="faq-item-card reveal">
                            <div class="faq-header" id="faqHeadingFive">
                                <button class="faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseFive" aria-expanded="false"
                                    aria-controls="faqCollapseFive">
                                    <span class="faq-title-text">Apakah bisa membantu pembuatan konten foto atau
                                        video?</span>
                                    <i class="fa-solid fa-chevron-down faq-arrow"></i>
                                </button>
                            </div>
                            <div id="faqCollapseFive" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFive" data-bs-parent="#faqAccordion">
                                <div class="faq-body">
                                    <p>
                                        Kami menyediakan layanan editing foto dan video, serta pembuatan konten visual untuk
                                        kebutuhan promosi, katalog, atau media sosial.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item FAQ 6 -->
                        <div class="faq-item-card reveal">
                            <div class="faq-header" id="faqHeadingSix">
                                <button class="faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseSix" aria-expanded="false"
                                    aria-controls="faqCollapseSix">
                                    <span class="faq-title-text">Bagaimana sistem pembayarannya?</span>
                                    <i class="fa-solid fa-chevron-down faq-arrow"></i>
                                </button>
                            </div>
                            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix"
                                data-bs-parent="#faqAccordion">
                                <div class="faq-body">
                                    <p>
                                        Pembayaran umumnya dilakukan 50% di awal, dan sisanya setelah proyek selesai. Untuk
                                        instansi atau kebutuhan tertentu, sistem bisa disesuaikan.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- === CTA === --}}
    <section id="contact" class="cta-section">
        <div class="cta-pattern"></div>
        <div class="container position-relative">

            <!-- TAMPILAN AWAL (CENTER) -->
            <div id="ctaInitialContent" class="cta-initial-box text-center">
                <div class="section-label justify-content-center cta-label">
                    <span></span>
                    LET'S WORK TOGETHER
                    <span></span>
                </div>

                <h2>
                    Have an idea?
                    <br>
                    <span>Let's build it.</span>
                </h2>

                <p>
                    Ceritakan project Anda kepada kami.
                    Mari buat sesuatu yang luar biasa bersama.
                </p>

                <button type="button" id="startConversationBtn" class="btn btn-cta">
                    Start a conversation
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

            <!-- TAMPILAN KEDUA (2 KOLOM / FORM & WHATSAPP) -->
            <div id="ctaFormContent" class="cta-form-container" style="display: none;">

                <!-- Breadcrumb / Tombol Back khusus Mobile / Tampilan Fleksibel -->
                <div class="cta-back-wrapper d-block d-lg-none mb-4">
                    <button type="button" id="backToInitialBtn" class="btn-back-mode">
                        <i class="fa-solid fa-arrow-left"></i> Kembali
                    </button>
                </div>

                <div class="row align-items-center g-5">
                    <!-- KOLOM KIRI: Teks Awal yang Bergeser ke Kiri -->
                    <div class="col-lg-6">
                        <div class="cta-content text-left-desktop">
                            <div class="section-label cta-label">
                                <span></span>
                                LET'S WORK TOGETHER
                                <span></span>
                            </div>

                            <h2>
                                Have an idea?
                                <br>
                                <span>Let's build it.</span>
                            </h2>

                            <p class="ms-0">
                                Ceritakan project Anda kepada kami.
                                Mari buat sesuatu yang luar biasa bersama. Atau hubungi kami langsung via WhatsApp.
                            </p>

                            <div class="mt-4">
                                <a href="https://wa.me/6281234567890?text=Halo%20Bravo%20Creative%20Works,%20saya%20ingin%20berdiskusi%20tentang%20project."
                                    target="_blank" class="btn btn-whatsapp">
                                    <i class="fa-brands fa-whatsapp"></i> Chat via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- KOLOM KANAN: Form Email dengan Efek Dissolve / Fade In -->
                    <div class="col-lg-6">
                        <div class="cta-email-card cta-fade-in">
                            <h3 class="form-title mb-4">Kirim Pesan</h3>
                            <form action="mailto:hello@bravocreativeworks.com" method="POST" enctype="text/plain">
                                <div class="mb-3">
                                    <label for="senderEmail" class="form-label text-white-50">Email Anda</label>
                                    <input type="email" class="form-control cta-input" id="senderEmail" name="email"
                                        placeholder="nama@email.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="emailSubject" class="form-label text-white-50">Subject</label>
                                    <input type="text" class="form-control cta-input" id="emailSubject"
                                        name="subject" placeholder="Judul / Kebutuhan Project" required>
                                </div>
                                <div class="mb-3">
                                    <label for="emailMessage" class="form-label text-white-50">Pesan / Detail
                                        Project</label>
                                    <textarea class="form-control cta-input" id="emailMessage" name="message" rows="4"
                                        placeholder="Ceritakan detail project Anda..." required></textarea>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-cta w-100 justify-content-center">
                                        Kirim Email <i class="fa-solid fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- SCRIPT ANIMASI SMOOTH & TRANSISI -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const startBtn = document.getElementById('startConversationBtn');
            const backBtn = document.getElementById('backToInitialBtn');
            const initialContent = document.getElementById('ctaInitialContent');
            const formContent = document.getElementById('ctaFormContent');

            startBtn.addEventListener('click', function() {
                // Efek fade-out pada teks awal center
                initialContent.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                initialContent.style.opacity = '0';
                initialContent.style.transform = 'scale(0.95)';

                setTimeout(() => {
                    initialContent.style.display = 'none';
                    // Munculkan container form 2 kolom
                    formContent.style.display = 'block';
                    formContent.style.opacity = '0';
                    formContent.style.transform = 'translateY(20px)';

                    // Trigger animasi masuk kolom kiri & kanan
                    requestAnimationFrame(() => {
                        formContent.style.transition =
                            'opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
                        formContent.style.opacity = '1';
                        formContent.style.transform = 'translateY(0)';
                    });
                }, 400);

                document.getElementById('contact').scrollIntoView({
                    behavior: 'smooth'
                });
            });

            backBtn.addEventListener('click', function() {
                formContent.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                formContent.style.opacity = '0';
                formContent.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    formContent.style.display = 'none';

                    initialContent.style.display = 'block';
                    initialContent.style.opacity = '0';
                    initialContent.style.transform = 'scale(0.95)';

                    requestAnimationFrame(() => {
                        initialContent.style.transition =
                            'opacity 0.5s ease, transform 0.5s ease';
                        initialContent.style.opacity = '1';
                        initialContent.style.transform = 'scale(1)';
                    });
                }, 400);

                document.getElementById('contact').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

@endsection
