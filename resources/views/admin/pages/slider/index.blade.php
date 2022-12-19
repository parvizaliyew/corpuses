@extends('admin.layouts.master')

@section('title')
    Slayder
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> Slayder </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> 
                    <a href="{{ route('admin.slider.create') }}"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-plus"></i></a>
                </li>
              </ol>
            </nav>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px"> Şəkil </th>
                <th style="font-size:20px"> Başlıq </th>
                <th style="font-size:20px"> Mətin </th>
                <th style="font-size:20px"> Proseslər </th>
              </tr>
            </thead>
            <tbody id="sliders">
              @foreach ($sliders as $slider)
              <tr id="sorts_{{ $slider->id }}">
                <td class="handle">
                    {{-- {{ $loop->index+1 }} --}}
                  <i style="font-size: 30px !important" class="mdi mdi-arrow-all"></i>
                </td>
                <td> <img style="width: 100px; height:100px" src="{{ asset($slider->img) }}" alt=""> </td>
                <td>
                  {{ $slider->title }}
                </td>
                <td> {{ Str::limit( $slider->desc   ,15) }} </td>
                <td>
                    <a href="{{ route('admin.slider.show',$slider->id) }}"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-eye"></i> </a>
                    <a href="{{ route('admin.slider.edit',$slider->id) }}"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-grease-pencil"></i></a>
                    <a href="{{ route('admin.slider.delete',$slider->id) }}"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-delete-forever"></i></a>
                </td>
              </tr>
              <tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
      <div style="margin-left: 870px">      {{ $sliders->links() }}    </div>
    </div>
    
  </div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script>
    $('#sliders').sortable({
                handle : '.handle',
                update : function () {
                    let siralama = $('#sliders').sortable('serialize');
                    $.get("{{ route('admin.slider.sort') }}?"+siralama, function() {});
                }

            });
    </script>
@endpush