<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    //


    public function index(){
        return view('admin.users.index');
    }

    public function trashedUser(){
        return view('admin.users.trashed');
    }

    public function create(){
        return view('admin.users.create');
    }

    public function restore($id){
        $user = User::withTrashed()->find($id);
        if($user != null){
            $user->restore();
            return Redirect::to('admin/users')->with(['success' => 'User Activated successfully']);
        }else{
            return Redirect::back()->with(['error' => 'User Not Found']);
        }
    }

    public function delete($id){
        $user = User::find($id);
        if($user != null){
            $user->delete();
            return Redirect::back()->with(['success' => 'User Inactive successfully']);
        }else{
            return Redirect::back()->with(['error' => 'User Not Found']);
        }
    }

    public function edit($id){
        $user = User::find($id);
        if($user != null){
            return view('admin.users.edit', compact('user'));
        }else{
            return Redirect::back()->with(['error' => 'User Not Found']);
        }
    }

    public function update(Request $request){

        $user = User::find($request->get('user_id'));
        $user->name = $request->get('name');
        $user->email= $request->get('email');
        $password = $request->get('password');
        if(isset($password)){
            $user->password = bcrypt($request->get('password'));
        }

        $user->country_code = $request->get('country_code');
        $user->save();

        return redirect('admin/users')->with('success', 'User Created Successfully');

    }



    public function store(Request $request){

        $user = new User();
        $user->name = $request->get('name');
        $user->email= $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->country_code = $request->get('country_code');

        $user->save();
        $role = Role::where('name', 'user')->first();
        $user->assignRole($role);


        return redirect('admin/users')->with('success', 'User Created Successfully');

    }
}
