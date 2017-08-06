<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Cambe;
class CambeController extends BaseController
{
   public function __construct(){

    }
     public function createCambe(Request $request){

        if ($request->ajax()){
            return response(Cambe::create($request->all()));
        }
    }

    public function getCambes(){
        $cambes = [];
        $cambes = Cambe::all();
    	return view('cambes.cambe', compact('cambes'));
    }
}
