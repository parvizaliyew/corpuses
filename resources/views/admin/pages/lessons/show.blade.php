@extends('admin.layouts.master')

@section('title')
    Dərs
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dərs</h4>
          <div class="form-group">
            <label for="exampleInputName1">Dərs </label>
            <input type="text" name="title" value="{{ $lesson->name }}" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName2">Müəllim </label>
            @if ($lesson->muellim_id==0)
            <input type="text"  value="Müəllim silinib" class="form-control" id="exampleInputName2">
            @else
            <input type="text" value="{{ $lesson->getTeacher->name }}" class="form-control" id="exampleInputName2">
            @endif
          </div>

          <div class="form-group">
            <label for="exampleInputName2"> Qrup </label>
            @if ($lesson->qrup_id==0)
            <input type="text" name="title" value="Qrup silinib" class="form-control" id="exampleInputName2">
            @else
            <input type="text" name="title" value="{{ $lesson->getGroup->name }}" class="form-control" id="exampleInputName2">
            @endif
          </div>
          <button class="btn btn-dark"><a href="{{ route('admin.lesson.index') }}">Geri</a></button>
      </div>
    </div>
  </div>
@endsection