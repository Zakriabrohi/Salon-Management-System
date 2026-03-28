<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Bait Al Aneq</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <style>
        :root { --sidebar-bg: #ffffff; --body-bg: #f4f4f4; --text-main: #333333; --accent: #000000; }
        body { background-color: var(--body-bg); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: var(--text-main); }
        .sidebar { width: 260px; height: 100vh; position: fixed; background: var(--sidebar-bg); border-right: 1px solid #e0e0e0; }
        .sidebar-header { padding: 30px 20px; border-bottom: 1px solid #f8f9fa; text-align: center; }
        .nav-link { color: #666; padding: 15px 25px; font-weight: 500; transition: 0.3s; border-left: 4px solid transparent; }
        .nav-link:hover, .nav-link.active { background: #f8f9fa; color: var(--accent); border-left: 4px solid var(--accent); }
        .main-content { margin-left: 260px; padding: 40px; min-height: 100vh; }
        .card { border: 1px solid #e0e0e0; border-radius: 0; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.02); }
        .btn-dark { border-radius: 0; background: #000; border: none; }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="sidebar-header">
        <h5 class="fw-bold m-0" style="letter-spacing: 1px;">BAIT AL ANEQ</h5>
        <small class="text-muted text-uppercase" style="font-size: 0.7rem;">Management System</small>
    </div>
    <div class="nav flex-column mt-3">
    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <i class="bi bi-grid-1x2 me-2"></i> Dashboard
    </a>

    <a href="{{ route('admin.services.create') }}" class="nav-link {{ request()->is('admin/services/create') ? 'active' : '' }}">
        <i class="bi bi-plus-square me-2"></i> Add New Service
    </a>

    <a href="{{ route('admin.services.manage') }}" class="nav-link {{ request()->is('admin/services/manage') ? 'active' : '' }}">
        <i class="bi bi-card-list me-2"></i> Manage Services
    </a>

    <a href="{{ route('admin.messages') }}" class="nav-link {{ request()->is('admin/messages*') ? 'active' : '' }}">
        <i class="bi bi-envelope me-2"></i> Client Messages
    </a>

    <a href="{{ route('admin.bookings.manage') }}" class="nav-link {{ request()->is('admin/bookings*') ? 'active' : '' }}">
        <i class="bi bi-calendar-event me-2"></i> View Bookings
    </a>

    <hr class="mx-3 text-muted">

    <a href="{{ route('home') }}" target="_blank" class="nav-link text-secondary">
        <i class="bi bi-box-arrow-up-right me-2"></i> Open Website
    </a>

    <form action="{{ route('admin.logout') }}" method="POST" class="mt-4 px-4 pb-4">
        @csrf
        <button type="submit" class="btn btn-outline-danger btn-sm w-100 rounded-0">LOGOUT</button>
    </form>
</div>
</div>

<div class="main-content">
    @if(session('success'))
        <div class="alert alert-dark border-0 rounded-0 mb-4 shadow-sm">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        </div>
    @endif
    @yield('admin_content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
