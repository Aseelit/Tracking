@extends('layouts.master')

@section('content')
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
          <div class="col-12">
            <h2 class="content-header-title float-start mb-0">
              Dashboard
            </h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">user Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <div class="content-body">
      <section class="card-layout">
       
    
        <h6 class="my-3 text-muted">Grid Cards</h6>
      
        <div class="row row-cols-1 row-cols-md-3 mb-2">
        
          <div class="col">
            <div class="card h-100">
              <img class="card-img-top" src="{{ asset('app-assets/images/profile/user-uploads/user-06.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Ahmed Adnan</h4>
                <p class="card-text">User Ahmed Have Role Admin .</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img class="card-img-top" src="{{ asset('app-assets/images/profile/user-uploads/user-06.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Ahmed Adnan</h4>
                <p class="card-text">User Ahmed Have Role Admin .</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img class="card-img-top" src="{{ asset('app-assets/images/profile/user-uploads/user-06.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Ahmed Adnan</h4>
                <p class="card-text">User Ahmed Have Role Admin .</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
         
        </div>
      </section>
    </div>
  </div>
</div>
  {{-- <!-- END: Content--> --}}
@endsection