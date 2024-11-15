@extends('layouts.frontend')
@section('style')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
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
                                Berita</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Berita Section Start -->
    @php
        use Illuminate\Support\Facades\Http;
        use Illuminate\Support\Collection;
        use Illuminate\Pagination\LengthAwarePaginator;
        use Illuminate\Pagination\Paginator;

        // Mengambil data dari API
        $response = Http::get('https://uinsgd.ac.id/wp-json/wp/v2/posts?per_page=100');
        $berita = $response->successful() ? $response->json() : [];

        // Mengonversi array ke koleksi
        $berita = collect($berita);

        // Konfigurasi pagination
        $currentPage = Paginator::resolveCurrentPage('page');
        $perPage = 6;
        $paginatedBerita = new LengthAwarePaginator(
            $berita->forPage($currentPage, $perPage),
            $berita->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()],
        );
    @endphp
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="display-5 mb-5">Berita UIN</h2>
            </div>
        </div>
        <div class="row g-4">
            <!-- Card 1 -->
            @foreach ($paginatedBerita as $item)
                <div class="col-md-4 mb-5">
                    <div class="card shadow-sm border-2">
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
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ date('d/m/Y', strtotime($item['date'])) }}
                                <a href="#" class="text-body d-block float-end link-hover me-3"><i
                                        class="bi bi-person-circle"></i>
                                    {{ $item['yoast_head_json']['author'] }}</a></small>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $paginatedBerita->links('vendor.pagination.custom') }}
            </div>
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
    {{-- <nav aria-label="Page navigation example">
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
    </nav> --}}
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
    <script>
        const totalPages = 17; // Jumlah total halaman
        const pagination = document.getElementById("pagination");
        let currentPage = 1; // Halaman saat ini

        function renderPagination(page) {
            pagination.innerHTML = ''; // Reset pagination
            let startPage = page - 1 > 0 ? page - 1 : 1;
            let endPage = page + 1 <= totalPages ? page + 1 : totalPages;

            // Tombol ke halaman sebelumnya
            if (page > 1) {
                const prev = document.createElement("li");
                prev.innerHTML = "&laquo;";
                prev.onclick = () => updatePagination(page - 1);
                pagination.appendChild(prev);
            }

            // Menampilkan halaman yang aktif dan dua halaman di sebelah kanan
            for (let i = startPage; i <= endPage; i++) {
                const pageItem = document.createElement("li");
                pageItem.innerText = i;
                pageItem.classList.add(i === page ? "active" : "");
                pageItem.onclick = () => updatePagination(i);
                pagination.appendChild(pageItem);
            }

            // Jika halaman terakhir belum tercapai, tambahkan "..."
            if (endPage < totalPages - 1) {
                const dots = document.createElement("li");
                dots.innerText = "...";
                pagination.appendChild(dots);
            }

            // Halaman terakhir
            if (endPage < totalPages) {
                const lastPage = document.createElement("li");
                lastPage.innerText = totalPages;
                lastPage.onclick = () => updatePagination(totalPages);
                pagination.appendChild(lastPage);
            }

            // Tombol ke halaman berikutnya
            if (page < totalPages) {
                const next = document.createElement("li");
                next.innerHTML = "&raquo;";
                next.onclick = () => updatePagination(page + 1);
                pagination.appendChild(next);
            }
        }

        function updatePagination(page) {
            currentPage = page;
            renderPagination(page);
        }

        // Inisialisasi pagination
        renderPagination(currentPage);
    </script>
@endpush
