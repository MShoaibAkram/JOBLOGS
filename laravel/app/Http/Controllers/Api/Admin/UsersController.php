<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    public function trashed(){
        $users = User::onlyTrashed()->get();

        $meta = array( "page"=> 1,
            "pages"=> 1,
            "perpage"=> -1,
            "total"=> 350,
            "sort"=> "asc",
            "field"=> "id");

        $data= array();
        foreach($users as $user){
            if($user->roles[0]->name == 'user') {
                $tempUser['id'] = $user->id;
                $tempUser['name'] = $user->name;
                $tempUser['email'] = $user->email;
                $tempUser['country_code'] = $user->country_code;
                $tempUser['role'] = $user->roles[0]->name;
                $tempUser['status'] = $user->roles[0]->id;
                $tempUser['action'] = null;

                $data[] = $tempUser;
            }
        }

        $result = array('meta' => $meta, 'data' => $data);

        return json_encode($result);
    }


    public function index(){
        $users = User::all();

        $meta = array( "page"=> 1,
        "pages"=> 1,
        "perpage"=> -1,
        "total"=> 350,
        "sort"=> "asc",
        "field"=> "id");

        $data= array();
        foreach($users as $user){
            if($user->roles[0]->name == 'user') {
                $tempUser['id'] = $user->id;
                $tempUser['name'] = $user->name;
                $tempUser['email'] = $user->email;
                $tempUser['country_code'] = $user->country_code;
                $tempUser['role'] = $user->roles[0]->name;
                $tempUser['status'] = $user->roles[0]->id;
                $tempUser['action'] = null;

                $data[] = $tempUser;
            }
        }

        $result = array('meta' => $meta, 'data' => $data);

        return json_encode($result);

    }
}
