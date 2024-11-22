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
                                Pengumuman</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Pengumuman Section Start -->
    @php
        $pengumuman = \App\Models\Pengumuman::where('flag', '1')->orderBy('id', 'asc')->paginate(6);
        // $pengumuman = \App\Models\Pengumuman::orderBy('id', 'asc')->paginate(6);
    @endphp
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="display-5 mb-5">Pengumuman</h2>
            </div>
        </div>
        <div class="row g-4">
            <!-- Card 1 -->
            @foreach ($pengumuman->sortByDesc('created_at')->take(6) as $item)
                <div class="col-md-4 mb-5">
                    <div class="card shadow-sm border-2">
                        <img src="{{ asset('/images/pengumuman/' . $item->foto) }}" class="card-img-top custom-img"
                            alt="Pengumuman 1">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="pengumuman/{{ $item['id'] }}">{{ $item->judul_pengumuman }}</a>
                            </h5>
                            <small class="text-body d-block">
                                <div class="float-start">
                                    <i class="fas fa-calendar-alt me-1"></i>{{ $item->created_at->format('d M Y') }}
                                </div>
                                <a href="#" class="text-body d-block float-end link-hover me-3"><i
                                        class="bi bi-person-circle"></i>
                                    Admin</a>
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $pengumuman->links() }}
            </div>
            <!-- Card 2 -->
            {{-- <div class="col-md-4 mb-5">
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
            </div> --}}
        </div>
    </div>
    <!-- Berita Section End -->
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
