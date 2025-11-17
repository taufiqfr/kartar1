@extends('layouts.app')

@section('title','Kepemimpinan - Karang Taruna')

@section('content')
<section class="leadership">
    <h2 class="section-title"><i class="fas fa-user-tie"></i> Kepemimpinan</h2>

    <!-- Lurah Section -->
    <div class="leader-section">
        <div class="leader-photo">
            <img src="https://via.placeholder.com/250x300" alt="Foto Lurah">
            <div class="leader-info">
                <h3>Drs. H. Ahmad Sudrajat</h3>
                <p class="leader-position">Lurah Desa Makmur</p>
                <p class="leader-tenure">Masa Jabatan: 2021-2026</p>
            </div>
        </div>
        <div class="leader-vision-mission">
            <h3>Visi & Misi Lurah</h3>
            <div class="vision-mission-content">
                <div class="vision-item">
                    <h4><i class="fas fa-bullseye"></i> Visi Lurah</h4>
                    <p>"Terwujudnya Desa Makmur yang Mandiri, Sejahtera, dan Berbudaya melalui Pemberdayaan Pemuda"</p>
                </div>
                <div class="mission-item">
                    <h4><i class="fas fa-tasks"></i> Misi Lurah</h4>
                    <ul>
                        <li>Mendorong partisipasi aktif pemuda dalam pembangunan desa</li>
                        <li>Mengembangkan potensi ekonomi kreatif generasi muda</li>
                        <li>Memperkuat karakter dan kepemimpinan pemuda</li>
                        <li>Menjalin sinergi antara pemerintah desa dan karang taruna</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Ketua Karang Taruna Section -->
    <div class="leader-section ketua-section">
        <div class="leader-photo">
            <img src="https://via.placeholder.com/250x300" alt="Foto Ketua Karang Taruna">
            <div class="leader-info">
                <h3>Ahmad Rizki</h3>
                <p class="leader-position">Ketua Karang Taruna</p>
                <p class="leader-tenure">Masa Jabatan: 2023-2025</p>
            </div>
        </div>
        <div class="leader-vision-mission">
            <h3>Visi & Misi Ketua Karang Taruna</h3>
            <div class="vision-mission-content">
                <div class="vision-item">
                    <h4><i class="fas fa-bullseye"></i> Visi Ketua</h4>
                    <p>"Menjadikan Karang Taruna sebagai Garda Terdepan dalam Memberdayakan Potensi Pemuda Desa Makmur"</p>
                </div>
                <div class="mission-item">
                    <h4><i class="fas fa-tasks"></i> Misi Ketua</h4>
                    <ul>
                        <li>Membangun sistem organisasi yang profesional dan akuntabel</li>
                        <li>Mengoptimalkan program pemberdayaan pemuda di semua bidang</li>
                        <li>Memperluas jaringan kemitraan dengan berbagai stakeholder</li>
                        <li>Menciptakan wadah kreativitas dan inovasi bagi anggota</li>
                        <li>Meningkatkan kualitas sumber daya manusia karang taruna</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
