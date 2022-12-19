@extends('admin.layouts.master')

@section('title')
    Kafedra
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kafedra</h4>
          <div class="form-group">
            <label for="exampleInputName1">Kafedra </label>
            <input type="text" name="title" value="{{ $kafedra->name }}" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName2">Dekanat </label>
            @if ($kafedra->dekanat_id==0)
            <input type="text" name="title" value="Dekanatlıq silinib" class="form-control" id="exampleInputName2">
            @else
            <input type="text" name="title" value="{{ $kafedra->getDekanat->name }}" class="form-control" id="exampleInputName2">
            @endif
          </div>
          <button class="btn btn-dark"><a href="{{ route('admin.kafedra.index') }}">Geri</a></button>
      </div>
    </div>
  </div>
@endsection