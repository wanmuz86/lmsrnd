<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Auth;


class GamificationController extends BaseController
{
	 public function __construct(){

    }
	public function getGamification(){

         $user = Auth::user();
        return view('gamification/gamification', compact('user'));
    }
}
