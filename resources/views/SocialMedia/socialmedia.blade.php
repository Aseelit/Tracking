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
                                    Soical Media
                                </h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Layouts</a></li>
                                        <li class="breadcrumb-item active"> Soical Media</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                        <div class="mb-1 breadcrumb-right">
                            <div class="dropdown">
                                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-feather="grid"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="app-todo.html"><i class="me-1"
                                            data-feather="check-square"></i><span class="align-middle">Todo</span></a><a
                                        class="dropdown-item" href="app-chat.html"><i class="me-1"
                                            data-feather="message-square"></i><span class="align-middle">Chat</span></a><a
                                        class="dropdown-item" href="app-email.html"><i class="me-1"
                                            data-feather="mail"></i><span class="align-middle">Email</span></a><a
                                        class="dropdown-item" href="app-calendar.html"><i class="me-1"
                                            data-feather="calendar"></i><span class="align-middle">Calendar</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <section id="basic-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                        <div class="card-header border-bottom p-1">
                                            <div class="head-label">
                                                <h6 class="mb-0" {{ $message = Session::get('success') ?'display:none' :''  }}>Soical Media All User</h6>
                                                @if ($message = Session::get('success'))
                                                <div class="alert alert-success">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @endif
                                            </div>
                                          
                                        </div>
                                       
                                        <table class="datatables-basic table dataTable no-footer dtr-column"
                                            id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info"
                                            style="width: 1034px;">
                                            <thead>
                                               
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1" style="width: 101px;"
                                                        aria-label="Name: activate to sort column ascending">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1" style="width: 104px;"
                                                        aria-label="Email: activate to sort column ascending">facebook</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1" style="width: 92px;"
                                                        aria-label="Date: activate to sort column ascending">twitter</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1" style="width: 123px;"
                                                        aria-label="Salary: activate to sort column ascending">instagram</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1" style="width: 118px;"
                                                        aria-label="Status: activate to sort column ascending">whatsApp</th>
                                                        
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 147px;" aria-label="Actions">Actions</th>
                                                       
                                                      
                                                </tr>
                                               
                                            </thead>
                                            <tbody>
                                              @foreach ($soicals as $soical)
                                                  
                                            
                                                <tr >
                                                    <td  >{{ $soical->user->name }}</td>
                                                    <td  class="dataTables_empty">
                                                        <a href=" {{ $soical->facebook }} ">
                                                            <img src="{{ asset('app-assets/images/icons/social/facebook.png') }}" width="24" height="24" />
                                                        </a>
                                                       </td>
                                                    <td  class="dataTables_empty">
                                                        <a href=" {{ $soical->twitter }}">
                                                     <img src="{{ asset('app-assets/images/icons/social/twitter.png') }}" width="24" height="24" />
                                                        </a>
                                                       </td>
                                                    <td  class="dataTables_empty">
                                                        <a href="{{ $soical->instagram }}">
                                                            <div class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></div>                </span>
                                    
                                                        </a>
                                                    </td>
                                                    <td  class="dataTables_empty">
                                                        <a href="{{ $soical->whatsApp }}">
                                                            <img src="{{ asset('app-assets/images/icons/social/WhatsApp_icon.png') }}" width="24" height="24" />                 
                                                        </a>
                                                    
                                                    </td>
                                                    <td  class="dataTables_empty">
                                                        @can('soical-edit')
                                                        <form action="{{ route('Soical.destroy',$soical->id) }}" method="POST">
                                                      <a type="button" class="btn btn-primary btn-sm waves-effect waves-float waves-light" href="{{ route('Soical.edit',$soical->id) }}">Update</a>
                                                       @endcan
                                                      @csrf
                                                      @method('DELETE')
                                                      @can('soical-delete')
                                                      <button type="submit"  class="btn btn-danger btn-sm waves-effect waves-float waves-light ">Delete</button>
                                                      @endcan
                                                  </form>
                                                    </td>
                                                   

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-between mx-0 row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                                    aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="DataTables_Table_0_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="DataTables_Table_0_previous"><a href="#"
                                                                aria-controls="DataTables_Table_0" data-dt-idx="0"
                                                                tabindex="0" class="page-link">&nbsp;</a></li>
                                                        <li class="paginate_button page-item next disabled"
                                                            id="DataTables_Table_0_next"><a href="#"
                                                                aria-controls="DataTables_Table_0" data-dt-idx="1"
                                                                tabindex="0" class="page-link">&nbsp;</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new record -->
                        <div class="modal modal-slide-in fade" id="modals-slide-in" aria-hidden="true"
                            style="display: none;">
                            <div class="modal-dialog sidebar-sm">
                                <form class="add-new-record modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                            <input type="text" class="form-control dt-full-name"
                                                id="basic-icon-default-fullname" placeholder="John Doe"
                                                aria-label="John Doe">
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-post">Post</label>
                                            <input type="text" id="basic-icon-default-post" class="form-control dt-post"
                                                placeholder="Web Developer" aria-label="Web Developer">
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-email">Email</label>
                                            <input type="text" id="basic-icon-default-email" class="form-control dt-email"
                                                placeholder="john.doe@example.com" aria-label="john.doe@example.com">
                                            <small class="form-text"> You can use letters, numbers &amp; periods </small>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                            <input type="text" class="form-control dt-date flatpickr-input"
                                                id="basic-icon-default-date" placeholder="MM/DD/YYYY"
                                                aria-label="MM/DD/YYYY" readonly="readonly">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="basic-icon-default-salary">Salary</label>
                                            <input type="text" id="basic-icon-default-salary" class="form-control dt-salary"
                                                placeholder="$12000" aria-label="$12000">
                                        </div>
                                        <button type="button"
                                            class="btn btn-primary data-submit me-1 waves-effect waves-float waves-light">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary waves-effect"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        {{-- <!-- END: Content--> --}}
    @endsection

</body>
