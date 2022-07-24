@extends('layouts.app')
@section('content')
    @include('admin.jobs.modals.confirm')
    <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Jobs</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">{{count($jobs)}} Total</span>
                    <form class="ml-5">
                        <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                            <input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Search..." />
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <span class="svg-icon">
                                        <img src="{{asset('media/svg/icons/General/Search.svg')}}" />
                                    </span>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Search Form-->
            </div>
            <div class="d-flex align-items-center">
                <a href="{{url('admin/jobs/create')}}" class="btn btn-light-primary font-weight-bold ml-2">Add Job</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="card card-custom">
                <div class="card-body">
                    <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>var CHILD_URL = "/admin/jobs/trashed";
        jQuery(document).ready(function() {
            KTJobsTable.init();
        });
    </script>
@endsection