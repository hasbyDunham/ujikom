<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <img src="{{ asset('frontend/img/Logo-UIN-Putih.png') }}" alt="">
                    <h4 class="text-center mt-2">{{ env('NAMA_FAKULTAS_FOOTER', 'FAKULTAS UIN SGD') }}</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-center mb-4">Alamat</h4>
                    <div class="mb-3">
                        <p class="text-center mb-4">{!! env('ALAMAT_FAKULTAS', 'Jalan Soekarno Hatta, Bandung, Jawa Barat') !!}</p>
                    </div>
                    <h4 class="text-center mb-1">Sosial Media</h4>
                    <div class="d-flex justify-content-center">
                        @if (env('SOS_FACEBOOK'))
                            <a class="btn mx-2 fs-5" href={{ env('SOS_FACEBOOK') }}><i
                                    class="fab fa-facebook-f"></i></a>
                        @endif
                        @if (env('SOS_TWITTER'))
                            <a class="btn mx-2 fs-5" href={{ env('SOS_TWITTER') }}><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path
                                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                </svg></a>
                        @endif
                        @if (env('SOS_INSTAGRAM'))
                            <a class="btn mx-2 fs-5" href={{ env('SOS_INSTAGRAM') }}><i
                                    class="fab fa-instagram"></i></a>
                        @endif
                        @if (env('SOS_YOUTUBE'))
                            <a class="btn mx-2 fs-5" href={{ env('SOS_YOUTUBE') }}><i class="fab fa-youtube"></i></a>
                        @endif
                        @if (env('SOS_TIKTOK'))
                            <a class="btn mx-2 fs-5" href={{ env('SOS_TIKTOK') }}><i class="fab fa-tiktok"></i></a>
                        @endif
                        {{-- <a class="btn mx-2 fs-5" href="https://id.linkedin.com/company/uinbandung"><i
                                class="fab fa-linkedin-in"></i></a> --}}
                    </div>
                </div>
            </div>
            @php
            $jurusan = \App\Models\Jurusan::orderBy('id', 'asc')->get();
            @endphp
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4">Jurusan</h4>
                    @foreach ($jurusan as $item)
                    <a href="{{ route('detailjurusanF.show', $item->slug) }}" class=""><i class="fas fa-angle-right me-2"></i>{{ $item->nama_jurusan }}</a>
                    @endforeach
                    {{-- <a href="https://afi.uinsgd.ac.id/" class="" target="_blank"><i class="fas fa-angle-right me-2"></i>Aqidah dan
                        Filsafat Islam</a>
                    <a href="http://saa.uinsgd.ac.id/" class="" target="_blank"><i class="fas fa-angle-right me-2"></i>Studi
                        Agama-agama</a>
                    <a href=" https://iat.uinsgd.ac.id/" class="" target="_blank"><i class="fas fa-angle-right me-2"></i>Ilmu
                        Al-Qur'an dan Tafsir</a>
                    <a href="https://tp.uinsgd.ac.id/" class="" target="_blank"><i class="fas fa-angle-right me-2"></i>Tasawuf dan
                        Psikoterapi</a>
                    <a href="https://ih.uinsgd.ac.id/" class="" target="_blank"><i class="fas fa-angle-right me-2"></i>Ilmu
                        Hadist</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
