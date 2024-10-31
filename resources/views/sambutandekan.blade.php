@extends('layouts.frontend')
@section('content')
    <!-- Carousel Start -->
    <div class="carousel-head">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/img/sambutan-dekan1.png') }}" class="img-fluid carousel-img" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about py-4 mb-0 mt-0">
        <div class="container py-4">
            <div class="row g-5 d-flex align-items-center">
                <!-- Gambar di sebelah kiri -->
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/img/uin3.png') }}" alt="image" class="img-fluid wow fadeInUp"
                        data-wow-delay="0.3s" style="max-width: 100%; height: auto;">
                </div>
                <!-- Teks di sebelah kanan -->
                <div class="col-lg-6 wow fadeInLeft d-flex flex-column text-start" data-wow-delay="0.2s">
                    <div class="section-title mb-5">
                        <h1 class="display-5 mb-4">Sambutan Dekan</h1>
                        <p>Assalamualaikum, Wr, Wb.</p>
                        <p>Puji serta syukur semoga senantiasa tercurah ke hadirat Allah Swt. Salawat serta salam semoga
                            tercurah limpahkan kepada junjungan kita Rasulullah Muhammad SAW.
                        </p>

                        <p>Saya mewakili seluruh civitas akademika FEBI UIN Sunan Gunung Djati Bandung dengan bangga dan
                            berbahagia menyambut kehadiran para calon pembelajar dan penggerak ekonomi bangsa. Selamat
                            bergabung menjadi bagian dari keluarga besar FEBI UIN Bandung
                            .</p>

                        <p>Terima kasih telah berkunjung di tempat kami.</p>

                        <p>Wallahul Muwaffiq ila Aqwamit Tharieq.<br>
                            Wassalamu’alaikum Warahmatullahi Wabarakatuh.</p>
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

    {{-- Mengatur document title menggunakan variabel dari Laravel --}}
    <script>
        document.title = @json(config('app.title'));
    </script>
@endpush
