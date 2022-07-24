<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobAttachment;
use App\Models\JobLog;
use App\Models\JobStatus;
use App\Models\Proposal;
use App\Models\ProposalAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class JobsController extends Controller
{
    //

    public function index(){
        $jobs = Job::all();
        return view('admin.jobs.index', compact('jobs'));
    }

    public function create(){
        $companies = Company::all();
        return view('admin.jobs.create', compact('companies'));
    }

    public function delete($id){
        $job = Job::find($id);
        if($job != null){
            $job->delete();
            return back()->with(['success' => 'Job Deleted Successfully']);
        }else{
            return back()->with(['error' => 'Something Went Wrong']);
        }
    }

    public function trashedJobs(){
        $jobs = Job::all();
        return view('admin.jobs.trashed', compact('jobs'));
    }

    public function store(Request $request){

        $company_id = $request->get('company_id');
        if($company_id == '-1'){
            $company = new Company();
            $company->name = $request->get('company_name');
            $company->address = $request->get('company_address');
            $company->email = $request->get('company_email');
            $company->phone = $request->get('company_phone');
            $company->save();
            $company_id = $company->id;
        }


        $job = new Job();
        $job->title = $request->get('job_title');
        $job->description = $request->get('job_description');
        $job->company_id = $company_id;
        $job->job_number = 'JOB_'.$company_id;
        $job->job_status = 1;
        $job->save();

        $jobAttachments = $request->get('attachements');

        foreach ($jobAttachments as $attachment){
            $jattachment = new JobAttachment();
            $jattachment->job_id = $job->id;
            $jattachment->attached_url = $attachment;
            $jattachment->note = $attachment;
            $jattachment->save();
        }

        $jobLog = new JobLog();
        $jobLog->job_id = $job->id;
        $jobLog->log_type = 1;
        $jobLog->save();

        $proposal = new Proposal();
        $proposal->job_id = $job->id;
        $proposal->job_log_id = $jobLog->id;
        $proposal->content = $request->get('proposal_content');
        $proposal->note = $request->get('proposal_notes');
        $proposal->save();

        $proposalAttachments = $request->get('proposal_attachements');

        foreach ($proposalAttachments as $proposalAttachment){
            $pAttachment = new ProposalAttachment();
            $pAttachment->proposal_id = $proposal->id;
            $pAttachment->file_links = $proposalAttachment;
            $pAttachment->save();
        }

        return Redirect::to('admin/jobs')->with(['success' => 'Job Created Successfully']);
    }


    public function view($id){
        $job = Job::find($id);
        $jobStatus = JobStatus::all();
        if($job != null){

            return view('admin.jobs.view', compact('job', 'jobStatus'));

        }else{
            return back()->with(['error' => 'Something Went Wrong']);
        }
    }

    public function updateStatus($jobId, $statusId){
        $job = Job::find($jobId);
        if($job != null){
            $status = JobStatus::find($statusId);
            $job->job_status = $status->id;
            $job->save();
        }
        return back()->with(['success' => 'Job Status Updated Successfully']);
    }
}
