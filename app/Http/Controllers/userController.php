<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class userController extends Controller
{
    function user(){
        $data = user::all();
        return view("Data",compact("data"));
    }

    function addUser(Request $request){
        $user = new user;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();
        return redirect('/');
    }

    function showData($id){
        $data = user::find($id);
        return view('show',compact('data'));
    }

    function deleteData($id){
        $user = user::find($id);
        $user->delete();
        return redirect('data');
    }

    function editData(Request $request){
        $user = user::find($request->id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();
        return redirect('/data');
    }

    function showEditData($id){
        $user = user::find($id);
        return view('Edit',compact('user'));
    }

}
