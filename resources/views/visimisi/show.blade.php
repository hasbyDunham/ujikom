@extends('layouts.backend')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="card-md-8">
                <div class="card">
                    <div class="card-header">Data Sambutan
                        <a href="{{ route('sambutan.index') }}" class="btn btn-sm btn-primary"
                            style="float: right">Kembali</a>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Visi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $visimisi->visi }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Misi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $visimisi->misi }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tujuan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $visimisi->tujuan }}">
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
