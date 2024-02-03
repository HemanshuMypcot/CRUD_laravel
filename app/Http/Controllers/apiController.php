<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class apiController extends Controller
{
    function getData(){
        return user::all();
    }
    function addData(Request $request){
        $user=new User;
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        if($user->save() == false){
            return response()->json(["status"=>false,"msg"=> "Not Added"]);
        }else{
            return response()->json(["status"=>true,"msg"=> "Successfully Added"]);
        }
    }
}
