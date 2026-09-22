@extends('layouts.landing')

@section('title', 'Bravo Creative Works — Digital Experiences That Matter')

@section('description',
    'Bravo Creative Works adalah digital agency yang membantu bisnis membangun website modern,
    profesional, cepat, dan scalable.')

@section('content')
    <section id="home" class="hero-section">

        <div class="hero-grid"></div>

        <div class="hero-glow hero-glow-one"></div>
        <div class="hero-glow hero-glow-two"></div>

        <div class="container position-relative">

            <div class="row align-items-center min-vh-100 pt-5">

                <div class="col-lg-7">

                    <h1 class="hero-title reveal">
                        We build websites
                        <span>people remember.</span>
                    </h1>

                    <p class="hero-description reveal">
                        Kami membantu bisnis, organisasi, dan brand membangun
                        website yang bukan hanya terlihat profesional,
                        tetapi juga cepat, responsif, dan dirancang untuk berkembang.
                    </p>

                    <div class="hero-actions reveal">

                        <a href="#contact" class="btn btn-primary-custom">
                            Start a Project

                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <a href="#portfolio" class="btn btn-outline-custom">
                            View Our Work

                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>

                    </div>

                    <div class="hero-trust reveal">

                        <div class="trust-item">
                            <strong>50+</strong>
                            <span>Projects</span>
                        </div>

                        <div class="trust-line"></div>

                        <div class="trust-item">
                            <strong>30+</strong>
                            <span>Clients</span>
                        </div>

                        <div class="trust-line"></div>

                        <div class="trust-item">
                            <strong>100%</strong>
                            <span>Commitment</span>
                        </div>

                    </div>

                </div>

                <div class="col-lg-5">

                    <div class="hero-visual reveal">

                        <div class="floating-card card-one">

                            <div class="mini-icon">
                                <i class="fa-solid fa-bolt"></i>
                            </div>

                            <div>
                                <strong>Fast Performance</strong>
                                <small>Optimized for speed</small>
                            </div>

                        </div>

                        <div class="hero-browser">

                            <div class="browser-header">

                                <div class="browser-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="browser-address">
                                    bravocreative.id
                                </div>

                            </div>

                            <div class="browser-content">

                                <div class="browser-nav"></div>

                                <div class="browser-heading">
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="browser-subheading"></div>

                                <div class="browser-button"></div>

                                <div class="browser-cards">

                                    <div></div>
                                    <div></div>
                                    <div></div>

                                </div>

                            </div>

                        </div>

                        <div class="floating-card card-two">

                            <div class="success-icon">
                                <i class="fa-solid fa-check"></i>
                            </div>

                            <div>
                                <strong>Project Delivered</strong>
                                <small>On time, every time</small>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
     MARQUEE
===================================================== --}}

    <section class="brand-strip">

        <div class="container">

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

            </div>

        </div>

    </section>


    {{-- =====================================================
     SERVICES
===================================================== --}}

    <section id="services" class="section section-light">

        <div class="container">

            <div class="section-heading">

                <div class="section-label">
                    <span></span>
                    WHAT WE DO
                </div>

                <div class="row align-items-end">

                    <div class="col-lg-7">

                        <h2>
                            Digital solutions
                            <span>built around your goals.</span>
                        </h2>

                    </div>

                    <div class="col-lg-4 ms-auto">

                        <p>
                            Dari website sederhana hingga platform digital
                            kompleks, kami merancang dan membangun solusi
                            yang sesuai dengan kebutuhan bisnis Anda.
                        </p>

                    </div>

                </div>

            </div>


            <div class="row g-4">

                <div class="col-md-6 col-lg-4 reveal">

                    <div class="service-card">

                        <div class="service-number">
                            01
                        </div>

                        <div class="service-icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>

                        <h3>Website Development</h3>

                        <p>
                            Website company profile yang profesional,
                            cepat, responsive, dan dirancang untuk
                            meningkatkan kredibilitas bisnis.
                        </p>

                        <a href="#contact">
                            Explore service
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>


                <div class="col-md-6 col-lg-4 reveal">

                    <div class="service-card service-card-featured">

                        <div class="service-number">
                            02
                        </div>

                        <div class="service-icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>

                        <h3>E-Commerce</h3>

                        <p>
                            Bangun toko online dengan pengalaman belanja
                            yang mudah, aman, modern, dan siap berkembang
                            bersama bisnis Anda.
                        </p>

                        <a href="#contact">
                            Explore service
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>


                <div class="col-md-6 col-lg-4 reveal">

                    <div class="service-card">

                        <div class="service-number">
                            03
                        </div>

                        <div class="service-icon">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>

                        <h3>Web Application</h3>

                        <p>
                            Sistem berbasis web custom untuk membantu
                            perusahaan mengelola proses bisnis secara
                            lebih efisien.
                        </p>

                        <a href="#contact">
                            Explore service
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>


                <div class="col-md-6 col-lg-4 reveal">

                    <div class="service-card">

                        <div class="service-number">
                            04
                        </div>

                        <div class="service-icon">
                            <i class="fa-solid fa-pen-ruler"></i>
                        </div>

                        <h3>UI / UX Design</h3>

                        <p>
                            Interface yang clean, intuitif, dan dirancang
                            agar pengguna mendapatkan pengalaman terbaik.
                        </p>

                        <a href="#contact">
                            Explore service
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>


                <div class="col-md-6 col-lg-4 reveal">

                    <div class="service-card">

                        <div class="service-number">
                            05
                        </div>

                        <div class="service-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>

                        <h3>Landing Page</h3>

                        <p>
                            Landing page yang fokus pada conversion,
                            campaign, promosi produk, maupun personal branding.
                        </p>

                        <a href="#contact">
                            Explore service
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>


                <div class="col-md-6 col-lg-4 reveal">

                    <div class="service-card">

                        <div class="service-number">
                            06
                        </div>

                        <div class="service-icon">
                            <i class="fa-solid fa-gears"></i>
                        </div>

                        <h3>Maintenance</h3>

                        <p>
                            Kami membantu menjaga website tetap aman,
                            cepat, update, dan berjalan dengan optimal.
                        </p>

                        <a href="#contact">
                            Explore service
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
     ABOUT / WHY US
===================================================== --}}

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
                                Passion for
                                <br>
                                digital
                            </span>

                        </div>

                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="section-label">
                        <span></span>
                        WHY BRAVO
                    </div>

                    <h2 class="about-title">
                        Your idea deserves
                        <span>great execution.</span>
                    </h2>

                    <p class="about-text">
                        Kami percaya website bukan sekadar halaman
                        di internet. Website adalah representasi digital
                        dari bisnis Anda.
                    </p>

                    <p class="about-text">
                        Karena itu setiap project kami mulai dari memahami
                        kebutuhan, tujuan, dan karakter bisnis Anda sebelum
                        masuk ke proses desain dan development.
                    </p>


                    <div class="about-features">

                        <div>
                            <i class="fa-solid fa-circle-check"></i>

                            <span>
                                Modern & Professional Design
                            </span>
                        </div>

                        <div>
                            <i class="fa-solid fa-circle-check"></i>

                            <span>
                                Responsive on Every Device
                            </span>
                        </div>

                        <div>
                            <i class="fa-solid fa-circle-check"></i>

                            <span>
                                Performance Focused
                            </span>
                        </div>

                        <div>
                            <i class="fa-solid fa-circle-check"></i>

                            <span>
                                Built for Long-Term Growth
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
     PORTFOLIO
===================================================== --}}

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


            <div class="row g-4">

                <div class="col-lg-7 reveal">

                    <div class="portfolio-card portfolio-large">

                        <div class="portfolio-image portfolio-blue">

                            <div class="mockup-window">

                                <div class="mockup-top"></div>

                                <div class="mockup-body">

                                    <div class="mockup-title"></div>

                                    <div class="mockup-lines"></div>

                                    <div class="mockup-blocks">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="portfolio-info">

                            <div>
                                <span>Corporate Website</span>
                                <h3>Digital Corporate Experience</h3>
                            </div>

                            <i class="fa-solid fa-arrow-up-right-from-square"></i>

                        </div>

                    </div>

                </div>


                <div class="col-lg-5 reveal">

                    <div class="portfolio-card">

                        <div class="portfolio-image portfolio-light">

                            <div class="commerce-card">

                                <div class="commerce-top"></div>

                                <div class="commerce-products">
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>

                        </div>

                        <div class="portfolio-info">

                            <div>
                                <span>E-Commerce</span>
                                <h3>Modern Online Store</h3>
                            </div>

                            <i class="fa-solid fa-arrow-up-right-from-square"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
     PROCESS
===================================================== --}}

    <section id="process" class="section process-section">

        <div class="container">

            <div class="row">

                <div class="col-lg-5">

                    <div class="section-label">
                        <span></span>
                        OUR PROCESS
                    </div>

                    <h2 class="process-title">
                        From idea
                        <span>to reality.</span>
                    </h2>

                    <p>
                        Proses yang sederhana dan transparan.
                        Anda selalu tahu apa yang sedang kami kerjakan.
                    </p>

                    <a href="#contact" class="btn btn-primary-custom">
                        Discuss Your Project
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>


                <div class="col-lg-7">

                    <div class="process-list">

                        <div class="process-item reveal">

                            <span class="process-number">01</span>

                            <div>

                                <h3>Discovery</h3>

                                <p>
                                    Kami memahami bisnis, target audience,
                                    kebutuhan, dan tujuan project.
                                </p>

                            </div>

                        </div>


                        <div class="process-item reveal">

                            <span class="process-number">02</span>

                            <div>

                                <h3>Design</h3>

                                <p>
                                    Membuat visual direction dan UI yang
                                    sesuai dengan karakter brand.
                                </p>

                            </div>

                        </div>


                        <div class="process-item reveal">

                            <span class="process-number">03</span>

                            <div>

                                <h3>Development</h3>

                                <p>
                                    Mengubah desain menjadi website
                                    yang cepat, responsive, dan scalable.
                                </p>

                            </div>

                        </div>


                        <div class="process-item reveal">

                            <span class="process-number">04</span>

                            <div>

                                <h3>Launch</h3>

                                <p>
                                    Website siap digunakan dan kami
                                    memastikan semuanya berjalan dengan baik.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
     CTA
===================================================== --}}

    <section id="contact" class="cta-section">

        <div class="cta-pattern"></div>

        <div class="container position-relative">

            <div class="cta-content text-center">

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

                <a href="mailto:hello@bravocreativeworks.com" class="btn btn-cta">

                    Start a conversation

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

        </div>

    </section>

@endsection
