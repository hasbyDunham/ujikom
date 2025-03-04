@extends('layouts.backend')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Tambah Data Jurusan</h5>
                        <a href="{{ route('jurusan.index') }}" class="btn btn-sm btn-primary"
                            style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jurusan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Jurusan</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control @error('nama_jurusan') is-invalid @enderror"
                                        name="nama_jurusan" id="nama_jurusan" value="{{ old('nama_jurusan') }}">
                                    @error('nama_jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Akreditasi</label>
                                <div class="col-sm-10">
                                    <select name="akreditasi"
                                        class="form-control @error('akreditasi') is-invalid @enderror" id="">
                                        <option value="">Pilih Akreditasi</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                    @error('akreditasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Gelar</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control @error('gelar') is-invalid @enderror"
                                        name="gelar" id="gelar" value="{{ old('gelar') }}">
                                    @error('gelar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Penyelenggara</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control @error('penyelenggara') is-invalid @enderror"
                                        name="penyelenggara" id="penyelenggara" value="{{ old('penyelenggara') }}">
                                    @error('penyelenggara')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Berdiri</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control @error('tgl_berdiri') is-invalid @enderror"
                                        name="tgl_berdiri" id="tgl_berdiri" value="{{ old('tgl_berdiri') }}">
                                    @error('tgl_berdiri')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Ket 1</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control @error('judul_ket1') is-invalid @enderror"
                                        name="judul_ket1" id="judul_ket1" value="{{ old('judul_ket1') }}">
                                    @error('judul_ket1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi 1</label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsi1" id="deskripsi" cols="30" rows="10">{{ old('deskripsi1') }}</textarea>
                                    @error('deskripsi1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Foto 1</label>
                                <input type="file" class="form-control @error('foto1') is-invalid @enderror"
                                    name="foto1" id="foto1">
                                @error('foto1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Ket 2</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control @error('judul_ket2') is-invalid @enderror"
                                        name="judul_ket2" id="judul_ket2" value="{{ old('judul_ket2') }}">
                                    @error('judul_ket2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi 2</label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsi2" id="deskripsi" cols="30" rows="10">{{ old('deskipsi2r') }}</textarea>
                                    @error('deskripsi2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Foto 2</label>
                                <input type="file" class="form-control @error('foto2') is-invalid @enderror"
                                    name="foto2" id="foto2">
                                @error('foto2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Visi</label>
                                <div class="col-sm-10">
                                    <textarea name="visi" id="deskripsi" cols="30" rows="10">{{ old('visi') }}</textarea>
                                    @error('visi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Misi</label>
                                <div class="col-sm-10">
                                    <textarea name="misi" id="deskripsi" cols="30" rows="10">{{ old('misi') }}</textarea>
                                    @error('misi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Tujuan</label>
                                <div class="col-sm-10">
                                    <textarea name="tujuan" id="deskripsi" cols="30" rows="10">{{ old('tujuan') }}</textarea>
                                    @error('tujuan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Sasaran</label>
                                <div class="col-sm-10">
                                    <textarea name="sasaran" id="deskripsi" cols="30" rows="10">{{ old('sasaran') }}</textarea>
                                    @error('sasaran')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Akhir</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control @error('judul_akhir') is-invalid @enderror"
                                        name="judul_akhir" id="judul_akhir" value="{{ old('judul_akhir') }}">
                                    @error('judul_akhir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Pertanyaan</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control @error('nanya') is-invalid @enderror"
                                        name="nanya" id="nanya" value="{{ old('nanya') }}">
                                    @error('nanya')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Link Menuju Jurusan Tersebut</label>
                                <div class="col-sm-10">
                                    <input type="url"
                                        class="form-control @error('url') is-invalid @enderror"
                                        name="url" id="url" value="{{ old('url') }}">
                                    @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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
