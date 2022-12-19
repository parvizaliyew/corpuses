@extends('admin.layouts.master')

@section('title')
    Müəllim
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> Müəllimlər </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> 
                    <a href="{{ route('admin.teacher.create') }}"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-plus"></i></a>
                </li>
              </ol>
            </nav>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px">Şəkil  </th>
                <th style="font-size:20px">Ad  </th>
                <th style="font-size:20px">Soyad  </th>
                <th style="font-size:20px">Kafedra  </th>
                <th style="font-size:20px"> Proseslər </th>
              </tr>
            </thead>
            <tbody id="sliders">
              @foreach ($teachers as $teacher)
              <tr >
                <td class="handle">
                    {{ $loop->index+1 }}
                </td>
                <td> <img style="width: 100px; height:100px" src="{{ asset($teacher->img) }}" alt=""> </td>
                <td>
                  {{ $teacher->name }}
                </td>
                <td>
                    {{ $teacher->surname }}
                  </td>
                <td>
                  @if ($teacher->kafedra_id==0)
                      Kafedra silinib
                  @else
                  {{ $teacher->getKafedra->name }}
                  @endif
                  
                </td> 
                <td>
                    <a href="{{ route('admin.teacher.show',$teacher->id) }}"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-eye"></i> </a>
                    <a href="{{ route('admin.teacher.edit',$teacher->id) }}"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-grease-pencil"></i></a>
                    <form action="{{ route('admin.teacher.destroy',$teacher->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
  
                        <button class="btn" style="font-size: 1.975rem !important ; color:blue; display:inline-block ; margin-top:-52px ;margin-left:65px" type="submit"><i class="mdi mdi-delete-forever"></i></button>
                    </form>
                </td>
              </tr>
              <tr>
              @endforeach   
            </tbody>
          </table>

        </div>
      </div>
      <div style="margin-left: 870px">  {{ $teachers->links() }}  </div>
    </div>
    
  </div>
@endsection

