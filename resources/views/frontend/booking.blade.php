@extends('layouts.master')
@section('content')
<section class="section-padding" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-white p-5 shadow-sm border-0">
                    <h3 class="fw-bold mb-4 text-center">Make a Reservation</h3>

                    @if(session('success'))
                        <div class="alert alert-dark rounded-0 small mb-4 border-0">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="small fw-bold">FULL NAME</label>
                            <input type="text" name="name" class="form-control rounded-0 p-3" placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label class="small fw-bold">SERVICE</label>
                            <select name="service" class="form-select rounded-0 p-3">
                                <option value="Hair" {{ request('service') == 'Hair' ? 'selected' : '' }}>Hair Services</option>
                                <option value="Waxing" {{ request('service') == 'Waxing' ? 'selected' : '' }}>Waxing Services</option>
                                <option value="Nails" {{ request('service') == 'Nails' ? 'selected' : '' }}>Nails & Bath</option>
                            </select>
                        </div>



                        <div class="mb-3">
                            <label class="small fw-bold">PHONE NUMBER</label>
                            <input type="text" name="phone" placeholder="+971 XXX XXXX" class="form-control rounded-0 p-3" required>
                        </div>

                        <div class="row">
    <div class="col-md-6 mb-3">
        <label class="small fw-bold">DATE</label>
        <input type="date" name="date" class="form-control rounded-0 p-3" required>
    </div>
    <div class="col-md-6 mb-3">
        <label class="small fw-bold">TIME</label>
        <input type="time" name="time" class="form-control rounded-0 p-3" required>
    </div>
</div>

                        <button type="submit" class="btn btn-dark w-100 py-3 mt-3 rounded-0 fw-bold">CONFIRM APPOINTMENT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
