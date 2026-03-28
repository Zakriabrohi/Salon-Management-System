@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">
    <div class="row justify-content-start">
        <div class="col-lg-7">
            <div class="card p-5">
                <h4 class="fw-bold mb-4">Create New Service</h4>
                <form action="{{ route('admin.services.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label small fw-bold text-muted text-uppercase">Select Category</label>
                        <select name="category" class="form-select rounded-0 p-3 border-light-subtle" required>
                            <option value="Hair">Hair Services</option>
                            <option value="Waxing">Waxing</option>
                            <option value="Nails">Nail & Bath Services</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-bold text-muted text-uppercase">Service Name</label>
                        <input type="text" name="name" class="form-control rounded-0 p-3 border-light-subtle" placeholder="e.g. Keratin Treatment" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-bold text-muted text-uppercase">Price (AED)</label>
                        <input type="number" name="price" class="form-control rounded-0 p-3 border-light-subtle" placeholder="e.g. 150" required>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 py-3 fw-bold mt-2">ADD SERVICE TO CATALOG</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
