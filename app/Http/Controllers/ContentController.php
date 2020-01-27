<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


use Illuminate\Support\Facades\Validator;

class ContentController extends Controller
{
    public function ContentControl(){
   
        
        $personinfo = DB::table('tbl_personalinfo')
               ->select('tbl_personalinfo.*')
               ->get();
         
  
      
         
        $qualification = DB::table('tbl_personaqualification')
                       ->select('tbl_personaqualification.*')
                       ->get();

        $service = DB::table('tbl_service')
                ->select('tbl_service.*')
                ->get();               
        
        $work = DB::table('tbl_work')
                ->select('tbl_work.*')
                ->get();   
        
        $skill = DB::table('tbl_skill')
                ->select('tbl_skill.*')
                ->get();           
        return view('welcome')->with('personinfo',$personinfo)
                              ->with('qualification',$qualification)
                              ->with('work',$work)
                              ->with('service',$service)
                              ->with('skill',$skill);
     }
}
