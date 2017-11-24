<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Account;
use Input;

class LoginController extends Controller
{
    public function index(){
        // $data = User_Account::where('');        
        return view('login.login');
    }

    public function store(Request $requset) {
        // echo "<script>alert('no');</script>";

        $request = User_Account::where('account', Input::get('firstname'))->where('password', Input::get('lastname'))->first();
        
        if(!empty($request) > 0){
            return view('login.success');
        }
        else{
            return view('login.login'); 
        }
    }
}
