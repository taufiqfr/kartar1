@extends('layouts.app')

@section('title','Kegiatan - Karang Taruna')

@section('content')

<!-- Kegiatan dengan Carousel Gambar -->
<section id="kegiatan" class="activities">
    <h2 class="section-title"><i class="fas fa-calendar-alt"></i> Kegiatan Terbaru</h2>
        <div class="activity">
            <div class="activity-container">
                <!-- Carousel Gambar -->
                <div class="swiper carousel-activity-img">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ Vite::asset('resources/images/ramadhan1.jpg') }}" alt="Bazar Ramadhan">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ Vite::asset('resources/images/ramadhan2.jpg') }}" alt="Bazar Ramadhan">
                        </div>  
                    </div>
                    
                    <!-- Navigation -->
                    <div class="swiper-button-prev carousel-img-prev"></div>
                    <div class="swiper-button-next carousel-img-next"></div>
                    
                    <!-- Pagination -->
                    <div class="swiper-pagination carousel-img-pagination"></div>
                </div>

                <!-- Info Kegiatan -->
                <div class="activity-info">
                    <h3 class="activity-title">Bazar Ramadhan</h3>
                    <div class="activity-meta">
                        <span><i class="far fa-calendar"></i> 15 Nov 2024</span>
                        <span><i class="fas fa-map-marker-alt"></i> jl.sanggung</span>
                    </div>
                    <p class="activity-desc">Kegiatan Bazar Ramadhan Karang Taruna</p>
                    <span class="activity-status status-completed">Selesai</span>
                </div>
            </div>
            
            <div class="activity-container">
                <!-- Carousel Gambar -->
                <div class="swiper carousel-activity-img">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ Vite::asset('resources/images/wayangan1.JPG') }}" alt="Pelatihan Digital Marketing - 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ Vite::asset('resources/images/wayangan2.JPG') }}" alt="Pelatihan Digital Marketing - 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ Vite::asset('resources/images/wayangan3.JPG') }}" alt="Pelatihan Digital Marketing - 3">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ Vite::asset('resources/images/wayangan4.JPG') }}" alt="Pelatihan Digital Marketing - 3">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ Vite::asset('resources/images/wayangan5.JPG') }}" alt="Pelatihan Digital Marketing - 3">
                        </div>
                    </div>
                    
                    <!-- Navigation -->
                    <div class="swiper-button-prev carousel-img-prev"></div>
                    <div class="swiper-button-next carousel-img-next"></div>
                    
                    <!-- Pagination -->
                    <div class="swiper-pagination carousel-img-pagination"></div>
                </div>

                <!-- Info Kegiatan -->
                <div class="activity-info">
                    <h3 class="activity-title">Bersih Desa Sanggung</h3>
                    <div class="activity-meta">
                        <span><i class="far fa-calendar"></i> 10 JULI 2025</span>
                        <span><i class="fas fa-map-marker-alt"></i> Gedung Balai Karya</span>
                    </div>
                    <p class="activity-desc">Wayangan Dalam Rangka Bersih desa Bersama PemDes Desa sanggung.</p>
                    <span class="activity-status status-completed">Selesai</span>
                </div>
            </div>

            <div class="activity-container">
                <!-- Carousel Gambar -->
                <div class="swiper carousel-activity-img">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ Vite::asset('resources/images/nuzulul1.jpeg') }}" alt="Pelatihan Digital Marketing - 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ Vite::asset('resources/images/nuzulul2.jpeg') }}" alt="Pelatihan Digital Marketing - 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ Vite::asset('resources/images/nuzulul3.jpeg') }}" alt="Pelatihan Digital Marketing - 3">
                        </div>
                    </div>
                    
                    <!-- Navigation -->
                    <div class="swiper-button-prev carousel-img-prev"></div>
                    <div class="swiper-button-next carousel-img-next"></div>
                    
                    <!-- Pagination -->
                    <div class="swiper-pagination carousel-img-pagination"></div>
                </div>

                <!-- Info Kegiatan -->
                <div class="activity-info">
                    <h3 class="activity-title">Nuzulul Qur'an</h3>
                    <div class="activity-meta">
                        <span><i class="far fa-calendar"></i> 17 Mar 2025</span>
                        <span><i class="fas fa-map-marker-alt"></i> Gedung Balai Karya</span>
                    </div>
                    <p class="activity-desc">Kegiatan Memperingati Malam Nuzulul Qur'an</p>
                    <span class="activity-status status-completed">Selesai</span>
                </div>
            </div>
        </div>
</section>

<!-- Kegiatan Terpopuler -->
<section class="promo-section">
    <h2 class="section-title"><i class="fas fa-fire"></i> Kegiatan Terpopuler</h2>
    <div class="promo-cards">
        <div class="promo-card">
            <div class="promo-img">
                <img src="{{ Vite::asset('resources/images/ramadhan1.jpg') }}" alt="Pelatihan Digital Marketing">
            </div>
            <div class="promo-content">
                <h3 class="promo-title">Pelatihan Digital Marketing</h3>
                <p class="promo-desc">Pelatihan pemasaran digital untuk UMKM pemuda dengan pemateri dari praktisi industri.</p>
                <span class="promo-tag">Selesai</span>
            </div>
        </div>

        <div class="promo-card">
            <div class="promo-img">
                <img src="{{ Vite::asset('resources/images/ramadhan2.jpg') }}" alt="Turnamen Futsal Pemuda">
            </div>
            <div class="promo-content">
                <h3 class="promo-title">Turnamen Futsal Pemuda</h3>
                <p class="promo-desc">Kompetisi futsal antar RW dengan peserta dari berbagai kalangan pemuda.</p>
                <span class="promo-tag">Berlangsung</span>
            </div>
        </div>

        <div class="promo-card">
            <div class="promo-img">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Festival Seni Pemuda">
            </div>
            <div class="promo-content">
                <h3 class="promo-title">Festival Seni Pemuda</h3>
                <p class="promo-desc">Pameran dan pertunjukan seni karya pemuda lokal dengan berbagai kategori.</p>
                <span class="promo-tag">Akan Datang</span>
            </div>
        </div>
    </div>
</section>
@endsection
