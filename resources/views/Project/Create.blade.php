@extends('layouts.master')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/maps/leaflet.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/maps/map-leaflet.min.css') }}">

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
                    <li class="breadcrumb-item"><a href="#">Create New Project</a>
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
<section id="basic-input">
  <div class="row">
    <div class="col-12">
        <div class="card mb-4">
          <div class="card-header">
            <h4 class="card-title">User Location</h4>
          </div>
          <div class="card-body">
            <div class="leaflet-map" id="user-location"></div>
          </div>
        </div>
      </div>
    <div class="col-md-12">
        <form method="post"  action="{{ route('project.store') }}" autocomplete="off" enctype="multipart/form-data">
            @csrf
      <div class="card">
       
        <div class="card-body">
       
          <div class="row">
  
           
            <div class="col-xl-4 col-md-6 col-6">
              <div class="mb-1">
                <label class="form-label" for="basicInput">User Name:</label>
                {{--  {!! Form::text('name' , null , ['placeholder' => 'Name' , 'class' => 'form-control','id'=>'basicInput']) !!}  --}}
                <input type="text" name="name"  placeholder="project name" class="form-control  @error('name') is-invalid @enderror"   />
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-6">
              <div class="mb-1">
                <label class="form-label" for="helpInputTop">Descrbation</label>
                  <div class="form-floating">
                    <textarea class="form-control @error('descrbation') is-invalid @enderror" name="descrbation" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 20px"></textarea>
                    @error('descrbation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>

              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-6">
              <div class="mb-1">
                <label class="form-label" for="disabledInput">status</label>
                <select class="form-select l @error('status') is-invalid @enderror" id="basicSelect" name="status">
                    <option value="stoping">stoping</option>
                    <option value="working">working</option>
                  </select>
                @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-6">
              <div class="mb-1">
                <label class="form-label" for="helperText">Start Date</label>
                <input type="date"  name="start_date" class="form-control @error('start_date') is-invalid @enderror" placeholder="YYYY-MM-DD" >              </div>
                @error('start_date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="col-xl-4 col-md-6 col-6">
                <div class="mb-1">
                  <label class="form-label" for="helperText">End Date</label>
                  <input type="date" name="end_date"  class="form-control @error('end_date') is-invalid @enderror" placeholder="YYYY-MM-DD" > 
                             </div>
                  @error('end_date')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>

              <div class="col-xl-4 col-md-6 col-6">
              <div class="mb-1">
              <label for="formFile" class="form-label">img</label>
              {{--  <input type="file" class="form-control" id="formFile" sname="img" />  --}}
              <input type="file"  class="form-control @error('path') is-invalid @enderror" name="photo" id="formFile" accept="image/*">
              @error('path')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              </div>
            </div>
            <div class="col-xl-6 col-md-6 col-6">
                <div class="mb-1">
                  <label class="form-label" for="disabledInput">status</label>
                  <select class="form-select  @error('user_id') is-invalid @enderror" id="basicSelect" name="user_id">
                      @foreach ($user as $user )
                      <option value="{{ $user->id }}">{{ $user->name }}</option>
                      @endforeach
                     
                    </select>
                  @error('user_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="col-xl-6 col-md-6 col-6">
                <div class="mb-1">
                  <label class="form-label" for="helpInputTop">address</label>
                    <div class="form-floating">
                      <textarea class="form-control @error('address') is-invalid @enderror" name="address" placeholder="write adderess" id="floatingTextarea2" style="height: 30px"></textarea>
                      @error('address')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
  
                </div>
              </div>
            
           
             <div class="col-xl-4 col-md-6 col-6">
                   <button type="submit" class="btn btn-gradient-primary">save</button>   
           
                  </div>
           
       
         

      
      
                </div>
   
   
            </div>
      </div>
        </form>
  </div>
</section>
</div>
</div>

@endsection
@section('js')
<script src="{{ asset('app-assets/vendors/js/maps/leaflet.min.js') }}"></script>

<script src="{{ asset('app-assets/js/scripts/maps/map-leaflet.min.js') }}"></script>

@endsection
