@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Data Berita Fakultas</h5>
                    <a href="{{ route('beritaF.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Berita</th>
                                {{-- <th>Deskripsi</th> --}}
                                {{-- <th>Foto</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @php $no = 1; @endphp
                        <tbody class="table-border-bottom-0">
                            @foreach ($beritaF as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->judul_beritaF }}</td>
                                    {{-- <td>{!! $item->deskripsiF !!}</td> --}}
                                    {{-- <td><img src="{{ asset('/images/beritaF/' . $item->foto) }}" style="width: 100px;"
                                            alt=""></td> --}}
                                    <td>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a href="{{ route('beritaF.edit', $item->id) }}"
                                                        class="dropdown-item">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('beritaF.show', $item->id) }}"
                                                        class="dropdown-item">Show</a>
                                                </li>
                                                <!-- Formulir untuk hapus -->
                                                <li>
                                                    <form action="{{ route('beritaF.destroy', $item->id) }}" method="POST"
                                                        class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>

    <script>
        const button = document.querySelector("button"),
            toast = document.querySelector(".toast"),
            closeIcon = document.querySelector(".close"),
            peogress = document.querySelector(".progress");

        button.addEventListener("click", () => {
            toast.classList.add("active");
            progress.classList.add("active");

            setTimeout(() => {
                toast.classList.remove("active");
            }, 5000);

            setTimeout(() => {
                progress.classList.remove("active");
            }, 5300);

        });

        closeIcon.addEventListener("click", () => {
            toast.classList.remove("active");

            setTimeout(() => {
                toast.classList.remove("active");
            }, 300);
        });
    </script>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
@endsection
