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
                <h2 class="content-header-title float-start mb-0">User</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">User</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Create New User</a>
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
<section id="basic-input">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input. <br><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
          </h4>
        </div>
        <div class="card-body">
       
          <div class="row">
  
            <form method="post"  action="{{ route('users.store') }}" autocomplete="off" enctype="multipart/form-data">
              @csrf
            <div class="col-xl-4 col-md-6 col-6">
              <div class="mb-1">
                <label class="form-label" for="basicInput">User Name:</label>
                {{--  {!! Form::text('name' , null , ['placeholder' => 'Name' , 'class' => 'form-control','id'=>'basicInput']) !!}  --}}
                <input type="text" name="name"  placeholder="Name" class="form-control"   />
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-6">
              <div class="mb-1">
                <label class="form-label" for="helpInputTop">Email</label>
                  {{--  {!! Form::email('email' , null , ['class' => 'form-control',]) !!}  --}}
                  <input type="email" name="email"  placeholder="email" class="form-control"  id="helpInputTop" />
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-6">
              <div class="mb-1">
                <label class="form-label" for="disabledInput">Passowrd</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-6">
              <div class="mb-1">
                <label class="form-label" for="helperText">Confirm Password</label>
                <input type="password" name="confirm-password"  placeholder="Confirm Password" class="form-control" required autocomplete="new-password" />
              </div>
            </div>

              <div class="col-xl-4 col-md-6 col-6">
              <div class="mb-1">
              <label for="formFile" class="form-label">Simple file input</label>
              {{--  <input type="file" class="form-control" id="formFile" sname="img" />  --}}
              <input type="file"  class="form-control" name="photo" id="formFile" accept="image/*">

              </div>
            </div>
            
            <div class="col-xl-4 col-md-6 col-6">
              <label class="form-label" for="disabledInput">Role Selected</label>
                           <select multiple name="roles[]" class="form-control">
                             @foreach ( $roles as  $role )
                             <option  value="{{ $role }}">{{ $role }}</option>   
                             @endforeach
                          </select>
            </div>
             <div class="col-xl-4 col-md-6 col-6">
                   <button type="submit" class="btn btn-gradient-primary">save</button>   
           
                  </div>
           
       
         

      
      
                </div>
   
    </div>
  </div>
</section>
</div>
</div>

@endsection
