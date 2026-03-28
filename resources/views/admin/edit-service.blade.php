@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">
    <h3 class="fw-bold mb-4">Edit Service</h3>
    <div class="card card-custom border-0 shadow-sm p-4">
        <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="small fw-bold">CATEGORY</label>
                <select name="category" class="form-select rounded-0 p-3">
                    <option value="Hair" {{ $service->category == 'Hair' ? 'selected' : '' }}>Hair Services</option>
                    <option value="Waxing" {{ $service->category == 'Waxing' ? 'selected' : '' }}>Waxing Services</option>
                    <option value="Nails" {{ $service->category == 'Nails' ? 'selected' : '' }}>Nails & Bath</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="small fw-bold">SERVICE NAME</label>
                <input type="text" name="name" value="{{ $service->name }}" class="form-control rounded-0 p-3" required>
            </div>
            <div class="mb-3">
                <label class="small fw-bold">PRICE (AED)</label>
                <input type="number" name="price" value="{{ $service->price }}" class="form-control rounded-0 p-3" required>
            </div>
            <button type="submit" class="btn btn-dark w-100 py-3 rounded-0 fw-bold">UPDATE SERVICE</button>
        </form>
    </div>
</div>
@endsection
