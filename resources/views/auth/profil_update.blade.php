@extends('admin.layouts.master')

@section('title')
    Profil Güncəllə
@endsection

@section('content')
<form action="{{ route('admin.profil.update') }}" autocomplete="off" method="post">
  @csrf
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Profil</h4>
        <form class="forms-sample">
          <div class="form-group">
            <label for="name">Ad</label>
            <input value="{{ auth()->user()->name }}" name="name" type="name" class="form-control" id="name" placeholder="Ad">
          </div>
          @error('name')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="lname">Soyad</label>
            <input value="{{ auth()->user()->lname }}" name="lname" type="name" class="form-control" id="lname" placeholder="Soyad">
          </div>
          @error('lname')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror

          <div class="form-group">
            <label for="exampleInputEmail3">Email adresi</label>
            <input value="{{ auth()->user()->email }}" name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>
          @error('email')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          
          <div class="form-group">
            <label for="exampleInputPassword3">Yeni şifrə</label>
            <input type="password" name="reset_password" class="form-control" id="exampleInputPassword3" autocomplete="new-password"  placeholder="Şifrə">
          </div>

          <div class="form-group">  
            <label for="exampleInputPassword4">Yeni şifrəni təkrarla</label>
            <input type="password"  name="confirm_password" class="form-control" id="exampleInputPassword4" placeholder="Şifrə">
          </div>

          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
        </form>
      </div>
    </div>
  </div>
</form>
@endsection