<?php

namespace App\Http\Controllers\zone;

use App\Http\Controllers\Controller;
use App\Models\merchant;
use App\Models\Zone;
use App\Models\Branch;
use App\Models\Parcel;
use App\Models\Payment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $branch_id=session('zone_sess_user_id');
        $branch = Branch::where('id', $branch_id)->get();
        foreach($branch as $branch)  
        $totalmerchants = merchant::where('zone_id', $branch->brance_id)->count();

        $newparcel  = Parcel::where('delivery_area', $branch->brance_id)->where('status', 1)->count(); 
        $totalparcel  = Parcel::where('delivery_area', $branch->brance_id)->count(); 
        $successparcel  = Parcel::where('delivery_area', $branch->brance_id)->where('status', 6)->count(); 
        $cancelparcel  = Parcel::where('delivery_area', $branch->brance_id)->where('status', 7)->count(); 
        $totalamount = Parcel::where('delivery_area', $branch->brance_id)->where('status', 6 )->sum('parcels.payamount');

        


        return view('branch/dashboard',compact('totalmerchants','newparcel','totalparcel','totalamount','successparcel','cancelparcel'));
    }

}
