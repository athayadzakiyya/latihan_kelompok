@extends('depan.layouts.index')

@section('content')
<div class="mt-5"></div>
<div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card mb-4">
        <div class="card-body p-5">
          <p>Terima kasih atas pembayaran yang telah Anda lakukan. Kami sangat menghargai waktu dan usaha yang Anda berikan. Tim kami akan segera memverifikasi pembayaran yang telah Anda lakukan. Mohon diingat untuk selalu memantau status pembayaran Anda melalui informasi yang akan kami sampaikan. Kami akan memberikan update secepatnya. Jika ada pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami. Terima kasih lagi atas pembayaran Anda dan semoga semuanya berjalan lancar!</p>
          <div class="row">
            <div class="col-12 d-flex justify-content-end">
              <a href="{{ url("/profile") }}" class="btn btn-primary px-5 mt-4">Oke</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection