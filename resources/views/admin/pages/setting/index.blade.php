@extends('admin.layouts.master')

@section('title')
    Ayarlar
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ayarlar</h4>
        <form action="{{ route('admin.setting.update',$setting->id) }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Email</label>
            <input type="text" value="{{ $setting->email }}"  name="email" class="form-control" id="exampleInputName1" placeholder="Email">
          </div>
          @error('email')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          
          <div class="form-group">
            <label for="exampleInputName1">Nömrə</label>
            <input type="text" value="{{ $setting->number }}"  name="number" class="form-control" id="exampleInputName1" placeholder="Nömrə">
          </div>
          @error('number')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          
          <div class="form-group">
            <label for="exampleInputName1">Ünvan</label>
            <input type="text" value="{{ $setting->adress }}"  name="adress" class="form-control" id="exampleInputName1" placeholder="Ünvan">
          </div>
          @error('adress')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName1">İnstagram</label>
            <input type="text" value="{{ $setting->ins }}"  name="ins" class="form-control" id="exampleInputName1" placeholder="İnstagram">
          </div>
          @error('ins')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName1">Facebook</label>
            <input type="text" value="{{ $setting->fb }}"  name="fb" class="form-control" id="exampleInputName1" placeholder="Facebook">
          </div>
          @error('fb')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          
          <div class="form-group">
            <label for="exampleInputName1">Twitter</label>
            <input type="text" value="{{ $setting->tw }}"  name="tw" class="form-control" id="exampleInputName1" placeholder="Twitter">
          </div>
          @error('tw')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName1">Linkedin</label>
            <input type="text" value="{{ $setting->ln }}"  name="ln" class="form-control" id="exampleInputName1" placeholder="Linkedin">
          </div>
          @error('tw')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputName10">Footer Mətni</label>
            <textarea class="form-control"  id="exampleInputName10" name="foot_desc" >{{ $setting->foot_desc }}</textarea>
              </div>
          @error('foot_desc')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
          <button class="btn btn-dark"><a href="{{ route('admin.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection