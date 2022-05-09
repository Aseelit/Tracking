@extends('layouts.master')
<body>
@section('content')
{{-- <!-- BEGIN: Content--> --}}
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
          <div class="col-12">
            <h2 class="content-header-title float-start mb-0">
              Add Soical Media
            </h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">User</a></li>
                <li class="breadcrumb-item active">Add Soical Media</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div
        class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none"
      >
       
  
      </div>
    </div>
    <div class="content-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Soical Media</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('Soical.update',$social->id) }}" method="POST">
                @csrf
                @method('PATCH')
              <div class="input-group input-group-lg mb-1">
                <span class="input-group-text">
                  <img src="{{ asset('app-assets/images/icons/social/facebook.png') }}" width="24" height="24" />
                </span>
                <input type="text" class="form-control form-control-lg  @error('facebook') is-invalid @enderror" placeholder="facebook" value="{{ $social->facebook }}" name="facebook">
                @error('facebook')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
              <div class="input-group input-group-lg mb-1">
                <span class="input-group-text">
                  <img src="{{ asset('app-assets/images/icons/social/twitter.png') }}" width="24" height="24" />
                </span>
                <input type="text" class="form-control form-control-lg  @error('twitter') is-invalid @enderror" value="{{ $social->twitter }}" placeholder="twitter" name="twitter">
                @error('twitter')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
              <div class="input-group input-group-lg mb-1">
                <span class="input-group-text">
                  <div class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></div>                </span>
                <input type="text" class="form-control form-control-lg  @error('twitter') is-invalid @enderror" value="{{ $social->instagram}}" placeholder="instagram" name="instagram">
                @error('instagram')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
              <div class="input-group input-group-lg mb-1">
                <span class="input-group-text">
                  <img src="{{ asset('app-assets/images/icons/social/WhatsApp_icon.png') }}" width="24" height="24" />

                </span>
                <input type="text" class="form-control form-control-lg @error('whatsApp') is-invalid @enderror" value="{{ $social->whatsApp }}" placeholder="WhatsApp" name="whatsApp">
                @error('whatsApp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
              <button type="submit" class="btn btn-gradient-primary">Save</button>
            </form>
            
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- <!-- END: Content--> --}}
@endsection

</body>
