@extends('layouts.app')
@section('content')
    @include('admin.users.modals.confirm')
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">KTDatatable Methods
                    <span class="d-blocktext-muted pt-2 font-size-sm">Methods API examples</span></h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline mr-2">
                    <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													<img src="{{asset('media/svg/icons/Design/PenAndRuller.svg')}}" class="color-white"/>
												</span>Export</button>
                    <!--begin::Dropdown Menu-->
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <!--begin::Navigation-->
                        <ul class="navi flex-column navi-hover py-2">
                            <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
                                    <span class="navi-text">Print</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
                                    <span class="navi-text">Copy</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
                                    <span class="navi-text">Excel</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
                                    <span class="navi-text">CSV</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
                                    <span class="navi-text">PDF</span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                    <!--end::Dropdown Menu-->
                </div>
                <!--end::Dropdown-->
                <!--begin::Button-->
                <a href="{{url('admin/users/create')}}" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
                                                <img src="{{asset('media/svg/icons/Design/Flatten.svg')}}" class="color-white"/>
											</span>New Record
                </a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                    <span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
                                </div>
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                    <select class="form-control" id="kt_datatable_search_status">
                                        <option value="">All</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Delivered</option>
                                        <option value="3">Canceled</option>
                                        <option value="4">Success</option>
                                        <option value="5">Info</option>
                                        <option value="6">Danger</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                    <select class="form-control" id="kt_datatable_search_type">
                                        <option value="">All</option>
                                        <option value="1">Online</option>
                                        <option value="2">Retail</option>
                                        <option value="3">Direct</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                    </div>
                </div>
            </div>
            <!--end::Search Form-->
            <!--end: Search Form-->
            <div class="row py-5">
                <div class="col-lg-2">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">ID:</span>
                        </div>
                        <input type="text" class="form-control" id="kt_datatable_check_input" value="1" />
                        <div class="input-group-append">
                            <button class="btn btn-secondary font-weight-bold" type="button" id="kt_datatable_check">Select row</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <button class="btn btn-light font-weight-bold" type="button" id="kt_datatable_reload">Reload</button>
                    <button class="btn btn-light font-weight-bold" type="button" id="kt_datatable_check_all">Select all rows</button>
                    <button class="btn btn-light font-weight-bold" type="button" id="kt_datatable_uncheck_all">Unselect all rows</button>
                    <button class="btn btn-light font-weight-bold" type="button" id="kt_datatable_hide_column">Hide Date</button>
                    <button class="btn btn-light font-weight-bold" type="button" id="kt_datatable_show_column">Show Date</button>
                    <button class="btn btn-light font-weight-bold" type="button" id="kt_datatable_remove_row">Remove active row</button>
                    <button class="btn btn-light font-weight-bold" type="button" id="kt_datatable_sort_asc">Sort Status [asc]</button>
                    <button class="btn btn-light font-weight-bold" type="button" id="kt_datatable_sort_desc">Sort Status [desc]</button>
                </div>
            </div>
            <!--begin: Datatable-->
            <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
            <!--end: Datatable-->
        </div>
    </div>
@endsection
@section('scripts')
    <script>var CHILD_URL = "/admin/users/trashed";
        jQuery(document).ready(function() {
            KTTrashedUsersTable.init();
        });
    </script>
@endsection