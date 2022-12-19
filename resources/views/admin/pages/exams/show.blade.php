@extends('admin.layouts.master')

@section('title')
    Imtahan Nəticəsi
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dərs</h4>
          <div class="form-group">
            <label for="exampleInputName1"> Bal </label>
            <input type="text" name="title" value="{{ $exam->price }}" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName2"> Dərs </label>
            @if ($exam->lesson_id==0)
            <input type="text"  value="Dərs silinib" class="form-control" id="exampleInputName2">
            @else
            <input type="text" value="{{ $exam->getLesson->name }}" class="form-control" id="exampleInputName2">
            @endif
          </div>

          <div class="form-group">
            <label for="exampleInputName2"> Qrup </label>
            @if ($exam->qrup_id==0)
            <input type="text"  value="Qrup silinib" class="form-control" id="exampleInputName2">
            @else
            <input type="text" value="{{ $exam->getGroup->name }}" class="form-control" id="exampleInputName2">
            @endif
          </div>

          <div class="form-group">
            <label for="exampleInputName2"> Tələbə </label>
            <input type="text" name="title" value="{{ $exam->getUser->name }}" class="form-control" id="exampleInputName2">
          </div>
          <button class="btn btn-dark"><a href="{{ route('admin.exam.index') }}">Geri</a></button>
      </div>
    </div>
  </div>
@endsection