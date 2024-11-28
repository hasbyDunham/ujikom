@extends('layouts.backend')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="card-md-8">
                <div class="card">
                    <div class="card-header">Data Berita Fakultas
                        <a href="{{ route('beritaF.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Berita Fakultas : </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $beritaF->judul_beritaF }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi Berita Fakultas :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $beritaF->deskripsiF !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Status : </label>
                            <b>{{ $beritaF->flag == 0 ? 'DRAF' : 'PUBLISHED' }}</b>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Gambar : </label>
                            <img src="{{ asset('/images/beritaF/' . $beritaF->foto) }}" alt="" style="width: 200px">
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
