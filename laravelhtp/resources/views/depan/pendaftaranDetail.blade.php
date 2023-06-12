@extends('depan.layouts.index')


@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Detail Pendaftaran</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Halaman Detail Pendaftaran</p>
            </div>
        </div>
    </div>



    <div class="content-wrapper d-flex justify-content-center align-items-center">
        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <h5 class="card-header">Data Detail Pendaftaran</h5>
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
                                        <input type="text" class="form-control" value="Laniwambuliga@gmail.com" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nm_panggilan" class="col-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="Laki-laki" readonly>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="nm_panggilan" class="col-4 col-form-label">Tempat Lahir</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="Sombu" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nm_panggilan" class="col-4 col-form-label">Alamat</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="Desa sombu" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nm_panggilan" class="col-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="27-02-2003" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nm_panggilan" class="col-4 col-form-label">Tahun Ajar</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="2022" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nm_panggilan" class="col-4 col-form-label">Foto Anak</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <img src="" alt="foto anak">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="nm_panggilan" class="col-4 col-form-label">Foto Surat Sehat</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <img src="" alt="foto surat sehat">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="fc_SKHUN" class="col-4 col-form-label">Fc ijazah</label>
                                <div class="col-8">
                                    <p class="form-control text-truncate" style="max-width: 100%;">
                                        <a href="">fc_ijazah.pdf</a>
                                    </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fc_SKHUN" class="col-4 col-form-label">Fc SKHUN</label>
                                <div class="col-8">
                                    <p class="form-control text-truncate" style="max-width: 100%;">
                                        <a href="">SKHUN.pdf</a>
                                    </p>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="fc_NISN" class="col-4 col-form-label">Fc NISN</label>
                                <div class="col-8">
                                    <p class="form-control text-truncate" style="max-width: 100%;">
                                        <a href="">fc nis.pdf</a>
                                    </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fc_BPJS" class="col-4 col-form-label">Fc BPJS</label>
                                <div class="col-8">
                                    <p class="form-control text-truncate" style="max-width: 100%;">
                                        <a href="">fc BPJS.pdf</a>
                                    </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fc_KK" class="col-4 col-form-label">Fc KK</label>
                                <div class="col-8">
                                    <p class="form-control text-truncate" style="max-width: 100%;">
                                        <a href="">fc kk.pdf</a>
                                    </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fc_AkteLahir" class="col-4 col-form-label">Fc akte lahir</label>
                                <div class="col-8">
                                    <p class="form-control text-truncate" style="max-width: 100%;">
                                        <a href="">fc_AkteLahir.pdf</a>
                                    </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fc_KTPOrtu" class="col-4 col-form-label">Fc KTP orang tua</label>
                                <div class="col-8">
                                    <p class="form-control text-truncate" style="max-width: 100%;">
                                        <a href="">FC fc_KTPOrtu.pdf</a>
                                    </p>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="text-center mt-5 d-flex justify-content-center">
                                    <a href="{{ url('/pendaftaran') }}"
                                        class="btn btn-danger fw-semibold px-5 py-2 mx-3">Kembali</a>
                                    <a href="{{ url('/pendaftaranverifikasi') }}"
                                        class="btn btn-primary fw-semibold px-5 py-2 mx-3">Lanjut</a>
                                    
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            
        @endsection
