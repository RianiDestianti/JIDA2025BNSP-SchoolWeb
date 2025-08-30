@extends('layouts.app')

@section('content')
<div class="hero-section text-center py-5 mb-4" style="background: linear-gradient(135deg, #ffc107, #ffca2c); border-radius: 20px; color: white;">
  <h1 class="display-4 fw-bold">Kegiatan Sekolah</h1>
  <p class="lead">Ikuti berbagai kegiatan seru dan mendidik di Sekolah Kita!</p>
</div>

<div class="content-card">
  <h2 class="fw-bold mb-4">Kegiatan Terbaru</h2>
  <div class="row">
    @foreach($activities as $activity)
    <div class="col-md-4 mb-4">
      <div class="card h-100" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
        <img src="{{ asset($activity->image) }}" class="card-img-top" alt="{{ $activity->title }}" style="border-radius: 15px 15px 0 0; object-fit: cover; height: 200px;">
        <div class="card-body">
          <h5 class="card-title fw-semibold">{{ $activity->title }}</h5>
          <p class="card-text">{{ Str::limit($activity->description, 120) }}</p>
        </div>
        <div class="card-footer bg-transparent border-0">
          <a href="{{ route('activities', $activity->id) }}" class="btn btn-primary btn-sm" style="border-radius: 20px;">Lihat Detail</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection