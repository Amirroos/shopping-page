<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allcategories(){
        $categories = Category::all();
        return view('admin.categories.all-categories',compact('categories'));
    }
    public function createcategories(){
        return view('admin.categories.create-categories');
    }
    public function storecategory(Request $request){
        // $category =  $request->validate([
        //     'name' => 'required|string|max:255',
        // ]); 
        $category = new Category();
        $category->categoriesName = $request->categoriesName;
        $category->save();
 
        return redirect('admin/all-categories')->with('status','data save .');
    }
    public function categoryedit($id){
        $category = Category::find($id);
        return view('admin.categories.category-edit')->with('category',$category);
    }
    // public function categoryUpdate(){
    //     dd('update');
    // }

    public function categoryUpdate(Request $request,$id){
        
        $category = Category::find($id);    
        $category->categoriesName = $request->categoriesName;
        $category->update();
        return redirect('admin/all-categories')->with('status','Data update,');
    }
    public function deletecategory($id){
        $category = Category::find($id);
        $category->delete();
        return response()->json(['status'=>'Category deleted successfully']);
    }
}
