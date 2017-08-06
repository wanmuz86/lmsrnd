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
        $newUsers = NewUser::all();
        $userGro = Group::all();
        $userCom = Company::all();
        $userCou = Country::all();
        $userBat = Batch::all();
      return view('newusers.newuser', compact('newUsers','userGro', 'userCom', 'userCou', 'userBat'));
    }
    public function getNewUserProfile(){
      $profile = NewUser::where('id',1)->get();
        return view('profiles.profile', compact('profile'));
    }

}
