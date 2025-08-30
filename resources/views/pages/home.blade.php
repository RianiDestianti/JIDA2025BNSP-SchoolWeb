@extends('layouts.app')

@section('content')
<div class="text-center hero-section py-5" style="background: linear-gradient(135deg, #007bff, #00c4ff); border-radius: 20px; color: white;">
  <h1 class="display-4 fw-bold">Selamat Datang di Sekolah Kita</h1>
  <p class="lead">Website resmi untuk informasi sekolah, kegiatan, berita terbaru, dan kontak.</p>
  <a href="{{ route('about') }}" class="btn btn-light btn-lg mt-3" style="border-radius: 25px;">Pelajari Lebih Lanjut</a>
</div>

<h3 class="mt-5 fw-bold">Berita Terbaru</h3>
<div class="row">
  @foreach($latestNews as $n)
  <div class="col-md-4 mb-4">
    <div class="card h-100" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
      <div class="card-body">
        <h5 class="card-title fw-semibold">{{ $n->title }}</h5>
        <p class="card-text">{{ Str::limit($n->content, 100) }}</p>
        <small class="text-muted">Diposting: {{ $n->created_at->format('d M Y') }}</small>
      </div>
      <div class="card-footer bg-transparent border-0">
        <a href="{{ route('news', $n->id) }}" class="btn btn-primary btn-sm" style="border-radius: 20px;">Baca Selengkapnya</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection