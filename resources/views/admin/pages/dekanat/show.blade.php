@extends('admin.layouts.master')

@section('title')
    Dekanat
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dekanat</h4>
          <div class="form-group">
            <label for="exampleInputName1">Dekanat </label>
            <input type="text" name="title" value="{{ $dekanat->name }}" class="form-control" id="exampleInputName1" placeholder="Başlıq">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Dekanat </label>
            <input type="text" name="title" value="{{ $dekanat->getKorpus->name }}" class="form-control" id="exampleInputName1" placeholder="Başlıq">
          </div>
          <button class="btn btn-dark"><a href="{{ route('admin.dekanat.index') }}">Geri</a></button>
      </div>
    </div>
  </div>
@endsection