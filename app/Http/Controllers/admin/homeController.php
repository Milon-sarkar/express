<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\merchant;
use App\Models\Parcel;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){

        $merchant = merchant::count();
        $parcel = Parcel::count();
        $newparcel = Parcel::where('status',1)->count();
        $pandingparcel = Parcel::where('status',2)->count();
        $cancelparcel = Parcel::where('status',3)->count();

        //dd($newpaecel);

        return view('admin.pages.dashboard',compact('merchant','parcel','newparcel','pandingparcel','cancelparcel'));
    }
}
