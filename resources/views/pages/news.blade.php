@extends('layouts.app')

@section('content')
<div class="hero-section text-center py-5 mb-4" style="background: linear-gradient(135deg, #dc3545, #ff6b6b); border-radius: 20px; color: white;">
  <h1 class="display-4 fw-bold">Berita Terbaru</h1>
  <p class="lead">Dapatkan informasi terkini tentang kegiatan dan pengumuman Sekolah Kita!</p>
</div>

<div class="content-card">
  <h2 class="fw-bold mb-4">Berita Sekolah</h2>
  <div class="row">
    @foreach($news as $n)
    <div class="col-md-6 mb-4">
      <div class="card h-100" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
        <div class="card-body">
          <h5 class="card-title fw-semibold">{{ $n->title }}</h5>
          <p class="card-text">{{ Str::limit($n->content, 150) }}</p>
          <small class="text-muted">Diposting: {{ $n->created_at->format('d M Y') }}</small>
        </div>
        <div class="card-footer bg-transparent border-0">
          <a href="{{ route('news', $n->id) }}" class="btn btn-primary btn-sm" style="border-radius: 20px;">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection