@extends('admin.layouts.master')

@section('title')
    Qrup
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">group</h4>
          <div class="form-group">
            <label for="exampleInputName1">Qrup </label>
            <input type="text"  value="{{ $group->name }}" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName2">Kafedra </label>
            @if ($group->kafedra_id==0)
            <input type="text" value="Kafedra silinib" class="form-control" id="exampleInputName2">
            @else
            <input type="text"  value="{{ $group->getKafedra->name }}" class="form-control" id="exampleInputName2">
            @endif
          </div>
          <button class="btn btn-dark"><a href="{{ route('admin.group.index') }}">Geri</a></button>
      </div>
    </div>
  </div>
@endsection