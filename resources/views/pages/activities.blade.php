@extends('layouts.app')

@section('content')
<h2>Kegiatan Sekolah</h2>
<div class="row">
  @foreach($activities as $activity)
  <div class="col-md-4 mb-3">
    <div class="card">
      <img src="{{ asset($activity->image) }}" class="card-img-top" alt="{{ $activity->title }}">
      <div class="card-body">
        <h5 class="card-title">{{ $activity->title }}</h5>
        <p class="card-text">{{ $activity->description }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
