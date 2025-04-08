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
                                Sambutan Dekan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about py-4 mb-0 mt-0">
        <div class="container py-4">
            <div class="row g-5 d-flex align-items-center">
                @foreach ($sambutan as $item)
                <!-- Gambar di sebelah kiri -->
                <div class="col-lg-6">
                    <img src="{{ asset('storage/images/sambutan/' . $item->foto) }}" alt="image" class="img-fluid wow fadeInUp mb-5"
                        data-wow-delay="0.3s" style="max-width: 100%; height: auto;">
                </div>
                <!-- Teks di sebelah kanan -->
                <div class="col-lg-6 wow fadeInLeft d-flex flex-column text-start" data-wow-delay="0.2s">
                    <div class="section-title mt-5">
                        <h1 class="display-5 mb-4">Sambutan Dekan</h1>
                        <p>{{ $item->sambutan }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/img/FU-DEKAN1.png') }}" alt="image" class="img-fluid wow fadeInUp mb-5"
                        data-wow-delay="0.3s" style="max-width: 100%; height: auto;">
                </div>
                <!-- Teks di sebelah kanan -->
                <div class="col-lg-6 wow fadeInLeft d-flex flex-column text-start" data-wow-delay="0.2s">
                    <div class="section-title mt-5">
                        <h1 class="display-5 mb-4">Sambutan Dekan</h1>
                        <p>Assalamualaikum, Wr, Wb.</p>
                        <p>Puji syukur kita panjatkan kehadirat Allah Subhanahu wa Ta'ala yang telah memberikan limpahan
                            rahmat dan hidayah-Nya untuk kita semua. Atas nama Dekan Fakultas Ushuluddin UIN Sunan Gunung
                            Djati Bandung, saya
                            dengan rendah hati mengucapkan selamat datang ke website resmi Fakultas Ushuluddin kepada
                            seluruh civitas akademika, mahasiswa, dosen, staf, dan tamu.
                        </p>
                        <p>Fakultas Ushuluddin UIN Sunan Gunung Djati Bandung adalah sebuah lembaga pendidikan tinggi yang
                            berkomitmen kuat
                            untuk menjaga, memahami, dan menyebarkan ajaran agama Islam sebagai rahmatan lil'alamin.
                            Fakultas Ushuluddin berupaya menjembatani antara agama dan kehidupan sehari-hari, antara ilmu
                            pengetahuan dan nilai-nilai moral, serta antara kearifan lokal dan global.
                        </p>
                        <p>
                            Terakhir, saya ingin mengucapkan terima kasih kepada seluruh civitas akademika yang telah
                            berperan aktif dalam mengembangkan fakultas ini. Mari bersama-sama kita terus berupaya
                            meningkatkan mutu pendidikan dan pengabdian kepada masyarakat, serta mengambil peran dalam
                            menciptakan dunia yang lebih baik sesuai dengan tuntunan agama.
                        </p>
                        <p>Terima kasih telah berkunjung di tempat kami.</p>

                        <p>Wallahul Muwaffiq ila Aqwamit Tharieq.<br>
                            Wassalamu’alaikum Warahmatullahi Wabarakatuh.</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About End -->
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
