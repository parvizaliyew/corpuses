@extends('front.layouts.master2')

@section('title')
    Korpuslar
@endsection

@section('content')
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h1 class="m-0">Korpuslar</h1>
    </div>
    <div class="row pb-3">
        @foreach ($korpuss as $k)
        <div class="col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img class="card-img-top" src="{{ asset($k->img) }}" alt="">
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h6 class="card-title text-white text-truncate m-0 ml-3">{{ $k->name }}</h6>
                    <a href="{{ route('korpus_single',$k->id) }}" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                </div>
                <div class="card-footer py-3 px-4">
                    <p style="color: black;" class="m-0">{{ $k->title }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection