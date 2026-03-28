@extends('layouts.master')
@section('title', 'Our Services | Luxury Grooming Menu')

@section('styles')
<style>
    .services-header {
        background: #111;
        padding: 100px 0 60px;
        color: white;
    }
    .gold-text { color: #c5a059; letter-spacing: 3px; }

    /* Service Section Styling */
    .service-row {
        padding: 80px 0;
        align-items: center;
    }
    .service-image-box {
        position: relative;
        overflow: hidden;
    }
    .service-image-box img {
        width: 100%;
        height: 450px;
        object-fit: cover;
        transition: 0.6s;
    }
    .service-image-box:hover img { transform: scale(1.05); }

    /* Pricing Table Styling */
    .price-table { width: 100%; }
    .price-item {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        margin-bottom: 20px;
        padding-bottom: 8px;
        border-bottom: 1px dashed #ddd;
    }
    .price-item h5 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0;
        background: #fff; /* Dot line hide karne ke liye */
        padding-right: 10px;
    }
    .price-item .price-value {
        font-weight: bold;
        color: #c5a059;
        background: #fff;
        padding-left: 10px;
    }
    .price-item p {
        font-size: 0.85rem;
        color: #777;
        margin-top: 5px;
        width: 100%;
    }

    /* Decorative Elements */
    .category-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        margin-bottom: 30px;
        position: relative;
    }
    .category-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 3px;
        background: #c5a059;
    }
    .right-align::after { left: auto; right: 0; }

    @media (max-width: 768px) {
        .service-image-box img { height: 300px; }
        .category-title { font-size: 1.8rem; text-align: center; }
        .category-title::after { left: 50% !important; transform: translateX(-50%); }
        .service-row { padding: 40px 0; }
    }
</style>
@endsection

@section('content')

<section class="services-header text-center">
    <div class="container">
        <h6 class="gold-text text-uppercase mb-3" data-aos="fade-up">The Art of Grooming</h6>
        <h1 class="display-4 fw-bold" data-aos="fade-up" data-aos-delay="100">OUR SERVICE MENU</h1>
    </div>
</section>

<section class="bg-white">
    <div class="container">

        @php
            $categories = [
                'Hair' => [
                    'title' => 'Hair Services',
                    'desc' => 'Precision cuts and styling for the modern man.',
                    'img' =>  asset('images/bair citing.jpg')
                ],
                'Waxing' => [
                    'title' => 'Waxing & Grooming',
                    'desc' => 'Elite hygiene and body care solutions.',
                    'img' =>  asset('images/massage_withwash.jpeg')
                ],
                'Nails' => [
                    'title' => 'Nails & Rituals',
                    'desc' => 'Ultimate relaxation and executive nail care.',
                    'img' =>  asset('images/nails.jpg')
                ]
            ];
        @endphp

        @foreach($categories as $key => $catData)
        <div class="row service-row {{ $loop->iteration % 2 == 0 ? 'flex-row-reverse' : '' }}">

            <div class="col-lg-6 px-0" data-aos="{{ $loop->iteration % 2 == 0 ? 'fade-left' : 'fade-right' }}">
                <div class="service-image-box">
                    <img src="{{ $catData['img'] }}" alt="{{ $catData['title'] }}">
                </div>
            </div>

            <div class="col-lg-6 px-lg-5 py-4" data-aos="{{ $loop->iteration % 2 == 0 ? 'fade-right' : 'fade-left' }}">
                <h3 class="category-title {{ $loop->iteration % 2 == 0 ? 'text-lg-end right-align' : '' }}">
                    {{ $catData['title'] }}
                </h3>
                <p class="text-muted mb-5 {{ $loop->iteration % 2 == 0 ? 'text-lg-end' : '' }}">
                    {{ $catData['desc'] }}
                </p>

                <div class="price-table">
                    @forelse($services->where('category', $key) as $s)
                        <div class="price-item flex-wrap">
                            <div class="d-flex justify-content-between w-100">
                                <h5>{{ $s->name }}</h5>
                                <span class="price-value">{{ $s->price }} AED</span>
                            </div>
                            <p>One line short description about the result or benefit.</p>
                        </div>
                    @empty
                        <p class="text-muted">Explore our salon for premium {{ $key }} care.</p>
                    @endforelse
                </div>

                <div class="mt-5 {{ $loop->iteration % 2 == 0 ? 'text-lg-end' : '' }}">
                    <a href="{{ route('booking') }}?service={{ $key }}" class="btn btn-dark rounded-0 px-5 py-3 shadow-lg">
                        BOOK {{ strtoupper($key) }} APPOINTMENT
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>

<section class="py-5 bg-light border-top border-bottom">
    <div class="container text-center">
        <h4 class="fw-bold mb-4">EXPERIENCE THE GOLD STANDARD</h4>
        <div class="row g-4 mt-2">
            <div class="col-md-4">
                <i class="bi bi-award fs-1 gold-text"></i>
                <h5 class="mt-3">Certified Stylists</h5>
            </div>
            <div class="col-md-4">
                <i class="bi bi-shield-check fs-1 gold-text"></i>
                <h5 class="mt-3">100% Sterilized</h5>
            </div>
            <div class="col-md-4">
                <i class="bi bi-cup-hot fs-1 gold-text"></i>
                <h5 class="mt-3">Premium Coffee Bar</h5>
            </div>
        </div>
    </div>
</section>

@endsection
