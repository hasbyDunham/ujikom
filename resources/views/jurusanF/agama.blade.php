@extends('layouts.frontend')
@section('content')
<!-- Carousel Start -->
<div class="carousel-head">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{ asset('frontend/img/banner-menu.jpg') }}" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="text-start pb-5" style="max-width: 100%; margin-right: 40%">
                        <h3 class="display-1 text-white text-capitalize fs-3 wow fadeInUp" data-wow-delay="0.5s">
                            Fakultas Ushuluddin
                        </h3>
                        <h2 class="display-5 text-capitalize text-white wow fadeInUp" data-wow-delay="0.3s">
                            Jurusan Studi Agama-agama</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
@php
    // $jurusan = Jurusan::all();
    $jurusan = \App\Models\Jurusan::all();
@endphp
{{--  --}}
<div class="container-fluid  about-ushuluddin py-4 mb-0 mt-0">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                    <center>
                        <p class="mb-4">
                            Akreditasi :
                        </p>
                        <h5 class=" mb-4">B</h5>
                    </center>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                        <center>
                            <p class="mb-4">
                                Gelar Lulusan
                            </p>
                            <h5 class=" mb-4">Gelar Lulusan</h5>
                        </center>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                        <center>
                            <p class="mb-4">
                                SK Penyelenggaraan
                            </p>
                            <h5 class=" mb-4">Nomor: 2108 Tahun 2017</h5>
                        </center>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                    <center>
                        <p class="mb-4">
                            Tanggal Berdiri
                        </p>
                        <h5 class=" mb-4">11 April 2017</h5>
                    </center>
                </div>
            </div>

        </div>
    </div>
</div>
{{--  --}}
<!-- About Start -->
<div class="container-fluid  about-ushuluddin py-4 mb-0 mt-0">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                    <h1 class="display-6 mb-4">Studi Agama-agama</h1>
                    <p class="mb-4">Kehadiran Prodi Studi Agama-Agama dilatarbelakangi oleh realitas masyarakat yang
                        memiliki pelbagai agama dan keyakinan. Pada tahun 1960-an, masyarakat Jawa Barat menghadapi
                        tantangan dalam menciptakan hubungan harmonis antar pemeluk agama. Fenomena ini bersumber dari
                        kurang harmonisnya interaksi dan komunikasi antar penganut agama. Klaim kebenaran (truth claim)
                        dari suatu agama terhadap agama lain sering menjadi pemicu konflik di Indonesia. Oleh karena
                        itu, dibutuhkan penghayatan dari setiap warga negara terhadap ajaran agamanya masing-masing
                        dengan kesadaran kebersamaan dalam perbedaan (agree in disagreement). Islam sebagai mayoritas di
                        Indonesia memiliki tanggung jawab untuk menyadarkan akan keberagamaan dan menciptakan rahmatan
                        lil ‘alamin bagi agama-agama lain.
                        Untuk itu, dibutuhkan wadah kajian yang mengkhususkan diri dalam mengkaji agama dan keberagamaan
                        secara ilmiah akademik dalam bentuk sebuah program studi.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight teks-ushuluddin" data-wow-delay="0.4s">
                <div class="pb-5">
                    <img src="{{ asset('frontend/img/studiagama1.png') }}" class="img-fluid rounded w-100 img-ushuluddin"
                        style="object-fit: cover;" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- About Start -->
<div class="container-fluid  about-ushuluddin py-4 mb-0 mt-0">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="pb-5">
                    <img src="{{ asset('frontend/img/studiagama2.png') }}"
                        class="img-fluid rounded w-100 img-ushuluddin" style="object-fit: cover;" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight teks-ushuluddin" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <h1 class="display-6 mb-4">Menumbuhkan Moderasi, Memperkuat Harmoni untuk Indonesia Maju</h1>
                    <p class="mb-4">Program Studi Studi Agama-Agama jenjang sarjana di Fakultas Ushuluddin, Universitas
                        Islam Negeri (UIN) Sunan Gunung Djati Bandung, telah hadir sejak 8 April 1968. Izin operasional
                        Prodi ini dikeluarkan bersamaan dengan pendirian Fakultas Ushuluddin dan IAIN Sunan Gunung
                        Djati, berdasarkan Keputusan Menteri Agama Nomor 57 Tahun 1968.
                        Pada 7 Desember 2016, nomenklatur prodi ini disesuaikan melalui Keputusan Direktur Jenderal
                        Pendidikan Islam. Dengan visi unggul dan kompetitif berbasis wahyu memandu ilmu, Prodi Studi
                        Agama-Agama mempersiapkan lulusan yang bertakwa, berakhlak mulia, serta mampu menjaga kerukunan
                        antarumat beragama di tingkat nasional maupun regional.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Visi Misi Start -->
<div class="container-fluid about py-4 mb-0 mt-0">
    <div class="container py-4">
        <!-- Motto and Visi Section (Sejajar) -->
        <div class="row g-5 justify-content-center">
            <!-- Motto Section -->
            {{-- <div class="col-lg-6 wow fadeInLeft d-flex flex-column align-items-center text-center"
                data-wow-delay="0.2s">
                <div class="section-title mb-5">
                    <h1 class="display-5 mb-4">Motto</h1>
                    <p class="mb-4">"Unggul, Kompetitif, Moderat"</p>
                </div>
            </div> --}}
            <!-- Visi Section -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <center>
                        <h1 class="display-6 mb-4">Visi</h1>
                    </center>
                    <p class="mb-4">
                        Unggul dan Kompetitif di Bidang Studi Agama-Agama Berbasis Wahyu Memandu Ilmu dalam Bingkai Akhlak Karimah di Asia Tenggara Tahun 2025.
                    </p>
                </div>
            </div>
        </div>

        <!-- Misi and Tujuan Section (Dibawah Motto dan Visi) -->
        <div class="row g-5 justify-content-center">
            <!-- Misi Section -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <center>
                        <h1 class="display-6 mb-4">Misi</h1>
                    </center>
                    <ol style="line-height: 1.8; padding-left: 15px;">
                        <li>Menyelenggarakan pengajaran, penelitian, dan pengabdian di bidang Studi Agama-Agama yang berkualitas dan relevan dengan kebutuhan nasional yang berdaya saing global.
                        </li>
                        <li>Meningkatkan kualitas sumber daya manusia Indonesia yang cakap mental, spiritual, dan intelektual.
                        </li>
                        <li>Mengembangkan inovasi-inovasi dalam bidang Studi Agama-Agama dan mengembangkan kemandirian lulusan.
                        </li>
                    </ol>
                </div>
            </div>
            <!-- Tujuan Section -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.6s">
                <div class="section-title text-start mb-5">
                    <center>
                        <h1 class="display-6 mb-4">Tujuan</h1>
                    </center>
                    <ol style="line-height: 1.8; padding-left: 15px;">
                        <li>Menghasilkan sarjana Agama yang ahli studi Agama-Agama berdaya saing tinggi di tingkat nasional maupun regional, bertakwa dan berakhlak mulia.
                        </li>
                        <li>Menghasilkan sarjana agama yang mampu menyebarkan rahmat kepada seluruh alam berdasarkan tuntunan nilai-nilai keislaman dan keindonesiaan.
                        </li>
                        <li>Menghasilkan sarjana agama yang terampil melayani berbagai kebutuhan masyarakat dalam bidang Studi Agama-Agama.
                        </li>
                        <li>Menghasilkan sarjana agama yang berpikiran terbuka, bersikap toleran terhadap perbedaan, dan mampu membina kerukunan antar umat beragama.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Visi End -->
<!-- Carousel Start -->
@foreach ($jurusan as $item)
<div class="container-fluid  about-ushuluddin py-4 mb-0 mt-0">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            <div class="col-lg-10 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                    <h1 class="display-6 mb-4">{{ $item->judul_akhir }}</h1>
                    <h4 class="mb-4">{{ $item->nanya }}
                    </h4>
                    <a class="btn btn-selengkapnya rounded-pill py-2 px-5 wow fadeInUp" data-wow-delay="0.10s" target="_blank"
                        href="{{ $item->url }}">Info Selengkapnya</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endforeach
<div class="container-fluid  about-ushuluddin py-4 mb-0 mt-0">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            <div class="col-lg-10 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                    <h1 class="display-6 mb-4">Studi Agama-agama</h1>
                    <h4 class="mb-4">Ingin mengetahui lebih lanjut?
                    </h4>
                    <a class="btn btn-selengkapnya rounded-pill py-2 px-5 wow fadeInUp" data-wow-delay="0.10s" target="_blank"
                        href="http://saa.uinsgd.ac.id/">Info Selengkapnya</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Carousel End -->

@endsection
@push('script')
<script>
    var navbarColor = {!! json_encode(env('NAVBAR_COLOR', 'white')) !!};
        var footerColor = {!! json_encode(env('FOOTER_COLOR', 'black')) !!};
        var teksNavbar = {!! json_encode(env('TEKS_NAVBAR_COLOR', 'black')) !!};
        var teksFooter = {!! json_encode(env('TEKS_FOOTER_COLOR', 'white')) !!};
</script>

{{-- Mengatur document title menggunakan variabel dari Laravel --}}
<script>
    document.title = @json(config('app.title'));
</script>
@endpush
