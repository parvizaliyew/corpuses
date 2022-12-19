@extends('admin.layouts.master')

@section('title')
    Qrup Əlavə Et
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Qrup Əlavə Et</h4>
        <form action="{{ route('admin.group.store') }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Qrup </label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Qrup">
          </div>
          @error('name')
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
          <button class="btn btn-dark"><a href="{{ route('admin.group.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection