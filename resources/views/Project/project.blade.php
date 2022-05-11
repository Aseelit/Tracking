@extends('layouts.master')

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
   
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          
            <tr>
              
              <th>image</th>
              <th>name</th>
              <th>status</th>
              <th>start date</th>
              <th>end date</th>
              <th>image user</th>
              <th>name user</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
           @foreach($project as $key => $projects)
            <tr>
              <td>
                <div class="avatar avatar-lg">
                  <img  src="{{ asset('storage/'.$projects->path) }}" alt="{{ $projects->name }}">
                </div>
              </td>
              <td>{{$projects->name}}</td>
              <td>
               {{$projects->status}}
              </td>
              <td>
                {{$projects->start_date}}
               </td>
               <td>
                {{$projects->end_date}}
               </td>
               <td>
                <div class="avatar avatar-lg">
                  <img  src="{{ asset('storage/'.$projects->user->path) }}" alt="{{ $projects->user->name }}">
                </div>
              </td>
              <td>
                {{$projects->user->name}}
               </td>
              <td>
              
              @can('user-delete')
              {!! Form::open(['method' => 'DELETE' , 'route' => ['project.destroy' , $projects->id] , 'style' => 'display:inline']) !!}
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
// Laravel 7 or greater
@endsection