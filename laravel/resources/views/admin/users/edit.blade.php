@extends('layouts.app')
@section('styles')
    <link href="{{asset('css/pages/wizard/wizard-4.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Edit User Details</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Update user details and submit</span>
                </div>
                <!--end::Search Form-->
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="{{url('admin/users')}}" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a>
                <!--end::Button-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <div class="card card-custom card-shadowless rounded-top-0">
        <!--begin::Body-->
        <div class="card-body p-0">
            <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                <div class="col-xl-12 col-xxl-10">
                    <!--begin::Wizard Form-->
                    <form class="form" id="kt_form" action="{{url('admin/users/update')}}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$user->id}}"/>
                        <div class="row justify-content-center">
                            <div class="col-xl-9">
                                <!--begin::Wizard Step 1-->
                                <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
                                    <h5 class="text-dark font-weight-bold mb-10">User's Profile Details:</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Name <em>*</em></label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" required name="name"  type="text" value="{{$user->name}}" />
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Country Code<em>*</em></label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="country_code" type="number" value="{{$user->country_code}}" />
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="input-group input-group-solid input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-at"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="email" value="{{$user->email}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Password</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="input-group input-group-solid input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-key"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control form-control-solid form-control-lg" name="password" value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-top pt-10 mt-15">
                                    <div>
                                        <button type="submit"  class="btn btn-primary font-weight-bolder px-9 py-4" data-wizard-type="action-next">Update</button>
                                    </div>
                                </div>
                                <!--end::Wizard Actions-->
                            </div>
                        </div>
                    </form>
                    <!--end::Wizard Form-->
                </div>
            </div>
        </div>
    </div>

@endsection