<?php

namespace App\Http\Controllers;

use App\Models\UserApp;
use Illuminate\Http\Request;

class UserAppController extends Controller
{
    public function create(Request $request){
        $data = new UserApp();
        $data->username = $request->username;
        $data->name = $request->name;
        $data->lastname = $request->lastname;
        $data->password = $request->password;
        $data->email = $request->email;
        $data->status = TRUE;
        $data->save();
        return view('login');
    }

    public function login(Request $request){
        $user = new UserApp();
        $user->username = $request->username;
        $user->password = $request->password;
        
    }
}
