<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f4f4; height: 100vh; display: flex; align-items: center; justify-content: center; }
        .login-card { width: 400px; background: white; padding: 40px; border: 1px solid #ddd; }
    </style>
</head>
<body>
    <div class="login-card">
        <h4 class="fw-bold mb-4 text-center text-uppercase" style="letter-spacing: 2px;">Admin Login</h4>
        @if($errors->any())
            <div class="alert alert-danger small">{{ $errors->first() }}</div>
        @endif
        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="small fw-bold">EMAIL ADDRESS</label>
                <input type="email" name="email" class="form-control rounded-0 p-3" required>
            </div>
            <div class="mb-4">
                <label class="small fw-bold">PASSWORD</label>
                <input type="password" name="password" class="form-control rounded-0 p-3" required>
            </div>
            <button type="submit" class="btn btn-dark w-100 py-3 rounded-0 fw-bold">SIGN IN</button>
        </form>
    </div>
</body>
</html>
