@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">



    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-1 pe-md-1">
                        <div class="auth-side-wrapper" style="background-image: url({{ url('') }})">
                            
                        </div>
                    </div>

                    <div class="col-md-10 ps-md-0">
                        <div class="auth-form-wrapper px-4 py-5">
                            <a href="#" class="noble-ui-logo d-block mb-2">PENDAFTARAN PPDBM<span> JALUR REGULER DAN AFIRMASI</span></a>
                            <h5 class="text-muted fw-normal mb-4 mt-4">Silahkan klik tombol di bawah ini untuk mendaftar di jalur reguler dan afirmasi</h5>
                            @if (session('error'))
                            <div class="alert alert-danger">
                                <b>Opps!</b> {{ session('error') }}
                            </div>
                            @endif
                            <a href="//tally.so/r/wQ5YVA" target="_blank" class="btn btn-primary col-xl-12">PENDAFTARAN JALUR REGULER DAN AFIRMASI</a>
                            <br>
                            <h5 class="text-muted fw-normal mb-4 mt-4">Silahkan klik tombol di bawah ini untuk bergabung ke grup WA</h5>
                            <a href="//" target="_blank" class="btn btn-success col-xl-12">GABUNG GRUP WHATSAPP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection