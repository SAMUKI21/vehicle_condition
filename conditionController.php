<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\condition;
 use DB;

class conditionController extends Controller
{
    public function index()
    {
       $data=condition::all();
        return view ('pages.conditionid')->with('vhcondition',$data);
    }

    public function savedata(Request $request){

        //dd($request);
          $vhcondition=new condition;
       
         
          $vhcondition->vehicle_condition=$request->vehicle_condition;
          $vhcondition->save();
         
    
          return redirect()->back();
    }


    public function Delete($id){
      $data=condition::find($id);
   $data->delete();
   return redirect()->back();
  }

  
  public function appendcondition($id)
  {
      $data=condition::find($id);
      return view("pages.conditionidupdate")->with('data',$data);
  }
  
public function updatecondition(Request $request)
{


  

  $data = condition::find($request->id);
  $data->vehicle_condition=$request->vehicle_condition;
  $data->save();
  return redirect("/Vehicle/public/conditionid");




}

   

  }
    
    
        
  




    
    
  

