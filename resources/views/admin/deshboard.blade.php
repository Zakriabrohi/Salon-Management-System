@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">
    <div class="row g-4">
        <div class="col-12">
            <h3 class="fw-bold">Dashboard Overview</h3>
            <p class="text-muted">Welcome back to Bait Al Aneq admin console.</p>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <div class="d-flex align-items-center">
                    <div class="bg-light p-3 me-3 text-dark"><i class="bi bi-scissors fs-4"></i></div>
                    <div>
                        <h6 class="mb-0 text-muted">Total Services</h6>
                        <h2 class="fw-bold mb-0">{{ \App\Models\Service::count() }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <div class="d-flex align-items-center">
                    <div class="bg-light p-3 me-3 text-dark"><i class="bi bi-calendar-check fs-4"></i></div>
                    <div>
                        <h6 class="mb-0 text-muted">Active Bookings</h6>
                        <h2 class="fw-bold mb-0">{{ \App\Models\Appointment::count() }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
