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
}
