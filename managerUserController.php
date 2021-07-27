<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NormalUser;
use App\Models\updateMobile;

class managerUserController extends Controller
{
    function getManagerUser($emp_id){
      
      $data = DB::table('employee')
      ->where('emp_id',$emp_id)
      ->get();
      return view('managerUser',['employee'=>$data]);
     
    }
    
    function addIssue(Request $req){
      
      $normaluser = new NormalUser;
      $normaluser->emp_id=$req->emp_id;
      $normaluser->issue_type=$req->issue_type;
      $normaluser->issue_desc=$req->issue_desc;
      $normaluser->issue_status="queued";
      $normaluser->save();
      
      return redirect('manager/'.$req->emp_id);
     
    }

    function UpdateMobile($emp_id){
      
          $data = DB::table('employee')
        ->where('emp_id',$emp_id)
        ->get();  
        
        return view('editMobile',['emp'=>$emp_id]);

     
    }

    function update(Request $req){
    
    

      DB::table('employee')
      ->where('emp_id',$req->emp_id)
      ->update(
        ['mobile_num'=>$req->mobile_num,
        'comm_address'=>$req->comm_address,
        'city'=>$req->city
        ]
      );

      return redirect('manager/'.$req->emp_id);

    }
}

