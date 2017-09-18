<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Category;
use Session;
use Redirect;
use Auth;
class CategoryController extends BaseController
{
   public function __construct(){

    }
     public function createCategory(Request $request){

        if ($request->ajax()){
            return response(Category::create($request->all()));
            Session::flash('message', 'Successfully add the nerd!');
            return Redirect::to('categories');
        }
    }

    public function getCategories(){
        $categories = [];
        $categories = Category::all();
        $user = Auth::user();
    	return view('categories.categories', compact('categories', 'user'));
    }

    public function editCategory($id,Request $request){
        $category = Category::where('id',$id)->first();
        return view('categories.edit_category', compact('category'));
    }

    public function updateCategory(Request $request){
        $category = Category::where('id',$request->category_id)->first();
        $category->category_name = $request->category_name;
        $category->save();
        return response($category);
    }

    public function deleteCategory($id, Request $request){
      $category = Category::find($id);
      $category->delete();
      Session::flash('message', 'Successfully deleted the nerd!');
      return Redirect::to('categories');
    }

}
