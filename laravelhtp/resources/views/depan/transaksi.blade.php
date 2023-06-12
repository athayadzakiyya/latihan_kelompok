@extends('depan.layouts.index')

@section('content')
<div class="mt-5"></div>

<div class="content-wrapper d-flex justify-content-center align-items-center ">
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Halaman Detail Pembayaran</h5>
                    <div class="card-body p-5">

                        <div class="form-group row">
                            <label for="nm_panggilan" class="col-4 col-form-label">Biaya Pemeliharaan Gedung</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="Rp 2.000.000.00" readonly>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="nm_panggilan" class="col-4 col-form-label">Syahriah Pondok</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="Rp  " readonly>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nm_panggilan" class="col-4 col-form-label">Syahriah Diniyah</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="Rp  " readonly>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nm_panggilan" class="col-4 col-form-label">Baju Olah Raga</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="Rp  " readonly>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nm_panggilan" class="col-4 col-form-label">Raport Diniyah+Setoran</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="Rp  " readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nm_panggilan" class="col-4 col-form-label">Baju Almamater Pondok</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="Rp  " readonly>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nm_panggilan" class="col-4 col-form-label">Foto dan KTS</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="Rp  " readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nm_panggilan" class="col-4 col-form-label">Lemari</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="Rp  " readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nm_panggilan" class="col-4 col-form-label">Kasur+Bantal</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="Rp  " readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nm_panggilan" class="col-4 col-form-label"><b>Total</b></label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="Rp  " readonly>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="text-center mt-5 d-flex justify-content-center">
                                <a href="{{ url('/pendaftaranstatus') }}"
                                    class="btn btn-danger fw-semibold px-4 py-2 mx-3">Kembali</a>
                                <a href="{{ url('/pembayaran') }}"> <button type="button"
                                        class="btn btn-primary fw-semibold px-4  py-2 mx-3">Lanjut</button> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection