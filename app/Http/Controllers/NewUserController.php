<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\NewUser;
use App\Group;
use App\Company;
use App\Country;
use App\Batch;
use Session;
use Redirect;
class NewUserController extends BaseController
{
   public function __construct(){

    }
     public function createNewUser(Request $request){

        if ($request->ajax()){
            return response(NewUser::create($request->all()));
        }
    }

    public function getNewUser(){
        $newUsers = NewUser::all();
        $userGro = Group::all();
        $userCom = Company::all();
        $userCou = Country::all();
        $userBat = Batch::all();
      return view('newusers.newuser', compact('newUsers','userGro', 'userCom', 'userCou', 'userBat'));
    }

    public function getAddNewUser(){
        $newUsers = NewUser::all();
        $userGro = Group::all();
        $userCom = Company::all();
        $userCou = Country::all();
        $userBat = Batch::all();
      return view('newusers.add_newuser', compact('newUsers','userGro', 'userCom', 'userCou', 'userBat'));
    }

    public function getNewUserProfile(Request $request, $id){
      $user = NewUser::where('newuser_id',$id)->first();
        return view('profiles.profile', compact('user'));

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
        $newUser = NewUser::where('id',$request->newuser_id)->first();
        $newUser->first_name = $request->first_name;
        $newUser->last_name = $request->last_name;
        $newUser->email  = $request->email;
        $newUser->startdate = $request->startdate;
        $newUser->group_id  = $request->group_id;
        $newUser->company_id  = $request->company_id;
        $newUser->country_id  = $request->country_id;
        $newUser->batch_id  = $request->batch_id;
        $newUser->save();
        return response($newUser);
    }

    public function deleteNewUser($id, Request $request){
      $newUser = NewUser::find($id);
      $newUser->delete();
      Session::flash('message', 'Successfully deleted the nerd!');
      return Redirect::to('newusers');
    }

}
