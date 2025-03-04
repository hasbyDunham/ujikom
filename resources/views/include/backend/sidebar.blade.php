<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo mt-3 mb-2">
        <span class="app-brand-text demo menu-text fw-bolder ms-5">
            <img src="{{ asset('backend/assets/img/logo doang.png') }}" width="68" height="68">
        </span>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{ url('admin/home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="{{ url('admin/berita') }}" class="menu-link">
                <i class="menu-icon tf-icons bi bi-newspaper"></i>
                <div data-i18n="Analytics">Berita UIN</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="{{ url('admin/beritaF') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Analytics">Berita Fakultas</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="{{ url('admin/pengumuman') }}" class="menu-link">
                <i class="menu-icon bi bi-megaphone"></i></i>
                <div data-i18n="Analytics">Pengumuman</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="{{ url('admin/pimpinan') }}" class="menu-link">
                <i class="menu-icon bi bi-megaphone"></i></i>
                <div data-i18n="Analytics">Pimpinan</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="{{ url('admin/sambutan') }}" class="menu-link">
                <i class="menu-icon bi bi-megaphone"></i></i>
                <div data-i18n="Analytics">Sambutan</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="{{ url('admin/visimisi') }}" class="menu-link">
                <i class="menu-icon bi bi-megaphone"></i></i>
                <div data-i18n="Analytics">Visi Misi</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="{{ url('admin/sejarah') }}" class="menu-link">
                <i class="menu-icon bi bi-megaphone"></i></i>
                <div data-i18n="Analytics">Sejarah</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="{{ url('admin/jurusan') }}" class="menu-link">
                <i class="menu-icon bi bi-megaphone"></i></i>
                <div data-i18n="Analytics">Jurusan</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="{{ url('admin/user') }}" class="menu-link">
                <i class="menu-icon bi bi-person"></i></i>
                <div data-i18n="Analytics">User</div>
            </a>
        </li>
    </ul>
</aside>
