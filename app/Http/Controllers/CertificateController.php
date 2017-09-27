<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificate;
use App\Course;
use Auth;

class CertificateController extends Controller
{
    //
    public function __construct(){

    }
     public function createCertificate($id, Request $request){

        if ($request->ajax()){
            return response(Certificate::create($request->all()));
        }
    }
    public function getCertificate($id,Request $request){
        $certificates = Certificate::where('course_id',$id)->get();
        $course = Course::where('id',$id)->first();
        $user = Auth::getUser();
      return view('certifications.certification', compact('course','certificates','user'));
    }
}
