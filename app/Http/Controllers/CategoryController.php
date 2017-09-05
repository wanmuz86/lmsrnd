<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Category;
class CategoryController extends BaseController
{
   public function __construct(){

    }
     public function createCategory(Request $request){

        if ($request->ajax()){
            return response(Category::create($request->all()));
        }
    }

    public function getCategories(){
        $categories = [];
        $categories = Category::all();
    	return view('categories.categories', compact('categories'));
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

}
