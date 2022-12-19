@extends('admin.layouts.master')

@section('title')
    Kafedra Yenilə
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kafedra Yenilə</h4>
        <form action="{{ route('admin.kafedra.update',$kafedra->id) }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Kafedra</label>
            <input type="text" value="{{ $kafedra->name }}" name="name" class="form-control" id="exampleInputName1" placeholder="Lafedra Adı">
          </div>
          @error('name')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName1">Dekanat Seç </label>
            <select name="dekanat_id" class="form-control" id="">
              <option value="">Seç</option>
              @foreach ($dekanats as $dek)
              <option {{ $kafedra->dekanat_id==$dek->id ? 'selected' : '' }} value="{{ $dek->id }}">{{ $dek->name }}</option>
              @endforeach
            </select>
          </div>
          @error('dekanat_id')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
          <button class="btn btn-dark"><a href="{{ route('admin.kafedra.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection