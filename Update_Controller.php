<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Update_Controller extends Controller
{
    function updateData(){
        $result=DB::table('students')->where('Name','=', 'Nasir')
        ->update(['Name'=>'Nasir Uddin', 'Roll'=>'23', 'Class'=>'One']);

        if($result==true){
            return 'Update success';
        }
        else{
            return 'not update';
        }
    }
}
