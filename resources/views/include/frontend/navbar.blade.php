<div class="container-fluid nav-bar p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-0 px-lg-5 py-0 py-lg-0 ms-auto">
        <a href="{{ url('/') }}" class="navbar-brand p-0">
            <h1 class="display-5 text-success mr-5"><img src="{{ asset('frontend/img/logoushuluddin.png') }}"
                    class="img-fluid" alt="" style="width: 100%; height:50%"></h1>
        </a>
        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
            <div class="navbar-nav py-0 ms-auto me-5">
                <a href="{{ url('/') }}" class="nav-item nav-link" id="home-link">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" id="profil-link" data-bs-toggle="dropdown"><span
                            class="dropdown-toggle">Profil</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('sambutandekan') }}" class="dropdown-item">Sambutan Dekan</a>
                        <a href="{{ url('sejarah') }}" class="dropdown-item">Sejarah</a>
                        <a href="{{ url('visimisi') }}" class="dropdown-item">Visi, Misi dan Tujuan</a>
                        <a href="{{ url('pimpinan') }}" class="dropdown-item">Pimpinan Fakultas</a>
                        {{-- <a href="{{ url('datadosen') }}" class="dropdown-item">Data Dosen</a>
                        <a href="#" class="dropdown-item">Data Tendik</a> --}}
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" id="jurusan-link" data-bs-toggle="dropdown"><span
                            class="dropdown-toggle">Jurusan</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="https://afi.uinsgd.ac.id/" class="dropdown-item">Aqidah dan Filsafat Islam</a>
                        <a href="http://saa.uinsgd.ac.id/" class="dropdown-item">Studi Agama-agama</a>
                        <a href="https://iat.uinsgd.ac.id/" class="dropdown-item">Ilmu Al-Qur'an dan Tafsir</a>
                        <a href="https://tp.uinsgd.ac.id/" class="dropdown-item">Tasawuf dan Psikoterapi</a>
                        <a href="https://ih.uinsgd.ac.id/" class="dropdown-item">Ilmu Hadist</a>
                    </div>
                </div>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link" id="journal-link" data-bs-toggle="dropdown"><span
                            class="dropdown-toggle"><b>Journal</b></span></a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">-</a>
                        <a href="countries.html" class="dropdown-item">-</a>
                </div> --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" id="informasi-link" data-bs-toggle="dropdown"><span
                            class="dropdown-toggle">Informasi</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('berita') }}" class="dropdown-item">Berita</a>
                        <a href="{{ url('beritaF') }}" class="dropdown-item">Berita Fakultas</a>
                        <a href="{{ url('pengumuman') }}" class="dropdown-item">Pengumuman</a>
                    </div>
                </div>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link" id="layanan-link" data-bs-toggle="dropdown"><span
                            class="dropdown-toggle"><b>Layanan</b></span></a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">-</a>
                        <a href="countries.html" class="dropdown-item">-</a>
                    </div>
                </div> --}}
            </div>
        </div>
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
            aria-expanded="false" aria-label="Toggle navigation" onclick="this.classList.toggle('active')">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>
