<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todos;
use Illuminate\Support\Facades\DB;
class todo extends Controller
{
  
    function data(){

       $val=todos::all();
       
        return view('addcheck',['datas'=>$val]);
        //return $data;
    } 



    function delete1(Request $req){
       
        $forms=$req->get('from');
        $val=DB::delete('delete from jqueryuser where id in ('.implode(",",$forms).')');
            
            return redirect('/add');
            
    }
}
