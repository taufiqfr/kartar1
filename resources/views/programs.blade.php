@extends('layouts.app')

@section('title','Program Unggulan - Karang Taruna')

@section('content')
<section class="programs">
    <h2 class="section-title"><i class="fas fa-star"></i> Program Unggulan</h2>
    <div class="programs-grid">
        <div class="program-card">
            <div class="program-icon"><i class="fas fa-graduation-cap"></i></div>
            <h3>Rumah Belajar</h3>
            <p>Program bimbingan belajar gratis untuk anak-anak kurang mampu dengan tutor dari anggota karang taruna.</p>
        </div>

        <div class="program-card">
            <div class="program-icon"><i class="fas fa-basketball-ball"></i></div>
            <h3>Youth Sports League</h3>
            <p>Kompetisi olahraga antar pemuda untuk mengembangkan talenta dan menjaga kebugaran.</p>
        </div>

        <div class="program-card">
            <div class="program-icon"><i class="fas fa-paint-brush"></i></div>
            <h3>Seni Kreatif</h3>
            <p>Workshop dan pelatihan seni seperti musik, tari, teater, dan kerajinan tangan.</p>
        </div>

        <div class="program-card">
            <div class="program-icon"><i class="fas fa-seedling"></i></div>
            <h3>Green Youth</h3>
            <p>Gerakan peduli lingkungan dengan kegiatan penghijauan dan pengelolaan sampah.</p>
        </div>
    </div>
</section>
@endsection
