@extends('front.layouts.master')

@section('content')
    

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($sliders as $s)
                <div class="carousel-item @if($loop->index==0) active @endif">
                    <img class="w-100" src="{{ asset($s->img) }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-primary m-0">{{ $s->title }}</h4>
                        <h4 class="display-4 m-0 mt-2 mt-md-3 text-white">{{ $s->desc }}</h4>
                        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Learn More</a>
                    </div>
                </div>
                @endforeach
              
             
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


<br>    <br> <br>


    <!-- About Start -->
    <div class="container-fluid mb-5" style="background: #f6f6f6;">
        <div class="row align-items-center">
            <div class="col-lg-6 px-0">
                <img width="100%" class="img-fluid" src="{{ asset($about->img) }}" alt="Image">
            </div>
            <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                <h5 class="text-primary mb-3">Haqqımızda</h5>
                <h1 class="mb-4">{{ $about->title }}</h1>
                <p>{{ $about->desc }}</p>
                
                <a href="{{ route('about') }}" class="btn btn-lg px-4 btn-primary">Learn More</a>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="m-0">Korpuslar</h1>
        </div>
        <div class="row pb-3">

            @foreach ($korpuss as $kor)
                <div  class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <a href="{{ route('korpus_single',$kor->id) }}">
                        <img class="card-img-top" src="{{ asset($kor->img) }}" alt="">
                    </a><div class="card-body bg-secondary d-flex align-items-center p-0">  
                        <h6  class="card-title text-white  m-auto"> {{ Str::limit($kor->title, 30, '...') }}</h6>
                    </div>
                    <div class="card-footer">
                        {{ Str::limit($kor->desc, 30, '...') }}
                    </div>
                </div>
            </div>
            @endforeach
            
           
        </div>
    </div>


    <!-- Team Start -->
    <div class="container pt-5 pb-3">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="m-0">Müəllimlər</h1>
        </div>
        <div class="row">
            @foreach ($teachers as $key=>$val)
            @if($key%2==0)
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6 text-right">
                        <h6>{{ $val->name }}</h6>
                    </div>
                    <div class="col-6">
                        <img  style="height: 250px;" class="img-thumbnail p-3" src="{{ asset($val->img) }}" alt="Image">
                    </div>
                </div>
            </div>
            @else
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6">
                        <img style="height: 250px;" class="img-thumbnail p-3" src="{{ asset($val->img) }}" alt="Image">
                    </div>
                    <div class="col-6 text-left">
                        <h6>{{ $val->name }}</h6>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            
        </div>
    </div>
    <!-- Team End -->



@endsection