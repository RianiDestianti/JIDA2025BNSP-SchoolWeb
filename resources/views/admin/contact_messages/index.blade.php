@extends('layouts.app')

@section('content')
<div class="hero-section text-center py-5 mb-4" style="background: linear-gradient(135deg, #17a2b8, #48dbfb); border-radius: 20px; color: white;">
  <h1 class="display-4 fw-bold">Pesan Kontak</h1>
  <p class="lead">Kelola pesan yang dikirim melalui formulir kontak Sekolah Kita.</p>
</div>

<div class="content-card">
  <h2 class="fw-bold mb-4">Daftar Pesan</h2>
  <div class="table-responsive">
    <table class="table table-hover">
      <thead class="table-dark" style="border-radius: 10px;">
        <tr>
          <th scope="col" style="border-radius: 10px 0 0 0;">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Pesan</th>
          <th scope="col">Dikirim</th>
          <th scope="col" style="border-radius: 0 10px 0 0;">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($messages as $msg)
        <tr style="transition: background-color 0.2s ease;">
          <td>{{ $msg->name }}</td>
          <td>{{ $msg->email }}</td>
          <td>{{ Str::limit($msg->message, 50) }}</td>
          <td>{{ $msg->created_at->format('d M Y H:i') }}</td>
          <td>
            <a href="{{ route('contact-messages.show', $msg->id) }}" class="btn btn-sm btn-info" style="border-radius: 15px;">Lihat</a>
            <form action="{{ route('contact-messages.destroy', $msg->id) }}" method="POST" style="display:inline;">
              @csrf @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger" style="border-radius: 15px;" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="mt-4">
    {{ $messages->links('pagination::bootstrap-5') }}
  </div>
</div>
@endsection