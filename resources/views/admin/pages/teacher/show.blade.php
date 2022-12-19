@extends('admin.layouts.master')

@section('title')
    Müəllim
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Müəllim</h4>
          <div class="form-group">
            <label for="exampleInputName1">Ad </label>
            <input type="text" value="{{ $teacher->name }}" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName3">Soyad </label>
            <input type="text"  value="{{ $teacher->surname }}" class="form-control" id="exampleInputName3" >
          </div>
          <div class="form-group">
            <label for="exampleInputName2">teacher </label>
            @if ($teacher->kafedra_id==0)
            <input type="text" name="title" value="Kafedra silinib" class="form-control" id="exampleInputName2">
            @else
            <input type="text" name="title" value="{{ $teacher->getKafedra->name }}" class="form-control" id="exampleInputName2">
            @endif
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Şəkil</label> <br> 
            <img style="width: 600px; height:500px" src="{{ asset($teacher->img) }}" alt=""> 
          </div>
          <button class="btn btn-dark"><a href="{{ route('admin.teacher.index') }}">Geri</a></button>
      </div>
    </div>
  </div>
@endsection