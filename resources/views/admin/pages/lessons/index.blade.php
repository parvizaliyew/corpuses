@extends('admin.layouts.master')

@section('title')
    Dərs
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> Dərslər </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> 
                    <a href="{{ route('admin.lesson.create') }}"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-plus"></i></a>
                </li>
              </ol>
            </nav>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px"> Dərs </th>
                <th style="font-size:20px"> Qrup </th>
                <th style="font-size:20px"> Müəllim  </th>
                <th style="font-size:20px"> Proseslər </th>
              </tr>
            </thead>
            <tbody id="sliders">
              @foreach ($lessons as $lesson)
              <tr >
                <td class="handle">
                    {{ $loop->index+1 }}
                </td>

                <td>
                  {{ $lesson->name }}
                </td>

                <td>
                @if ($lesson->qrup_id==0)
                    Qrup silinib
                @else
                {{ $lesson->getGroup->name }}
                @endif
                </td>

                <td>
                @if ($lesson->muellim_id==0)
                    Müəllim silinib
                @else
                {{ $lesson->getTeacher->name }}
                @endif
                </td>
                
                <td>
                    <a href="{{ route('admin.lesson.show',$lesson->id) }}"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-eye"></i> </a>
                    <a href="{{ route('admin.lesson.edit',$lesson->id) }}"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-grease-pencil"></i></a>
                    <form action="{{ route('admin.lesson.destroy',$lesson->id) }}" method="POST">
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
      <div style="margin-left: 870px">  {{ $lessons->links() }}  </div>
    </div>
    
  </div>
@endsection

