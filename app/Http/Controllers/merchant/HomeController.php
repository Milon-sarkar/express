<?php

namespace App\Http\Controllers\merchant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Parcel;
use App\Models\Payment;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){

        
    
        

        $user_id=session('mer_sess_user_id');

        $totalamount = DB::table('parcels')->where('merchant_id', $user_id)->where('status', 6 )->sum('parcels.payamount');
        $totalcashamount = DB::table('parcels')->where('merchant_id', $user_id)->where('status', 6 )->sum('parcels.cash_amount');
        $totalcharge = $totalcashamount - $totalamount;
        $payamount = DB::table('payments')->where('merchant_id', $user_id)->sum('payments.amount');
        $dueamount = $totalamount - $payamount;

        //dd($totalcharge);
        //dd($payamount);

        $parcelCount  = Parcel::where('merchant_id', $user_id)->count();      
        $successparcel  = Parcel::where('merchant_id', $user_id)->where('status', 6 )->count();      
        $cancelparcel  = Parcel::where('merchant_id', $user_id)->where('status', 7 )->count();      
        $newparcel  = Parcel::where('merchant_id', $user_id)->where('status', 1)->count(); 
        $pandingparcel  = Parcel::where('merchant_id', $user_id)->where('status', 2)->count(); 

        //dd($newparcel);
        return view('merchant/index',compact('parcelCount','newparcel','pandingparcel','totalamount','successparcel','cancelparcel','dueamount','payamount','totalcharge'));
    }
}
