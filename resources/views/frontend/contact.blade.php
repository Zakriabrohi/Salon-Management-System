@extends('layouts.master')
@section('title', 'Contact Us | Al Bait Al Aneq')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show rounded-0 mb-4" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <h2 class="fw-bold mb-4">GET IN TOUCH</h2>

                <div class="d-flex mb-4">
                    <div class="fs-3 me-3 text-warning"><i class="bi bi-geo-alt"></i></div>
                    <div>
                        <h5 class="fw-bold mb-1">Our Location</h5>
                        <p class="text-muted mb-0">9GP4+VXM - Al Rawda 2</p>
                        <p class="text-muted">Ajman - United Arab Emirates</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="fs-3 me-3 text-warning"><i class="bi bi-whatsapp"></i></div>
                    <div>
                        <h5 class="fw-bold mb-1">WhatsApp & Call</h5>
                        <p class="text-muted mb-0">+971 56 594 1335</p>
                        <p class="text-muted">+971 52 552 2641</p>
                    </div>
                </div>

                <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden mt-4 border">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.144183863484!2d55.5186!3d25.4011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5f61763133603%3A0xc6820c7657999865!2sAl%20Rawda%202%20-%20Ajman!5e0!3m2!1sen!2sae!4v1710321600000!5m2!1sen!2sae"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        style="border:0;">
                    </iframe>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="bg-white p-5 shadow-sm rounded border-top border-warning border-4">
                    <h4 class="fw-bold mb-4">SEND US A MESSAGE</h4>
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="small fw-bold mb-1">Your Name</label>
                                <input type="text" name="name" class="form-control rounded-0 border-secondary-subtle" placeholder="Enter your name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="small fw-bold mb-1">Email Address</label>
                                <input type="email" name="email" class="form-control rounded-0 border-secondary-subtle" placeholder="name@example.com" required>
                            </div>
                            <div class="col-12">
                                <label class="small fw-bold mb-1">How can we help?</label>
                                <textarea name="message" rows="5" class="form-control rounded-0 border-secondary-subtle" placeholder="Write your message here..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-dark w-100 rounded-0 py-3 fw-bold tracking-widest">
                                    SEND MESSAGE <i class="bi bi-send ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
