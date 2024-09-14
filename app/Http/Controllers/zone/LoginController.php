<?php

namespace App\Http\Controllers\zone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
class LoginController extends Controller
{
    public function index()
    {
        return view("branch.auth.login");
    }

    public function login(Request $request)
    {

        //return $request->all();



           $email=$request->email;
           $password=$request->password;
        
           $result=DB::select("select id,manager_name,email from branches where email='$email' and password='$password'");
          

           if(count($result)==1){

             //return "it is work boss";


              $zone_id=$result[0]->id;
              $zone_manager_name=$result[0]->manager_name;
             

              $session_id=(session()->getId());
              session([
                  'zone_sess_id'=>$session_id,
                  'zone_sess_user_id'=>$zone_id,
                  'zone_sess_user_name'=>$zone_manager_name,
                 
        
             ]); 
            return redirect("branch/dashboard");
          }else{
            echo "Username or Password is incarrect";
         }

    }


    public function logout()
    {
        session()->forget(['zone_sess_id','zone_sess_user_id','zone_sess_user_name']);
        session()->flush();
        session()->regenerate();
        return redirect("/");
    }

}
