@extends('layouts.app')

@section('content')
<div class="hero-section text-center py-5 mb-4" style="background: linear-gradient(135deg, #17a2b8, #48dbfb); border-radius: 20px; color: white;">
  <h1 class="display-4 fw-bold">Detail Pesan</h1>
  <p class="lead">Lihat informasi lengkap dari pesan yang diterima.</p>
</div>

<div class="content-card">
  <div class="card h-100" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <div class="card-body">
      <h2 class="fw-bold mb-4">Informasi Pesan</h2>
      <div class="mb-3">
        <strong>Nama:</strong> {{ $contactMessage->name }}
      </div>
      <div class="mb-3">
        <strong>Email:</strong> {{ $contactMessage->email }}
      </div>
      <div class="mb-3">
        <strong>Pesan:</strong> {{ $contactMessage->message }}
      </div>
      <div class="mb-3">
        <strong>Dikirim:</strong> {{ $contactMessage->created_at->format('d M Y H:i') }}
      </div>
      <a href="{{ route('contact-messages.index') }}" class="btn btn-secondary mt-3" style="border-radius: 20px;">Kembali ke Daftar Pesan</a>
    </div>
  </div>
</div>
@endsection