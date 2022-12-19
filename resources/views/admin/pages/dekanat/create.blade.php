@extends('admin.layouts.master')

@section('title')
    Dekanat Əlavə Et
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dekanat Əlavə Et</h4>
        <form action="{{ route('admin.dekanat.store') }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Dekanat </label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="dekanat">
          </div>
          @error('name')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <div class="form-group">
            <label for="exampleInputName1">Korpus Seç </label>
            <select name="korpus_id" class="form-control" id="">
              <option value="">Seç</option>
              @foreach ($korpuss as $kor)
              <option  value="{{ $kor->id }}">{{ $kor->name }}</option>
              @endforeach
            </select>
          </div>
          @error('dekanat_id')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <button type="submit" class="btn btn-primary mr-2">Əlavə Et</button>
          <button class="btn btn-dark"><a href="{{ route('admin.dekanat.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection