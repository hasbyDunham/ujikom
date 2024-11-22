@extends('layouts.backend')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Tambah Data Berita Fakultas</h5>
                        <a href="{{ route('beritaF.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('beritaF.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Berita
                                    Fakultas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('judul_beritaF') is-invalid @enderror"
                                        name="judul_beritaF" id="judul_beritaF" value="{{ old('judul_beritaF') }}">
                                    @error('judul_beritaF')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsiF" id="deskripsi" cols="30" rows="10">{{ old('deskripsiF') }}</textarea>
                                    @error('deskripsiF')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Flag</label>
                                <div class="col-sm-10">
                                    <select name="flag" id="flag" class="form-control" required>
                                        <option value="" disabled>Pilih Flag</option>
                                        <option value="1">PUBLISHED</option>
                                        <option value="0">DRAF</option>
                                    </select>
                                    @error('flag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Foto</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                    name="foto" id="foto">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row float-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Basic with Icons -->
        </div>
    </div>
@endsection
@push('scriptjs')
@endpush
