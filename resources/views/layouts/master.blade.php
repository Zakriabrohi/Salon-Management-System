<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bait Al Aneq | @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --gold: #c5a059;
            --dark: #111;
            --light: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
            overflow-x: hidden;
        }

        /* Navbar Styling */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid #eee;
            transition: 0.3s;
        }

        .logo-img {
            height: 70px;
            width: auto;
            transition: 0.3s;
        }

        .nav-link {
            color: var(--dark) !important;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }

        .nav-link:hover {
            color: var(--gold) !important;
        }

        .btn-book {
            background: var(--dark);
            color: #fff !important;
            border-radius: 0;
            padding: 10px 25px;
            font-weight: 600;
            font-size: 0.8rem;
            border: 1px solid var(--dark);
        }

        .btn-book:hover {
            background: transparent;
            color: var(--dark) !important;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: #fff;
            padding: 60px 0 30px;
        }

        .footer-logo {
            height: 80px;
            filter: brightness(0) invert(1);
        }

        @media (max-width: 768px) {
            .logo-img {
                height: 50px;
            }

            .section-padding {
                padding: 50px 0;
            }
        }

        /* Footer Styling */
        footer {
            background: var(--dark);
            color: #fff;
            padding: 80px 0 30px;
            border-top: 3px solid var(--gold);
        }

        .footer-title {
            color: var(--gold);
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }

        .footer-logo {
            height: 90px;
            filter: brightness(0) invert(1);
            margin-bottom: 20px;
        }

        .footer-link {
            color: #aaa;
            text-decoration: none;
            transition: 0.3s;
            font-size: 0.9rem;
            display: block;
            margin-bottom: 12px;
        }

        .footer-link:hover {
            color: var(--gold);
            padding-left: 5px;
        }

        .social-icon {
            height: 40px;
            width: 40px;
            line-height: 40px;
            display: inline-block;
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            border-radius: 50%;
            transition: 0.3s;
            text-align: center;
        }

        .social-icon:hover {
            background: var(--gold);
            color: #fff;
            transform: translateY(-5px);
        }

        .contact-item {
            color: #aaa;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .contact-item i {
            color: var(--gold);
            margin-right: 10px;
        }
        /* WhatsApp Floating Button Styling */
.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    right: 40px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 35px;
    box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s ease;
}

.whatsapp-float:hover {
    background-color: #128c7e;
    color: #fff;
    transform: scale(1.1);
}

/* Tooltip text (Optional) */
.whatsapp-tooltip {
    visibility: hidden;
    width: 120px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px;
    position: absolute;
    z-index: 1;
    right: 75px;
    font-size: 14px;
    opacity: 0;
    transition: opacity 0.3s;
}

.whatsapp-float:hover .whatsapp-tooltip {
    visibility: visible;
    opacity: 1;
}

/* Mobile Responsive */
@media screen and (max-width: 768px) {
    .whatsapp-float {
        width: 50px;
        height: 50px;
        bottom: 20px;
        right: 20px;
        font-size: 30px;
    }
}
    </style>
    @yield('styles')
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top py-1">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="logo-img">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link px-3" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="{{ route('gallery') }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="{{ route('contact') }}">Contact uc</a></li>
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a href="{{ route('booking') }}" class="btn btn-book">BOOK NOW</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>@yield('content')</main>

    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    {{-- <img src="{{ asset('images/logo.jpeg') }}" alt="Bait Al Aneq Logo" class="footer-logo"> --}}
                    <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="logo-img">

                    <p class="text-secondary small pe-lg-5" style="line-height: 1.8;">
                        Bait Al Aneq Gents Saloon is Dubai's premium grooming destination.
                        We specialize in precision hair styling, expert beard grooming, and
                        luxury spa treatments. Our mission is to provide you with an
                        exceptional and relaxing grooming experience.
                    </p>
                    <div class="mt-4">
                        <a href="https://www.instagram.com/ags.saloon/" target="_blank" class="social-icon me-2"
                            title="Follow us on Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="https://www.facebook.com/ags.saloon" target="_blank"
                            class="social-icon me-2" title="Like us on Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="https://wa.me/971565941335?text=Hello%20Bait%20Al%20Aneq%2C%20I%20want%20to%20book%20an%20appointment"
                            target="_blank" class="social-icon me-2" title="Chat on WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>

                        {{-- <a href="https://maps.google.com/?q=9GP4+VXM+-+Al+Rawda+2+-+Ajman" target="_blank"
                            class="social-icon" title="Find us on Google Maps">
                            <i class="bi bi-google"></i>
                        </a> --}}
                    </div>
                </div>

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="footer-title">NAVIGATION</h5>
                    <a href="{{ route('home') }}" class="footer-link">Home</a>
                    <a href="{{ route('services') }}" class="footer-link">Our Services</a>
                    <a href="{{ route('gallery') }}" class="footer-link">Gallery</a>
                    <a href="{{ route('about') }}" class="footer-link">About Us</a>
                    <a href="{{ route('contact') }}" class="footer-link">Contact Us</a>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="footer-title">SERVICES</h5>
                    <a href="{{ route('services') }}" class="footer-link">Premium Haircut</a>
                    <a href="{{ route('services') }}" class="footer-link">Beard Styling</a>
                    <a href="{{ route('services') }}" class="footer-link">Facial & Skin Care</a>
                    <a href="{{ route('services') }}" class="footer-link">Manicure & Pedicure</a>
                    <a href="{{ route('services') }}" class="footer-link">Moroccan Bath</a>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="footer-title">VISIT US</h5>
                    <div class="contact-item">
                        <i class="bi bi-geo-alt-fill"></i> 9GP4+VXM - Al Rawda 2 - Ajman - United Arab Emirates
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-telephone-fill"></i> +971 52 552 2641
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-telephone-fill"></i> +971 56 594 1335
                    </div>

                    <div class="contact-item">
                        <i class="bi bi-envelope-fill"></i> info@baitalaneq.com
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-clock-fill"></i> Open Daily: 10:00 AM - 12:00 PM
                    </div>
                </div>
            </div>

            <hr class="mt-5 mb-4 border-secondary opacity-25">

            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-secondary small mb-0">&copy; 2026 Bait Al Aneq Gents Saloon Dubai. All Rights
                        Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <p class="text-secondary small mb-0">Developed by <a href="#"
                            class="text-gold text-decoration-none fw-bold">Zakaria</a></p>
                </div>
            </div>

        </div>
    </footer>
<a href="https://wa.me/971565941335?text=Hello%20Bait%20Al%20Aneq%2C%20I%20want%20to%20book%20an%20appointment"
   class="whatsapp-float"
   target="_blank">
    <i class="bi bi-whatsapp"></i>
    <span class="whatsapp-tooltip">Chat with us</span>
</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800
        });
    </script>
</body>

</html>
