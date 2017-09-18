<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Group;
use Session;
use Redirect;
use Auth;
class UserController extends BaseController
{
  public function __construct(){
   // $this->middleware('web');
  }

  public function createUser(Request $request){
    if ($request->ajax()){
      $user = new User;
      $user->name = $request->name;
      $user->username = $request->username;
      $user->password = bcrypt('$request->password');
      $user->email = $request->email;
      $user->group_id = $request->group_id;
      $user->active = $request->active;
      $user->save();
       Session::flash('message', 'Successfully added the course!');
       return Redirect::to('users');
    }
  }

  public function getUser(){
      $users = User::all();
      $userGro = Group::all();
    return view('users.user', compact('users','userGro'));
  }

  public function editUser($id,Request $request){
    $user = User::where('id',$id)->first();
    $image_url  = '';
    if(Storage::exists($user->image_url)){
      $image_url = Storage::url($user->image_url);
    }
    return view('users.edit_user', compact('user','image_url'));
  }

  public function deleteUser($id, Request $request){
    $user = User::find($id);
    $user->delete();
    Session::flash('message', 'Successfully deleted the nerd!');
    return Redirect::to('users');
  }

  
}
