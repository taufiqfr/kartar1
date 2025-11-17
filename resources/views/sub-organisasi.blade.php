@extends('layouts.app')

@section('title','Sub-Organisasi - Karang Taruna')

@section('content')
<!-- Sub-org -->

        <section id="sub-organisasi" class="sub-organizations">
            <h2 class="section-title"><i class="fas fa-network-wired"></i> Sub-Organisasi Karang Taruna</h2>
            <div class="sub-org-grid">
                <!-- Muda Mudi -->
                <div class="sub-org-card">
                    <div class="sub-org-logo" style="background-image: url('{{ Vite::asset('resources/images/suborg-bg.jpg') }}')">
                        <img src="{{ Vite::asset('resources/images/logokridha1.png') }}" alt="Kridha Remaja" />
                    </div>
                    <h3>Muda Mudi</h3>
                    <p class="sub-org-location">Wilayah RW 01 & 02</p>
                    <div class="sub-org-stats">
                        <div class="sub-stat">
                            <span class="sub-stat-value">45</span>
                            <span class="sub-stat-label">Anggota</span>
                        </div>
                        <div class="sub-stat">
                            <span class="sub-stat-value">12</span>
                            <span class="sub-stat-label">Kegiatan</span>
                        </div>
                    </div>
                    <button class="sub-org-btn">Lihat Detail</button>
                </div>

                <!-- Kridha Remaja -->
                <div class="sub-org-card">
                    <div class="sub-org-logo" style="background-image: url('{{ Vite::asset('resources/images/suborg-bg.jpg') }}')">
                        <img src="{{ Vite::asset('resources/images/logokridha1.png') }}" alt="Kridha Remaja" />
                    </div>
                    <h3>Kridha Remaja</h3>
                    <p class="sub-org-location">Wilayah RW 03 & 04</p>
                    <div class="sub-org-stats">
                        <div class="sub-stat">
                            <span class="sub-stat-value">38</span>
                            <span class="sub-stat-label">Anggota</span>
                        </div>
                        <div class="sub-stat">
                            <span class="sub-stat-value">15</span>
                            <span class="sub-stat-label">Kegiatan</span>
                        </div>
                    </div>
                    <button class="sub-org-btn">Lihat Detail</button>
                </div>

                <!-- Generasi Muda -->
                <div class="sub-org-card">
                    <div class="sub-org-logo" style="background-image: url('{{ Vite::asset('resources/images/suborg-bg.jpg') }}')">
                        <img src="{{ Vite::asset('resources/images/logokridha1.png') }}" alt="Kridha Remaja" />
                    </div>
                    <h3>Generasi Muda</h3>
                    <p class="sub-org-location">Wilayah RW 05 & 06</p>
                    <div class="sub-org-stats">
                        <div class="sub-stat">
                            <span class="sub-stat-value">52</span>
                            <span class="sub-stat-label">Anggota</span>
                        </div>
                        <div class="sub-stat">
                            <span class="sub-stat-value">18</span>
                            <span class="sub-stat-label">Kegiatan</span>
                        </div>
                    </div>
                    <button class="sub-org-btn">Lihat Detail</button>
                </div>

                <!-- Remaja Masjid -->
                <div class="sub-org-card">
                    <div class="sub-org-logo" style="background-image: url('{{ Vite::asset('resources/images/suborg-bg.jpg') }}')">
                        <img src="{{ Vite::asset('resources/images/logokridha1.png') }}" alt="Kridha Remaja" />
                    </div>
                    <h3>Remaja Masjid</h3>
                    <p class="sub-org-location">Wilayah RW 07</p>
                    <div class="sub-org-stats">
                        <div class="sub-stat">
                            <span class="sub-stat-value">42</span>
                            <span class="sub-stat-label">Anggota</span>
                        </div>
                        <div class="sub-stat">
                            <span class="sub-stat-value">20</span>
                            <span class="sub-stat-label">Kegiatan</span>
                        </div>
                    </div>
                    <button class="sub-org-btn">Lihat Detail</button>
                </div>

                <!-- Pemuda Peduli -->
                <div class="sub-org-card">
                    <div class="sub-org-logo" style="background-image: url('{{ Vite::asset('resources/images/suborg-bg.jpg') }}')">
                        <img src="{{ Vite::asset('resources/images/logokridha1.png') }}" alt="Kridha Remaja" />
                    </div>
                    <h3>Pemuda Peduli</h3>
                    <p class="sub-org-location">Wilayah RW 08</p>
                    <div class="sub-org-stats">
                        <div class="sub-stat">
                            <span class="sub-stat-value">35</span>
                            <span class="sub-stat-label">Anggota</span>
                        </div>
                        <div class="sub-stat">
                            <span class="sub-stat-value">14</span>
                            <span class="sub-stat-label">Kegiatan</span>
                        </div>
                    </div>
                    <button class="sub-org-btn">Lihat Detail</button>
                </div>

                <!-- Youth Creative -->
                <div class="sub-org-card">
                    <div class="sub-org-logo" style="background-image: url('{{ Vite::asset('resources/images/suborg-bg.jpg') }}')">
                        <img src="{{ Vite::asset('resources/images/logokridha1.png') }}" alt="Kridha Remaja" />
                    </div>
                    <h3>Youth Creative</h3>
                    <p class="sub-org-location">Wilayah RW 09</p>
                    <div class="sub-org-stats">
                        <div class="sub-stat">
                            <span class="sub-stat-value">28</span>
                            <span class="sub-stat-label">Anggota</span>
                        </div>
                        <div class="sub-stat">
                            <span class="sub-stat-value">16</span>
                            <span class="sub-stat-label">Kegiatan</span>
                        </div>
                    </div>
                    <button class="sub-org-btn">Lihat Detail</button>
                </div>

                <!-- Sport Youth -->
                <div class="sub-org-card">
                    <div class="sub-org-logo" style="background-image: url('{{ Vite::asset('resources/images/suborg-bg.jpg') }}')">
                        <img src="{{ Vite::asset('resources/images/logokridha1.png') }}" alt="Kridha Remaja" />
                    </div>
                    <h3>Sport Youth</h3>
                    <p class="sub-org-location">Wilayah RW 10</p>
                    <div class="sub-org-stats">
                        <div class="sub-stat">
                            <span class="sub-stat-value">40</span>
                            <span class="sub-stat-label">Anggota</span>
                        </div>
                        <div class="sub-stat">
                            <span class="sub-stat-value">22</span>
                            <span class="sub-stat-label">Kegiatan</span>
                        </div>
                    </div>
                    <button class="sub-org-btn">Lihat Detail</button>
                </div>

                <!-- Edu Youth -->
                <div class="sub-org-card">
                    <div class="sub-org-logo" style="background-image: url('{{ Vite::asset('resources/images/suborg-bg.jpg') }}')">
                        <img src="{{ Vite::asset('resources/images/logokridha1.png') }}" alt="Kridha Remaja" />
                    </div>
                    <h3>Edu Youth</h3>
                    <p class="sub-org-location">Wilayah RW 11 & 12</p>
                    <div class="sub-org-stats">
                        <div class="sub-stat">
                            <span class="sub-stat-value">48</span>
                            <span class="sub-stat-label">Anggota</span>
                        </div>
                        <div class="sub-stat">
                            <span class="sub-stat-value">19</span>
                            <span class="sub-stat-label">Kegiatan</span>
                        </div>
                    </div>
                    <button class="sub-org-btn">Lihat Detail</button>
                </div>
            </div>
        </section>
@endsection
