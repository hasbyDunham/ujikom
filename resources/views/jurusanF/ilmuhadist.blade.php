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
                        <h2 class="display-6 text-capitalize text-white wow fadeInUp" data-wow-delay="0.3s">
                            Jurusan Ilmu Hadist</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
<!-- About Start -->
<div class="container-fluid  about-ushuluddin py-4 mb-0 mt-0">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                    <h1 class="display-6 mb-4">Mencerdaskan Generasi, Membangun Masa Depan Gemilang</h1>
                    <p class="mb-4">Program studi Ilmu Hadis merupakan pecahan dari Prodi induk Tafsir-Hadis, karena
                        bidang kajian dua keilmuan ini begitu luas, maka pada tahun 2015 Prodi Ilmu Hadis didirikan,
                        melalui Keputusan Direktur Jenderal Pendidikan Islam Nomor 1653 Tahun 2015. Kajian hadis di
                        Prodi Ilmu Hadis berbeda dengan studi serupa di lembaga pendidikan nonformal, misalnya
                        pesantren. Jika di pesantren, hadis dikaji secara normatif dan untuk kebutuhan pragmatis
                        pengamalan ajaran agama, pengkajian hadis di Prodi Ilmu Hadis adalah dengan menempatkannya
                        sebagai fakta sejarah yang bisa didekati oleh banyak teori keilmuan.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight teks-ushuluddin" data-wow-delay="0.4s">
                <div class="pb-5">
                    <img src="{{ asset('frontend/img/Group 1.png') }}" class="img-fluid rounded w-100 img-ushuluddin"
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
                    <img src="{{ asset('frontend/img/sertifikat_aqidah.jpg') }}"
                        class="img-fluid rounded w-100 img-ushuluddin" style="object-fit: cover;" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight teks-ushuluddin" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <h1 class="display-6 mb-4">Overview Program Studi</h1>
                    <p class="mb-4">Program Studi Ilmu Hadis bertujuan memadukan ilmu dan wahyu untuk membentuk
                        mahasiswa yang bermoral dan menguasai ilmu hadis. Misi kami mencakup pengembangan proses belajar
                        mengajar, penelitian, dan kajian ilmu hadis untuk menghasilkan alumni yang mampu merespons
                        perkembangan masyarakat. Lulusan dipersiapkan untuk mendeskripsikan dan mengembangkan kajian
                        hadis, mengidentifikasi dan memberikan solusi terhadap problematika sosial keagamaan, serta
                        bersikap profesional dan kompetitif di era globalisasi melalui pemahaman hadis di berbagai
                        sektor pendidikan dan organisasi."
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
                    <h1 class="display-6 mb-4">Motto</h1>
                    <p class="mb-4">"Unggul, Kompetitif, Moderat"</p>
                </div>
            </div> --}}
            <!-- Visi Section -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <center>
                        <h1 class="display-6 mb-4">Visi</h1>
                    </center>Menjadi Program Studi yang unggul dan kompetitif dalam mengembangkan sumber daya manusia
                    (mahasiswa) di bidang kajian ilmu Hadis berbasis wahyu memandu ilmu dalam bingkai Akhlak karimah di
                    Asean tahun 2025.
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
                        <li>Mengembangkan proses belajar mengajar untuk membentuk mahasiswa yang bermoral dan menguasai
                            bidangnya yang memadukan ilmu dan wahyu.
                        </li>
                        <li>Mengembangkan kajian dan penelitian dalam bidang ilmu hadis, sehingga alumni Program Studi
                            Ilmu Hadis yang mampu mendeskripsikan kaidah dan pemahaman dalam keilmuan yang dapat
                            merespon setiap perkembangan masyarakat disetiap jamannya
                        </li>
                        <li>Mengembangkan kemampuan mahasiswa untuk mencari alternatif pemecahan dari masalah sosial
                            keagamaan yang ada di tengah-tengah masyarakat melalui pendekatan pemahaman hadis, sehingga
                            Hadis dalam bentuk konsep-konsep dapat aplikasikan secara riil.
                        </li>
                    </ol>
                </div>
            </div>
            <!-- Tujuan Section -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.6s">
                <div class="section-title text-start mb-5">
                    <center>
                        <h1 class="display-6 mb-4">Kompetensi Program Studi</h1>
                    </center>
                    <ol style="line-height: 1.8; padding-left: 15px;">
                        <li>Mampu mendiskripsikan dan mengembangkan kajian keilmuan Hadis, secara teoritis maupun
                            praktis
                        </li>
                        <li>Memiliki kepekaan sosial untuk dapat mengidentifikasi dan memberi solusi terhadap
                            problematika masyarakat, terkait aspek pemahaman keilmuan Hadis.
                        </li>
                        <li>Menumbuhkan sikap professional untuk bersaing di era globalisasi melalui skill studi dan
                            pemahaman Hadits pada skala pendidikan, ataupun organisasi baik sosial keagamaan, dan
                            lembaga- lembaga formal lainnya
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                <!-- Motto Section -->
                {{-- <div class="col-lg-6 wow fadeInLeft d-flex flex-column align-items-center text-center"
                    data-wow-delay="0.2s">
                    <div class="section-title mb-5">
                        <h1 class="display-6 mb-4">Motto</h1>
                        <p class="mb-4">"Unggul, Kompetitif, Moderat"</p>
                    </div>
                </div> --}}
                <!-- Visi Section -->
            </div>
        </div>
    </div>
</div>
<!-- Visi End -->
<!-- Carousel Start -->
<div class="container-fluid  about-ushuluddin py-4 mb-0 mt-0">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            <div class="col-lg-10 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                    <h1 class="display-6 mb-4">Ilmu Hadist</h1>
                    <h4 class="mb-4">Ingin mengetahui lebih lanjut?
                    </h4>
                    <a class="btn btn-selengkapnya rounded-pill py-2 px-5 wow fadeInUp" data-wow-delay="0.10s"
                        href="https://ih.uinsgd.ac.id/">Info Selengkapnya</a>
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
