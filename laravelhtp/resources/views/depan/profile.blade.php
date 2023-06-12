@extends('depan.layouts.index')

@section('content')
    <div class="mt-5"></div>
    <div class="content-wrapper d-flex justify-content-center align-items-center ">
        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <h5 class="card-header">Profile</h5>
                        <div class="card-body p-5">

                            <div class="form-group row">
                                <label for="nm_panggilan" class="col-4 col-form-label">Nama</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="Mirlani" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nm_panggilan" class="col-4 col-form-label">Email</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="laniwambuliga@gmail.com" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nm_panggilan" class="col-4 col-form-label">Status Pendaftaran</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="Terima" readonly>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nm_panggilan" class="col-4 col-form-label">Status pembayaran</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="belum bayar" readonly>
                                    </div>

                                </div>
                                <a href="{{ url('/pendaftaran') }}" class="btn btn-primary mt-4 ">Pendaftaran</a>
                                <a href="{{ url('/pendaftaranupdate') }}" class="btn btn-primary mt-4 ">Upadate Pendaftaran</a>

                                <a href="{{ url('/transaksi') }}" class="btn btn-primary mt-4 ">Bayar</a>
                            </div>
                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
