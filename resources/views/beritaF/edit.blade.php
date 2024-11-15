@extends('layouts.backend')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Data Berita Fakultas</h5>
                    <a href="{{ route('beritaF.index') }}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('beritaF.update', $beritaF->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Berita</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('judul_beritaF') is-invalid @enderror"
                                    value="{{ old('judul_beritaF', $beritaF->judul_beritaF) }}" name="judul_beritaF"
                                    id="judul_beritaF">
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
                                <textarea name="deskripsiF" id="deskripsi" cols="30"
                                    rows="10">{{ $beritaF->deskripsiF }}</textarea>
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
                                    {{old('flag', $pengumuman->flag)}}
                                    <option value="1" @selected(old('flag', $pengumuman->flag) == 1)>Publish</option>
                                    <option value="0" @selected(old('flag', $pengumuman->flag) == 0)>Draft</option>
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
                            <img src="{{ asset('images/beritaF/' . $beritaF->foto) }}"
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
