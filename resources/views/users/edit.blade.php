@extends('layouts.master')

@section('content')
  

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
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
        
          </div>
        </div>
      
      </div>
      <div class="content-body">
          
<section id="basic-input">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Role Edit</h4>
      </div>
      {!! Form::model($user , ['route' => ['users.update' , $user->id] , 'method' =>'PATCH']) !!}
      <div class="card-body">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
              <label class="form-label" for="basicInput">Edit Role</label>
              {!! Form::text('name' , $user->name , ['placeholder' => 'Name' , 'class' => 'form-control']) !!}
            </div>
          </div>
          
          <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
              <label class="form-label" for="basicInput">Edit Role</label>
              {!! Form::email('email' , $user->email , ['placeholder' => 'Email' , 'class' => 'form-control']) !!}
            </div>
          </div>

          <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
              <label class="form-label" for="basicInput">Password</label>
              {!! Form::password('password'  , ['placeholder' => 'Password' , 'class' => 'form-control']) !!}
            </div>
          </div>

          <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
              <label class="form-label" for="basicInput">Confirm Password</label>
              {!! Form::password('confirm-password'  , ['placeholder' => 'Confirm Password' , 'class' => 'form-control']) !!}
            </div>
          </div>

          <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
              <label class="form-label" for="basicInput">Role Selected</label>
              {!! Form::select('roles[]'  , $roles , $userRole , ['multiple', 'class' => 'form-control']) !!}
            </div>
          </div>

       

            <div class="col-xl-12 col-md-12 col-12">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                
                </div>
          </div>
          
         
         
        
        </div>
      </div>
    </div>
  </div>
</div>
</section>



      </div>
    </div>
  </div>
@endsection
