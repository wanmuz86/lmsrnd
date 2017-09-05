<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Batch;
class BatchController extends BaseController
{
   public function __construct(){

    }
     public function createBatch(Request $request){

        if ($request->ajax()){
            return response(Batch::create($request->all()));
        }
    }

    public function getBatches(){
        $batches = [];
        $batches = Batch::all();
    	return view('batches.batch', compact('batches'));
    }

    public function editBatch($id,Request $request){
        $batch = Batch::where('id',$id)->first();
        return view('batches.edit_batch', compact('batch'));
    }

    public function updateBatch(Request $request){
        $batch = Batch::where('id',$request->batch_id)->first();
        $batch->batch_name = $request->batch_name;
        $batch->save();
        return response($batch);
    }

}
