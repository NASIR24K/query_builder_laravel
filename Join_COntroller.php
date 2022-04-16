<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Join_COntroller extends Controller
{
    function LeftJoinData(){
        $result=DB::table('students')->leftjoin('exam_marks', 'students.Roll','=','exam_marks.Roll')->get();
      return $result;
    }
    function RightJoinData(){
            $result=DB::table('students')->rightjoin('exam_marks', 'students.Roll','=','exam_marks.Roll')->get();
          return $result;
    }
}
