<?php


namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Session;
use Redirect;
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

    public function editCompany($id,Request $request){
        $company = Company::where('id',$id)->first();
        $image_url  = '';

        return view('companies.edit_company', compact('company','image_url'));
    }

    public function updateCourse(Request $request){
        $company = Company::where('id',$request->company_id)->first();
        $company->company_name = $request->company_name;
        $company->save();
        return response($course);
    }

    public function deleteCompany($id, Request $request){
      $company = Company::find($id);
      $company->delete();
      Session::flash('message', 'Successfully deleted the nerd!');
      return Redirect::to('companies');
    }

}
