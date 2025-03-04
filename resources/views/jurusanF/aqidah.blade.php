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
                            Jurusan Aqidah dan Filsafat Islam</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
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
                        <h5 class=" mb-4">A</h5>
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
                    <h1 class="display-6 mb-4">Aqidah dan Filsafat Islam</h1>
                    <p class="mb-4">Program Studi Aqidah dan Filsafat Islam berkomitmen menjadi pusat keunggulan dalam bidang keaqidahan dan kefilsafatan berbasis Qurani dengan bingkai akhlak mulia.
                         Prodi ini fokus membentuk mahasiswa dengan aqidah Islam yang kokoh dan berakhlak mulia, serta menghasilkan
                         sarjana dengan kemampuan berpikir kritis, analitis, dan komprehensif, berwawasan global, dan kearifan lokal.
                         Prodi ini juga mendorong terbentuknya komunitas religius, damai, dan toleran.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight teks-ushuluddin" data-wow-delay="0.4s">
                <div class="pb-5">
                    <img src="{{ asset('frontend/img/Group 1.png') }}"
                        class="img-fluid rounded w-100 img-ushuluddin" style="object-fit: cover;" alt="Image">
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
                    <h1 class="display-6 mb-4">Akreditasi Jurusan Aqidah dan Filsafat Islam</h1>
                    <p class="mb-4">Jurusan Aqidah dan Filsafat Islam Fakultas Ushuluddin Universitas Islam Negeri Sunan Gunung Djati Bandung terakreditasi "Unggul"
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
                    </center>
                    <p class="mb-4">
                        “Menjadi Jurusan Aqidah dan Filasat Islam yang unggul dan kompetitif
                        dalam bidang Keaqidahan dan Kefilsafatan yang berbasis Qurani dalam bingkai Akhlak Mulia di Asia Tenggara pada tahun 2025”
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
                        <li>Menyelenggarakan pendidikan bagi mahasiswa Aqidah dan Filasat Islam yang beraqidah Islam kuat dan berahklak mulia;
                        </li>
                        <li>Menyelenggarakan pendidikan yang menghasilkan sarjana yang berpikir kritis analitis, komprehensif,
                            dengan wawasan global sekaligus berkearifan lokal dalam bingkai wahyu memandu ilmu;
                        </li>
                        <li>Mengembangkan riset unggulan pada bidang Aqidah dan Filasat Islam pada wilayah Masyarakat Jawa Barat, Nasional dan Asean;
                        </li>
                        <li>Mendorong tumbuhkembangnya komunitas masyarakat Jawa Barat yang relijius, damai dan toleran.
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
                        <li>Menghasilkan Sarjana Aqidah dan Filasat Islam yang memiliki keunggulan dalam akhlak, keilmuan, penelitian-pengembangan, benteng aqidah umat,
                             memiliki integritas serta tanggung jawab ilmiah dan sosial, baik dalam tugas-tugas maupun pengalaman ilmiah;
                        </li>
                        <li>Mencetak lulusannya sebagai pemikir Muslim yang profesional dengan empat kekuatan yaitu: beraqidah Islam kuat dan berakhlakul karimah, mengembangkan terus kajian teks Qur’aniyah dan kauniyah,
                             berpikir komprehensif, berwawasan global dengan berkeariarifan lokal;
                        </li>
                        <li> Menghasilkan penelitian yang unggul di bidang Aqidah dan Filasat Islam;
                        </li>
                        <li>Membangun komunitas masyarakat Filsafat yang relijius, damai dan toleran
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
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <center>
                            <h1 class="display-6 mb-4">Sasaran</h1>
                        </center>
                        <ol style="line-height: 1.8; padding-left: 15px; text-align: left;">
                            <li>Menghasilkan sarjana yang mampu mengembangkan paradigma keilmuan di bidang Aqidah dan Filsafat yang mewujudkan keterpaduan antara iman, takwa dan ilmu pengetahuan.
                            </li>
                            <li>Menghasilkan sarjana Filsafat Islam yang memiliki kemampuan akademik dan profesional dalam menjalankan tugas.
                            </li>
                            <li>Menghasilkan sarjana Filsafat Islam yang mampu merespon perkembangan dan kebutuhan masyarakat, serta dapat melakukan inovasi-inovasi baru dalam bidang pemikiran yang berlandaskan quraniyah dan kauniyah.
                            </li>
                            <li>Menghasilkan sarjana Filsafat Islam yang mampu memberikan keteladanan dalam kehidupan atas dasar nilai-nilai Islam dan budaya luhur bangsa dengan berkearifan lokal.
                            </li>
                        </ol>
                    </div>
                </div>
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
                    <h1 class="display-6 mb-4">Aqidah dan Filsafat Islam</h1>
                    <h4 class="mb-4">Ingin mengetahui lebih lanjut?
                    </h4>
                    <a class="btn btn-selengkapnya rounded-pill py-2 px-5 wow fadeInUp" data-wow-delay="0.10s" target="_blank"
                            href="https://afi.uinsgd.ac.id/">Info Selengkapnya</a>
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
