<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function home(){


        return view('welcome');
    }
    
   public function message(Request $request)
   {
       $msg = array();
       $msg['message_name'] = $request->name;
       $msg['message_email'] = $request->email;
       $msg['message_subject'] = $request->subject;
       $msg['message_description'] = $request->message;

       DB::table('tbl_message')
       ->insert($msg);
       
       return Redirect::to('/home');
   }
}
