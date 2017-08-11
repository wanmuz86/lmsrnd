<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\Course;

class ModuleController extends Controller
{
    //
    public function __construct(){

    }
     public function createModule($id, Request $request){

        if ($request->ajax()){
            return response(Module::create($request->all()));
        }
    }
    public function getModule($id,Request $request){
        $module = Module::all();
        $course = Course::where('id',$id)->first();
      return view('modules.modules', compact('course','module'));
    }
}
