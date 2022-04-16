<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\RetriveController;

class RetriveController extends Controller
{
    function AllData(){
     $result =DB::table(`students`)->get();
    echo json_encode($result);
    
    }
    function selectOneRow(){
        $result =DB::table(`students`)->where('Name','Nasir')->first();
       echo json_encode($result);
       }
}
