{{-- <!-- BEGIN: Main Menu--> --}}
<div
  class="main-menu menu-fixed menu-light menu-accordion menu-shadow"
  data-scroll-to-active="true"
>
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item me-auto">
        <a class="navbar-brand" href="index.html"
          ><span class="brand-logo">
            <svg
              viewbox="0 0 139 95"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              height="24"
            >
              <defs>
                <lineargradient
                  id="linearGradient-1"
                  x1="100%"
                  y1="10.5120544%"
                  x2="50%"
                  y2="89.4879456%"
                >
                  <stop stop-color="#000000" offset="0%"></stop>
                  <stop stop-color="#FFFFFF" offset="100%"></stop>
                </lineargradient>
                <lineargradient
                  id="linearGradient-2"
                  x1="64.0437835%"
                  y1="46.3276743%"
                  x2="37.373316%"
                  y2="100%"
                >
                  <stop
                    stop-color="#EEEEEE"
                    stop-opacity="0"
                    offset="0%"
                  ></stop>
                  <stop stop-color="#FFFFFF" offset="100%"></stop>
                </lineargradient>
              </defs>
              <g
                id="Page-1"
                stroke="none"
                stroke-width="1"
                fill="none"
                fill-rule="evenodd"
              >
                <g
                  id="Artboard"
                  transform="translate(-400.000000, -178.000000)"
                >
                  <g
                    id="Group"
                    transform="translate(400.000000, 178.000000)"
                  >
                    <path
                      class="text-primary"
                      id="Path"
                      d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                      style="fill: currentColor"
                    ></path>
                    <path
                      id="Path1"
                      d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                      fill="url(#linearGradient-1)"
                      opacity="0.2"
                    ></path>
                    <polygon
                      id="Path-2"
                      fill="#000000"
                      opacity="0.049999997"
                      points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"
                    ></polygon>
                    <polygon
                      id="Path-21"
                      fill="#000000"
                      opacity="0.099999994"
                      points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"
                    ></polygon>
                    <polygon
                      id="Path-3"
                      fill="url(#linearGradient-2)"
                      opacity="0.099999994"
                      points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"
                    ></polygon>
                  </g>
                </g>
              </g></svg
          ></span>
          <h2 class="brand-text">Tracking</h2></a
        >
      </li>
      <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"
          ><i
            class="d-block d-xl-none text-primary toggle-icon font-medium-4"
            data-feather="x"
          ></i
          ><i
            class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary"
            data-feather="disc"
            data-ticon="disc"
          ></i
        ></a>
      </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul
      class="navigation navigation-main"
      id="main-menu-navigation"
      data-menu="menu-navigation"
    >
    
    <li class="nav-item has-sub sidebar-group-active menu-collapsed-open"><a class="d-flex align-items-center" href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
      <ul class="menu-content" style="">
        @can('dashbord-admin')
        <li><a class="d-flex align-items-center" href="{{ route('home') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Analytics">Admin</span></a>
        </li>
        @endcan
        @can('dashbord-user')
        <li><a class="d-flex align-items-center" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="eCommerce">User</span></a>
        </li>
        @endcan
      </ul>
    </li>
   
    
            <li class="nav-item">
              @can('role-list')
        <a class="d-flex align-items-center" href="#"
          ><i data-feather="shield"></i
          ><span
            class="menu-title text-truncate"
            data-i18n="Roles &amp; Permission"
            >Roles</span
          ></a>
          @endcan
         
        <ul class="menu-content">
          @can('role-list')
          <li>
            <a
              class="d-flex align-items-center"
              href="{{ route('roles.index') }}"
              ><i data-feather="circle"></i
              ><span class="menu-item text-truncate" data-i18n="Roles"
                >Roles</span
              ></a
            >
          </li>
          @endcan
       
        </ul>
      </li>
     
  
      <li class="nav-item">
        @can("user-list")
        <a class="d-flex align-items-center"
          ><i data-feather="user"></i
          ><span class="menu-title text-truncate" data-i18n="User"
            >User</span
          ></a>
          @endcan
         
        <ul class="menu-content">
          @can("user-list")
          <li>
            <a class="d-flex align-items-center" 
            href="{{ route('users.index') }}"
              ><i data-feather="circle"></i
              ><span class="menu-item text-truncate" data-i18n="List"
                >List</span
              ></a
            >
          </li>
          @endcan
         @can('user-create')
          <li>
            <a class="d-flex align-items-center" 
            href="{{ route('users.create') }}"
              ><i data-feather="circle"></i
              ><span class="menu-item text-truncate" data-i18n="List"
                >Create User</span
              ></a
            >
          </li>
          @endcan
        </ul>
      </li>
     
      
    
      <li class="nav-item">
        @can('project-list')
        <a class="d-flex align-items-center" href="#"
          ><i data-feather="shield"></i
          ><span
            class="menu-title text-truncate"
            data-i18n="Roles &amp; Permission"
            >Project</span
          ></a>
          @endcan

        <ul class="menu-content">
          @can('project-list')
            
          <li>
            <a
              class="d-flex align-items-center"
              href="{{ route('project.index') }}"
              ><i data-feather="circle"></i
              ><span class="menu-item text-truncate" data-i18n="Roles"
                >List Project</span
              ></a
            >
          </li>
          @endcan
          @can('project-create')
          <li>
            <a
              class="d-flex align-items-center"
              href="{{ route('project.create') }}"
              ><i data-feather="circle"></i
              ><span class="menu-item text-truncate" data-i18n="Permission"
                >Create Project</span
              ></a
            >
          </li>
          @endcan
        </ul>
      </li>

    {{--  tracking  --}}
    <li class="nav-item">
      @can('tracking-list')
      <a class="d-flex align-items-center" href="#"
        ><i data-feather="shield"></i
        ><span
          class="menu-title text-truncate"
          data-i18n="Roles &amp; Permission"
          >Tracking</span
        ></a>
        @endcan

      <ul class="menu-content">
        @can('tracking-list')
          
        <li>
          <a
            class="d-flex align-items-center"
            href="{{ route('tracking.index') }}"
            ><i data-feather="circle"></i
            ><span class="menu-item text-truncate" data-i18n="Roles"
              >List Tracking</span
            ></a
          >
        </li>
        @endcan
        @can('tracking-create')
        <li>
          <a
            class="d-flex align-items-center"
            href="{{ route('tracking.create') }}"
            ><i data-feather="circle"></i
            ><span class="menu-item text-truncate" data-i18n="Permission"
              >Create Tracking</span
            ></a
          >
        </li>
        @endcan
      </ul>
    </li>

    </ul>
    
  </div>
</div>
{{-- <!-- END: Main Menu--> --}}