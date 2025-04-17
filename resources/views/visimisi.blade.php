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
                                Visi, Misi, dan Tujuan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    @php
        $visimisi = \App\Models\Visimisi::get();
        // $pengumuman = \App\Models\Pengumuman::orderBy('id', 'asc')->paginate(6);
        @endphp
    <div class="container-fluid about py-4 mb-0 mt-0">
        <div class="container py-4">
            <!-- Motto and Visi Section (Sejajar) -->
            @foreach ($visimisi as $item)
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
                            <h1 class="display-5 mb-4">Visi</h1>
                        </center>
                        <p class="mb-4">
                            {!! $item->visi !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                <!-- Misi Section -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <center>
                            <h1 class="display-5 mb-4">Misi</h1>
                        </center>
                        <ol style="line-height: 1.8; padding-left: 15px;">
                            <li>{!! $item->misi !!}
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- Tujuan Section -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.6s">
                    <div class="section-title text-start mb-5">
                        <center>
                            <h1 class="display-5 mb-4">Sasaran</h1>
                        </center>
                        <ol style="line-height: 1.8; padding-left: 15px; text-align: left;">
                            <li>{!! $item->tujuan !!}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- BATAS FOREACH --}}

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
                            <h1 class="display-5 mb-4">Visi</h1>
                        </center>
                        <p class="mb-4">
                            “Menjadi pusat studi dan informasi keushuluddinan yang unggul dan kompetitif di Asean tahun
                            2025”
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
                            <li>Menyelenggarakan pendidikan dan penelitian di bidang ilmu-ilmu keushuluddinan berbasis Islam
                                damai sebagai rahmat bagi semesta alam.
                            </li>
                            <li>Menyelenggarakan pendidikan, penelitian, dan pengabdian masyarakat di bidang ilmu-ilmu
                                keushuluddinan yang memiliki tingkat relevansi dengan perubahan dan perkembangan
                                sosial-keagamaan di masyarakat.
                            </li>
                            <li>Menginformasikan produk-produk Tridarma kepada masyarakat seluas-luasnya dengan prinsip
                                mensosialisasikan Islam damai sebagai rahmat bagi semesta alam.
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- Tujuan Section -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.6s">
                    <div class="section-title text-start mb-5">
                        <center>
                            <h1 class="display-5 mb-4">Sasaran</h1>
                        </center>
                        <ol style="line-height: 1.8; padding-left: 15px; text-align: left;">
                            <li>Pengembangan kelembagaan dan tata kelola yang diorientasikan kepada pelayanan civitas
                                akademika.
                            </li>
                            <li>Pembinaan Sumber Daya Manusia.
                            </li>
                            <li>Merumuskan kurikulum yang disesuaikan dengan perkembangan ilmu pengetahuan dan kebutuhan
                                masyarakat.
                            </li>
                            <li>Menciptakan suasana akademik yang kondusif.
                            </li>
                            <li>Mengembangkan perpustakaan yang memenuhi kebutuhan civitas akademika.
                            </li>
                            <li>Menghasilkan penelitian-penelitian yang merespons berbagai fenomena keagamaan di masyarakat.
                            </li>
                            <li>Melakukan pengabdian pada masyarakat berupa pembinaan desa-desa tertinggal.
                            </li>
                            <li>Mengoptimalkan peranan alumni.
                            </li>
                            <li>Membuka peluang kerja sama dengan lembaga luar seluasluasnya.
                            </li>
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
        var teksNavbar = {!! json_encode(env('TEKS_NAVBAR_COLOR', 'black')) !!};
        var teksFooter = {!! json_encode(env('TEKS_FOOTER_COLOR', 'white')) !!};
    </script>

    {{-- Mengatur document title menggunakan variabel dari Laravel --}}
    <script>
        document.title = @json(config('app.title'));
    </script>
@endpush
