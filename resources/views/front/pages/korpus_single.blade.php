@extends('front.layouts.master2')

@section('title')
    {{ $korpus->name }}
@endsection

@section('content')
    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-column text-left mb-4">
                    <h5 class="text-primary mb-3">{{ $korpus->name }}</h5>
                    <h1 class="mb-3">{{ $korpus->title }}</h1>
                </div>

                <div class="mb-5">
                    <img style="max-height: 800px;
                    height: 800px;
                    object-fit: cover;
                    width: 1200px;" class="img-thumbnail mb-4 p-3" src="{{ asset($korpus->img) }}" alt="Image">
                    <p>{{ $korpus->desc }}</p>
                    
                </div>
        
            </div>

        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <table   class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Dekanat</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($dekanats  as $item)
                        <tr>
                            <th scope="row">{{ $loop->index+1 }}</th>
                            <td>{{ $item->name }}</td>
                          </tr>
                        @endforeach
        
                    </tbody>
                  </table>
            </div>
            <div class="col-md-6">
                <table   class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kafedra</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($kafedras_name  as $item)
                        <tr>
                            <th scope="row">{{ $loop->index+1 }}</th>
                            <td>{{ $item }}</td>
                          </tr>
                        @endforeach
        
                    </tbody>
                  </table>
            </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <table   class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Müəllimlər</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($teacher_name  as $item)
                  <tr>
                      <th scope="row">{{ $loop->index+1 }}</th>
                      <td>{{ $item }}</td>
                    </tr>
                  @endforeach
  
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
            <table   class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Dərslər</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($lesson_name  as $item)
                  <tr>
                      <th scope="row">{{ $loop->index+1 }}</th>
                      <td>{{ $item }}</td>
                  </tr>
                  @endforeach
  
              </tbody>
            </table>
          </div>
        </div>
        
        <div class="row mb-3">
          <div class="col-md-6">
            <table   class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Qruplar</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($group_name  as $item)
                  <tr>
                      <th scope="row">{{ $loop->index+1 }}</th>
                      <td>{{ $item }}</td>
                  </tr>
                  @endforeach
  
              </tbody>
            </table>
          </div>
        </div>

          
    </div>
    <!-- Detail End -->
@endsection