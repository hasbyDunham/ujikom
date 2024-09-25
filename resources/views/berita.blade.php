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
                                Berita
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Berita Section Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="display-5 mb-5" style="color: orange;">Berita Terbaru</h2>
            </div>
        </div>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4 mb-5">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('frontend/img/berita1.jfif') }}" class="card-img-top custom-img" alt="Berita 1">
                    <div class="card-body">
                        <h5 class="card-title" style="color: orange;">
                            <a href="#" class="text-warning" style="text-decoration: none;">Hebat! Dosen FEBI,
                                Annisa, Raih The Best Paper pada The 8th GAMAICI UGM</a>
                        </h5>
                        <p class="card-text">Annisa Nur Salam, dosen Fakultas Ekonomi dan Bisnis Islam (FEBI) UIN Sunan
                            Gunung Djati...</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-5">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('frontend/img/berita2.jfif') }}" class="card-img-top custom-img" alt="Berita 2">
                    <div class="card-body">
                        <h5 class="card-title" style="color: orange;">
                            <a href="#" class="text-warning" style="text-decoration: none;">AL BANPT, Momentum
                                bagi MKS-FEBI untuk Meraih Kualitas Terbaik</a>
                        </h5>
                        <p class="card-text">Rektor UIN Sunan Gunung Djati Bandung Prof. Dr. H
                            Rosihon Anwar, M.Ag menegaskan bahwa...</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-5">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('frontend/img/berita3.jpg') }}" class="card-img-top custom-img" alt="Berita 3">
                    <div class="card-body">
                        <h5 class="card-title" style="color: orange;">
                            <a href="#" class="text-warning" style="text-decoration: none;">Rektor: Pejabat
                                Baru harus Bangun Berbagai Inovasi, Jangan Berleha-leha! </a>
                        </h5>
                        <p class="card-text">Dekan Fakultas Ekonomi dan Bisnis Islam (FEBI) UIN Sunan Gunung Djati
                            Bandung Dr. H....
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('frontend/img/berita1.jfif') }}" class="card-img-top custom-img" alt="Berita 1">
                    <div class="card-body">
                        <h5 class="card-title" style="color: orange;">
                            <a href="#" class="text-warning" style="text-decoration: none;">Komitmen 21 Lembaga
                                Wujudkan Desa Ekowisata Halal Indragiri</a>
                        </h5>
                        <p class="card-text">Para inisiator Desa Ekowisata Halal asal UIN SGD Bandung menggandeng Bank
                            Indonesia dan Mayarakat Ekonomi...
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('frontend/img/berita1.jfif') }}" class="card-img-top custom-img" alt="Berita 2">
                    <div class="card-body">
                        <h5 class="card-title" style="color: orange;">
                            <a href="#" class="text-warning" style="text-decoration: none;">Akademisi Minta
                                Program Bagi Anak Ayam Oded Ditingkatkan</a>
                        </h5>
                        <p class="card-text">Sempat dicibir sejumlah pihak, akademisi berbalik dan meminta program
                            bagi-bagi anak ayam bagi pelajar di...
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('frontend/img/berita1.jfif') }}" class="card-img-top custom-img" alt="Berita 3">
                    <div class="card-body">
                        <h5 class="card-title" style="color: orange;">
                            <a href="#" class="text-warning" style="text-decoration: none;">Penguatan
                                Kelembagaan UIN SGD Bandung Menuju World Class University </a>
                        </h5>
                        <p class="card-text">Upaya meningkatkan kualitas mutu perguruan tinggi diperlukan penguatan
                            kelembagaan, mulai dari organisasi, tata kerja, pelayanan...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Berita Section End -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mb-5">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection
