<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    //

    public function index(){
        $jobs = Job::all();

        $meta = array( "page"=> 1,
            "pages"=> 1,
            "perpage"=> -1,
            "total"=> count($jobs),
            "sort"=> "asc",
            "field"=> "id");

        $data= array();
        foreach($jobs as $job){

            $tempJob['id'] = $job->id;
            $tempJob['company_name'] = $job->Company->name;
            $tempJob['company_address'] = $job->Company->address;
            $tempJob['title'] = $job->title;
            $tempJob['created_at'] = $job->created_at->format('d M Y - H:i:s');
            $tempJob['status'] = $job->Status->status;
            $tempJob['action'] = null;
            $data[] = $tempJob;
        }

        $result = array('meta' => $meta, 'data' => $data);

        return json_encode($result);
    }
    
    public function attachFile(Request $request){
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        return response()->json(['success'=>$imageName]);
    }

    public function trashed(){

        $jobs = Job::onlyTrashed()->get();

        $meta = array( "page"=> 1,
            "pages"=> 1,
            "perpage"=> -1,
            "total"=> count($jobs),
            "sort"=> "asc",
            "field"=> "id");

        $data= array();
        foreach($jobs as $job){

            $tempJob['id'] = $job->id;
            $tempJob['company_name'] = $job->Company->name;
            $tempJob['company_address'] = $job->Company->address;
            $tempJob['title'] = $job->title;
            $tempJob['created_at'] = $job->created_at->format('d M Y - H:i:s');
            $tempJob['status'] = $job->Status->status;
            $tempJob['action'] = null;
            $data[] = $tempJob;
        }

        $result = array('meta' => $meta, 'data' => $data);

        return json_encode($result);

    }
}
