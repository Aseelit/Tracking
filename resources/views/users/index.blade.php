@extends('layouts.master')
@section('content')
{{--  
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
          
          </div>
        </div>
       
      </div>
      <div class="content-body">
    

<div class="row" id="table-small">
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">User List</h4>
    </div>
    <div class="card-body">
     
    </div>
    <div class="table-responsive">
      <table class="table table-sm">
        <thead>
          <tr>
            <th>Name User</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $user)
          <tr>
            <td>
              <span class="fw-bold">{{ $user->name }}</span>
            </td>
            <td>{{ $user->email }}</td>
           
            <td>
                @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <span class="badge rounded-pill badge-light-primary me-1">
                        {{$v}}
                    </span>
                @endforeach
            @endif
            </td>
            <td>
                    @can('user-edit')
                <a href="{{route('users.edit' , $user->id)}}" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-float waves-light">
                    <i data-feather='edit'></i>
                </a>
                @endcan
                @can('user-delete')
                {!! Form::open(['method' => 'DELETE' , 'route' => ['users.destroy' , $user->id] , 'style' => 'display:inline']) !!}
                {!! Form::submit('DELETE' , ['class' => 'btn btn-flat-danger waves-effect']) !!}
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
  </div>  --}}

  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
           <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">User</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">User</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">List User</a>
                    </li>
                    <li class="breadcrumb-item active">User
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
        <h4 class="card-title">User List</h4>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          
            <tr>
              
              <th>image</th>
              <th>name</th>
              <th>email</th>
              <th>Role</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
           @foreach($data as $key => $user)
            <tr>
              <td>
                <div class="avatar avatar-lg">
                  <img  src="{{ asset('storage/'.$user->path) }}" alt="{{ $user->name }}">
                </div>
              
              </td>
              <td>{{$user->name}}</td>
              <td>
               {{$user->email}}
              </td>
              <td>
               @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                  <span class="badge rounded-pill badge-light-primary me-1">
                  {{$v}}
                  </span>
                        
                   
                @endforeach
            @endif
            </td>
              <td>
                @can('user-edit')
                  <a href="{{route('users.edit' , $user->id)}}"  class="btn btn-icon btn-outline-primary waves-effect">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> 
                </a>
             @endcan
              @can('user-delete')
              {!! Form::open(['method' => 'DELETE' , 'route' => ['users.destroy' , $user->id] , 'style' => 'display:inline']) !!}
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