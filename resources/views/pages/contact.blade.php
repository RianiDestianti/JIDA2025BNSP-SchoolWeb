@extends('layouts.app')

@section('content')
<div class="hero-section text-center py-5 mb-4" style="background: linear-gradient(135deg, #6f42c1, #a855f7); border-radius: 20px; color: white;">
  <h1 class="display-4 fw-bold">Hubungi Kami</h1>
  <p class="lead">Kami siap menjawab pertanyaan Anda dan memberikan informasi yang dibutuhkan!</p>
</div>

<div class="content-card">
  <div class="row">
    <div class="col-lg-6 mb-4">
      <h2 class="fw-bold mb-4">Kirim Pesan</h2>
      @if(session('success'))
      <div class="alert alert-success rounded-3" role="alert">
        {{ session('success') }}
      </div>
      @endif
      <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label fw-semibold">Nama</label>
          <input type="text" name="name" class="form-control" style="border-radius: 10px;" required>
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Email</label>
          <input type="email" name="email" class="form-control" style="border-radius: 10px;" required>
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Pesan</label>
          <textarea name="message" class="form-control" rows="5" style="border-radius: 10px;" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="border-radius: 25px; padding: 0.5rem 2rem;">Kirim Pesan</button>
      </form>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
          <h4 class="fw-semibold">Informasi Kontak</h4>
          <ul class="list-unstyled mt-3">
            <li><strong>Alamat:</strong> Jl. Pendidikan No. 123, Jakarta, Indonesia</li>
            <li><strong>Telepon:</strong> (021) 123-4567</li>
            <li><strong>Email:</strong> info@sekolahkita.sch.id</li>
            <li><strong>Jam Operasional:</strong> Senin - Jumat, 07:00 - 15:00 WIB</li>
          </ul>
          <div class="mt-4">
            <h5 class="fw-semibold">Ikuti Kami</h5>
            <a href="#" class="btn btn-outline-primary btn-sm me-2" style="border-radius: 20px;">Facebook</a>
            <a href="#" class="btn btn-outline-primary btn-sm me-2" style="border-radius: 20px;">Instagram</a>
            <a href="#" class="btn btn-outline-primary btn-sm" style="border-radius: 20px;">Twitter</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection