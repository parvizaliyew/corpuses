@extends('admin.layouts.master')

@section('title')
    Xəbəri Yenilə
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Xəbəri Yenilə</h4>
        <form action="{{ route('admin.korpus.update',$korpus->id) }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf
            <div class="form-group">
              <label for="exampleInputName1">Ad</label>
              <input type="text" value="{{ $korpus->name }}" name="name" class="form-control" id="exampleInputName1" placeholder="Ad">
            </div>
            @error('name')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
          <div class="form-group">
            <label for="exampleInputName1">Başlıq</label>
            <input type="text" value="{{ $korpus->title }}" name="title" class="form-control" id="exampleInputName1" placeholder="Başlıq">
          </div>
          @error('title')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <div class="form-group">
            <label for="exampleTextarea1">Mətn</label>
            <textarea class="form-control"  name="desc" id="exampleTextarea1" value="" rows="4">{{ $korpus->desc }}</textarea>
          </div>
          @error('desc')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <div class="mb-3">
            <label for="formFile" class="form-label">Şəkil</label> <br> 
            <img style="width: 400px; height:300px" src="{{ asset($korpus->img) }}" alt=""> 
          </div>
          <div class="mb-3">
            <input name="img" class="form-control" type="file" id="formFile">
          </div>
          @error('img')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
          <button class="btn btn-dark"><a href="{{ route('admin.korpus.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection