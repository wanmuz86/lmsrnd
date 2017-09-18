<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Group;
use Session;
use Redirect;
use Auth;
class GroupController extends BaseController
{
   public function __construct(){

    }
     public function createGroup(Request $request){

        if ($request->ajax()){
            return response(Group::create($request->all()));
        }
    }

    public function getGroups(){
      $groups = [];
      $groups = Group::all();
      $user = Auth::user();
    	return view('groups.group', compact('groups', 'user'));
    }

    public function editGroup($id,Request $request){
        $group = Group::where('id',$id)->first();
        return view('groups.edit_group', compact('group'));
    }

    public function updateGroup(Request $request){
        $group = Group::where('id',$request->group_id)->first();
        $group->group_name = $request->group_name;
        $group->save();
        return response($group);
    }

    public function deleteGroup($id, Request $request){
      $group = Group::find($id);
      $group->delete();
      Session::flash('message', 'Successfully deleted the nerd!');
      return Redirect::to('groups');
    }

}
