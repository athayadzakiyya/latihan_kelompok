@extends('depan.layouts.index')

@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Pendaftaran</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Halaman Pendaftaran</p>
            </div>
        </div>
    </div>
    <div class="content-wrapper d-flex justify-content-center align-items-center">
        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <h5 class="card-header">Masukan data anda</h5>
                        <div class="card-body p-5">

                            <form method="post" action="{{ url('/pendaftarandetail') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <label for="nm_panggilan" class="col-4 col-form-label">Nama</label>
                                    <div class="col-8">
                                        <input id="nm_panggilan" name="nm_panggil" placeholder="Masukan nama..."
                                            type="text" class="form-control">
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
                                    <label class="col-4">Jenis Kelamin</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jk" id="radio_0" type="radio" class="custom-control-input"
                                                value="L">
                                            <label for="radio_0" class="custom-control-label">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jk" id="radio_1" type="radio" class="custom-control-input"
                                                value="P">
                                            <label for="radio_1" class="custom-control-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tmp_lahir" class="col-4 col-form-label">Tempat lahir</label>
                                    <div class="col-8">
                                        <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukan tempat lahir..."
                                            type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-4 col-form-label">Alamat</label>
                                    <div class="col-8">
                                        <input id="alamat" name="alamat" placeholder="Masukan alamat..." type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal lahir</label>
                                    <div class="col-8">
                                        <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukan tampat lahir..."
                                            type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="date" class="col-4 col-form-label">Tahun Ajar</label>
                                    <div class="col-8">
                                        <input id="date" name="thn_ajar" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto_anak" class="col-4 col-form-label">Foto anak</label>
                                    <div class="col-8">
                                        <input id="foto_anak" name="foto_anak" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto_SuratSehat" class="col-4 col-form-label">Foto surat sehat</label>
                                    <div class="col-8">
                                        <input id="foto_SuratSehat" name="foto_SuratSehat" type="file"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fc_ijazah" class="col-4 col-form-label">Fc ijazah</label>
                                    <div class="col-8">
                                        <input id="fc_ijazah" name="fc_ijazah" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fc_SKHUN" class="col-4 col-form-label">Fc SKHUN</label>
                                    <div class="col-8">
                                        <input id="fc_SKHUN" name="fc_SKHUN" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fc_NISN" class="col-4 col-form-label">Fc NISN</label>
                                    <div class="col-8">
                                        <input id="fc_NISN" name="fc_NISN" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fc_BPJS" class="col-4 col-form-label">Fc BPJS</label>
                                    <div class="col-8">
                                        <input id="fc_BPJS" name="fc_BPJS" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fc_KK" class="col-4 col-form-label">Fc kartu keluarga</label>
                                    <div class="col-8">
                                        <input id="fc_KK" name="fc_KK" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fc_AkteLahir" class="col-4 col-form-label">Fc akte lahir</label>
                                    <div class="col-8">
                                        <input id="fc_AkteLahir" name="fc_AkteLahir" type="file"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fc_KTPOrtu" class="col-4 col-form-label">Fc KTP orang tua</label>
                                    <div class="col-8">
                                        <input id="fc_KTPOrtu" name="fc_KTPOrtu" type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="text-center mt-5 d-flex justify-content-center">
                                        <a href="{{ url('/') }}"
                                            class="btn btn-danger fw-semibold px-5 py-2 mx-3">Kembali</a>
                                        <a href="{{ url('/pendaftarandetail') }}"> 
                                            <button type="button"
                                                class="btn btn-primary fw-semibold px-5  py-2 mx-3">Daftar </button> </a>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
