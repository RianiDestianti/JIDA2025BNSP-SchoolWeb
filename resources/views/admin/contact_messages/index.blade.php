@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pesan Kontak</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Dikirim</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $msg)
            <tr>
                <td>{{ $msg->name }}</td>
                <td>{{ $msg->email }}</td>
                <td>{{ Str::limit($msg->message, 50) }}</td>
                <td>{{ $msg->created_at->format('d M Y H:i') }}</td>
                <td>
                    <a href="{{ route('contact-messages.show', $msg->id) }}" class="btn btn-sm btn-info">Lihat</a>
                    <form action="{{ route('contact-messages.destroy', $msg->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $messages->links() }}
</div>
@endsection
