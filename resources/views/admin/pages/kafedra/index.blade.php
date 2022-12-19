@extends('admin.layouts.master')

@section('title')
    Kafedra
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> Kafedralar </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> 
                    <a href="{{ route('admin.kafedra.create') }}"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-plus"></i></a>
                </li>
              </ol>
            </nav>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px">Kafedra  </th>
                <th style="font-size:20px">Dekanat  </th>
                <th style="font-size:20px"> Proseslər </th>
              </tr>
            </thead>
            <tbody id="sliders">
              @foreach ($kafedras as $kafedra)
              <tr >
                <td class="handle">
                    {{ $loop->index+1 }}
                </td>
                <td>
                  {{ $kafedra->name }}
                </td>
                <td>
                  @if ($kafedra->dekanat_id==0)
                      Dekanatlığ silinib
                  @else
                  {{ $kafedra->getDekanat->name }}
                  @endif
                </td> 
                <td>
                    <a href="{{ route('admin.kafedra.show',$kafedra->id) }}"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-eye"></i> </a>
                    <a href="{{ route('admin.kafedra.edit',$kafedra->id) }}"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-grease-pencil"></i></a>
                    <a href="{{ route('admin.kafedra.delete',$kafedra->id) }}"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-delete-forever"></i></a>
                </td>
              </tr>
              <tr>
              @endforeach   
            </tbody>
          </table>

        </div>
      </div>
      <div style="margin-left: 870px">  {{ $kafedras->links() }}  </div>
    </div>
    
  </div>
@endsection

