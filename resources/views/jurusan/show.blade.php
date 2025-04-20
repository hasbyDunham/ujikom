@extends('layouts.backend')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="card-md-8">
                <div class="card">
                    <div class="card-header">Data Jurusan
                        <a href="{{ route('jurusan.index') }}" class="btn btn-sm btn-primary"
                            style="float: right">Kembali</a>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Jurusan : </label>
                            <div class="col-sm-10">
                                <p>{!! $jurusan->nama_jurusan !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Akreditasi :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->akreditasi !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Gelar :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->gelar !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Penyelenggara :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->penyelenggara !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Berdiri :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->tgl_berdiri !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Ket 1 :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->judul_ket1 !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi 1 :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->deskripsi1 !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Foto 1 :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <img src="{{ asset('storage/images/jurusan/' . $jurusan->foto1) }}" alt="" style="width: 200px">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Ket 2 :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->judul_ket2 !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi 2 :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->deskripsi2 !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Foto 2 :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <img src="{{ asset('storage/images/jurusan/' . $jurusan->foto2) }}" alt="" style="width: 200px">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Visi :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->visi !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Misi :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->misi !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tujuan :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->tujuan !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Sasaran :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->sasaran !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul akhir :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->judul_akhir !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Pertanyaan :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->nanya !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Link Menuju Web Khusus Jurusan Tersebut :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $jurusan->url !!}</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scriptjs')
@endpush
