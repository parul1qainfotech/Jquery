<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todos;
use App\todos2;
use Illuminate\Support\Facades\DB;
class todo extends Controller
{
  
    function data(){

       $val=todos::all();
       $val2=todos2::all();
       
        return view('addcheck',['datas'=>$val,'datas2'=>$val2]);
        //return $data;
    } 



    function delete1(Request $req){
       
        $forms=$req->get('from');
        $forms2=$req->get('to');
       
       
       foreach($forms as $i)
       {
           $data=todos::find($i);
          
          DB::table('user2')->insert (['name'=>$data->name]);
          DB::table('jqueryuser')->delete (['id'=>$i]);
        
       }
       foreach($forms2 as $j)
       {
           $data2=todos2::find($j);
          
          DB::table('user2')->insert (['name'=>$data2->name]);
          DB::table('jqueryuser')->delete (['id'=>$j]);
        
       }
           return redirect('/add');
            
    }


    function delete2(Request $req){
         DB::delete('delete from jqueryuser where name in ('.implode(",",$forms).')');
         return redirect('/add');
    }


   
}
