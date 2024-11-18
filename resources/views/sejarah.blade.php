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
                                Sejarah</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about py-4 mb-0 mt-0">
        <div class="container py-4">
            <div class="row g-5 d-flex align-items-start">
                <div class="col-lg-12 wow fadeInLeft d-flex flex-column text-center mx-auto" data-wow-delay="0.2s">
                    <div class="section-title mb-5">
                        <h1 class="display-6 mb-4">Sejarah Fakultas Ushuluddin</h1>
                        <p class="content-text">Secara historis, Fakultas Ushuluddin termasuk fakultas yang
                            paling awal berdiri bersamaan dengan didirikannya UIN ( saat itu masih IAIN ) Sunan Gunung Djati Bandung,
                            pada tahun 1968. Fakultas yang kini telah berusia 45 tahun ini, sepanjang sejarahnya telah telah
                            dipimpin oleh figur-figur yang mumpuni di bidang keilmuan Islam. Dekan Fakultas Ushuluddin yang
                            pertama adalah Prof.K.H. Anwar Musaddad, mulai tahun 1968 hingga 1970. Saat itu beliau merangkap
                            sebagai Rektor IAIN Sunan Gunung Djati Bandung.</p>
                        <p class="content-text">Setelah K.H. Anwar Musaddad, Dekan berikutnya adalah Drs. H. Farichin Khumaidi,MA (almarhum).
                            Alumni Mc.Gill University Canada ini menjabat dekan selama dua periode (1971-1974 dan 1979-1982)
                            berselang seling dengan Drs. H. Muhammad Chalil (almarhum),
                            yang juga menjabat Dekan Fakultas Ushuluddin dua periode (1975-1978 dan 1982-1985).
                            Nama keempat dalam sejarah Fakultas Ushuluddin adalah Drs. H. Ahmad Subandi. Beliau
                            menjabat selama dua periode, tahun 1986 hingga1994. </p>
                        <p class="content-text"> Selanjutnya adalah Prof.Dr.H. Dadang Kahmad,
                            M.Si. Beliau menjabat selama dua periode dari tahun 1995 hingga 2004. Penerusnya adalah Prof.
                            Dr.H. Abdul Rozak, M.Ag. Beliau menjabat selama satu periode (2004-2007). Kemudian, periode
                            tahun 2007-2011, Fakultas Ushuluddin dipimpin oleh Prof. Dr.H. Muhtar Solihin,M.Ag. Semenjak
                            tahun 2011, kepemimpinan di Fakultas Ushuluddin dilanjutkan oleh Prof.Dr.H. Rosihon Anwar, M.Ag.
                            Estapeta kepemimpinan tersebut adalah buah kaderisasi dan tentu saja, untuk kemajuan di masa
                            mendatang, harus disiapkan para pemimpin Fakultas Ushuluddin yang selalu siap menghadapi
                            tantangan zamannya. </p>
                        <p class="content-text"> Di era kepemimpinan Prof.Dr.H. Rosihon Anwar, M.Ag, disusun Rencana
                            Strategis Fakultas Ushuluddin 2011-2015 yang diorientasikan kepada penguatan ke dalam dan ke
                            luar. Penguatan yang pertama diorientasikan kepada penggodogan mahasiswa sehingga benar-benar
                            siap untuk diserap stake holder yang ada. Ini berarti pembenahan terhadap kurikulum, kinerja
                            dosen, dan kinerja tata usaha berbasis pelayanan yang paripurna terhadap mahasiswa. Pada tataran
                            ini pula, penciptaan iklim akademis yang kondusif mutlak diperlukan. Maka, sarana-sarana
                            penunjang untuk itu semua tidak boleh diabaikan. Adapun penguatan kedua diorientasikan kepada
                            penciptaan peluang kerja sama dengan berbagai pihak. Tujuannya tidak semata-mata mencari jalan
                            pembukan bagi penyerapan lulusan, tetapi juga sebagai show of identity. Kerja sama dipandang
                            sebagai solusi paling tepat, dan dalam konteks lokal maupun nasional, berbagai peluang untuk
                            kerja sama ini sangat terbuka. Ada satu jargon yang perlu diusung untuk menjadi gerbong rencana
                            strategis di atas, yaitu “Fakultas Ushuluddin yang layak bersanding dan laik bertanding”. Jargon
                            ini memunculkan tekad kuat untuk menjadikan Fakultas Ushuluddin sebagai fakultas yang dapat
                            disandingkan dengan fakultas-fakultas yang ada, dan pada saat yang bersamaan bisa bertanding
                            dengan fakultas-fakultas yang ada. Bersanding dan bertanding ada dua hal yang menjadi platform
                            fakultas Ushuluddin ke depan.
                        </p>
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
