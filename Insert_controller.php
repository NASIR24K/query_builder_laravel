<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Insert_controller extends Controller
{
    function InsertRow(){
       $result= DB::table('students')->insert(['Name'=>'Nasir Uddin', 'Class'=>'13','Roll'=>'55']);
    
       if($result==true){
           return 'Insert success';
       }
       else{
           return 'Insert Not';
       }
    }
    function multiInsert(){
        $result= DB::table('students')->insert(
            [
            ['Name'=>'Nasir Ud', 'Class'=>'14','Roll'=>'57'],
            ['Name'=>'Nasir Udd', 'Class'=>'15','Roll'=>'58'],
            ['Name'=>'Nasir Uddin k', 'Class'=>'16','Roll'=>'59'],
            ]
        );
     
        if($result==true){
            return 'Insert multi success';
        }
        else{
            return 'Insert Not multi';
        }
    }
    function InsertOrIg(){
        $result= DB::table('students')->insertOrignore(
            [
            ['Id'=> '18','Name'=>'Nasir Ud', 'Class'=>'14','Roll'=>'57'],
            ['Id'=> '19','Name'=>'Nasir Udd', 'Class'=>'15','Roll'=>'58'],
            ['Id'=> '20','Name'=>'Nasir Uddin k', 'Class'=>'16','Roll'=>'59'],
            ]
        );
     
        if($result==true){
            return 'Insert multi success';
        }
        else{
            return 'Insert Not multi';
        }
    }
}
