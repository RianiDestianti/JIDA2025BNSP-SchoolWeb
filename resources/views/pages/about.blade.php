@extends('layouts.app')

@section('content')
<div class="hero-section text-center py-5 mb-4" style="background-image: url('{{ asset('image/tentang.jpeg') }}'); background-size: cover; background-position: center; border-radius: 20px; color: white; position: relative;">
    <h1 class="display-4 fw-bold text-white">Tentang Kami</h1>
    <p class="lead">Mencetak Generasi Cerdas, Berkarakter, dan Siap Menghadapi Masa Depan</p>
</div>

<div class="content-card">
  <div class="row">
    <div class="col-lg-6 mb-4">
      <h2 class="fw-bold">Sekolah Kita</h2>
      <p>Sekolah Kita adalah lembaga pendidikan yang berkomitmen mencetak generasi cerdas, berkarakter, dan siap menghadapi masa depan. Didirikan pada tahun 2000, sekolah ini telah melahirkan ribuan alumni berprestasi yang berkontribusi di various bidang.</p>
      <p>Kami mengedepankan pendidikan holistik yang menggabungkan keunggulan akademik, pengembangan karakter, dan keterampilan abad 21 untuk mempersiapkan siswa menghadapi tantangan global.</p>
      <a href="{{ route('contact') }}" class="btn btn-primary mt-3" style="border-radius: 25px;">Hubungi Kami</a>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
          <h4 class="fw-semibold">Fakta Singkat</h4>
          <ul class="list-unstyled mt-3">
            <li><strong>Tahun Berdiri:</strong> 2000</li>
            <li><strong>Jumlah Alumni:</strong> Ribuan alumni berprestasi</li>
            <li><strong>Visi:</strong> Menjadi pusat pendidikan unggulan berbasis karakter</li>
            <li><strong>Misi:</strong> Memberikan pendidikan holistik untuk masa depan</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-5">
    <h3 class="fw-bold text-center">Perjalanan Kami</h3>
    <div class="timeline mt-4">
      <div class="timeline-item mb-4">
        <div class="card" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          <divFACULTAD DE INGENIERÍA DE SISTEMAS
          <div class="card-body">
            <h5 class="fw-semibold">2000 - Pendirian Sekolah</h5>
            <p>Sekolah Kita resmi berdiri dengan visi mencetak generasi unggul.</p>
          </div>
        </div>
      </div>
      <div class="timeline-item mb-4">
        <div class="card" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          <div class="card-body">
            <h5 class="fw-semibold">2010 - Ekspansi Fasilitas</h5>
            <p>Pembangunan gedung baru dan laboratorium modern untuk mendukung pembelajaran.</p>
          </div>
        </div>
      </div>
      <div class="timeline-item">
        <div class="card" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          <div class="card-body">
            <h5 class="fw-semibold">2020 - Pendidikan Digital</h5>
            <p>Pengenalan platform pembelajaran online untuk mendukung pendidikan jarak jauh.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection