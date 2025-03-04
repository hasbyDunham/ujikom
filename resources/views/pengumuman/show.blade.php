@extends('layouts.backend')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="card-md-8">
                <div class="card">
                    <div class="card-header">Data Pengumuman
                        <a href="{{ route('pengumuman.index') }}" class="btn btn-sm btn-primary"
                            style="float: right">Kembali</a>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Pengumuman : </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $pengumuman->judul_pengumuman !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi Pengumuman :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $pengumuman->deskripsi_pengumuman !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Status : </label>
                            <b>{{ $pengumuman->flag == 0 ? 'DRAF' : 'PUBLISHED' }}</b>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Gambar : </label>
                            <img src="{{ asset('/images/pengumuman/' . $pengumuman->foto) }}" alt=""
                                style="width: 200px">
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
