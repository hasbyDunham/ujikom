@extends('layouts.backend')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Data Pengumuman</h5>
                        <a href="{{ route('pengumuman.index') }}" class="btn btn-sm btn-primary"
                            style="float: right">Kembali</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Judul pengumuman</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control @error('judul_pengumuman') is-invalid @enderror"
                                        value="{{ old('judul_pengumuman', $pengumuman->judul_pengumuman) }}"
                                        name="judul_pengumuman" id="judul_pengumuman">
                                    @error('judul_pengumuman')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" id="editor" class="form-control @error('deskripsi_pengumuman') is-invalid @enderror"
                    value="{{ old('deskripsi_pengumuman', $pengumuman->deskripsi_pengumuman) }}"
                    name="deskripsi_pengumuman"> --}}
                                    <textarea name="deskripsi_pengumuman" id="deskripsi" cols="30" rows="10">{{ $pengumuman->deskripsi_pengumuman }}</textarea>
                                    @error('deskripsi_pengumuman')
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
                                        <option value="1" @selected(old('flag', $pengumuman->flag) == 1)>PUBLISHED</option>
                                        <option value="0" @selected(old('flag', $pengumuman->flag) == 0)>DRAF</option>
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
                                <img src="{{ asset('images/pengumuman/' . $pengumuman->foto) }}"
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
