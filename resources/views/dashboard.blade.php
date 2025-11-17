@extends('layouts.app')

@section('title','Dashboard - Karang Taruna')

@section('content')
    <!-- Hero Section -->
    <section class="hero" style="background: linear-gradient(135deg, rgba(44,62,80,0.8) 0%, rgba(52,73,94,0.9) 100%), url('{{ Vite::asset('resources/images/wongnyeni.jpeg') }}') no-repeat center center fixed; background-size: cover;">
        <div class="container">
            <h2>Selamat Datang di Karang Taruna "Taruna Madya"</h2>
            <p>Wadah pengembangan generasi muda untuk berkontribusi dalam pembangunan masyarakat dan bangsa.</p>
            <a href="{{ route('kegiatan') }}" class="btn">Lihat Kegiatan Terbaru</a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container">

        <!-- Profile Section -->
        <section id="profil" class="profile">
            <div class="profile-img">
                <img src="{{ Vite::asset('resources/images/logokartar.jpg') }}" alt="Logo Karang Taruna">
            </div>
            <div class="profile-info">
                <h2>Karang Taruna "Taruna Madya"</h2>
                <p>Karang Taruna Taruna Madya adalah organisasi kepemudaan yang berdiri sejak 2010. Kami berkomitmen untuk memberdayakan generasi muda melalui berbagai kegiatan positif yang bermanfaat bagi masyarakat.</p>
                <p>Dengan semangat kebersamaan dan kreativitas, kami terus berinovasi menciptakan program-program yang relevan dengan kebutuhan pemuda zaman sekarang.</p>
            </div>
        </section>

        <!-- Vision & Mission Section -->
        <section id="visi-misi" class="vision-mission">
            <h2 class="section-title"><i class="fas fa-bullseye"></i> Visi & Misi Ketua</h2>
            <div class="vm-container">
                <div class="vision">
                    <h3>Visi Ketua</h3>
                    <p>"Menjadi wadah pengembangan potensi pemuda yang kreatif, inovatif, dan berkarakter untuk membangun masyarakat yang sejahtera."</p>
                </div>
                <div class="mission">
                    <h3>Misi Ketua</h3>
                    <ul>
                        <li>Mengembangkan bakat dan minat pemuda di berbagai bidang</li>
                        <li>Menumbuhkan jiwa kepemimpinan dan entrepreneurship</li>
                        <li>Melaksanakan kegiatan sosial yang bermanfaat bagi masyarakat</li>
                        <li>Memperkuat jaringan dan kolaborasi dengan berbagai pihak</li>
                        <li>Mendorong partisipasi pemuda dalam pembangunan</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="stats-container">
                <div class="stat-item">
                    <h3>150+</h3>
                    <p>Anggota Aktif</p>
                </div>
                <div class="stat-item">
                    <h3>25+</h3>
                    <p>Kegiatan/Tahun</p>
                </div>
                <div class="stat-item">
                    <h3>10+</h3>
                    <p>Program Unggulan</p>
                </div>
                <div class="stat-item">
                    <h3>5+</h3>
                    <p>Penghargaan</p>
                </div>
            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="testimonial-section">
            <h2 class="section-title"><i class="fas fa-comment"></i> Apa Kata Anggota Kami?</h2>
            <div class="testimonial-cards">
                <div class="testimonial-card">
                    <p class="testimonial-text">"Karang Taruna memberikan wadah yang sangat baik untuk mengembangkan potensi diri dan berkontribusi untuk masyarakat."</p>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://via.placeholder.com/50" alt="Budi Utomo">
                        </div>
                        <div class="author-info">
                            <h4>Budi Utomo</h4>
                            <p>Anggota Aktif</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <p class="testimonial-text">"Melalui kegiatan Karang Taruna, saya bisa belajar banyak hal baru dan memperluas jaringan pertemanan."</p>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://via.placeholder.com/50" alt="Siti Rahayu">
                        </div>
                        <div class="author-info">
                            <h4>Siti Rahayu</h4>
                            <p>Ketua Divisi Sosial</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <p class="testimonial-text">"Program-program Karang Taruna sangat bermanfaat untuk pengembangan keterampilan dan kepemimpinan pemuda."</p>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://via.placeholder.com/50" alt="Ahmad Prayoga">
                        </div>
                        <div class="author-info">
                            <h4>Ahmad Prayoga</h4>
                            <p>Koordinator Kegiatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection