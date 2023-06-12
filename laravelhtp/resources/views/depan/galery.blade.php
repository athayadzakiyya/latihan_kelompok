@extends('depan.layouts.index')

@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Gallery</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Gallery</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Our Gallery</span>
                </p>
                <h1 class="mb-4">Galeri Pondok Pesantren Baiturrahim</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active" data-filter="*">
                            All
                        </li>
                        <li class="btn btn-outline-primary m-1" data-filter=".first">
                            Foto Bersama
                        </li>
                        <li class="btn btn-outline-primary m-1" data-filter=".second">
                            Mengaji
                        </li>
                        <li class="btn btn-outline-primary m-1" data-filter=".third">
                            Diskusi
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ url('depan/img/galeri-1.jpg') }}" alt="" />
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ url('depan/img/galeri-1.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ url('depan/img/galeri-2.jpg') }}" alt="" />
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ url('depan/img/galeri-2.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ url('depan/img/galeri-3.jpg') }}" alt="" />
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ url('depan/img/galeri-3.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ url('depan/img/galeri-4.jpg') }}" alt="" />
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ url('depan/img/galeri-4.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ url('depan/img/galeri-5.jpg') }}" alt="" />
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ url('depan/img/galeri-5.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ url('depan/img/galeri-6.jpg') }}" alt="" />
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ url('depan/img/galeri-6.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ url('depan/img/galeri-7.jpg') }}" alt="" />
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ url('depan/img/galeri-7.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ url('depan/img/galeri-8.jpg') }}" alt="" />
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ url('depan/img/galeri-8.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ url('depan/img/galeri-9.jpg') }}" alt="" />
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ url('depan/img/galeri-9.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
            <div class="container p-0">
                <div class="text-center pb-2">
                    <p class="section-title px-5">
                        <span class="px-2">Activity</span>
                    </p>
                    <h1 class="mb-4">Kegiatan Pondok Pesantren Tahfidzul Qur’an Baiturrahim</h1>
                </div>
                <div class="col">
                
                <div class="col-lg-12 mb-3">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-1.jpg" alt="" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Kegiatan Wajib</h4>
                            <p class="card-text">
                            "Santri diwajibkan mengikuti kegiatan yang telah ditetapkan, 
                            sebagai upaya pembiasaan dan pendisiplinan, sehingga kelak santri 
                            akan menjadi generasi yang siap berkompetensi"
                            </p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-left border-right">
                                    <strong>Bangun Tidur</strong>
                                </div>
                                <div class="col-6 py-1">03.15 – 03.30</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-left border-right">
                                    <strong>Mujahadah Qobla Shubuh</strong>
                                </div>
                                <div class="col-6 py-1">03.30 – 04.15 </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-left border-right">
                                    <strong>Sholat Shubuh Berjamaah</strong>
                                </div>
                                <div class="col-6 py-1">04.30 – 05.30 </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-left border-right">
                                    <strong>Halaqoh Shubuh (Mudarosah)</strong>
                                </div>
                                <div class="col-6 py-1">05.30 – 07.30 </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-left border-right">
                                    <strong>Piket, Mandi & Sarapan</strong>
                                </div>
                                <div class="col-6 py-1">07.30 – 08.30 </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-left border-right">
                                    <strong>Sholat Dhuha </strong>
                                </div>
                                <div class="col-6 py-1">08.30 – 09.00 </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Halaqoh Dhuha (Setoran)</strong>
                                </div>
                                <div class="col-6 py-1">09.00 – 11.45 </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Istirahat & Persiapan Sholat Dzhuhur </strong>
                                </div>
                                <div class="col-6 py-1">11.45 –12.00 </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Sholat Dzuhur Berjamaah</strong>
                                </div>
                                <div class="col-6 py-1">12.00 – 12.30 </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Makan Siang</strong>
                                </div>
                                <div class="col-6 py-1">12.30 – 13.00 </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Halaqoh Dzuhur (Setoran)</strong>
                                </div>
                                <div class="col-6 py-1">13.00 – 14.30</div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Istirahat, Persiapan Sholat Ashar & Mandi</strong>
                                </div>
                                <div class="col-6 py-1">14.30 – 15.00 </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Sholat Ashar Berjamaah</strong>
                                </div>
                                <div class="col-6 py-1">15.00 – 15.30  </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Halaqoh Ashar (Ta’lim)</strong>
                                </div>
                                <div class="col-6 py-1">15.30 – 17.00 </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Piket, Persiapan Sholat Maghrib & Tilawatil Qur’an</strong>
                                </div>
                                <div class="col-6 py-1">17.00 – 18.00 </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Sholat Maghrib Berjamaah </strong>
                                </div>
                                <div class="col-6 py-1">18.00 – 18.30 </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Halaqoh Maghrib (Ta’lim)</strong>
                                </div>
                                <div class="col-6 py-1">18.30 – 19.45 </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Sholat Isya’ Berjamaah</strong>
                                </div>
                                <div class="col-6 py-1">19.45 – 20.00 </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Makan Malam</strong>
                                </div>
                                <div class="col-6 py-1">20.00 – 20.30 </div>
                            </div>
                            <div class="row border-bottom">
                            <div class="col-6 py-1 text-left border-right">
                                    <strong>Halaqoh Isya’ (Ta’lim/Setoran)</strong>
                                </div>
                                <div class="col-6 py-1">20.30 – 22.00 </div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-left border-right">
                                    <strong>Istirahat/Tidur</strong>
                                </div>
                                <div class="col-6 py-1">22.00– 03.15</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-body text-center ">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-3.jpg" alt="" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Kegiatan Ekstra</h4>
                            <p class="card-text">
                            “Selain santri diberikan kegiatan wajib, 
                            mereka juga diberikan kegiatan ekstra sebagai penunjang dan penyaluran bakat yang dimiliki dalam diri santri"
                            </p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-15 py-1 text-left">
                                    <strong>Dzikir Akbar & Sholawat Malam Jum'at</strong>
                                </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-15 py-1 text-left">
                                    <strong>Muhadhoroh</strong>
                                </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-15 py-1 text-left">
                                    <strong>Khotmul Qur’an Bil Ghoib</strong>
                                </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-15 py-1 text-left">
                                    <strong>Futsal</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-15 py-1 text-left">
                                    <strong>Komputer</strong>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a> -->
                    </div>
                </div>
                </div>
            </div>
        </div>
@endsection
