@extends('admin.layouts.master')

@section('title')
    Dərs Əlavə Et
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dərs Əlavə Et</h4>
        <form action="{{ route('admin.lesson.store') }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Dərs </label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Dərs">
          </div>
          @error('name')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <div class="form-group">
            <label for="exampleInputName2">Müəllim </label>
            <select name="muellim_id" class="form-control" id="exampleInputName2">
                <option value="">Seç</option>
              @foreach ($teachers as $t)
              <option value="{{ $t->id }}">{{ $t->name }}</option>
              @endforeach
            </select>
          </div>
          @error('muellim_id')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName3"> Qrup </label>
            <select name="qrup_id" class="form-control" id="exampleInputName3">
                <option value="">Seç</option>

              @foreach ($groups as $g)
              <option value="{{ $g->id }}">{{ $g->name }}</option>
              @endforeach
            </select>
          </div>
          @error('qrup_id')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <button type="submit" class="btn btn-primary mr-2">Əlavə Et</button>
          <button class="btn btn-dark"><a href="{{ route('admin.group.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection