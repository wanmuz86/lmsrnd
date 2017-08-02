<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\NewUser;


class NewUserController extends BaseController
{
   public function __construct(){

    }
     public function createNewUser(Request $request){

        if ($request->ajax()){
            return response(NewUser::create($request->all()));
        }
    }


    public function getNewUsers(){
        $newusers = NewUser::all();

      return view('newusers.newuser', compact('newusers'));
    }
}
