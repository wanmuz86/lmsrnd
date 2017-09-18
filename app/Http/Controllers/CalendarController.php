<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
class CalendarController extends BaseController
{
  public function getCalendar(){
        
        $user = Auth::user();
    	return view('calendar/calendar', compact('user'));
    }
}
