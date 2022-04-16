<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class marge_COntroller extends Controller
{
    function margeData(){
        $student=DB::table('students')->get();
        $exam_marks=DB::table('exam_marks')->get();
        $TotalData=$student->merge($exam_marks);
        return $TotalData;
    }
}
