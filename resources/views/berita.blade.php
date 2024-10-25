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
    @php
        $response = Http::get('https://uinsgd.ac.id/wp-json/wp/v2/posts');
        $berita = $response->successful() ? $response->json() : [];
        $berita = collect($berita); // Ubah array menjadi koleksi jika perlu
        // $berita = \App\Models\Berita::orderBy('id', 'desc')->get();
        // $berita = Session::get('berita');
        // $berita = $response->json();
        // <pre>{{ var_dump($berita) }}</pre>
        // dd($berita);
    @endphp
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="display-5 mb-5">Berita Terbaru</h2>
            </div>
        </div>
        <div class="row g-4">
            <!-- Card 1 -->
            @foreach ($berita->sortByDesc('created_at')->take(6) as $item)
                <div class="col-md-4 mb-5">
                    <div class="card shadow-sm border-0">
                        @if (
                            !empty($item['yoast_head_json']['og_image']) &&
                                is_array($item['yoast_head_json']['og_image']) &&
                                isset($item['yoast_head_json']['og_image'][0]['url']))
                            <img src="{{ $item['yoast_head_json']['og_image'][0]['url'] }}" class="card-img-top custom-img"
                                alt="Berita 1">
                        @else
                            <img src="{{ asset('default.png') }}" class="img-fluid w-100 rounded" alt="Gambar berita">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">
                                <a
                                    href="berita/{{ $item['id'] }}">{{ $item['yoast_head_json']['title'] ?? 'No Title' }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <!-- Card 2 -->
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
            </div> --}}
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

@push('script')
    <script>
        var navbarColor = {!! json_encode(env('NAVBAR_COLOR', 'white')) !!};
        var footerColor = {!! json_encode(env('FOOTER_COLOR', 'black')) !!};
    </script>
@endpush
