@extends('layouts.admin')

@section('admin_content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold m-0">Customer Bookings</h3>
        <span class="badge bg-dark px-3 py-2 rounded-0 small text-uppercase">Recent Activities</span>
    </div>

    <div class="card card-custom border-0 shadow-sm shadow-sm bg-white">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead class="bg-light">
                    <tr class="small text-uppercase fw-bold text-muted">
                        <th class="ps-4 py-3">Customer Name</th>
                        <th class="py-3">Service</th>
                        <th class="py-3">Date</th>
                        <th class="py-3">Phone</th>
                        <th class="text-end pe-4 py-3">Status</th>
                        <th class="py-3">Time</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bookings as $booking)
                    <tr>
                        <td class="ps-4 fw-bold text-dark">
                            <i class="bi bi-person-circle me-2 text-muted"></i>
                            {{ $booking->name ?? 'Guest User' }}
                        </td>
                        <td>
                            <span class="badge bg-light text-dark border px-2 py-1">
                                {{ $booking->service }}
                            </span>
                        </td>
                        <td class="text-secondary small">
                            <i class="bi bi-calendar3 me-1"></i> {{ $booking->date }}
                        </td>
                        <td class="text-secondary">
                            <i class="bi bi-telephone me-1"></i> {{ $booking->phone }}
                        </td>
                        <td class="text-end pe-4">
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-1 rounded-pill small">
                                New
                            </span>
                        </td>


<td><i class="bi bi-clock me-1"></i> {{ $booking->time }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <p class="text-muted m-0">No appointments found yet.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
    </div>
</div>
@endsection
