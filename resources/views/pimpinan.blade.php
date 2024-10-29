@extends('layouts.frontend')
@section('content')
    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/img/uin2.jpg') }}" class="img-fluid carousel-img" alt="Image">
                    <div class="carousel-caption">
                        <div class="text-start p-4" style="max-width: 50%; margin-right: 40%">
                            <h3 class="display-1 text-light text-capitalize mb-4 mb-md-5 fs-3 wow fadeInUp"
                                data-wow-delay="0.5s">
                                Fakultas Ekonomi dan Bisnis Islam
                            </h3>
                            <h3 class="display-6 text-capitalize mb-3 wow fadeInUp" style="color: orange;"
                                data-wow-delay="0.3s">
                                Pimpinan Fakultas
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5 mb-0 mt-0">
        <div class="container py-5">
            <div class="row g-5 d-flex align-items-center">
                <div class="col-lg-12 wow fadeInLeft d-flex flex-column text-center mx-auto" data-wow-delay="0.2s">
                    <div class="section-title mb-5">
                        <h1 class="display-5 mb-4" style="color: orange;">Pimpinan (FEBI)</h1>
                        <!-- Gambar utama di bawah judul -->
                        <img src="{{ asset('frontend/img/DEKAN-FEBI2.png') }}" class="img-fluid mx-auto d-block"
                            alt="Pimpinan FEBI" style="max-width: 60%;">
                        <h3 style="color: black;">Dr. H. Dudang Gojali, S.Ag., M.Ag.,</h3>
                        <h4 style="color: orange;">Dekan</h4>
                    </div>
                </div>
            </div>

            <!-- Row for three images below the main image -->
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-md-4 d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('frontend/img/dekan-iwan (1).png') }}" class="img-fluid" alt="Gambar 1"
                        style="max-width: 80%;">
                    <div>
                        <h4 style="color: black; margin-top: 10px;">Dr. Iwan Setiawan, S.Ag., M.Pd., M.E.Sy.</h4>
                        <h4 style="color: orange;">Wakil Dekan I</h4>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('frontend/img/dekan-zaky.png') }}" class="img-fluid" alt="Gambar 2"
                        style="max-width: 80%;">
                    <div>
                        <h4 style="color: black; margin-top: 10px;">Dr. Muhammad Zaky, M.Si.</h4>
                        <h4 style="color: orange;">Wakil Dekan II</h4>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('frontend/img/dekan-kadar.png') }}" class="img-fluid" alt="Gambar 4"
                        style="max-width: 80%;">
                    <div>
                        <h4 style="color: black; margin-top: 10px;">Dr. H. Kadar Nurjaman, S.E., M.M</h4>
                        <h4 style="color: orange;">Wakil Dekan III</h4>
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
