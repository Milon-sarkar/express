<?php

namespace App\Http\Controllers\merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        //return $request->all();



          $email=$request->email;
          $password=$request->password;
        
          $result=DB::select("select id,name,email,image from merchants where email='$email' and password='$password'");
          

          if(count($result)==1){

            //return "it is work boss";


             $user_id=$result[0]->id;
             $user_name=$result[0]->name;
             

             $session_id=(session()->getId());
             session([
                 'mer_sess_id'=>$session_id,
                 'mer_sess_user_id'=>$user_id,
                 'mer_sess_user_name'=>$user_name,
                 
        
            ]); 
            return redirect("merchant/dashboard");
         }else{
            echo "Username or Password is incarrect";
         }

    }

    public function logout()
    {
        session()->forget(['mer_sess_id','mer_sess_user_id','mer_sess_user_name']);
        session()->flush();
        session()->regenerate();
        return redirect("/");
    }
}
