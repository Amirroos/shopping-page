<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            
            // 'name'=> ['require','string','max:255'],
            // 'email'=>['require','string','email','max:255','unique:users'],
            // 'phone'=> ['string','max:255'],
            // 'address'=> ['string','max:255'],
            // 'password'=> ['require', 'string','min:8','confirmed'],
        ]); 
        return $data;
    }

}
