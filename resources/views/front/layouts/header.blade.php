<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title','Aviasiya')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="{{ asset('front/') }}/img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{ asset('front/') }}/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front/') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front/') }}/css/style.css" rel="stylesheet">
</head>

<body class="bg-white">
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left">
                <div class="d-inline-flex align-items-center">
                    <p class="mr-2 mb-2 mb-lg-0 text-white"></p>
                    <span class="mb-2 mb-lg-0 text-white"></span>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <p class="m-0 mr-1 text-white">Sosial Hesablar:</p>
                    <a class="text-white px-2" href="{{ $setting->fb }}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="{{ $setting->tw}}">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href={{ $setting->ln }}">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="{{ $setting->ins }}">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="{{ route('index') }}" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize font-italic"><span class="text-primary">Avi</span>Asiya</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                  
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email </h6>
                        <p class="m-0">{{ $setting->email }}</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Telefon</h6>
                        <p class="m-0">+{{ $setting->number }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                    <a href="{{ route('index') }}" class="nav-item nav-link active">Əsas Səhifə</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">Haqqımızda</a>
                    <a href="{{ route('korpus') }}" class="nav-item nav-link">Korpuslar</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Əlaqə</a>
                    <a href="{{ route('admin.signup') }}" class="nav-item nav-link">Qeydiyyatdan Keç</a>
                    <a href="{{ route('admin.login') }}" class="nav-item nav-link">Giriş et</a>


                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->