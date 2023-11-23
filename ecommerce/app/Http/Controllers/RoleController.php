<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    
    public function allrole(){
        
        $role = Role::all();
        return view('admin.roles.all-roles')->with('role',$role);
    }
    public function createrole(){
            $permissions = Permission::all();
           return view ('admin.roles.create-role')->with('permissions',$permissions);
    }
    public function storerole(Request $request)
   
    {
           $data =  $request->validate([
               'name' => 'nullable|string|max:255',
               'label' => 'nullable|string|max:255',

           ]); 
           $role = Role::create($data);
           if($request->has('verfiy')){
               $role->markEmailAsVerified();
               // return redirect('admin.users.all-users');
           }
           return redirect('admin/all-roles');
       }
           public function editrole($id){
               $role = Role::find($id);
               return view('admin.roles.edite-role')->with('role',$role);
               // return view('admin.users.edite', $user);
    }

    public function updaterole(Request $request,$id){
               $role = Role::find($id); 
               $data =  $request->validate([
                   'name' => 'nullable|string|max:255',
                   'name' => 'nullable|string|max:255',
               ]); 
               $role->update($data);
                   
           return redirect('admin/all-roles');
    }
    public function deleterole($id){
           $role = Role::find($id);
           $role->delete();
           return response()->json(['status'=>'role deleted successfully']);
    }
               
               
}
   
