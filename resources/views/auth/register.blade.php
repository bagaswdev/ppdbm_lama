@extends('layout.master2')

@section('content')
    <div class="main-wrapper" id="app">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper"
                                        style="background-image: url(https://www.nobleui.com/laravel/template/demo1/assets/images/photos/img6.jpg)">

                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo d-block mb-2">PPDBM<span> MTsN 1 Kota
                                                Malang</span></a>
                                        <h5 class="text-muted fw-normal mb-4">Buat akun calon peserta didik untuk daftar
                                            PPDBM</h5>
                                        <form class="forms-sample">
                                            <div class="mb-3">
                                                <label for="nik_calon_siswa" class="form-label">NIK Calon Peserta
                                                    Didik</label>
                                                <input type="text" class="form-control" id="nik_calon_peserta_didik"
                                                    autocomplete="NIK Calon Peserta Didik" placeholder="3508672898998881">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama_calon_siswa" class="form-label">Nama Lengkap Calon Peserta
                                                    Didik</label>
                                                <input type="text" class="form-control" id="nama_calon_peserta_didik"
                                                    autocomplete="Nama Lengkap Calon Peserta Didik" placeholder="John Doe">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="johndoe@gmail.com">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password"
                                                    autocomplete="current-password" placeholder="Password">
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-primary me-2 mb-2 mb-md-0">BUAT AKUN</a>
                                            </div>
                                            <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Sudah mempunyai
                                                akun? KLIK DISINI
                                                UNTUK LOGIN</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
