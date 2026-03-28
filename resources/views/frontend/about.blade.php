@extends('layouts.master')
@section('title', 'About Us | Our Story')

@section('content')
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="position-relative">
                    <img src="{{ asset('images/chers_forent.jpeg') }}" class="img-fluid rounded-4 shadow-lg" alt="About Al Bait Al Aneq">
                    <div class="bg-dark text-white p-4 position-absolute bottom-0 start-0 translate-middle-y ms-3 d-none d-md-block" style="border-left: 5px solid #c5a059;">
                        <h3 class="fw-bold mb-0">2+ Years</h3>
                        <p class="small mb-0">Of Excellence in Dubai</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
    <h6 class="text-uppercase tracking-widest text-gold mb-3" style="color: #c5a059;">Behind The Chairs</h6>
    <h2 class="display-6 fw-bold mb-4">AL BAIT AL ANEQ <br> GENTS SALOON</h2>

    <p class="text-muted lead mb-4">
        We don’t just cut hair; we redefine your personality. Located in the heart of Dubai,
        our sanctuary is designed for men who value precision, hygiene, and luxury.
    </p>

    <div class="row g-4 mb-5">
        <div class="col-6">
            <h5 class="fw-bold"><i class="bi bi-patch-check-fill me-2 text-gold"></i> Premium Tools</h5>
            <p class="small text-muted">Always sterilized and using top-brand equipment.</p>
        </div>
        <div class="col-6">
            <h5 class="fw-bold"><i class="bi bi-people-fill me-2 text-gold"></i> Expert Stylists</h5>
            <p class="small text-muted">Skilled barbers with international experience.</p>
        </div>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-dark rounded-0 px-5 py-3 shadow">BOOK AN EXPERIENCE</a>
</div>
                {{-- </div> --}}
                {{-- <a href="{{ route('booking') }}" class="btn btn-dark rounded-0 px-5 py-3">BOOK AN EXPERIENCE</a> --}}
            {{-- </div> --}}
        </div>
    </div>
</section>
@endsection
