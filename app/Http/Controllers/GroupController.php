<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Group;
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
    	return view('groups.group', compact('groups'));
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

}
