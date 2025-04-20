@extends('layouts.backend')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Data Pimpinan</h5>
                        <a href="{{ route('pimpinan.index') }}" class="btn btn-sm btn-primary"
                            style="float: right">Kembali</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('pimpinan.update', $pimpinan->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Pimpinan</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ old('nama', $pimpinan->nama) }}"
                                        name="nama" id="nama">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Jabatan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" id="editor" class="form-control @error('deskripsi_pengumuman') is-invalid @enderror"
                    value="{{ old('deskripsi_pengumuman', $pengumuman->deskripsi_pengumuman) }}"
                    name="deskripsi_pengumuman"> --}}
                                    <textarea name="jabatan" id="jabatan" cols="30" rows="10">{{ $pimpinan->jabatan }}</textarea>
                                    @error('jabatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Foto Pimpinan</label>
                                <img src="{{ asset('storage/images/pimpinan/' . $pimpinan->foto) }}"
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
