@extends('admin.layouts.master')

@section('title')
    Mesaj
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Mesaj</h4>
          <div class="form-group">
            <label for="exampleInputName1">Ad</label>
            <input type="text" name="title" value="{{ $message->name }}" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Email</label>
            <input type="text" name="title" value="{{ $message->email }}" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Başlıq</label>
            <input type="text" name="title" value="{{ $message->title }}" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Mesaj</label>
            <textarea class="form-control"  name="desc" id="exampleTextarea1" placeholder="" rows="4">{{ $message->msj }}</textarea>
          </div>
          
          <button class="btn btn-dark"><a href="{{ route('admin.mesaj.index') }}">Geri</a></button>
      </div>
    </div>
  </div>
@endsection