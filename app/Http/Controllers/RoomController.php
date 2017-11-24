<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Account;

class RoomController extends Controller
{
    public function index() {
        return view('rooms.lists');
    }

    public function show() {
        $data = User_Account::where('account', 'Kent')->where('password','2234')->first();
        if(!empty($data)){
            return view('login.login');
        }
        else{
            return view('login.success');
        }
        // return view('login.login', compact('data'));
    }
}



