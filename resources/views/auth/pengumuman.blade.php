@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">



    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-2 pe-md-0">
                        <div class="auth-side-wrapper" style="background-image: url({{ url('') }})">

                        </div>
                    </div>

                    <div class="col-md-8 ps-md-0">
                        <div class="auth-form-wrapper px-4 py-5">
                            <a href="#" class="noble-ui-logo d-block mb-2">PENGUMUMAN HASIL TES
                                <span>PPDBM JALUR PRESTASI, TERPADU & AFILIASI</span></a>
                            <h5 class="text-muted fw-normal mb-4 mt-4">Silahkan klik tombol di bawah ini untuk hasil
                                pengumuman tes ppdbm</h5>
                            @if (session('error'))
                            <div class="alert alert-danger">
                                <b>Opps!</b> {{ session('error') }}
                            </div>
                            @endif

                            <a href="//drive.google.com/file/d/1_sLkJ9oSLCPFnwJE5se1lx78WEN7O9PE/view?usp=sharing"
                                target="_blank" class="btn btn-primary">LIHAT HASIL PENGUMUMAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection