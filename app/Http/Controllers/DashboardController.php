<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
    //

    public function getDashboard(){
      $user = Auth::user();
    	return view('dashboards/dashboard', compact('user'));
    }

     public function getReporting(){
     	 $user = Auth::user();
    	return view('analyticsReportings/analyticsReporting', compact('user'));
     }
}



