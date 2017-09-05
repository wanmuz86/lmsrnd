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

<<<<<<< HEAD
    public function getNewUserProfile(){
      $profile = NewUser::where('id',1)->first();
        return view('profiles.profile', compact('profile'));
=======
    public function getNewUserProfile(Request $request, $id){
      $user = NewUser::where('newuser_id',$id)->first();
        return view('profiles.profile', compact('user'));
>>>>>>> 492fd952ed3855fcc2965747b4a67eef6abf5e88
    }

    public function editNewUser($id,Request $request){
        $newUser = NewUser::where('id',$id)->first();
        $userGro = Group::all();
        $userCom = Company::all();
        $userCou = Country::all();
        $userBat = Batch::all();
        return view('newUsers.edit_newuser', compact('newUser','userGro', 'userCom', 'userCou', 'userBat'));
    }

    public function updateNewUser(Request $request){
<<<<<<< HEAD
        $newUser = NewUser::where('id',$request->newuser_id)->first();
        $newUser->first_name = $request->first_name;
        $newUser->last_name = $request->last_name;
        $newUser->email  = $request->email;
        $newUser->startdate = $request->startdate;
        $newUser->group_id  = $request->group_id;
        $newUser->company_id  = $request->company_id;
        $newUser->country_id  = $request->country_id;
        $newUser->batch_id  = $request->batch_id;
=======
        $newUser = Category::where('id',$request->newuser_id)->first();
        $newUser->newuser_name = $request->newuser_name;
>>>>>>> 492fd952ed3855fcc2965747b4a67eef6abf5e88
        $newUser->save();
        return response($newUser);
    }

}
