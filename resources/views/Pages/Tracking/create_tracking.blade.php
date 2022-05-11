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
                <h2 class="content-header-title float-start mb-0">Tracking</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Tracking</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Create New Tracking</a>
                    </li>
                    <li class="breadcrumb-item active">Tracking
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
          {{--  map this selected the user location  --}}
          <div class="card-body">
            <div class="leaflet-map" id="user-location"></div>
          </div>
        </div>
      </div>
    <div class="col-md-12">
        <form method="post"  action="{{ route('tracking.store') }}" autocomplete="off" enctype="multipart/form-data">
            @csrf
      <div class="card">
       
        <div class="card-body">
       
          <div class="row">
  
    
          
            <div class="col-xl-6 col-md-6 col-6">
              <div class="mb-1">
                <label class="form-label" for="helperText">Descripation</label>
                <textarea class="form-control @error('descripation') is-invalid @enderror" name="descripation" placeholder="descripation" id="floatingTextarea2" style="height: 20px"></textarea>
                @error('descripation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            </div>

            {{--  projects  --}}
            <div class="col-xl-6 col-md-6 col-6">
                <div class="mb-1">
                  <label class="form-label" for="disabledInput">Project</label>
                  <select class="form-select" id="basicSelect" name="project_id">
                    <option selected disabled >Choose the Project</option>
                      @foreach ($projects as $project )
                      <option value="{{ $project->id }}">{{ $project->name }}</option>
                      @endforeach
                     
                    </select>
                 
                </div>
              </div>

              {{--  end project  --}}

            <div class="col-xl-6 col-md-6 col-6">
                <div class="mb-1">
                  <label class="form-label" for="disabledInput">status</label>
                  <select class="form-select  @error('development_stages_project_id') is-invalid @enderror" id="basicSelect" name="development_stages_project_id">
                     
                    </select>
                  @error('development_stages_project_id')
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
              <div class="col-xl-6 col-md-6 col-6">
                <div class="mb-1">
                <label for="formFile" class="form-label">uplode report</label>
                {{--  <input type="file" class="form-control" id="formFile" sname="img" />  --}}
                <input type="file"  class="form-control @error('photo') is-invalid @enderror" name="photo" id="formFile" accept="image/*">
                @error('photo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                </div>
              </div>

              <div class="col-xl-6 col-md-6 col-6">
                <div class="mb-1">
                <label for="formFile" class="form-label">Uplode Img</label>
                {{--  <input type="file" class="form-control" id="formFile" sname="img" />  --}}
                <input type="file"  class="form-control @error('img') is-invalid @enderror" name="img[]" id="formFile" multiple accept="image/*">
                @error('img')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
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

<script src="{{ asset('assets/jquery-3.3.1.min.js')}}"></script>

<script src="{{ URL::asset('assets/plugins-jquery.js') }}"></script>
<script src="{{ asset('assets/plugins-jquery.js')}}"></script>

<script>
    $(document).ready(function () {
        $('select[name="project_id"]').on('change', function () {
            var project_id = $(this).val();
            if (project_id) {
                $.ajax({
                    url: "{{ URL::to('get_stages_project') }}/" + project_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="development_stages_project_id"]').empty();
                        $('select[name="development_stages_project_id"]').append('<option selected disabled >Choose the Stages...</option>');
                        $.each(data, function (key, value) {
                            $('select[name="development_stages_project_id"]').append('<option value="' + key + '">' + value.stages.name + '</option>');
                        });
                    },
                });
            }
            else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>

@endsection

