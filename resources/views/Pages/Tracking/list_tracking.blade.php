@extends('layouts.master')
@section('head')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

@endsection
@section('content')


<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
           <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Project</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Project</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">List Project</a>
                    </li>
                    <li class="breadcrumb-item active">Project
                    </li>
                  </ol>
                </div>
              </div>
            </div>
        </div>
      </div>
  <div class="content-body">

  <div class="row" id="table-bordered">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Project List</h4>
        {{--  <div class="" style="margin-right: 74px;">
          <button type="button" class="btn btn-gradient-primary">Create Project</button>
        </div>  --}}
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          
            <tr>
              
              <th>image</th>
              <th>name</th>
              <th>status</th>
              <th>date</th>
              <th>file report</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
           @foreach($tracking as $key => $trackings)
            <tr>
              <td>
                <div class="avatar avatar-lg">
                  <img  src="{{ asset('storage/'.$trackings->development->project->user->path) }}" alt="{{ $trackings->address }}">
                </div>
              </td>
              <td>{{$trackings->development->project->user->name}}</td>
              <td>
               {{$trackings->development->project->status}}
              </td>
            
               <td>
                {{$trackings->date}}
               </td>
               <td>
     <a href="{{ route('tracking.show',$trackings->id) }}" >download</a>
            </td>
            <td>
            @can('tracking-delete')
            {!! Form::open(['method' => 'DELETE' , 'route' => ['tracking.destroy' , $trackings->id] , 'style' => 'display:inline']) !!}
            <button type="submit" class="btn btn-icon btn-outline-primary waves-effect">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg>    
      </button>
       {!! Form::close() !!}
       @endcan
              </td>
            </tr>
            @endforeach
           
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection


@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


@endsection