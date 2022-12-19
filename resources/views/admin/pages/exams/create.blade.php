@extends('admin.layouts.master')

@section('title')
    Balı Əlavə Et
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Balı Əlavə Et</h4>
        <form action="{{ route('admin.exam.store') }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Bal </label>
            <input type="text" name="price" class="form-control" id="exampleInputName1" placeholder="Qiymet">
          </div>
          @error('price')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <div class="form-group">
            <label for="exampleInputName2">Dərs </label>
            <select name="lesson_id" class="form-control" id="exampleInputName2">
                <option value="">Seç</option>
              @foreach ($lessons as $l)
              <option value="{{ $l->id }}">{{ $l->name }}</option>
              @endforeach
            </select>
          </div>
          @error('lesson_id')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName3"> Tələbə </label>
            <select name="user_id" class="form-control" id="exampleInputName3">
                <option value="">Seç</option>
              @foreach ($users as $u)
              <option value="{{ $u->id }}">{{ $u->name }}</option>
              @endforeach
            </select>
          </div>
          @error('user_id')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName4"> Qrup </label>
            <select name="qrup_id" class="form-control" id="exampleInputName4">
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
          <button class="btn btn-dark"><a href="{{ route('admin.exam.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection