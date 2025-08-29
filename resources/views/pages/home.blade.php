@extends('layouts.app')

@section('content')
<div class="text-center">
  <h1>Selamat Datang di Sekolah Kita</h1>
  <p>Website resmi untuk informasi sekolah, kegiatan, berita terbaru, dan kontak.</p>
</div>

<h3 class="mt-5">Berita Terbaru</h3>
<div class="row">
  @foreach($latestNews as $n)
  <div class="col-md-4 mb-3">
    <div class="card">
      <div class="card-body">
        <h5>{{ $n->title }}</h5>
        <p>{{ Str::limit($n->content, 100) }}</p>
        <small class="text-muted">Diposting: {{ $n->created_at->format('d M Y') }}</small>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
