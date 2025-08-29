@extends('layouts.app')

@section('content')
<h2>Hubungi Kami</h2>
@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
<form action="{{ route('contact.send') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label>Nama</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Pesan</label>
    <textarea name="message" class="form-control" rows="4" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
@endsection
