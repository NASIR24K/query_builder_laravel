<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Delete_Controller extends Controller
{
   function OneRowDelete(){
     
    $result=DB::table('students')->where('Name', '=','Rahim k')->delete();
  
    if($result==1){
        return 'delete success';
    }
    else{
        return 'Not delete';
    }
    
  }
  function withoutPriDelete(){
     
    $result=DB::table('students')->delete();
  
    
  }
  function truncatDelete(){
     
    $result=DB::table('students')->truncate();

  }
}
