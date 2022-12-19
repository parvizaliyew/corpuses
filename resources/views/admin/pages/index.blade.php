@extends('admin.layouts.master')

@section('title')
    Admin Panel
@endsection

@section('content')
    <div class="page-header">
              <h1 class="page-title"> XOŞ GƏLDİNİZ  </h1>
    </div>
    <div class="row">
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body  mycard">
              <h5 style="font-size:25px" >Slayder</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">{{ $slider->count() }}</h2>
                  </div>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-image-filter text-primary ml-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <div class="col-sm-4 grid-margin">
            <div class="card ">
              <div class="card-body  mycard">
                <h5 style="font-size:25px" >Xəbərlər</h5>
                <div class="row">
                  <div class="col-8 col-sm-12 col-xl-8 my-auto">
                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                      <h2 class="mb-0">{{ $korpus->count() }}</h2>
                    </div>
                  </div>
                  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                    <i class="icon-lg mdi mdi-newspaper  text-primary ml-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 grid-margin">
            <div class="card">
              <div class="card-body  mycard">
                <h5 style="font-size:25px" >Kafedra</h5>
                <div class="row">
                  <div class="col-8 col-sm-12 col-xl-8 my-auto">
                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                      <h2 class="mb-0">{{ $kafedra->count() }}</h2>
                    </div>
                  </div>
                  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                    <i class="icon-lg mdi mdi-library  text-primary ml-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 grid-margin">
            <div class="card">
              <div class="card-body  mycard">
                <h5 style="font-size:25px" >Dekanat</h5>
                <div class="row">
                  <div class="col-8 col-sm-12 col-xl-8 my-auto">
                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                      <h2 class="mb-0">{{ $dekanat->count() }}</h2>
                    </div>
                  </div>
                  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                    <i class="icon-lg mdi mdi-bookmark  text-primary ml-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 grid-margin">
            <div class="card">
              <div class="card-body  mycard">
                <h5 style="font-size:25px" >Müəllim</h5>
                <div class="row">
                  <div class="col-8 col-sm-12 col-xl-8 my-auto">
                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                      <h2 class="mb-0">{{ $teacher->count() }}</h2>
                    </div>
                  </div>
                  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                    <i class="icon-lg mdi mdi-book-open-page-variant text-primary ml-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-sm-4 grid-margin">
            <div class="card">
              <div class="card-body  mycard">
                <h5 style="font-size:25px" >Qrup</h5>
                <div class="row">
                  <div class="col-8 col-sm-12 col-xl-8 my-auto">
                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                      <h2 class="mb-0">{{ $group->count() }}</h2>
                    </div>
                  </div>
                  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                    <i class="icon-lg   mdi mdi-account-multiple-outline text-primary ml-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 grid-margin">
            <div class="card">
              <div class="card-body  mycard">
                <h5 style="font-size:25px" >Dərs</h5>
                <div class="row">
                  <div class="col-8 col-sm-12 col-xl-8 my-auto">
                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                      <h2 class="mb-0">{{ $lesson->count() }}</h2>
                    </div>
                  </div>
                  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                    <i class="icon-lg   mdi mdi-information text-primary ml-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 grid-margin">
            <div class="card">
              <div class="card-body  mycard">
                <h5 style="font-size:25px" >Tələbə</h5>
                <div class="row">
                  <div class="col-8 col-sm-12 col-xl-8 my-auto">
                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                      <h2 class="mb-0">{{ $user->count() }}</h2>
                    </div>
                  </div>
                  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                    <i class="icon-lg   mdi mdi-account-box-outline  text-primary ml-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection