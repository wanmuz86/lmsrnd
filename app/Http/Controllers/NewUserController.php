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
      $profile = NewUser::where('id',1)->first();
        return view('profiles.profile', compact('profile'));
    }

    public function editNewUser($id,Request $request){
        $newUsers = NewUser::where('id',$id)->first();
        $userGro = Group::all();
        $userCom = Company::all();
        $userCou = Country::all();
        $userBat = Batch::all();
        return view('newUsers.edit_newuser', compact('newUsers','userGro', 'userCom', 'userCou', 'userBat'));
    }

    public function updateNewUser(Request $request){
        $newUser = Category::where('id',$request->newuser_id)->first();
        $newUser->newuser_name = $request->newuser_name;

        $newUser->save();
        return response($newUsers);
    }

}
