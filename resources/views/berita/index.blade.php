@extends('layouts.backend')
@section('content')
@push('styles')
<style>
    #dataTable th,
    #dataTable td {
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
    }

    #dataTable td {
        padding: 12px 10px;
    }

    /* Perbaiki lebar tombol aksi biar gak sempit */
    .btn-group .dropdown-toggle {
        padding: 6px 10px;
    }

    /* Warna tombol tambah */
    .btn-primary {
        background-color: #6c5ce7;
        border-color: #6c5ce7;
    }
</style>
@endpush

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Data Berita UIN</h5>
                <a href="{{ route('berita.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php $no = 1; @endphp
                    <tbody class="table-border-bottom-0">
                        @foreach ($berita as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->judul_berita }}</td>
                            <td>{{ $item->flag == 0 ? 'DRAF' : 'PUBLISHED' }}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a href="{{ route('berita.edit', $item->id) }}" class="dropdown-item">
                                                <i class="fas fa-edit me-1"></i> Edit
                                            </a>

                                        </li>
                                        <li>
                                            <a href="{{ route('berita.show', $item->id) }}" class="dropdown-item">
                                                <i class="fas fa-eye me-1"></i> Show
                                            </a>

                                        </li>
                                        <!-- Formulir untuk hapus -->
                                        <li>
                                            <form action="{{ route('berita.destroy', $item->id) }}" method="POST"
                                                class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    <i class="fas fa-trash-alt me-1"></i> Delete
                                                </button>
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
@push('scripts')
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#dataTable');
        $(document).ready(function () {
            $('#dataTable').DataTable({
                responsive: true,
                pageLength: 10
            });
        });
</script>
@endpush
