@extends('admin.layouts.master')

@section('title')
    Slayder Yenilə
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Slayder Yenilə</h4>
        <form action="{{ route('admin.slider.update',$slider->id) }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Başlıq</label>
            <input type="text" value="{{ $slider->title }}" name="title" class="form-control" id="exampleInputName1" placeholder="Başlıq">
          </div>
          @error('title')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <div class="form-group">
            <label for="exampleTextarea1">Mətn</label>
            <input class="form-control"  name="desc" id="exampleTextarea1" value="{{ $slider->desc }}" rows="4"></input>
          </div>
          @error('desc')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <div class="mb-3">
            <label for="formFile" class="form-label">Şəkil</label> <br> 
            <img style="width: 400px; height:300px" src="{{ asset($slider->img) }}" alt=""> 
          </div>
          <div class="mb-3">
            <input name="img" class="form-control" type="file" id="formFile">
          </div>
          @error('img')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
          <button class="btn btn-dark"><a href="{{ route('admin.slider.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection