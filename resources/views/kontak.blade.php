@extends('layouts.app')

@section('title','Kontak - Karang Taruna')

@section('content')
<section class="contact-page">
    <h2 class="section-title"><i class="fas fa-envelope"></i> Kontak Kami</h2>
    <div class="contact-grid" style="display:grid;grid-template-columns:1fr;gap:1rem;">
        <div class="contact-card" style="background:var(--white);padding:1rem;border-radius:8px;box-shadow:var(--shadow);">
            <p><i class="fas fa-map-marker-alt"></i> Jl. Pemuda No. 123</p>
            <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
            <p><i class="fas fa-envelope"></i> karangtaruna@email.com</p>
        </div>
        <div class="contact-card" style="background:var(--white);padding:1rem;border-radius:8px;box-shadow:var(--shadow);">
            <h4>Ikuti Kami</h4>
            <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection
