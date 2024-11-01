@extends('layouts.frontend')
@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item"><a href="#">Berita</a></li>
                <li class="breadcrumb-item active text-dark">Judul Berita</li>
            </ol>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <a href="#" class="h1 display-5">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.</a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="text-dark link-hover me-3"><i class="bi bi-bookmark-fill"></i> Berita</a>
                        <a href="#" class="text-dark link-hover me-3"><i class="bi bi-clock"></i> Waktu/Tanggal</a>
                        <a href="#" class="text-dark link-hover me-3"><i class="bi bi-person-circle"></i> Oleh</a>
                    </div>
                    <br>
                    <img width="750" height="350" src="https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036.jpg"
                        class="attachment-full size-full wp-image-54663" alt=""
                        srcset="https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036.jpg 1600w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-300x169.jpg 300w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-1024x576.jpg 1024w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-768x432.jpg 768w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-1536x864.jpg 1536w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-650x366.jpg 650w"
                        sizes="(max-width: 1600px) 100vw, 1600px">

                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.
                    </p>
                    <p class="my-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic
                    </p>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic
                        Lorem Ipsum is simply dummy
                    </p>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ther
                        took It has survived not only five centuries, but also the leap into electronic
                    </p>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ther
                        took It has survived not only five centuries, but also the leap into electronic
                    </p>
                    <div class="tab-class">
                        <div class="d-flex justify-content-between border-bottom mb-4">
                        </div>
                        <div class="tab-content">
                        </div>
                    </div>
                    <div class="bg-light rounded p-4 my-4">
                        <h4 class="mb-4">Tinggalkan Balasan</h4>
                        <form action="#">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control py-3" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control py-3" placeholder="Situs Web">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control py-3" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" name="textarea" id="" cols="30" rows="7" placeholder="Komentar"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="form-control btn btn-success py-3" type="button">Kirim Komentar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="p-3 rounded border">
                                <h4 class="my-4">Popular News</h4>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="{{ asset('show/img/features-sports-1.jpg') }}"
                                                            class="img-zoomin img-fluid rounded-circle w-100"
                                                            alt="">
                                                    </div>
                                                    <span
                                                        class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                        style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Sports</p>
                                                    <a href="#" class="h6">
                                                        Get the best speak market, news.
                                                    </a>
                                                    <small class="text-body d-block"><i
                                                            class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="{{ asset('show/img/features-technology.jpg') }}"
                                                            class="img-zoomin img-fluid rounded-circle w-100"
                                                            alt="">
                                                    </div>
                                                    <span
                                                        class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                        style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Technology</p>
                                                    <a href="#" class="h6">
                                                        Get the best speak market, news.
                                                    </a>
                                                    <small class="text-body d-block"><i
                                                            class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="{{ asset('show/img/features-fashion.jpg') }}"
                                                            class="img-zoomin img-fluid rounded-circle w-100"
                                                            alt="">
                                                    </div>
                                                    <span
                                                        class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                        style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Fashion</p>
                                                    <a href="#" class="h6">
                                                        Get the best speak market, news.
                                                    </a>
                                                    <small class="text-body d-block"><i
                                                            class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="{{ asset('show/img/features-life-style.jpg') }}"
                                                            class="img-zoomin img-fluid rounded-circle w-100"
                                                            alt="">
                                                    </div>
                                                    <span
                                                        class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                        style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Life Style</p>
                                                    <a href="#" class="h6">
                                                        Get the best speak market, news.
                                                    </a>
                                                    <small class="text-body d-block"><i
                                                            class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="#"
                                            class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">View
                                            More</a>
                                    </div>
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
