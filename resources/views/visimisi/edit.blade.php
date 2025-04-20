@extends('layouts.backend')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Data Visi Misi</h5>
                        <a href="{{ route('visimisi.index') }}" class="btn btn-sm btn-primary"
                            style="float: right">Kembali</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('visimisi.update', $visimisi->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Visi</label>
                                <div class="col-sm-10">
                                    <textarea name="visi" id="deskripsi" cols="30" rows="10">{!! $visimisi->visi !!}</textarea>
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
                                    <textarea name="misi" id="deskripsi" cols="30" rows="10">{{ $visimisi->misi }}</textarea>
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
                                    <textarea name="tujuan" id="tujuan" cols="30" rows="10">{{ $visimisi->tujuan }}</textarea>
                                    @error('tujuan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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
