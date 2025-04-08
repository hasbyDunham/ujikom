@extends('layouts.backend')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Data Berita UIN</h5>
                        <a href="{{ route('berita.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('berita.update', $berita->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Berita</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('judul_berita') is-invalid @enderror"
                                        value="{{ old('judul_berita', $berita->judul_berita) }}" name="judul_berita"
                                        id="judul_berita">
                                    @error('judul_berita')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10">{{ $berita->deskripsi }}</textarea>
                                    @error('deskripsi')
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
                                        {{ old('flag', $berita->flag) }}
                                        <option value="1" @selected(old('flag', $berita->flag) == 1)>PUBLISHED</option>
                                        <option value="0" @selected(old('flag', $berita->flag) == 0)>DRAF</option>
                                    </select>
                                    @error('flag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                                <img src="{{ asset('storage/images/berita/' . $berita->foto) }}"
                                    style="width: 200px;height: 100px;" class="mb-3">
                                <input type="file" class="form-control" name="foto">
                            </div>
                            <div class="row float-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Perbarui</button>
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
