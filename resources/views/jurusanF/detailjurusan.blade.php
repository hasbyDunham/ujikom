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
                            {{ $jurusan->nama_jurusan }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
{{-- @php
    // $jurusan = Jurusan::all();
    $jurusan = \App\Models\Jurusan::all();
@endphp --}}
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
                        <h5 class=" mb-4">{{ $jurusan->akreditasi }}</h5>
                    </center>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                        <center>
                            <p class="mb-4">
                                Gelar Lulusan
                            </p>
                            <h5 class=" mb-4">{{ $jurusan->gelar }}</h5>
                        </center>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                        <center>
                            <p class="mb-4">
                                SK Penyelenggaraan
                            </p>
                            <h5 class=" mb-4">{{ $jurusan->penyelenggara }}</h5>
                        </center>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                    <center>
                        <p class="mb-4">
                            Tanggal Berdiri
                        </p>
                        <h5 class=" mb-4">{{ $jurusan->tgl_berdiri }}</h5>
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
                    <h1 class="display-6 mb-4">{{ $jurusan->judul_ket1 }}</h1>
                    <p class="mb-4">{!! $jurusan->deskripsi1!!}
                    </p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight teks-ushuluddin" data-wow-delay="0.4s">
                <div class="pb-5">
                    <img src="{{ asset('storage/images/jurusan/' . $jurusan->foto1) }}" class="img-fluid rounded w-100 img-ushuluddin"
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
                    <img src="{{ asset('storage/images/jurusan/' . $jurusan->foto2) }}"
                        class="img-fluid rounded w-100 img-ushuluddin" style="object-fit: cover;" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight teks-ushuluddin" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <h1 class="display-6 mb-4">{{ $jurusan->judul_ket2 }}</h1>
                    <p class="mb-4">{!! $jurusan->deskripsi2 !!}
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
                    <h1 class="display-5 mb-4">Motto</h1>
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
                        {{ $jurusan->visi }}
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
                        <li>{{ $jurusan->misi }}
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
                        <li>{{ $jurusan->tujuan }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Visi End -->
<!-- Carousel Start -->
{{-- @foreach ($jurusan as $item)
<div class="container-fluid  about-ushuluddin py-4 mb-0 mt-0">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            <div class="col-lg-10 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                    <h1 class="display-6 mb-4">{{ $item->judul_akhir }}</h1>
                    <h4 class="mb-4">{{ $item->nanya }}
                    </h4>
                    <a class="btn btn-selengkapnya rounded-pill py-2 px-5 wow fadeInUp" data-wow-delay="0.10s" target="_blank"
                        href="{{ $item->url }}">Info Selengkapnya</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endforeach --}}
<div class="container-fluid  about-ushuluddin py-4 mb-0 mt-0">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            <div class="col-lg-10 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="section-title text-start mb-5">
                    <h1 class="display-6 mb-4">{{ $jurusan->judul_akhir }}</h1>
                    <h4 class="mb-4">{{ $jurusan->nanya }}
                    </h4>
                    <a class="btn btn-selengkapnya rounded-pill py-2 px-5 wow fadeInUp" data-wow-delay="0.10s" target="_blank"
                        href="{{ $jurusan->url }}">Info Selengkapnya</a>
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
