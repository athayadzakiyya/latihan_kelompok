@extends('depan.layouts.index')

@section('content')
    
<div class="mt-5"></div>

<div class="content-wrapper d-flex justify-content-center align-items-center ">
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Halaman Pembayaran</h5>
                    <div class="card-body p-5">

                        <div class="form-group row">
                            <label for="nm_panggilan" class="col-4 col-form-label">No Rekening Bank</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="282928398299329" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nm_panggilan" class="col-4 col-form-label">Bukti Pembayaran</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="file" class="form-control"  name="" >
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <div class="text-center mt-5 d-flex justify-content-center">
                                <a href="{{ url('/pendaftaranstatus') }}"
                                    class="btn btn-danger fw-semibold px-4 py-2 mx-3">Kembali</a>
                                <a href="{{ url('/pembayaranverifikasi') }}"> <button type="button"
                                        class="btn btn-primary fw-semibold px-4  py-2 mx-3">Pembayaran</button> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection