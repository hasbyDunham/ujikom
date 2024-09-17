<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>febi uin sgd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @php
        $pengumuman = \App\Models\Pengumuman::orderBy('id', 'asc')->get();
    @endphp
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    @include('include.frontend.navbar')
    <!-- Navbar & Hero End -->


    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/img/uin2.jpg') }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <img src="{{ asset('frontend/img/DEKAN-FEBI2.png') }}" alt="image"
                            class="img-fluid display-5 wow fadeInUp" data-wow-delay="0.3s"
                            style="max-width: 40%; max-height: 100%; margin-left: 55%; margin-top: 10%">
                        <div class="text-start p-4" style="max-width: 50%; margin-right: 40%">
                            <h1 class="display-3 text-capitalize text-white mb-3 wow fadeInUp" data-wow-delay="0.3s">
                                Fakultas Ekonomi dan Bisnis Islam</h1>
                            <h3 class="display-1 text-white text-capitalize mb-4 mb-md-5 fs-3 wow fadeInUp"
                                data-wow-delay="0.5s">
                                Universitas Islam Negeri <br>
                                Sunan Gunung Djati Bandung
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Modal Search Start -->
    <!-- Modal Search End -->



    <!-- About Start -->
    <div class="container-fluid about bg-light py-5 mb-0 mt-0">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img pb-5 ps-5">
                        <img src="{{ asset('frontend/img/mahasiswa.jpeg') }}" class="img-fluid rounded w-100"
                            style="object-fit: cover;" alt="Image">
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h1 class="display-5 mb-4">Kuliah di Fakultas Ekonomi dan Bisnis Islam</h1>
                        <p class="mb-4">Fakultas Ekonomi dan Bisnis Islam adalah jalur pendidikan yang aplikatif
                            dan sangat strategis untuk memenuhi kebutuhan bidang ekonomi khususnya sektor perbankan
                            Nasioanal serta memenuhi tantangan perkembangan dan pengembangan ilmu pengetahuan dan
                            masyarakat modern saat ini dan akan datang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Training Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4">Pimpinan Fakultas</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('frontend/img/DEKAN-FEBI.png') }}" class="img-fluid w-100 rounded"
                                alt="Image">
                        </div>
                        <div class="training-content rounded-bottom p-4 text-center" style="background-color: white">
                            <h6 class="text-dark">Dr. H. Dudang Gojali, S.Ag., M.Ag.,</h6>
                            <p class="text-dark">DEKAN</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('frontend/img/WADEK-FEBI1.png') }}" class="img-fluid w-100 rounded"
                                alt="Image">
                        </div>
                        <div class="training-content rounded-bottom p-4 text-center" style="background-color: white">
                            <h6 class="text-dark">Dr. Ecep Ismail, S.Ag., M.Ag.</h6>
                            <p class="text-dark">WADEK I <br>
                                Bidang Akademik
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('frontend/img/WADEK-FEBI2.png') }}" class="img-fluid w-100 rounded"
                                alt="Image">
                        </div>
                        <div class="training-content rounded-bottom p-4 text-center" style="background-color: white">
                            <h6 class="text-dark">Dr. Muhammad Zaky, M.Si.</h6>
                            <p class="text-dark">WADEK II <br>
                                Administrasi Perencanaan Bidang Umum, dan Keuangan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('frontend/img/WADEK-FEBI3.png') }}" class="img-fluid w-100 rounded"
                                alt="Image">
                        </div>
                        <div class="training-content rounded-bottom p-4 text-center" style="background-color: white">
                            <h6 class="text-dark">Dr. Iwan Setiawan, S.Ag., M.Pd., M.E.Sy.</h6>
                            <p class="text-dark">WADEK III <br>
                                Bidang Kemahasiswaan, Alumni dan Kerja
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a class="btn btn-success border-success rounded-pill py-3 px-5 wow fadeInUp"
                        data-wow-delay="0.10s" href="#">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Training End -->


    <!-- Contact Start -->
    <div class="container-fluid contact overflow-hidden pb-5">
        <div class="container py-5">
            <div class="office pt-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="display-6 mb-4">Berita UIN Sunan Gunung Djati Bandung</h2>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach ($pengumuman as $item)
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="{{ asset('/images/pengumuman/' . $item->foto) }}"
                                        class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">{{ $item->judul_pengumuman }}</h4>
                                    <p class="mb-0 fs-">{{ $item->deskripsi_pengumuman }}</p>
                                    <a href="#" class="text-muted mb-2">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Features Start -->
    <div class="container-fluid contact overflow-hidden pb-5">
        <div class="container py-5">
            <div class="office pt-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="display-6 mb-4">Pengumuman <br> UIN Sunan Gunung Djati Bandung</h3>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach ($pengumuman as $item)
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="{{ asset('/images/pengumuman/' . $item->foto) }}"
                                        class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">{{ $item->judul_pengumuman }}</h4>
                                    <p class="mb-0 fs-">{{ $item->deskripsi_pengumuman }}</p>
                                    <a href="#" class="text-muted mb-2">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Footer Start -->
    @include('include.frontend.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-success btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
