@extends('layouts.app')

@section('title','Galeri - Karang Taruna')

@section('content')
<section class="gallery">
    <div class="container">
        <h2 class="section-title"><i class="fas fa-images"></i> Galeri Kegiatan</h2>

        <!-- Gallery grid -->
        <div class="gallery-grid" id="galleryGrid">
            <!-- Replace these filenames with your real files under resources/images/ -->
            @php
                $items = [
                    ['file' => 'ramadhan2.jpg', 'caption' => 'Pelatihan Wirausaha'],
                    ['file' => 'wayangan1.JPG', 'caption' => 'Bakti Sosial'],
                    ['file' => 'wongnyeni.jpeg', 'caption' => 'Penangkapan Musang King😢'],
                    ['file' => 'nuzulul1.jpeg', 'caption' => 'Kemah Pemuda'],
                    ['file' => 'nuzulul3.jpeg', 'caption' => 'Pelatihan Keterampilan'],
                    ['file' => 'wayangan2.JPG', 'caption' => 'Festival Seni'],
                    ['file' => 'wayangan3.JPG', 'caption' => 'Festival Seni'],
                    ['file' => 'wayangan4.JPG', 'caption' => 'Festival Seni'],
                    ['file' => 'wayangan5.JPG', 'caption' => 'Festival Seni'],
                    ];
            @endphp

            @foreach ($items as $it)
                <div class="gallery-item" tabindex="0" data-src="{{ Vite::asset('resources/images/' . $it['file']) }}" data-caption="{{ $it['caption'] }}">
                    <img src="{{ Vite::asset('resources/images/' . $it['file']) }}" alt="{{ $it['caption'] }}" onerror="this.src='https://via.placeholder.com/600x400?text=No+Image'" loading="lazy">
                    <div class="gallery-caption">{{ $it['caption'] }}</div>
                </div>
            @endforeach
        </div>

        <!-- Lightbox / modal -->
        <div id="galleryLightbox" class="lightbox" aria-hidden="true">
            <button class="lightbox-close" aria-label="Tutup">×</button>
            <div class="lightbox-inner">
                <button class="lightbox-prev" aria-label="Sebelumnya">‹</button>
                <div class="lightbox-media">
                    <img src="" alt="" id="lightboxImg">
                    <div class="lightbox-caption" id="lightboxCaption"></div>
                </div>
                <button class="lightbox-next" aria-label="Berikutnya">›</button>
            </div>
        </div>
    </div>
</section>

<!-- Inline CSS specific to gallery to ensure display even if main CSS is missing -->
<style>
    .gallery { padding: 40px 0; }
    .gallery-grid { display: grid; grid-template-columns: repeat(auto-fit,minmax(220px,1fr)); gap:18px; margin-top:18px; }
    .gallery-item { position:relative; overflow:hidden; border-radius:12px; background:#fff; box-shadow:0 8px 25px rgba(0,0,0,.08); cursor:pointer; }
    .gallery-item img{ width:100%; height:200px; object-fit:cover; display:block; transition:transform .35s ease; }
    .gallery-item:hover img, .gallery-item:focus img{ transform:scale(1.05); }
    .gallery-caption{ position:absolute; left:0; right:0; bottom:0; padding:10px 12px; background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.55) 100%); color:#fff; font-weight:600; }

    /* Lightbox */
    .lightbox{ position:fixed; inset:0; display:flex; align-items:center; justify-content:center; background:rgba(0,0,0,0.8); z-index:1000; visibility:hidden; opacity:0; transition:opacity .25s ease, visibility .25s ease; }
    .lightbox[aria-hidden="false"]{ visibility:visible; opacity:1 }
    .lightbox-inner{ display:flex; align-items:center; gap:12px; max-width:1100px; width:100%; padding:24px; }
    .lightbox-media{ flex:1; text-align:center; }
    .lightbox-media img{ max-width:100%; max-height:80vh; border-radius:8px; box-shadow:0 12px 40px rgba(0,0,0,0.5); }
    .lightbox-caption{ color:#fff; margin-top:12px; font-size:1rem }
    .lightbox-prev, .lightbox-next{ background:transparent; border:0; color:#fff; font-size:40px; cursor:pointer; padding:6px 12px }
    .lightbox-close{ position:absolute; right:18px; top:18px; background:transparent; border:0; color:#fff; font-size:32px; cursor:pointer }

    @media (max-width:768px){ .gallery-item img{ height:160px } .lightbox-inner{ padding:12px } }
</style>

<!-- Inline JS for lightbox (simple, no external lib) -->
<script>
    document.addEventListener('DOMContentLoaded', function (){
        const items = Array.from(document.querySelectorAll('#galleryGrid .gallery-item'));
        const lightbox = document.getElementById('galleryLightbox');
        const lightboxImg = document.getElementById('lightboxImg');
        const lightboxCaption = document.getElementById('lightboxCaption');
        const btnClose = document.querySelector('.lightbox-close');
        const btnNext = document.querySelector('.lightbox-next');
        const btnPrev = document.querySelector('.lightbox-prev');
        let index = -1;

        function openAt(i){
            const el = items[i];
            if(!el) return;
            const src = el.getAttribute('data-src');
            const caption = el.getAttribute('data-caption') || '';
            lightboxImg.src = src;
            lightboxImg.alt = caption;
            lightboxCaption.textContent = caption;
            lightbox.setAttribute('aria-hidden','false');
            index = i;
        }

        function closeBox(){
            lightbox.setAttribute('aria-hidden','true');
            lightboxImg.src = '';
            index = -1;
        }

        items.forEach((it, i) => {
            it.addEventListener('click', () => openAt(i));
            it.addEventListener('keydown', (e) => { if(e.key === 'Enter' || e.key === ' ') { e.preventDefault(); openAt(i); } });
        });

        btnClose.addEventListener('click', closeBox);
        lightbox.addEventListener('click', (e)=>{ if(e.target === lightbox) closeBox(); });
        btnNext.addEventListener('click', ()=> openAt((index+1) % items.length));
        btnPrev.addEventListener('click', ()=> openAt((index-1+items.length) % items.length));

        document.addEventListener('keydown', (e)=>{
            if(lightbox.getAttribute('aria-hidden') === 'false'){
                if(e.key === 'Escape') closeBox();
                if(e.key === 'ArrowRight') openAt((index+1) % items.length);
                if(e.key === 'ArrowLeft') openAt((index-1+items.length) % items.length);
            }
        });
    });
</script>

@endsection
