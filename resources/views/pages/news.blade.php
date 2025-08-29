@extends('layouts.app')

@section('content')
<h2>Berita Terbaru</h2>
<div class="list-group">
  @foreach($news as $n)
    <div class="list-group-item">
      <h5>{{ $n->title }}</h5>
      <p>{{ $n->content }}</p>
      <small class="text-muted">Diposting: {{ $n->created_at->format('d M Y') }}</small>
    </div>
  @endforeach
</div>
@endsection
