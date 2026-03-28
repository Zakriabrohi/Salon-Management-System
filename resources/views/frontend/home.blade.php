@extends('layouts.master')

@section('title', 'Luxury Grooming')

@section('styles')
<style>
    /* Hero Slider Fix */
    .hero-slider { height: 75vh; position: relative; width: 100%; overflow: hidden; }
    .carousel-item { height: 75vh; }
    .slider-img { width: 100%; height: 100%; object-fit: cover; filter: brightness(0.6); }

    .carousel-caption { bottom: 30%; z-index: 10; }
    .hero-title { font-family: 'Playfair Display', serif; font-size: 4rem; letter-spacing: 2px; }

    /* Service Cards - Fixed Width for Android */
    .service-card {
        background: #fff;
        border: none;
        transition: 0.4s;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .img-frame {
        width: 100%;
        height: 280px;
        overflow: hidden;
        position: relative;
    }
    .img-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.6s;
    }
    .service-card:hover img { transform: scale(1.1); }
    .service-card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }

    .gold-line { height: 2px; width: 60px; background: #c5a059; margin: 20px auto; }

    /* Mobile Responsive Adjustments */
    @media (max-width: 768px) {
        .hero-title { font-size: 2.2rem; }
        .hero-slider { height: 60vh; }
        .img-frame { height: 220px; }
    }

    .section-padding { padding: 100px 0; }

    .service-card-minimal {
        padding: 20px;
        transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: 1px solid transparent;
    }

    .service-card-minimal .img-wrapper {
        width: 100%;
        height: 250px;
        overflow: hidden;
        border-radius: 4px; /* Slight round for modern touch */
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .service-card-minimal .img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    /* Hover Effects */
    .service-card-minimal:hover {
        transform: translateY(-10px);
    }

    .service-card-minimal:hover img {
        transform: scale(1.1);
    }

    .service-card-minimal:hover h4 {
        color: #c5a059; /* Text turns gold on hover */
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .section-padding { padding: 60px 0; }
        .service-card-minimal .img-wrapper { height: 200px; }
        .display-5 { font-size: 2rem; }
    }

</style>
@endsection

@section('content')

<div id="salonHero" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner hero-slider">
        <div class="carousel-item active">
            <img src="{{ asset('images/chers_withmerror.jpeg') }}" class="slider-img" alt="Luxury Interior"  >
            <div class="carousel-caption">
                <h6 class="text-uppercase tracking-widest text-warning mb-3">Welcome to Luxury</h6>
                <h1 class="hero-title fw-bold text-white mb-4" data-aos="fade-up">BAIT AL ANEQ</h1>
                <a href="{{ route('booking') }}" class="btn btn-outline-light rounded-0 px-4 py-2">EXPLORE MORE</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/chers_forent.jpeg') }}" class="slider-img" alt="Master Cuts">
            <div class="carousel-caption">
                <h1 class="hero-title fw-bold text-white mb-4">MASTERFUL CUTS</h1>
                <p class="lead mb-4">Precision that defines your personality.</p>
                <a href="{{ route('booking') }}" class="btn btn-warning rounded-0 px-4 py-2 text-dark fw-bold">BOOK NOW</a>
            </div>
        </div>
    </div>
</div>

<section id="services" class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-uppercase tracking-widest text-gold mb-2" style="color: #c5a059; font-size: 0.8rem; font-weight: 600;">Our Expertise</h6>
            <h2 class="display-5 fw-bold text-dark mb-3">PREMIUM GROOMING</h2>
            <div class="bg-dark mx-auto" style="height: 2px; width: 50px;"></div>
        </div>

        <div class="row g-4 mt-2">
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="service-card-minimal text-center">
                    <div class="img-wrapper mb-4">
                        <img src="{{ asset('images/hair cuting.jpg') }}" alt="Professional Men's Haircut Dubai">
                    </div>
                    <h4 class="fw-bold text-uppercase mb-2" style="font-size: 1.2rem; letter-spacing: 1px;">Hair Services</h4>
                    <p class="text-muted small px-3">Masterful precision cuts and modern styling tailored for the elite gentleman.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-minimal text-center">
                    <div class="img-wrapper mb-4">
                        <img src="{{ asset('images/waxing.jpg') }}" alt="Men's Waxing Services Dubai">
                    </div>
                    <h4 class="fw-bold text-uppercase mb-2" style="font-size: 1.2rem; letter-spacing: 1px;">Waxing & Skin</h4>
                    <p class="text-muted small px-3">Advanced skin care and hygiene-focused waxing for a smooth, professional look.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card-minimal text-center">
                    <div class="img-wrapper mb-4">
                        <img src="{{ asset('images/nails.jpg') }}" alt="Men's Manicure and Moroccan Bath">
                    </div>
                    <h4 class="fw-bold text-uppercase mb-2" style="font-size: 1.2rem; letter-spacing: 1px;">Nail & Bath</h4>
                    <p class="text-muted small px-3">Traditional Moroccan rituals and executive nail grooming for total rejuvenation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                <img src="{{ asset('images/chers_forent.jpeg') }}" class="img-fluid border" alt="Inside" style="height:400px; width: 500px;">
            </div>
            <div class="col-md-6 px-lg-5" data-aos="fade-left">
                <h2 class="fw-bold mb-4">STREETS OF DUBAI <br><span style="color:#c5a059">SANCTUARY OF STYLE</span></h2>
                <p class="text-muted">In the heart of Dubai, we provide more than just a haircut. We provide an experience where hygiene meets luxury.</p>
                <div class="d-flex align-items-center mt-4">
                    <div class="bg-dark text-white p-2 rounded-circle me-3"><i class="bi bi-shield-check fs-4"></i></div>
                    <h6 class="mb-0 fw-bold">100% Sterilized Equipment</h6>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <div class="bg-dark text-white p-2 rounded-circle me-3"><i class="bi bi-star fs-4"></i></div>
                    <h6 class="mb-0 fw-bold">Expert Stylists with 10+ Years Exp.</h6>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
