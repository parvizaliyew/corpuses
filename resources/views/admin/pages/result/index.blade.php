@extends('admin.layouts.master')

@section('title')
    İmtahan Nəticələri
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> İmtahan Nəticələri </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> 
                    <a href="{{ route('admin.exam.create') }}"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-plus"></i></a>
                </li>
              </ol>
            </nav>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px"> Ad  </th>
                <th style="font-size:20px"> Soyad  </th>
                <th style="font-size:20px"> Qrup  </th>
                <th style="font-size:20px"> Dərs </th>
                <th style="font-size:20px"> Bal</th>
              </tr>
            </thead>
            <tbody id="sliders">
              @foreach ($exams as $exam)
              <tr >
                <td class="handle">
                    {{ $loop->index+1 }}
                </td>
                <td>
                    {{ $exam->getUser->name }}
                  </td>
            

                <td>
                  {{ $exam->getUser->lname }}
                </td>

                <td>
                @if ($exam->qrup_id==0)
                    Qrup silinib
                @else
                {{ $exam->getGroup->name }}
                @endif
                </td>

                <td>
                    @if ($exam->lesson_id==0)
                        Dərs silinib
                    @else
                    {{ $exam->getLesson->name }}
                    @endif
                </td>

                <td>
                  {{ $exam->price }}
                </td>   
              </tr>
              
              @endforeach   
            </tbody>
          </table>

        </div>
      </div>
    </div>
    
  </div>
@endsection

 
