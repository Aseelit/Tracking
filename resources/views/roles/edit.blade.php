@extends('layouts.master')


@section('content')
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
          
<section id="basic-input">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Role Edit</h4>
      </div>
      {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
      <div class="card-body">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
              <label class="form-label" for="basicInput">Edit Role</label>
              {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
          </div>
          <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
              <label class="form-label" for="basicInput">Edit Role</label>
              <br>
              @foreach($permission as $value)
              <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'form-check-input','id'=>'colorCheck6')) }}
                  {{ $value->name }}</label>
              <br/>
          @endforeach
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