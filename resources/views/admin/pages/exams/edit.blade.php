@extends('admin.layouts.master')

@section('title')
    Balı Yenilə
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Balı Yenilə</h4>
        <form action="{{ route('admin.exam.update',$exam->id) }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf

            @method("PUT")
          <div class="form-group">
            <label for="exampleInputName1"> Bal </label>
            <input type="text" value="{{ $exam->price }}" name="price" class="form-control" id="exampleInputName1" placeholder="Lafedra Adı">
          </div>
          @error('price')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName1">Dərs Seç </label>
            <select name="lesson_id" class="form-control" id="">
              @foreach ($lessons as $l)
              <option {{ $exam->lesson_id==$l->id ? 'selected' : '' }} value="{{ $l->id }}">{{ $l->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Tələbə Seç </label>
            <select name="user_id" class="form-control" id="">
              @foreach ($users as $u)
              <option {{ $exam->user_id==$u->id ? 'selected' : '' }} value="{{ $u->id }}">{{ $u->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Qrup Seç </label>
            <select name="qrup_id" class="form-control" id="">
              @foreach ($groups as $g)
              <option {{ $exam->qrup_id==$g->id ? 'selected' : '' }} value="{{ $g->id }}">{{ $g->name }}</option>
              @endforeach
            </select>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
          <button class="btn btn-dark"><a href="{{ route('admin.exam.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection