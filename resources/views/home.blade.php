@extends('layouts.backend')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang
                                @guest
                                @else
                                <b>{{Auth::user()->name}}</b>
                                @endguest! 🎉
                            </h5>

                            <p class="mb-4">
                                You have done <span class="fw-bold">72%</span> Selamat datang di halaman Dashboard
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
