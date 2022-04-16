<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Select_Controller extends Controller
{
    function UniqueCulumn(){
     $result=DB::table('students')->distinct()->get();
     return $result;
    }
    function SingleCulumn(){
        $result=DB::table('students')->select('Name')->get();
        return $result;
    }
    function MultiCulumn(){
        $result=DB::table('students')->select('Name', 'Roll')->get();
        return $result;
    }
}
