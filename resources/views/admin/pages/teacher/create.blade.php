@extends('admin.layouts.master')

@section('title')
    Müəllim Əlavə Et
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Müəllim Əlavə Et</h4>
        <form action="{{ route('admin.teacher.store') }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf
            @method('POST')
          <div class="form-group">
            <label for="exampleInputName1">Ad </label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Ad">
          </div>
          @error('name')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName2">Soyad </label>
            <input type="text" name="surname" class="form-control" id="exampleInputName2" placeholder="Soyad">
          </div>
          @error('surname')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="mb-3">
            <label for="formFile" class="form-label">Şəkil</label>
            <input name="img" class="form-control" type="file" id="formFile">
          </div>
          @error('img')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName1">Kafedra Seç </label>
            <select name="kafedra_id" class="form-control" id="">
              <option value="">Seç</option>
              @foreach ($kafedras as $kaf)
              <option value="{{ $kaf->id }}">{{ $kaf->name }}</option>
              @endforeach
            </select>
          </div>
          @error('kafedra_id')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <button type="submit" class="btn btn-primary mr-2">Əlavə Et</button>
          <button class="btn btn-dark"><a href="{{ route('admin.kafedra.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection