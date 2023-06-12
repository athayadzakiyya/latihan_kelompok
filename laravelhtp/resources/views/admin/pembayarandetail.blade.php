@extends('admin.layouts.index')

@section('content')

<div class="content-wrapper d-flex justify-content-center align-items-center">
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <h5 class="card-header">Data Detail Pembayaran</h5>
                    <div class="card-body p-5">

                        <form action="{{ url('/admin/pendaftaranverifikasi') }}" method="">

                            <div class="form-group row">
                                <label for="nm_panggilan" class="col-4 col-form-label">Bukti Pembayaran</label>
                                <div class="col-8">
                                    <div class="input-group">
                                       <img src="" alt="bukti pembayaran">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="text-center mt-5 d-flex justify-content-center">
                                    <a href="{{ url('/admin/verifikasipembayaran') }}"
                                        class="btn btn-danger fw-semibold px-4 py-2 mx-3">Kembali</a>
                                    <button type="button" class="btn btn-primary fw-semibold px-4  py-2 mx-3"
                                        onclick="return confirm('Anda yakin ingin mengklik lunas')">Lunas</button>
                                   
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    
@endsection