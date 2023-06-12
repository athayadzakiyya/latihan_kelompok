@extends('depan.layouts.index')

@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Verifikasi Pendaftaran </h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Halaman Verifikasi Pendaftaran</p>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-body p-5">
              <p>Terima kasih atas pendaftaran dan pengumpulan berkas Anda. Kami sangat menghargai waktu dan usaha yang Anda berikan. Tim admin kami akan segera melakukan pemeriksaan terhadap berkas yang telah Anda kumpulkan. Mohon diingat untuk selalu memantau status pendaftaran Anda melalui informasi yang akan kami sampaikan. Kami akan memberikan update secepatnya. Jika ada pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami. Terima kasih lagi dan semoga sukses dalam proses pendaftaran ini!.</p>
              <div class="row">
                <div class="col-12 d-flex justify-content-end">
                  <a href="{{ url("/") }}" class="btn btn-primary px-5 mt-4">Oke</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
