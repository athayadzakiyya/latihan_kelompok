@extends('depan.layouts.index')

@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Our Teachers</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Our Teachers</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Our Teachers</span>
                </p>
                <h1 class="mb-4">Meet Our Teachers</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src="{{ asset("depan/img/team-1.jpg") }}" alt="" />
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Julia Smith</h4>
                    <i>Music Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src="{{ asset("depan/img/team-2.jpg") }}" alt="" />
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Jhon Doe</h4>
                    <i>Language Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src="{{ asset("depan/img/team-3.jpg") }}" alt="" />
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Mollie Ross</h4>
                    <i>Dance Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src="{{ asset("depan/img/team-4.jpg") }}" alt="" />
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Donald John</h4>
                    <i>Art Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src="{{ asset("depan/img/team-4.jpg") }}" alt="" />
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Julia Smith</h4>
                    <i>Music Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src="{{ asset("depan/img/team-1.jpg") }}" alt="" />
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Jhon Doe</h4>
                    <i>Language Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src="{{ asset("depan/img/team-2.jpg") }}" alt="" />
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Mollie Ross</h4>
                    <i>Dance Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src="{{ asset("depan/img/team-2.jpg") }}" alt="" />
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Donald John</h4>
                    <i>Art Teacher</i>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Testimonial</span>
                </p>
                <h1 class="mb-4">What Parents Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                        eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="{{ asset("depan/img/testimonial-1.jpg") }}" style="width: 70px; height: 70px"
                            alt="Image" />
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                        eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="{{ asset("depan/img/testimonial-2.jpg") }}" style="width: 70px; height: 70px"
                            alt="Image" />
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                        eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="{{ asset("depan/img/testimonial-3.jpg") }}" style="width: 70px; height: 70px"
                            alt="Image" />
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                        eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="{{ asset("depan/img/testimonial-4.jpg") }}" style="width: 70px; height: 70px"
                            alt="Image" />
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    

   

@endsection

{{-- @section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>KidKinder - Kindergarten Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="Free HTML Templates" name="keywords" />
        <meta content="Free HTML Templates" name="description" />

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

        <!-- Flaticon Font -->
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

        <!-- Libraries Stylesheet -->
        <link href="{{ }}lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet" />
    </head>

    <body>
        <!-- Navbar Start -->
        <div class="container-fluid bg-light position-relative shadow">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
                <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
                    <i class="flaticon-043-teddy-bear"></i>
                    <span class="text-primary">KidKinder</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav font-weight-bold mx-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="class.html" class="nav-item nav-link">Classes</a>
                        <a href="team.html" class="nav-item nav-link active">Teachers</a>
                        <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary px-4">Join Class</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid bg-primary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 font-weight-bold text-white">Our Teachers</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0"><a class="text-white" href="">Home</a></p>
                    <p class="m-0 px-2">/</p>
                    <p class="m-0">Our Teachers</p>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Team Start -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="text-center pb-2">
                    <p class="section-title px-5">
                        <span class="px-2">Our Teachers</span>
                    </p>
                    <h1 class="mb-4">Meet Our Teachers</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="" />
                            <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h4>Julia Smith</h4>
                        <i>Music Teacher</i>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="" />
                            <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h4>Jhon Doe</h4>
                        <i>Language Teacher</i>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="" />
                            <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h4>Mollie Ross</h4>
                        <i>Dance Teacher</i>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                            <img class="img-fluid w-100" src="img/team-4.jpg" alt="" />
                            <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h4>Donald John</h4>
                        <i>Art Teacher</i>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                            <img class="img-fluid w-100" src="img/team-4.jpg" alt="" />
                            <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h4>Julia Smith</h4>
                        <i>Music Teacher</i>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="" />
                            <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h4>Jhon Doe</h4>
                        <i>Language Teacher</i>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="" />
                            <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h4>Mollie Ross</h4>
                        <i>Dance Teacher</i>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="" />
                            <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h4>Donald John</h4>
                        <i>Art Teacher</i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-fluid py-5">
            <div class="container p-0">
                <div class="text-center pb-2">
                    <p class="section-title px-5">
                        <span class="px-2">Testimonial</span>
                    </p>
                    <h1 class="mb-4">What Parents Say!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item px-3">
                        <div class="bg-light shadow-sm rounded mb-4 p-4">
                            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                            Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                            eirmod clita lorem. Dolor tempor ipsum clita
                        </div>
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/testimonial-1.jpg" style="width: 70px; height: 70px"
                                alt="Image" />
                            <div class="pl-3">
                                <h5>Parent Name</h5>
                                <i>Profession</i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item px-3">
                        <div class="bg-light shadow-sm rounded mb-4 p-4">
                            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                            Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                            eirmod clita lorem. Dolor tempor ipsum clita
                        </div>
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/testimonial-2.jpg" style="width: 70px; height: 70px"
                                alt="Image" />
                            <div class="pl-3">
                                <h5>Parent Name</h5>
                                <i>Profession</i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item px-3">
                        <div class="bg-light shadow-sm rounded mb-4 p-4">
                            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                            Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                            eirmod clita lorem. Dolor tempor ipsum clita
                        </div>
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/testimonial-3.jpg" style="width: 70px; height: 70px"
                                alt="Image" />
                            <div class="pl-3">
                                <h5>Parent Name</h5>
                                <i>Profession</i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item px-3">
                        <div class="bg-light shadow-sm rounded mb-4 p-4">
                            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                            Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                            eirmod clita lorem. Dolor tempor ipsum clita
                        </div>
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/testimonial-4.jpg" style="width: 70px; height: 70px"
                                alt="Image" />
                            <div class="pl-3">
                                <h5>Parent Name</h5>
                                <i>Profession</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
            <div class="row pt-5">
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
                        style="font-size: 40px; line-height: 40px">
                        <i class="flaticon-043-teddy-bear"></i>
                        <span class="text-white">KidKinder</span>
                    </a>
                    <p>
                        Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea
                        dolor et magna dolor, elitr rebum duo est sed diam elitr. Stet elitr
                        stet diam duo eos rebum ipsum diam ipsum elitr.
                    </p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h3 class="text-primary mb-4">Get In Touch</h3>
                    <div class="d-flex">
                        <h4 class="fa fa-map-marker-alt text-primary"></h4>
                        <div class="pl-3">
                            <h5 class="text-white">Address</h5>
                            <p>123 Street, New York, USA</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <h4 class="fa fa-envelope text-primary"></h4>
                        <div class="pl-3">
                            <h5 class="text-white">Email</h5>
                            <p>info@example.com</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <h4 class="fa fa-phone-alt text-primary"></h4>
                        <div class="pl-3">
                            <h5 class="text-white">Phone</h5>
                            <p>+012 345 67890</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h3 class="text-primary mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Classes</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Teachers</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Blog</a>
                        <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h3 class="text-primary mb-4">Newsletter</h3>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control border-0 py-4" placeholder="Your Name"
                                required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                required="required" />
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block border-0 py-3" type="submit">
                                Submit Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
                <p class="m-0 text-center text-white">
                    &copy;
                    <a class="text-primary font-weight-bold" href="#">Your Site Name</a>.
                    All Rights Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed by
                    <a class="text-primary font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
                    <br />Distributed By:
                    <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </p>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

    </html>
@endsection --}}
