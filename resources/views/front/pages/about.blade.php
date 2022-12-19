@extends('front.layouts.master2')

@section('title')
    Haqqımızda
@endsection

@section('content')
        <!-- About Start -->
        <div class="container-fluid mb-5 py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 px-0">
                    <img width="900px" height="1000px" class="img-fluid" src="{{ $about->img}}" alt="Image">
                </div>
                <div  class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                    <h5 class="text-primary mb-3">Haqqımızda</h5>
                    <h1 class="mb-4">{{ $about->title }}</h1>
                    <p>{{ $about->desc }}</p>
                   
                </div>
            </div>
        </div>
        <!-- About End -->
@endsection