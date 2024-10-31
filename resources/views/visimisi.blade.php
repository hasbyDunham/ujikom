@extends('layouts.frontend')
@section('content')
    <!-- Carousel Start -->
    <div class="carousel-head">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/img/visimisi.png') }}" class="img-fluid carousel-img" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about py-4 mb-0 mt-0">
        <div class="container py-4">
            <!-- Motto and Visi Section (Sejajar) -->
            <div class="row g-5 justify-content-center">
                <!-- Motto Section -->
                <div class="col-lg-6 wow fadeInLeft d-flex flex-column align-items-center text-center"
                    data-wow-delay="0.2s">
                    <div class="section-title mb-5">
                        <h1 class="display-5 mb-4">Motto</h1>
                        <p class="mb-4">"Unggul, Kompetitif, Moderat"</p>
                    </div>
                </div>
                <!-- Visi Section -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <center>
                            <h1 class="display-5 mb-4">Visi</h1>
                        </center>
                        <p class="mb-4">
                            “Menjadi Universitas Islam Negeri yang Unggul, Kompetitif, dan Inovatif berbasis Rahmatan
                            Lil
                            Alamin di Asia Tenggara Tahun 2029”
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
                            <h1 class="display-5 mb-4">Misi</h1>
                        </center>
                        <ol style="line-height: 1.8; padding-left: 15px;">
                            <li>Menyelenggarakan pendidikan yang berkualitas dan berkeadilan, berdaya saing global,
                                serta
                                menggunakan piranti TIK terkini dan terbarukan.</li>
                            <li>Menyelenggarakan penelitian dan kajian yang fokus pada isu-isu strategis, inovatif, dan
                                fungsional untuk pengembangan ipteks, profesi, dan masyarakat.</li>
                            <li>Mengembangkan pengabdian kepada masyarakat yang berkontribusi pada peningkatan indeks
                                literasi moderasi beragama, peningkatan kualitas kehidupan beragama, dan intensifikasi
                                dialog antar budaya pada tingkat nasional maupun tingkat Asia Tenggara.</li>
                            <li>Menciptakan lulusan yang memiliki keimanan dan ketaqwaan yang kuat, berwawasan luas,
                                berakhlak
                                karimah, serta mampu bersaing secara global, dengan semangat kebangsaan yang kuat.</li>
                            <li>Menyelenggarakan tata kelola layanan akademik dan administrasi berbasis TIK, yang
                                transparan,
                                akuntabel, serta mendukung iklim akademik yang mampu mewujudkan visi Universitas.</li>
                        </ol>
                    </div>
                </div>
                <!-- Tujuan Section -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.6s">
                    <div class="section-title text-start mb-5">
                        <center>
                            <h1 class="display-5 mb-4">Tujuan</h1>
                        </center>
                        <ol style="line-height: 1.8; padding-left: 15px; text-align: left;">
                            <li>Menyiapkan peserta didik dan lulusan yang berakhlak karimah, berwawasan luas
                                (knowledgeable), terampil (skillful), inovatif, mandiri, dan berjiwa kepemimpinan
                                melalui
                                penyediaan sistem pendidikan berkualitas, terintegrasi, dan berkelanjutan sehingga mampu
                                menerapkan, mengembangkan, memperkaya, dan memajukan Ipteks, kebudayaan nasional, dan
                                masyarakat.</li>
                            <li>Mengembangkan, mengintegrasikan, dan menyebarluaskan Ipteks sesuai perkembangan zaman
                                yang
                                berkontribusi pada peningkatan kesejahteraan masyarakat dan memperkuat kebudayaan
                                nasional.</li>
                            <li>Melalui berbagai bentuk PKM, Universitas mampu berkontribusi dalam pemberdayaan
                                masyarakat
                                dalam berbagai aspek kehidupan, penguatan literasi moderasi beragama, dan peningkatan
                                kerukunan beragama. Hal ini memperkuat peran Universitas sebagai penyelenggara
                                pendidikan
                                tinggi, bekerja sama dengan lembaga dan asosiasi profesi baik di dalam maupun luar
                                negeri,
                                sehingga lulusan dapat memperoleh keahlian pada tingkat profesional.</li>
                            <li>Menyiapkan alumni yang mampu berkiprah pada pengembangan masyarakat, ipteks, berdaya
                                saing
                                global, serta mampu menjadi problem solver dan agent of change.</li>
                            <li>Menjadi lembaga pendidikan tinggi yang memberikan kemudahan layanan yang terbuka,
                                terhubung,
                                kolaboratif, dan berdaya saing global melalui digitalisasi layanan, kemitraan yang
                                strategis
                                dengan berbagai institusi.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
@push('script')
    <script>
        var navbarColor = {!! json_encode(env('NAVBAR_COLOR', 'white')) !!};
        var footerColor = {!! json_encode(env('FOOTER_COLOR', 'black')) !!};
    </script>

    {{-- Mengatur document title menggunakan variabel dari Laravel --}}
    <script>
        document.title = @json(config('app.title'));
    </script>
@endpush
