@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Pesan</h2>
    <p><strong>Nama:</strong> {{ $contactMessage->name }}</p>
    <p><strong>Email:</strong> {{ $contactMessage->email }}</p>
    <p><strong>Pesan:</strong> {{ $contactMessage->message }}</p>
    <p><strong>Dikirim:</strong> {{ $contactMessage->created_at->format('d M Y H:i') }}</p>

    <a href="{{ route('contact-messages.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
