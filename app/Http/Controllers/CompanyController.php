<?php


namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Company;
class CompanyController extends BaseController
{
   public function __construct(){

    }
     public function createCompany(Request $request){

        if ($request->ajax()){
            return response(Company::create($request->all()));
        }
    }

    public function getCompanies(){
        $companies = [];
        $companies = Company::all();
    	return view('companies.company', compact('companies'));
    }
}
