document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | Navbar scroll effect
    |--------------------------------------------------------------------------
    */

    const navbar = document.querySelector('.site-navbar');

    function handleNavbar() {

        if (window.scrollY > 40) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

    }

    window.addEventListener('scroll', handleNavbar);

    handleNavbar();


    /*
    |--------------------------------------------------------------------------
    | Scroll reveal animation
    |--------------------------------------------------------------------------
    */

    const revealElements = document.querySelectorAll('.reveal');

    const revealObserver = new IntersectionObserver(
        function (entries, observer) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add('visible');

                    observer.unobserve(entry.target);

                }

            });

        },
        {
            threshold: 0.12
        }
    );

    revealElements.forEach(function (element) {

        revealObserver.observe(element);

    });


    /*
    |--------------------------------------------------------------------------
    | Active navigation
    |--------------------------------------------------------------------------
    */

    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    function updateActiveNavigation() {

        let currentSection = '';

        sections.forEach(function (section) {

            const sectionTop =
                section.offsetTop - 150;

            const sectionHeight =
                section.offsetHeight;

            if (
                window.scrollY >= sectionTop &&
                window.scrollY < sectionTop + sectionHeight
            ) {

                currentSection =
                    section.getAttribute('id');

            }

        });

        navLinks.forEach(function (link) {

            link.classList.remove('active');

            const href =
                link.getAttribute('href');

            if (href === '#' + currentSection) {
                link.classList.add('active');
            }

        });

    }

    window.addEventListener(
        'scroll',
        updateActiveNavigation
    );

    updateActiveNavigation();


    /*
    |--------------------------------------------------------------------------
    | Close mobile navbar after clicking
    |--------------------------------------------------------------------------
    */

    const navbarCollapse =
        document.querySelector('#mainNavbar');

    const mobileLinks =
        document.querySelectorAll(
            '#mainNavbar .nav-link'
        );

    mobileLinks.forEach(function (link) {

        link.addEventListener('click', function () {

            if (
                window.innerWidth < 992 &&
                navbarCollapse.classList.contains('show')
            ) {

                const collapse =
                    bootstrap.Collapse.getInstance(
                        navbarCollapse
                    );

                if (collapse) {
                    collapse.hide();
                }

            }

        });

    });


    /*
    |--------------------------------------------------------------------------
    | Smooth scroll
    |--------------------------------------------------------------------------
    */

    document.querySelectorAll(
        'a[href^="#"]'
    ).forEach(function (anchor) {

        anchor.addEventListener(
            'click',
            function (event) {

                const targetId =
                    this.getAttribute('href');

                if (
                    !targetId ||
                    targetId === '#'
                ) {
                    return;
                }

                const target =
                    document.querySelector(targetId);

                if (!target) {
                    return;
                }

                event.preventDefault();

                const navbarHeight =
                    navbar.offsetHeight;

                const targetPosition =
                    target.getBoundingClientRect().top +
                    window.scrollY -
                    navbarHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });

            }
        );

    });


    /*
    |--------------------------------------------------------------------------
    | Subtle hero browser movement
    |--------------------------------------------------------------------------
    */

    const heroBrowser =
        document.querySelector('.hero-browser');

    if (heroBrowser) {

        window.addEventListener(
            'mousemove',
            function (event) {

                if (window.innerWidth < 992) {
                    return;
                }

                const x =
                    (window.innerWidth / 2 - event.clientX) / 80;

                const y =
                    (window.innerHeight / 2 - event.clientY) / 100;

                heroBrowser.style.transform =
                    `perspective(1000px)
                     rotateY(${-8 + x}deg)
                     rotateX(${3 + y}deg)`;

            }
        );

    }

});