@extends('admin.layouts.master')

@section('title')
    Müəllim Yenilə
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Müəllim Yenilə</h4>
        <form action="{{ route('admin.teacher.update',$teacher->id) }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf
            @method("PUT")
          <div class="form-group">
            <label for="exampleInputName1">Ad</label>
            <input type="text" value="{{ $teacher->name }}" name="name" class="form-control" id="exampleInputName1" placeholder="Lafedra Adı">
          </div>
          @error('name')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName2">Soyad</label>
            <input type="text" value="{{ $teacher->surname }}" name="surname" class="form-control" id="exampleInputName2" placeholder="Müəllim Adı">
          </div>
          @error('surname')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror


          <div class="mb-3">
            <label for="formFile" class="form-label">Şəkil</label> <br> 
            <img style="width: 400px; height:300px" src="{{ asset($teacher->img) }}" alt=""> 
          </div>
          <div class="mb-3">
            <input name="img" class="form-control" type="file" id="formFile">
          </div>
          @error('img')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName1">Kafedra Seç </label>
            <select name="kafedra_id" class="form-control" id="">
              @foreach ($kafedras as $kaf)
              <option {{ $teacher->kafedra_id==$kaf->id ? 'selected' : '' }} value="{{ $kaf->id }}">{{ $kaf->name }}</option>
              @endforeach
            </select>
          </div>
          @error('kafedra_id')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
          <button class="btn btn-dark"><a href="{{ route('admin.teacher.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection