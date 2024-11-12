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
                                Pimpinan Fakultas</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about bg-light py-4 mb-0 mt-0">
        <div class="container py-4">
            <div class="row g-5 d-flex align-items-center">
                <h1 class="display-6 text-center wow fadeInRight" data-wow-delay="0.2s">Pimpinan Fakultas Ushuluddin</h1>
                <div class="col-lg-6 wow fadeInLeft d-flex flex-column text-center mx-auto" data-wow-delay="0.2s">
                    <div class="section-title mb-5">
                        <!-- Gambar utama di bawah judul -->
                        <img src="{{ asset('frontend/img/FU-DEKAN1.png') }}" class="img-fluid mx-auto d-block"
                            alt="Pimpinan FEBI" style="max-width: 60%;">
                        <h3 style="color: black;" class="mt-2">Prof. Dr. Wahyudin Darmalaksana, M.Ag</h3>
                        <h4>Dekan</h4>
                    </div>
                </div>
            </div>

            <!-- Row for three images below the main image -->
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-md-4 d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('frontend/img/FU-WD-1.png') }}" class="img-fluid" alt="Gambar 1"
                        style="max-width: 80%;">
                    <div>
                        <h4 style="color: black; margin-top: 10px;" class="mt-2">Dr. Ecep Ismail, S.Ag., M.Ag.</h4>
                        <h4>Wakil Dekan I</h4>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('frontend/img/FU-WD-2.png') }}" class="img-fluid" alt="Gambar 2"
                        style="max-width: 80%;">
                    <div>
                        <h4 style="color: black; margin-top: 10px;" class="mt-2">Dr. Muhlas, S.Ag., M.Hum.</h4>
                        <h4>Wakil Dekan II</h4>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('frontend/img/FU-WD-3.png') }}" class="img-fluid" alt="Gambar 4"
                        style="max-width: 80%;">
                    <div>
                        <h4 style="color: black; margin-top: 10px;" class="mt-2">Dr. R. Yuli Ahmad Hambali, M.Hum.</h4>
                        <h4>Wakil Dekan III</h4>
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
        var teksNavbar = {!! json_encode(env('TEKS_NAVBAR_COLOR', 'black')) !!};
        var teksFooter = {!! json_encode(env('TEKS_FOOTER_COLOR', 'white')) !!};
    </script>

    {{-- Mengatur document title menggunakan variabel dari Laravel --}}
    <script>
        document.title = @json(config('app.title'));
    </script>
@endpush
