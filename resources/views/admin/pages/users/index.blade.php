@extends('admin.layouts.master')

@section('title')
    Tələbələr
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> Tələbələr </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
               
              </ol>
            </nav>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px">Ad  </th>
                <th style="font-size:20px">Soyad  </th>
                <th style="font-size:20px">Email  </th>
              </tr>
            </thead>
            <tbody id="sliders">
              @foreach ($students as $student)
              <tr >
                <td class="handle">
                    {{ $loop->index+1 }}
                </td>
                <td>
                  {{ $student->name }}
                </td>
                <td>
                    {{ $student->lname }}
                  </td>
                  <td>
                    {{ $student->email }}
                  </td>
              </tr>
              <tr>
              @endforeach   
            </tbody>
          </table>

        </div>
      </div>
    </div>
    
  </div>
@endsection

