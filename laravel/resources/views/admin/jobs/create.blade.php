@extends('layouts.app')
@section('styles')
    <link href="{{asset('css/pages/wizard/wizard-2.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">New Job</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">Jobs</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">New Job</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="card card-custom">
                <div class="card-body p-0">
                    <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
                        <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                            <div class="wizard-steps">
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                            <span class="svg-icon svg-icon-2x">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">Company Settings</h3>
                                            <div class="wizard-desc">Select Or Setup Company</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                            <span class="svg-icon svg-icon-2x">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z M14.1654881,7.35483745 L9.61055177,10.3622525 C9.47921741,10.4489666 9.39637436,10.592455 9.38694497,10.7495509 L9.05991526,16.197949 C9.04337012,16.4735952 9.25341309,16.7104632 9.52905936,16.7270083 C9.63705011,16.7334903 9.74423017,16.7047714 9.83451193,16.6451626 L14.3894482,13.6377475 C14.5207826,13.5510334 14.6036256,13.407545 14.613055,13.2504491 L14.9400847,7.80205104 C14.9566299,7.52640477 14.7465869,7.28953682 14.4709406,7.27299168 C14.3629499,7.26650974 14.2557698,7.29522855 14.1654881,7.35483745 Z" fill="#000000" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">Job Settings</h3>
                                            <div class="wizard-desc">Enter Job Details</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                            <span class="svg-icon svg-icon-2x">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
                                                        <path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">Proposal</h3>
                                            <div class="wizard-desc">Enter Proposal Details</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                            <div class="row">
                                <div class="offset-xxl-2 col-xxl-8">
                                    <form class="form" id="kt_form" method="post" enctype="multipart/form-data" action="{{url('admin/jobs/store')}}">
                                        @csrf
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Enter Company Details</h4>
                                            <div class="form-group">
                                                <label>Select A Company</label>
                                                <select id="selected_company" name="company_id" class="form-control form-select">
                                                    <option value="-1">Select A Company</option>
                                                    @foreach($companies as $company)
                                                        <option value="{{$company->id}}">{{$company->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <h5 class="font-weight-bold text-dark text-center pt-3 mb-1">-OR-</h5>
                                            <p class="mb-10 font-weight-bold text-dark text-center pt-0 mt-0">Enter New Company Details Below</p>
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg company_input" id="company_name" name="company_name" placeholder="Company Name" value="" />
                                                <span class="form-text text-muted">Please enter Company name.</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="tel" class="form-control form-control-solid form-control-lg company_input" id="company_phone" name="company_phone" placeholder="phone" />
                                                        <span class="form-text text-muted">Please enter company's phone number.</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control form-control-solid form-control-lg company_input" id="company_email" name="company_email" placeholder="Email" />
                                                        <span class="form-text text-muted">Please enter company's email address.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea class="form-control form-control-solid form-control-lg company_input" id="company_address" name="company_address"></textarea>
                                                <span class="form-text text-muted">Please enter Company's Address.</span>
                                            </div>
                                        </div>


                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Enter Job Details</h4>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="job_title" placeholder="Enter Job Title" />
                                                        <span class="form-text text-muted">Enter Job Title.</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group">
                                                        <label>Job Description</label>
                                                        <textarea  class="form-control form-control-solid form-control-lg" name="job_description"></textarea>
                                                        <span class="form-text text-muted">Enter Job Description.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Attachments</label>
                                                        <div id="attachments_container">

                                                        </div>
                                                        <div class="dropzone dropzone-default" id="kt_dropzone_1">
                                                            <div class="dropzone-msg dz-message needsclick">
                                                                <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                                                                <span class="dropzone-msg-desc">Selected files are actually uploaded.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 2-->
                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Proposal</h4>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group">
                                                        <label>Content</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="proposal_content" placeholder="Enter Proposal Content" />
                                                        <span class="form-text text-muted">Enter Proposal Content.</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group">
                                                        <label>Notes</label>
                                                        <textarea class="form-control form-control-solid form-control-lg" name="proposal_notes"></textarea>
                                                        <span class="form-text text-muted">Enter Additional Notes For Proposal.</span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Attachments</label>
                                                        <div id="proposal_attachments_container">

                                                        </div>
                                                        <div class="dropzone dropzone-default" id="kt_porposal_dropzone_1">
                                                            <div class="dropzone-msg dz-message needsclick">
                                                                <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                                                                <span class="dropzone-msg-desc">Selected files are actually uploaded.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                                <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next</button>
                                            </div>
                                        </div>
                                        <!--end: Wizard Actions-->
                                    </form>
                                </div>
                                <!--end: Wizard-->
                            </div>
                            <!--end: Wizard Form-->
                        </div>
                        <!--end: Wizard Body-->
                    </div>
                    <!--end: Wizard-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>

@endsection
@section('scripts')
    <script src="{{asset('js/pages/custom/wizard/wizard-2.js')}}"></script>

    <script>

        var initFileUpload = function(){

            $('#kt_dropzone_1').dropzone({
                url: "{{url('api/admin/jobs/attachment')}}", // Set the url for your upload script location
                paramName: "file", // The name that will be used to transfer the file
                maxFiles: 5,
                maxFilesize: 5, // MB
                addRemoveLinks: true,
                init: function() {
                    this.on("success", function (file, response) {
                        console.log(response);
                        var input = '<input type=hidden id="'+file.upload.uuid+'" name="attachements[]" value="'+response.success+'" />';
                        $('#attachments_container').append(input);
                    });
                    this.on('removedfile', function (file) {
                       $('#'+file.upload.uuid).remove();
                    });
                },
                accept: function(file, done) {
                    done();
                }
            });


            $('#kt_porposal_dropzone_1').dropzone({
                url: "{{url('api/admin/jobs/attachment')}}", // Set the url for your upload script location
                paramName: "file", // The name that will be used to transfer the file
                maxFiles: 5,
                maxFilesize: 5, // MB
                addRemoveLinks: true,
                init: function() {
                    this.on("success", function (file, response) {
                        console.log(response);

                        var input = '<input type=hidden id="'+file.upload.uuid+'" name="proposal_attachements[]" value="'+response.success+'" />';
                        $('#proposal_attachments_container').append(input);
                    });
                    this.on('removedfile', function (file) {
                        $('#'+file.upload.uuid).remove();
                    });
                },
                accept: function(file, done) {
                    done();
                }
            });
        }



        jQuery(document).ready(function() {
            $('#selected_company').on('change', function() {
                ///alert( this.value );

                if(this.value==-1){
                    //clear all fields
                    $('.company_input').prop( "disabled", false);
                    $('.company_input').val('');
                }else{

                    $.ajax({
                        type: "POST",
                        url: "{{url('api/admin/companies')}}",
                        data: {id:this.value},
                        success: function(data){
                            result = JSON.parse(data);
                            $('#company_name').val(result.data.name);
                            $('#company_email').val(result.data.email);
                            $('#company_phone').val(result.data.phone);
                            $('#company_address').val(result.data.address);

                            $('.company_input').prop( "disabled", true );

                        }
                    });

                }
            });

            initFileUpload();
        });

    </script>
@endsection