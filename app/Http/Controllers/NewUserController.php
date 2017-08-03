<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\NewUser;
use App\Group;
use App\Company;
use App\Country;
use App\Batch;
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
        $userCat = Group::all();
        $userCom = Company::all();
        $userCou = Country::all();
        $userBat = Batch::all();
      return view('newusers.newuser', compact('newusers','userCat', 'userCom', 'userCou', 'userBat'));
    }
}
