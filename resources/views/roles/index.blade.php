@extends('layouts.master')


@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row"></div>
      <div class="content-body">
        <h3>Roles List</h3>
        {{--  <!-- Role cards -->  --}}
       
        <div class="row">
            @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
            @can('role-list')
            @foreach ($roles as $key => $role)
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <span> Total {{ $role->users->count() }} Users</span>
                 
                </div>
                <div
                  class="d-flex justify-content-between align-items-end mt-1 pt-25"
                >
                  <div class="role-heading">
                    <h4 class="fw-bolder">{{ $role->name }}</h4>
                    <a
                    href="{{ route('roles.edit',$role->id) }}"
                      class="role-edit-modal"
                    
                    >
                      <small class="fw-bolder">Edit Role</small>
                    </a>

                  </div>
                  @can('role-delete')
                  {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                 
                   
                  {!! Form::submit('Delete', ['class' => 'btn btn-flat-danger waves-effect']) 
                  !!}
             
                  {!! Form::close() !!}
              @endcan
                
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @endcan
         
          @can('role-create')
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
              <div class="row">
                <div class="col-sm-5">
                  <div
                    class="d-flex align-items-end justify-content-center h-100"
                  >
                    <img
                      src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/faq-illustrations.svg"
                      class="img-fluid mt-2"
                      alt="Image"
                      width="85"
                    />
                  </div>
                </div>
                <div class="col-sm-7">
                     @can('role-create')
                  <div class="card-body text-sm-end text-center ps-sm-0">
                    <a
                      href="javascript:void(0)"
                      data-bs-target="#addRoleModal"
                      data-bs-toggle="modal"
                      class="stretched-link text-nowrap add-new-role"
                    >
                      <span class="btn btn-primary mb-1">Add New Role</span>
                    </a>
                    <p class="mb-0">Add role, if it does not exist</p>
                  </div>
                  @endcan
                </div>
              </div>
            </div>
          </div>
          @endcan
        </div>
      
        {{--  <!--/ Role cards -->  --}}

        {{--  <!-- Add Role Modal -->  --}}
        @can('role-create')
        {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
        <div
          class="modal fade"
          id="addRoleModal"
          tabindex="-1"
          aria-hidden="true"
        >
          <div
            class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role"
          >
            <div class="modal-content">
              <div class="modal-header bg-transparent">
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body px-5 pb-5">
                <div class="text-center mb-4">
                  <h1 class="role-title">Add New Role</h1>
                  <p>Set role permissions</p>
                  
                </div>
                <!-- Add role form -->
              
                  <div class="col-12">
                    <label class="form-label" for="modalRoleName"
                      >Role Name</label
                    >
                  
                    {!! Form::text('name', null, array('placeholder' => 'Please enter role','class' => 'form-control')) !!}
                  </div>
                  <div class="col-12">
                    <h4 class="mt-2 pt-50">Role Permissions</h4>
                    <!-- Permission table -->
                    <div class="table-responsive">
                      <table class="table table-flush-spacing">
                        <tbody>
                         
                          <tr>
                            <td class="text-nowrap fw-bolder">
                          
                      
                           
                            @foreach($permission as $value)
                        <div class="form-check form-check-success">
                            <label class="form-check-label">{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'form-check-input','id'=>'colorCheck3')) }}
                                {{ $value->name }}</label>
                            <br/>
                        </div>
                        @endforeach
                           
                    </td>
                          
                             
                           
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- Permission table -->
                  </div>
                  <div class="col-12 text-center mt-2">
                    <button type="submit" class="btn btn-primary me-1">
                      Submit
                    </button>
                    <button
                      type="reset"
                      class="btn btn-outline-secondary"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    >
                      Discard
                    </button>
                  </div>
             
             
                <!--/ Add role form -->
              </div>
            </div>
          </div>
        </div>
        {!! Form::close() !!}
        @endcan
        {{--  <!--/ Add Role Modal -->  --}}
      </div>
    </div>
  </div>


  @endsection