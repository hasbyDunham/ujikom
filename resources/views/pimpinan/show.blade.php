@extends('layouts.backend')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="card-md-8">
                <div class="card">
                    <div class="card-header">Data Pimpinan
                        <a href="{{ route('pimpinan.index') }}" class="btn btn-sm btn-primary"
                            style="float: right">Kembali</a>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Pimpinan : </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                {{-- <input type="text" class="form-control" value="{{ $pimpinan->id }}"> --}}
                                {{-- <input type="text" class="form-control" value="{{ $pimpinan->id }}"> --}}
                                {{-- <input type="text" class="form-control" value="{{ $pimpinan->nama }}"> --}}
                                <p>{!! $pimpinan->nama !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Jabatan :
                            </label>
                            <div class="col-sm-10 form-control ms-2" style="width: 82%">
                                <p>{!! $pimpinan->jabatan !!}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Gambar : </label>
                            <img src="{{ asset('storage/images/pimpinan/' . $pimpinan->foto) }}" alt=""
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
