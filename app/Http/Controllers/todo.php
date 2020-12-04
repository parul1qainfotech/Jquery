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
        $val=DB::delete('delete from jqueryuser where id in ('.implode(",",$forms).')');
        foreach($forms as $i)
        {
            $data=todos::find($i);
           
           DB::table('user2')->insert (['name'=>$data->name]);
        }
            return redirect('/add');
            
    }


   
}
