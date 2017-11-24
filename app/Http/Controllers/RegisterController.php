<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function newMember(Request $request){

        //$accountResult = $this->verifyAccount($request);
        $passwordResult =$this->verifyPassword($request);   

        $email = $request->input('email');
        $password = $request->input('password');
        $name = $request->input('name');
        $phone = $request->input('phone');


        //echo $accountResult;
        //echo $passwordResult;

        // DB::table('member')->insert(
        //     ['email' => $email, 
        //      'password' => $password, 
        //      'name' => $name,
        //      'phone' => $phone,
        //      'created_at' => date('Y-m-d h:m:s'),
        //      'updated_at' => date('Y-m-d h:m:s'),
        //     ]
        // );
            //return redirect('/register_finish');

        date_default_timezone_set("Asia/Taipei");
        // if(!$accountResult){
        //     echo "<script>alert('The account already use. ');</script>";
        //     return view('/register');

        // }else 
        if(!$passwordResult){
            echo "<script>alert('The password are inconsistent. ');</script>";
            return view('/register');

        }else{
            DB::table('member')->insert(
                ['email' => $email, 
                 'password' => $password, 
                 'name' => $name,
                 'phone' => $phone,
                 'created_at' => date('Y-m-d h:m:s'),
                 'updated_at' => date('Y-m-d h:m:s'),
                ]
            );
                return view('/register_finish');
            }    
    }
    public function verifyPassword(Request $request){
        $password = $request->input('password');
        $password2 = $request->input('password2');
        if($password==$password2){
            return true;
        }else {
            return false;
        }
    }
    public function verifyAccount(Request $request){
        $email=$request->input('email');
        $users = DB::table('member')->select('email')->where('email', $email)->get();

        if(count($users)){
            //return true;
             return view('register');
        }else{
            //return false;
            return view('register_finish');
           
        }
    }

    
    public function finish(){
        return view('register_finish');
    }

}