<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');
    </style>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <header class=".header" style="position: sticky; top: 0; z-index: 100;">
        <!-- Navbar -->
        <div class="landing-page-container">
            <nav class="navbar">
                <div class="hamburger-menu">&#9776;</div>
                <a href="{{ route('home') }}" class="logo">
                    LOGO
                </a>
                <ul class="nav-list">
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#achievements">Achievements</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
                <div class="auth-buttons-wrapper">
                    <!-- <a href="{{ route('register') }}" class="btn btn-primary"> -->
                    <a href="{{ route('register') }}" class="btn btn-primary">
                        Register
                    </a>
                    <a href="{{ route('login') }}" class="btn btn-secondary">
                        Login
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <main class="landing-page-container">
        <!-- Hero -->
        <section id="hero">
            <div class="hero">
                <img class="hero-image"
                    src="{{ asset('build/assets/images/4 to 5 people sucessfully get their jobs in an office with green accent color without any text_ 1.png') }}"
                    alt="Hero Image">
                <div class="hero-desc">
                    <h1 class="hero-title">Jotrack</h1>
                    <h2 class="hero-subtitle">
                        Simplify Your Job Search: AI Interviews & Effortless Application
                    </h2>
                    <a href="{{ asset('login') }}" class="btn btn-primary cta-button">
                        Get Started
                    </a>
                </div>
            </div>
        </section>

        <!-- Achievments Card -->
        <section id="achievements">
            <div class="achievements">
                <div class="achievements-wrapper">
                    <div class="achievement-card">
                        <div class="achievement-header">
                            <p class="title">Jobs</p>
                            <i class="icon" data-lucide="briefcase-business"></i>
                        </div>
                        <p class="metric">10.7K+</p>
                        <p class="desc">have been tracked</p>
                    </div>

                    <div class="achievement-card">
                        <div class="achievement-header">
                            <p class="title">AI-Interviews</p>
                            <i class="icon" data-lucide="mic"></i>
                        </div>
                        <p class="metric">500+</p>
                        <p class="desc">have been done</p>
                    </div>

                    <div class="achievement-card">
                        <div class="achievement-header">
                            <p class="title">People</p>
                            <i class="icon" data-lucide="users"></i>
                        </div>
                        <p class="metric">500+</p>
                        <p class="desc">land their dream jobs</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Review -->
        <section id="reviews">
            <div class="reviews">
                <h1 class="section-title">What they say <span class="text-primary">about us?</span></h1>
                <div class="reviews-container scrollbar-hidden">
                    <div class="reviews-wrapper">
                        <div class="review-card">
                            <div class="review-profile">
                                <img class="reviewer-img" src="{{ asset('build/assets/images/Avatar.png') }}"
                                    alt="Avatar Picture">
                                <div class="reviewer-detail">
                                    <p class="name">Sofia Davis</p>
                                    <p class="time">2 months ago</p>
                                </div>
                                <p class="rating">5.0 ⭐</p>
                            </div>
                            <p class="reviewer-title">Software Engineer at ABC Company</p>
                            <p class="review-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus cursus
                                convallis. Proin eget nisl metus. Vivamus ac pharetra nibh, sed feugiat neque. Vivamus
                                arcu dolor, ultrices commodo placerat at, vehicula eget ex. Ut et mollis urna. Aliquam
                                vitae mattis purus, quis consectetur metus. Vivamus sed elit diam. Ut iaculis ex non
                                odio ullamcorper, eu scelerisque sem tempus. Cras fermentum neque a mauris tempus
                                elementum.
                            </p>
                        </div>

                        <div class="review-card">
                            <div class="review-profile">
                                <img class="reviewer-img" src="{{ asset('build/assets/images/Avatar.png') }}"
                                    alt="Avatar Picture">
                                <div class="reviewer-detail">
                                    <p class="name">Budi Berbudi</p>
                                    <p class="time">2 months ago</p>
                                </div>
                                <p class="rating">5.0 ⭐</p>
                            </div>
                            <p class="reviewer-title">UI Designer at XYZ Inc.</p>
                            <p class="review-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus cursus
                                convallis. Proin eget nisl metus. Vivamus ac pharetra nibh, sed feugiat neque. Vivamus
                                arcu dolor, ultrices commodo placerat at, vehicula eget ex. Ut et mollis urna. Aliquam
                                vitae mattis purus, quis consectetur metus. Vivamus sed elit diam. Ut iaculis ex non
                                odio ullamcorper, eu scelerisque sem tempus. Cras fermentum neque a mauris tempus
                                elementum.
                            </p>
                        </div>

                        <div class="review-card">
                            <div class="review-profile">
                                <img class="reviewer-img" src="{{ asset('build/assets/images/Avatar.png') }}"
                                    alt="Avatar Picture">
                                <div class="reviewer-detail">
                                    <p class="name">Sovia Davis</p>
                                    <p class="time">2 months ago</p>
                                </div>
                                <p class="rating">5.0 ⭐</p>
                            </div>
                            <p class="reviewer-title">Software Engineer at ABC Company</p>
                            <p class="review-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus cursus
                                convallis. Proin eget nisl metus. Vivamus ac pharetra nibh, sed feugiat neque. Vivamus
                                arcu dolor, ultrices commodo placerat at, vehicula eget ex. Ut et mollis urna. Aliquam
                                vitae mattis purus, quis consectetur metus. Vivamus sed elit diam. Ut iaculis ex non
                                odio ullamcorper, eu scelerisque sem tempus. Cras fermentum neque a mauris tempus
                                elementum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section id="pricing">
            <div class="pricing">
                <h1 class="section-title">
                    Find the right plan to <span class="text-primary">enhance</span> your journey.
                </h1>
                <div class="pricing-container">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <p class="pricing-price">Free</p>
                            <h1 class="pricing-title">Starter Plan</h1>
                            <p class="pricing-subtitle">Begin your journey and manage you applications for free</p>
                        </div>
                        <ul class="pricing-description">
                            <li class="pricing-pros">
                                <div>
                                    <i class="icon" data-lucide="badge-check"></i>
                                </div>
                                <p class="feature">Track job applications up to 50 active applications</p>
                            </li>
                            <li class="pricing-pros">
                                <div>
                                    <i class="icon" data-lucide="badge-check"></i>
                                </div>
                                <p class="feature">Archive any tracked applications anytime</p>
                            </li>
                            <li class="pricing-cons">
                                <div>
                                    <i class="icon" data-lucide="badge-x"></i>
                                </div>
                                <p class="feature">Access to AI-Powered Interview Simulator</p>
                            </li>
                            <li class="pricing-cons">
                                <div>
                                    <i class="icon" data-lucide="badge-x"></i>
                                </div>
                                <p class="feature">Personalized suggestions</p>
                            </li>
                            <li class="pricing-cons">
                                <div>
                                    <i class="icon" data-lucide="badge-x"></i>
                                </div>
                                <p class="feature">CV/Resume reviews & examinations</p>
                            </li>
                        </ul>
                        <button class="btn btn-primary" style="width: 100%;">Get Started</button>
                    </div>

                    <div class="pricing-card">
                        <div class="pricing-header">
                            <p class="pricing-price">IDR 50K/mo</p>
                            <h1 class="pricing-title">Premium Plan</h1>
                            <p class="pricing-subtitle">Boost your journey with our premium features and land your dream
                                job</p>
                        </div>
                        <ul class="pricing-description">
                            <li class="pricing-pros">
                                <div>
                                    <i class="icon" data-lucide="badge-check"></i>
                                </div>
                                <p class="feature">Track job applications up to 50 active applications</p>
                            </li>
                            <li class="pricing-pros">
                                <div>
                                    <i class="icon" data-lucide="badge-check"></i>
                                </div>
                                <p class="feature">Archive any tracked applications anytime</p>
                            </li>
                            <li class="pricing-pros">
                                <div>
                                    <i class="icon" data-lucide="badge-check"></i>
                                </div>
                                <p class="feature">Access to AI-Powered Interview Simulator</p>
                            </li>
                            <li class="pricing-pros">
                                <div>
                                    <i class="icon" data-lucide="badge-check"></i>
                                </div>
                                <p class="feature">Personalized suggestions</p>
                            </li>
                            <li class="pricing-pros">
                                <div>
                                    <i class="icon" data-lucide="badge-check"></i>
                                </div>
                                <p class="feature">CV/Resume reviews & examinations</p>
                            </li>
                        </ul>
                        <button class="btn btn-primary" style="width: 100%;">Get Started</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq">
            <div class="faq">
                <h1 class="section-title">Frequently Asked Questions</h1>
                <div class="faq-container">
                    <div class="faq-accordion">
                        <div class="accordion-label">
                            Is it accessible?
                        </div>
                        <div class="accordion-content">
                            Yes. It adheres to the WAI-ARIA design pattern.
                        </div>
                        <!-- <hr> -->
                    </div>

                    <div class="faq-accordion">
                        <div class="accordion-label">
                            Lorem ipsum dolor sit amet consectetur adipisicing?
                        </div>
                        <div class="accordion-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente cupiditate sunt natus quos
                            dignissimos, laboriosam tenetur laborum quasi repudiandae nam officiis, a sed earum fuga.
                        </div>
                        <!-- <hr> -->
                    </div>

                    <div class="faq-accordion">
                        <div class="accordion-label">
                            Lorem, ipsum dolor?
                        </div>
                        <div class="accordion-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, quae! Eveniet ullam
                            commodi doloribus mollitia.
                        </div>
                        <!-- <hr> -->
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <a class="footer-logo" href="#">
                LOGO
            </a>
            <div class="footer-description">
                <p>Donec varius odio elit, nec egestas arcu volutpat id. Aenean aliquet tempor arcu, eu rhoncus nisl
                    elementum et. Donec iaculis bibendum ultrices. Fusce aliquam ornare neque, quis tincidunt sapien.
                </p>
                <p>Aenean vehicula lectus sapien, vel aliquet lectus aliquet eget. Suspendisse sit amet massa at mauris
                    commodo vestibulum. Fusce viverra pharetra urna eget sagittis.</p>
                <p>Cras imperdiet non felis in posuere.</p>
            </div>
            <div class="social-media-wrapper">
                <a href="http://instagram.com" class="social-media">
                    <i class="icon" data-lucide="instagram"></i>
                </a>
                <a href="http://twitter.com" class="social-media">
                    <i class="icon" data-lucide="twitter"></i>
                </a>
                <a href="http://linkedin.com" class="social-media">
                    <i class="icon" data-lucide="linkedin"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            // Deklarasikan tombol hamburger-menu dan nav-list
            const hamburgerMenu = document.querySelector('.hamburger-menu');
            const navList = document.querySelector('.nav-list');

            // Membuat event klik di hamburger menu
            hamburgerMenu.addEventListener('click', () => {
                navList.classList.toggle('active');
                event.stopPropagation();
            });

            document.addEventListener('click', (event) => {
                if (!hamburgerMenu.contains(event.target) && !navList.contains(event.target)) {
                    navList.classList.remove('active');
                }
            });
        })

        const accordionLabels = document.querySelectorAll('.accordion-label');

        accordionLabels.forEach((label) => {
            label.addEventListener('click', () => {
                const content = label.nextElementSibling;
                content.classList.toggle('show');
                label.classList.toggle('active');
            });
        });
    </script>
</body>

</html>