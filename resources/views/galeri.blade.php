@extends('layouts.app')

@section('title','Galeri - Karang Taruna')

@section('content')
<section class="gallery">
    <h2 class="section-title"><i class="fas fa-images"></i> Galeri Kegiatan</h2>
    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x200" alt="Kegiatan 1">
            <div class="gallery-caption">Pelatihan Wirausaha</div>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x200" alt="Kegiatan 2">
            <div class="gallery-caption">Bakti Sosial</div>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x200" alt="Kegiatan 3">
            <div class="gallery-caption">Lomba 17 Agustus</div>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x200" alt="Kegiatan 4">
            <div class="gallery-caption">Kemah Pemuda</div>
        </div>
    </div>
</section>
@endsection
