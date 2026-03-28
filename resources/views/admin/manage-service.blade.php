@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Active Price List</h3>
        <a href="{{ route('admin.services.create') }}" class="btn btn-dark btn-sm px-4">Add New</a>
    </div>

    <div class="card overflow-hidden">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr class="small text-uppercase fw-bold text-muted">
                        <th class="ps-4 py-3">Category</th>
                        <th class="py-3">Service</th>
                        <th class="py-3">Price</th>
                        <th class="text-end pe-4 py-3">Manage</th>
                        <th class="text-end pe-4 py-3">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $service)
                    <tr>
                        <td class="ps-4">
                            <span class="badge bg-light text-dark border px-2 py-1" style="font-weight: 500;">{{ $service->category }}</span>
                        </td>
                        <td class="fw-semibold text-dark">{{ $service->name }}</td>
                        <td><span class="fw-bold">{{ $service->price }}</span> <small class="text-muted">AED</small></td>
                        <td class="text-end pe-4">
                            <button class="btn btn-sm btn-outline-dark rounded-0 border-light-subtle"><i class="bi bi-trash"></i></button>
                        </td>
                        <td class="text-end pe-4">
                        <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-outline-dark rounded-0 me-2">
    <i class="bi bi-pencil"></i> Edit
</a>
</td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-5 text-muted">No services found. Start by adding one!</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
