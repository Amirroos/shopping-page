<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function allPermission(){
        $permissions = Permission::all();
        return view('admin.permissions.all-permission')->with('permissions',$permissions);
    }
    public function createPermission(){
        return view('admin.permissions.create-permission');
    } 
    public function storePermission(Request $request)
        {
            $data =  $request->validate([
                'name' => 'nullable|string|max:255',
                'label' => 'nullable|string|max:255',
            ]); 
            Permission::create($data);

            return redirect('admin/all-permissions')->with('status','Data saved');
        }
    
    public function editPermission($id){
        $permission = Permission::find($id);
        return view('admin.permissions.edit-permission')->with('permission',$permission);
    }
    public function updatePermission(Request $request,$id){
        
        
        $Permission = Permission::find($id); 
        $data =  $request->validate([
            'name' => 'nullable|string|max:255',
            'label' => 'nullable|string|max:255',

        ]); 
        $Permission->update($data);
        return redirect('admin/all-permissions');
    }
}
