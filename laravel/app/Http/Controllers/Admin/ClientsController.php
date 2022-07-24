<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClientsController extends Controller
{
    //

    public function index(){
        notify()->success('Welcome to Laravel Notify ⚡️');
        return view('admin.clients.index');
    }

    public function create(){
        return view('admin.clients.create');
    }

    public function delete($id){
        $user = Client::find($id);
        if($user != null){
            $user->delete();
            return Redirect::back()->with(['success' => 'Client Inactive successfully']);
        }else{
            return Redirect::back()->with(['error' => 'Client Not Found']);
        }
    }

    public function store(Request $request){
        $client = new Client();
        $client->full_name = $request->get('name');
        $client->phone = $request->get('phone');
        $client->email = $request->get('email');
        $client->save();

        return redirect('admin/clients')->with('success', 'Client Created Successfully');
    }

    public function edit($id){
        $user = Client::find($id);
        if($user != null){
            return view('admin.clients.edit', compact('user'));
        }else{
            return Redirect::back()->with(['error' => 'User Not Found']);
        }
    }

    public function update(Request $request){
        $client = Client::find($request->get('client_id'));


        $client->full_name = $request->get('name');
        $client->phone = $request->get('phone');
        $client->email = $request->get('email');
        $client->save();

        return redirect('admin/clients')->with('success', 'Client Updated Successfully');
    }
}

