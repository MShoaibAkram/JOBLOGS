<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){
        $users = Client::all();

        $meta = array( "page"=> 1,
            "pages"=> 1,
            "perpage"=> -1,
            "total"=> 350,
            "sort"=> "asc",
            "field"=> "id");

        $data= array();
        foreach($users as $user){
                $tempUser['id'] = $user->id;
                $tempUser['name'] = $user->full_name;
                $tempUser['email'] = $user->email;
                $tempUser['phone'] = $user->phone;
                $tempUser['action'] = null;

                $data[] = $tempUser;
        }

        $result = array('meta' => $meta, 'data' => $data);

        return json_encode($result);

    }
}
