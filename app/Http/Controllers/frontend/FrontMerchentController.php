<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\merchant;
use App\Models\Zone;
use Illuminate\Http\Request;

class FrontMerchentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         return view('frontend.pages.merchantlogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = Zone::all();

        return view('frontend.pages.merchantregister',compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       // return "roure id work";
        $request->validate([

            'name' => ['required'],
            'email' => ['required','unique:merchants'],
            'phone' => ['required'],
            'company_name' => ['required'],
            'zone_id' => ['required'],
            'address' => ['required'],
            'password' => ['required'],
        ]);

        $merchant=new merchant();
        $merchant->name=$request->name;
        $merchant->email=$request->email;
        $merchant->phone=$request->phone;
        $merchant->company_name=$request->company_name;
        $merchant->zone_id=$request->zone_id;
        $merchant->address=$request->address;
        $merchant->password=$request->password;

        $merchant->save();
        return redirect('merchant-register')
        ->with('success','Merchant Registration successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
