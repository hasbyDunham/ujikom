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
                                Data Dosen
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
                        <h1 class="display-5 mb-4" style="color: orange;">Data Dosen (FEBI)</h1>
                    </div>
                </div>
            </div>

            <!-- Row 1 -->
            <div class="row g-4 d-flex justify-content-center" style="gap: 20px;">
                <div class="col-md-4 d-flex flex-column align-items-center text-center" style="margin-bottom: 20px;">
                    <img src="{{ asset('frontend/img/dekan-kadar.png') }}" class="img-fluid" alt="Gambar 2"
                        style="max-width: 80%; margin-bottom: 15px;">
                    <div>
                        <p style="color: orange; font-weight: bold; margin-top: 10px;">Prof. Dr. H. Mohamad Anton Athoillah,
                            MM.</p>
                        <p style="color: orange;">NIP : 196708081993031002</p>
                        <p style="color: orange;">Guru Besar</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center text-center" style="margin-bottom: 20px;">
                    <img src="{{ asset('frontend/img/dekan-kadar.png') }}" class="img-fluid" alt="Gambar 4"
                        style="max-width: 80%; margin-bottom: 15px;">
                    <div>
                        <p style="color: orange; font-weight: bold; margin-top: 10px;">Prof. Dr. H. Nana Herdiana
                            Abdurrahman, SE, MM.Ak</p>
                        <p style="color: orange;">NIP : 195505051986031025</p>
                        <p style="color: orange;">Guru Besar</p>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row g-4 d-flex justify-content-center" style="gap: 20px;">
                <div class="col-md-4 d-flex flex-column align-items-center text-center" style="margin-bottom: 20px;">
                    <img src="{{ asset('frontend/img/dekan-kadar.png') }}" class="img-fluid" alt="Gambar 2"
                        style="max-width: 80%; margin-bottom: 15px;">
                    <div>
                        <p style="color: orange; font-weight: bold; margin-top: 10px;">Prof. Dr. Sahya Anggara, M.Si.</p>
                        <p style="color: orange;">NIP : 196705151994031006</p>
                        <p style="color: orange;">Guru Besar</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center text-center" style="margin-bottom: 20px;">
                    <img src="{{ asset('frontend/img/dekan-kadar.png') }}" class="img-fluid" alt="Gambar 4"
                        style="max-width: 80%; margin-bottom: 15px;">
                    <div>
                        <p style="color: orange; font-weight: bold; margin-top: 10px;">Prof. Dr. Endah Ratnawaty Chotim,
                            M.Ag., M.Si.</p>
                        <p style="color: orange;">NIP : 196411121990032001</p>
                        <p style="color: orange;">Guru Besar</p>
                    </div>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="row g-4 d-flex justify-content-center" style="gap: 20px;">
                <div class="col-md-4 d-flex flex-column align-items-center text-center" style="margin-bottom: 20px;">
                    <img src="{{ asset('frontend/img/dekan-kadar.png') }}" class="img-fluid" alt="Gambar 2"
                        style="max-width: 80%; margin-bottom: 15px;">
                    <div>
                        <p style="color: orange; font-weight: bold; margin-top: 10px;">Prof. Dr. Hj. Lilis Sulastri, S.Ag.,
                            M.M. CPHRM., CHRA</p>
                        <p style="color: orange;">NIP : 197505202007012028</p>
                        <p style="color: orange;">Guru Besar</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center text-center" style="margin-bottom: 20px;">
                    <img src="{{ asset('frontend/img/dekan-kadar.png') }}" class="img-fluid" alt="Gambar 4"
                        style="max-width: 80%; margin-bottom: 15px;">
                    <div>
                        <p style="color: orange; font-weight: bold; margin-top: 10px;">Prof. Dr. H. Budiman, S.E., M.Si.,
                            M.M.</p>
                        <p style="color: orange;">NIP : 195710251986111000</p>
                        <p style="color: orange;">Guru Besar</p>
                    </div>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="row g-4 d-flex justify-content-center" style="gap: 20px;">
                <div class="col-md-4 d-flex flex-column align-items-center text-center" style="margin-bottom: 20px;">
                    <img src="{{ asset('frontend/img/dekan-kadar.png') }}" class="img-fluid" alt="Gambar 2"
                        style="max-width: 80%; margin-bottom: 15px;">
                    <div>
                        <p style="color: orange; font-weight: bold; margin-top: 10px;">Prof. Dr. Deni Kamaludin Yusup, M.Ag.
                        </p>
                        <p style="color: orange;">NIP : 197411062005011006</p>
                        <p style="color: orange;">Guru Besar</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center text-center" style="margin-bottom: 20px;">
                    <img src="{{ asset('frontend/img/dekan-kadar.png') }}" class="img-fluid" alt="Gambar 4"
                        style="max-width: 80%; margin-bottom: 15px;">
                    <div>
                        <p style="color: orange; font-weight: bold; margin-top: 10px;">Drs. H. Mumuh Muksin, M.MPd.</p>
                        <p style="color: orange;">NIP : 195812101987031002</p>
                        <p style="color: orange;">Lektor Kepala</p>
                    </div>
                </div>
            </div>

            <!-- Row 5 -->
            <div class="row g-4 d-flex justify-content-center" style="gap: 20px;">
                <div class="col-md-4 d-flex flex-column align-items-center text-center" style="margin-bottom: 20px;">
                    <img src="{{ asset('frontend/img/dekan-kadar.png') }}" class="img-fluid" alt="Gambar 2"
                        style="max-width: 80%; margin-bottom: 15px;">
                    <div>
                        <p style="color: orange; font-weight: bold; margin-top: 10px;">Drs. H. Ade Hidayat, M.Ag.</p>
                        <p style="color: orange;">NIP : 195907081984031002</p>
                        <p style="color: orange;">Lektor Kepala</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center text-center" style="margin-bottom: 20px;">
                    <img src="{{ asset('frontend/img/dekan-kadar.png') }}" class="img-fluid" alt="Gambar 4"
                        style="max-width: 80%; margin-bottom: 15px;">
                    <div>
                        <p style="color: orange; font-weight: bold; margin-top: 10px;">Dr. H. Kadar Nurjaman, S.E., M.M.,
                            CHRA</p>
                        <p style="color: orange;">NIP : 197101162009121001</p>
                        <p style="color: orange;">Lektor Kepala</p>
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
@endpush
