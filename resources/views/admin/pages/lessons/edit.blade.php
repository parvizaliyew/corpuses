@extends('admin.layouts.master')

@section('title')
    Dərs Yenilə
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dərs Yenilə</h4>
        <form action="{{ route('admin.lesson.update',$lesson->id) }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf

            @method("PUT")
          <div class="form-group">
            <label for="exampleInputName1">Dərs</label>
            <input type="text" value="{{ $lesson->name }}" name="name" class="form-control" id="exampleInputName1" placeholder="Lafedra Adı">
          </div>
          @error('name')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName1">Müəllimi Seç </label>
            <select name="muellim_id" class="form-control" id="">
              @foreach ($teachers as $t)
              <option {{ $lesson->muellim_id==$t->id ? 'selected' : '' }} value="{{ $t->id }}">{{ $t->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Qrupu Seç </label>
            <select name="qrup_id" class="form-control" id="">
              @foreach ($groups as $g)
              <option {{ $lesson->qrup_id==$g->id ? 'selected' : '' }} value="{{ $g->id }}">{{ $g->name }}</option>
              @endforeach
            </select>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
          <button class="btn btn-dark"><a href="{{ route('admin.lesson.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection