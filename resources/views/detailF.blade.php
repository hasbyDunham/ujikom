@extends('layouts.frontend')
@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item"><a href="#">Berita Fakultas</a></li>
                <li class="breadcrumb-item active text-dark">Judul Berita Fakultas</li>
            </ol>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <a href="#" class="h1 display-5">{{ $beritaF->judul_beritaF }}</a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="text-dark link-hover me-3"><i class="bi bi-bookmark-fill"></i>Berita
                            Fakultas</a>
                        <a href="#" class="text-dark link-hover me-3"><i class="bi bi-clock"></i>
                            {{ $beritaF->created_at->format('d M Y') }}</a>
                        <a href="#" class="text-dark link-hover me-3"><i class="bi bi-person-circle"></i> Oleh
                            {{ $beritaF->author->name }}</a>
                    </div>
                    <br>
                    <img src="{{ asset('storage/images/beritaF/' . $beritaF->foto) }}" class="img-fluid w-100" alt="">
                    {{-- <img width="750" height="350" src="https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036.jpg"
                    class="attachment-full size-full wp-image-54663" alt="" srcset="https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036.jpg 1600w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-300x169.jpg 300w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-1024x576.jpg 1024w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-768x432.jpg 768w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-1536x864.jpg 1536w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-650x366.jpg 650w"
                    sizes="(max-width: 1600px) 100vw, 1600px"> --}}

                    <p class="my-4">{!! $beritaF->deskripsiF !!}
                    </p>
                    <div class="tab-class">
                        <div class="d-flex justify-content-between border-bottom mb-4">
                        </div>
                        <div class="tab-content">
                        </div>
                    </div>
                </div>
                @php
                    $beritaF = \App\Models\BeritaF::orderBy('id', 'asc')->get();
                @endphp
                <div class="col-lg-4">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="p-3 rounded border">
                                <h4 class="my-4">Berita Fakultas Lainnya</h4>
                                <div class="row g-4">
                                    @foreach ($beritaF->sortByDesc('created_at')->take(4) as $item)
                                        <div class="col-12">
                                            <div class="row g-4 align-items-start features-item">
                                                <div class="col-4">
                                                    <div class="rounded-circle position-relative">
                                                        <div class="">
                                                            <img src="{{ asset('storage/images/beritaF/' . $item->foto) }}"
                                                                class="img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="features-content d-flex flex-column">
                                                        <a href="{{ $item['slug'] }}" class="h6">
                                                            {{ $item->judul_beritaF }}
                                                        </a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i>{{ $item->created_at->format('d M Y') }}
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
