@extends('layouts.master')
<body>
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="app-user-view-connections">
<div class="row">
  <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-0">
    <!-- User Pills -->
    <ul class="nav nav-pills mb-2">
      <li class="nav-item">
        <a class="nav-link active" href="javascript:void();">
          <i data-feather="link" class="font-medium-3 me-50"></i><span class="fw-bold">Connections</span>
        </a>
      </li>
      <li class="nav-item">
        @if(@$users->social->id=='')
          
        <a class="nav-link" href="{{ route('Soical.create') }}">
          <span class="fw-bold">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-3 me-50"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            create Profail</span>
        </a>
      
      @else

        <a class="nav-link" href="{{ route('Soical.edit',$users->social->id) }}">
          <span class="fw-bold">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-3 me-50"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            Update Profail</span>
        </a>
        @endif
      </li>

     
    </ul>
    {{--  <!--/ User Pills -->  --}}

    {{--  <!-- connection -->  --}}
  

    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-75">Social accounts</h4>
        <p>Display content from social accounts on your site</p>
        <!-- Social Accounts -->
        <div class="d-flex mt-2">
          <div class="flex-shrink-0">
            <img
              src="../../../app-assets/images/icons/social/facebook.png"
              alt="facebook"
              class="me-1"
              height="38"
              width="38"
            />
          </div>
          <div class="d-flex justify-content-between flex-grow-1">
            <div class="me-1">
              <p class="fw-bolder mb-0">Facebook</p>
              @if(@$users->social->facebook !='' )
              <a href="{{ $users->social->facebook }}" target="_blank">{{ $users->social->facebook }}</a>
              @else
              <a href="https://facebook.com/pixinvent" target="_blank">@Sigin in Facebook</a>
              @endif
          
            </div>
            <div class="mt-50 mt-sm-0">
              <button type="button" class="btn btn-icon btn-outline-secondary">
                <i data-feather="link" class="font-medium-3"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-start mt-2">
          <div class="flex-shrink-0">
            <img
              src="../../../app-assets/images/icons/social/twitter.png"
              alt="twitter"
              class="me-1"
              height="38"
              width="38"
            />
          </div>
          <div class="d-flex justify-content-between flex-grow-1">
            <div class="me-1">
              <p class="fw-bolder mb-0">Twitter</p>
              @if(@$users->social->twitter !='' )
              <a href="{{ $users->social->twitter }}" target="_blank">{{ $users->social->twitter }}</a>
              @else
              <a href="https://twitter.com/pixinvent" target="_blank">@Sigin In Twitter </a>
               @endif  
            </div>
            <div class="mt-50 mt-sm-0">
                <button type="button" class="btn btn-icon btn-outline-secondary">
                  <i data-feather="link" class="font-medium-3"></i>
                </button>
              </div>
          </div>
        </div>
        <div class="d-flex mt-2">
          <div class="flex-shrink-0">
            <img
              src="{{ asset('app-assets/images/icons/social/WhatsApp_icon.png') }}"
              alt="instagram"
              class="me-1"
              height="38"
              width="38"
            />
          </div>
          <div class="d-flex justify-content-between flex-grow-1">
            <div class="me-1">
              <p class="fw-bolder mb-0">WhatsApp</p>
              @if(@$users->social->whatsApp !='' )
              <a href="{{ $users->social->whatsApp }}" target="_blank">{{ $users->social->whatsApp }} </a>
              @else
              <a href="https://whatsApp.com/pixinvent" target="_blank">@Download Application WhatsApp</a>

              @endif
            </div>
            <div class="mt-50 mt-sm-0">
                <button type="button" class="btn btn-icon btn-outline-secondary">
                  <i data-feather="link" class="font-medium-3"></i>
                </button>
              </div>
          </div>
        </div>
        <div class="d-flex mt-2">
          <div class="flex-shrink-0">
          
            <svg xmlns="http://www.w3.org/2000/svg"  class="me-1" width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
          </div>
          <div class="d-flex justify-content-between flex-grow-1">
            <div class="me-1">
              <p class="fw-bolder mb-0">Instagram</p>
              @if(@$users->social->instagram !='' )
              <a href="{{ $users->social->instagram }}" target="_blank">{{ $users->social->instagram }} </a>
              @else
              <a href="https://instagram.com/pixinvent" target="_blank">@Sigin In Instagram </a>

              @endif
            </div>
           
            <div class="mt-50 mt-sm-0">
              <button type="button" class="btn btn-icon btn-outline-secondary">
                <i data-feather="link" class="font-medium-3"></i>
              </button>
              
            </div>
          </div>
        </div>
    
        <!-- /Social Accounts -->
      </div>
    </div>
    <!--/ connection -->
  </div>

  <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-1">
    <!-- User Card -->
    <div class="card">
      <div class="card-body">
        <div class="user-avatar-section">
          <div class="d-flex align-items-center flex-column">
            <img
              class="img-fluid rounded mt-3 mb-2"
              src="{{ asset('app-assets/images/10.png') }}"
              height="110"
              width="110"
              alt="User avatar"
            />
            <div class="user-info text-center">
              <h4>{{ $users->name }}</h4>
              @if(!empty($users->getRoleNames()))
              @foreach($users->getRoleNames() as $v)
              <span class="badge bg-light-secondary">{{ $v }}</span>
              @endforeach
              @endif
            </div>
          </div>
        </div>
       
        <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
        <div class="info-container">
          <ul class="list-unstyled">
            <li class="mb-75">
              <span class="fw-bolder me-25">Username:</span>
              <span>{{ $users->name }}</span>
            </li>
            <li class="mb-75">
              <span class="fw-bolder me-25"> Email:</span>

              <span>{{ $users->email }}</span>
            </li>
            
            <li class="mb-75">
              <span class="fw-bolder me-25">Role:</span>
              @if(!empty($users->getRoleNames()))
              @foreach($users->getRoleNames() as $v)
              <span>{{ $v }}</span>
              @endforeach
              @endif
           
            </li>
           
            
           
          </ul>
         
        </div>
      </div>
    </div>
    <!-- /User Card -->
    
  </div>

</div>
</section>
 
 

      </div>
    </div>
  </div>
@endsection

</body>
