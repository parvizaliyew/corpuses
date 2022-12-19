@extends('admin.layouts.master')

@section('title')
    Mesaj
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> Mesajlar </h3>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px">Ad  </th>
                <th style="font-size:20px">Email  </th>
                <th style="font-size:20px"> Baslıq  </th>
                <th style="font-size:20px"> Tarix  </th>
                <th style="font-size:20px"> Mesaj  </th>
                <th style="font-size:20px"> Proseslər </th>
              </tr>
            </thead>
            <tbody id="sliders">
              @foreach ($messages as $m)
              <tr >
                <td class="handle">
                    {{ $loop->index+1 }}
                </td>
                <td>
                  {{ $m->name }}
                </td>
                <td>
                    {{ $m->email }}
                </td>
                <td>
                  {{ Str::limit($m->title, 15, '...') }}
                </td>
                <td>
                  @if ($m->seen_message===null)
                      <button class="btn btn-success">Yeni mesaj</button>
                  @else
                      {{ ($m->created_at->diffForHumans()) }} oxundu
                  @endif
                </td>
              <td>
                {{ Str::limit($m->msj, 15, '...') }}
              </td>
              <td>
                <a href="{{ route('admin.mesaj.show',$m->id) }}"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-eye"></i> </a>
                <a href="{{ route('admin.mesaj.delete',$m->id) }}"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-delete-forever"></i> </a>

            </td>
              </tr>
              @endforeach   
            </tbody>
          </table>

        </div>
      </div>
      <div style="margin-left: 870px">  {{ $messages->links() }}  </div>
    </div>
    
  </div>
@endsection

