<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AggregateCOntroller extends Controller
{
    function countRow(){
     $result=DB::table('students')->count();
     return $result;
    }
    function MaxRow(){
        $result=DB::table('students')->max('Roll');
        return $result;
    }
    function MInRow(){

        $result=DB::table('students')->min('Roll');
        return $result;
    }
    function avgRow(){
        $result=DB::table('students')->avg('Roll');
        return $result;
    }
}
