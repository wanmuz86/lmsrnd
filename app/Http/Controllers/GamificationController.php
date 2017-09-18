<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificate;
use App\Course;
use Auth;

class GamificationController extends Controller
{
    //
    public function __construct(){

    }

    public function getGamification(Request $request){
       $user = Auth::user();
      return view('generalGamifications.generalGamification', compact('user'));
    }
}
