@extends('layouts.master')
@section('title', 'Gallery | Exclusive Look')

@section('styles')
<style>
    .gallery-section { padding: 80px 0; background: #fff; }

    /* Masonry Style Grid */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        grid-gap: 20px;
        grid-auto-flow: dense;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 0; /* Luxury sharp edges */
        background: #000;
        height: 450px; /* Standard height for consistency */
    }

    .gallery-item img, .gallery-item video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
        opacity: 0.9;
    }

    .gallery-item:hover img, .gallery-item:hover video {
        transform: scale(1.05);
        opacity: 1;
    }

    /* Video Play Icon Overlay */
    .video-overlay {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(197, 160, 89, 0.8); /* Gold Theme */
        color: white;
        padding: 5px 12px;
        font-size: 0.7rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        z-index: 5;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .gallery-grid {
            grid-template-columns: 1fr; /* Mobile par single column */
        }
        .gallery-item { height: 350px; }
    }
</style>
@endsection

@section('content')

<section class="gallery-section">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-uppercase gold-text mb-2" style="color: #c5a059; letter-spacing: 3px;">Portfolio</h6>
            <h2 class="display-5 fw-bold text-dark">ARTISTRY IN MOTION</h2>
            <div class="bg-dark mx-auto mt-3" style="height: 2px; width: 60px;"></div>
        </div>

        <div class="gallery-grid">

            <div class="gallery-item" data-aos="fade-up">
                <span class="video-overlay"><i class="bi bi-play-fill"></i> Video</span>
                <video muted loop onmouseover="this.play()" onmouseout="this.pause()" poster="{{ asset('images/video_thumb1.jpg') }}">
                    <source src="{{ asset('images/WhatsApp Video 2026-03-08 at 4.57.59 PM.mp4') }}" type="video/mp4">
                </video>
            </div>

            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/hair cuting.jpg') }}" alt="Gents Salon Haircut">
            </div>

            <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                <span class="video-overlay"><i class="bi bi-play-fill"></i> Video</span>
                <video muted loop onmouseover="this.play()" onmouseout="this.pause()">
                    <source src="{{ asset('images/WhatsApp Video 2026-03-08 at 4.57.57 PM.mp4') }}" type="video/mp4">
                </video>
            </div>

            <div class="gallery-item" data-aos="fade-up">
                <img src="{{ asset('images/chers_withmerror.jpeg') }}" alt="Luxury Interior">
            </div>

            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <span class="video-overlay"><i class="bi bi-play-fill"></i> Video</span>
                <video muted loop onmouseover="this.play()" onmouseout="this.pause()">
                    <source src="{{ asset('images/WhatsApp Video 2026-03-08 at 4.56.53 PM.mp4') }}" type="video/mp4">
                </video>
            </div>

            <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/chers_forent.jpeg') }}" alt="Salon Front View">
            </div>

            <div class="gallery-item" data-aos="fade-up">
                <img src="{{ asset('images/massage.jpeg') }}" alt="Manicure Service">
            </div>

            <div class="gallery-item" data-aos="fade-up">
                <img src="{{ asset('images/massage_withwash.jpeg') }}" alt="Manicure Service">
            </div>

        </div>
    </div>
</section>

@endsection
