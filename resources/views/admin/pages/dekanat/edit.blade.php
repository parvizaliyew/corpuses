@extends('admin.layouts.master')

@section('title')
    Dekanat Yenilə
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dekanat Yenilə</h4>
        <form action="{{ route('admin.dekanat.update',$dekanat->id) }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf     
            
            @method('PUT')

          <div class="form-group">
            <label for="exampleInputName1">Dekanat</label>
            <input type="text" value="{{ $dekanat->name }}" name="name" class="form-control" id="exampleInputName1" placeholder="Lafedra Adı">
          </div>
          @error('name')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <div class="form-group">
            <label for="exampleInputName1">Korpus Seç </label>
            <select name="korpus_id" class="form-control" id="">
              <option value="">Seç</option>
              @foreach ($korpuss as $kor)
              <option {{ $dekanat->korpus_id==$kor->id ? 'selected' : '' }} value="{{ $kor->id }}">{{ $kor->name }}</option>
              @endforeach
            </select>
          </div>
          @error('korpus_id')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
          <button class="btn btn-dark"><a href="{{ route('admin.dekanat.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection