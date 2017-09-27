<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\Course;
use Session;
use Redirect;
use Auth;
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
    public function getModules($id,Request $request){
        $modules = Module::where('course_id',$id)->get();
        $course = Course::where('id',$id)->first();
        $user = Auth::getUser();
      return view('modules.modules', compact('course','modules','user'));
    }

    public function editModule($id,Request $request){
      $module = Module::where('id',$id)->first();
      return view('modules.edit_module', compact('module'));
    }

    public function deleteModule($id, Request $request){
      $module = modules::find($module_id);
      $module->delete();
      Session::flash('message', 'Successfully deleted the nerd!');
      return Redirect::to('module');
    }
    public function updateModule(Request $request){
      $module = Module::where('id',$request->course_id)->first();
      $module->module_title = $request->module_title;
      $module->module_desc = $request->module_desc;
      $module->save();
      return response($modules);
    }
}
