@extends('layouts.backend')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row justify-content-center">
        <div class="card-md-8">
            <div class="card">
                <div class="card-header">Data Berita
                    <a href="{{route('berita.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Judul berita</label>
                        <b>{{$berita->judul_berita}}</b>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <label for="">Deskripsi</label>
                        <b>{{$berita->deskripsi_berita}}</b>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <img src="{{ asset('/images/pengumuman/' . $pengumuman->foto) }}" alt="" style="width: 200px">
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
