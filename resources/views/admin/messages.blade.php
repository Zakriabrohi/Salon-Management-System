@extends('layouts.admin')

@section('admin_content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">Client Inquiries</h3>
            <p class="text-muted small">Manage all messages received from the contact form</p>
        </div>
        <span class="badge bg-dark px-3 py-2 shadow-sm">{{ $messages->count() }} Total Messages</span>
    </div>

    @if(session('success'))
        <div class="alert alert-dark border-0 rounded-0 mb-4 shadow-sm animate__animated animate__fadeIn">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 py-3 text-uppercase small fw-bold">Date</th>
                            <th class="py-3 text-uppercase small fw-bold">Client</th>
                            <th class="py-3 text-uppercase small fw-bold">Email</th>
                            <th class="py-3 text-uppercase small fw-bold">Message Snippet</th>
                            <th class="text-center py-3 text-uppercase small fw-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($messages as $msg)
                        <tr>
                            <td class="ps-4">
                                <div class="small fw-bold text-dark">{{ $msg->created_at->format('d M, Y') }}</div>
                                <div class="text-muted" style="font-size: 0.75rem;">{{ $msg->created_at->format('h:i A') }}</div>
                            </td>
                            <td>
                                <span class="fw-semibold">{{ $msg->name }}</span>
                            </td>
                            <td>
                                <a href="mailto:{{ $msg->email }}" class="text-decoration-none text-primary small">
                                    <i class="bi bi-envelope-at me-1"></i> {{ $msg->email }}
                                </a>
                            </td>
                            <td style="max-width: 250px;">
                                <div class="text-muted small text-truncate" title="{{ $msg->message }}">
                                    {{ $msg->message }}
                                </div>
                            </td>
                            <td class="text-center">
                                <form action="{{ route('admin.messages.delete', $msg->id) }}" method="POST" onsubmit="return confirm('Bhai, are you sure you want to delete this?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger p-0 border-0" title="Delete Message">
                                        <i class="bi bi-trash3-fill fs-5"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <i class="bi bi-inbox fs-1 text-muted d-block mb-3"></i>
                                <span class="text-muted">No messages found in the database.</span>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
