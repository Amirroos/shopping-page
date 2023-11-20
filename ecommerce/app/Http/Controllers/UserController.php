<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function allUsers(){
        
     $users = User::all();
     return view('admin.users.all-users')->with('users',$users);
    // return view('admin.users.all-users')->('users', $users);
    }
    public function createUser(){
        return view ('admin.users.create-user');
    }
    public function storeUser(Request $request)

    {
        $data =  $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users|',
            'phone' => 'string|max:255',
            'address' => 'string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]); 
        $user = User::create($data);
        if($request->has('verfiy')){
            $user->markEmailAsVerified();
            // return redirect('admin.users.all-users');
        }
        return redirect('admin/all-user');
    }
        public function editUser($id){
            $user = User::find($id);
            return view('admin.users.edite')->with('user',$user);
            // return view('admin.users.edite', $user);
        }
    public function updateUser(Request $request,$id)
    {
            $user = User::find($id); 
            $data =  $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'phone' => 'string|max:255',
                'address' => 'string|max:255',
            ]); 
            if(isset($request->password)){
                $data =  $request->validate([
                    'password' => 'required|string|min:8|confirmed',
                ]); 
                $data['password']= $request->password;
            }
            $user->update($data);
                
            if($request->has('verfiy')){
                $user->markEmailAsVerified();
            }
        return redirect('admin/all-user');
    }
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return response()->json(['status'=>'User deleted successfully']);
    }
            
            
}