<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\merchant;
use App\Models\Zone;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class AdminmerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $merchants = merchant::latest()->paginate(5);
        return view('admin.pages.merchant.index',compact('merchants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = Zone::all();
        return view('admin.pages.merchant.create',compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move(public_path("uploads"), $filename);
            $merchant->image=$filename ?? ''; 
        }else{
            return $request;
            $merchant->image = '';
        }

        $merchant->save();
        return redirect('adminmerchant')
        ->with('success','Merchant create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function show(merchant $merchant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merchant=merchant::find($id);
        return view('admin.pages.merchant.edit',compact('merchant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company_name' => 'required',
            'address' => 'required',
            'password' => 'required',
        ]);

        $merchant=merchant::find($id);
        $merchant->name=$request->name;
        $merchant->email=$request->email;
        $merchant->phone=$request->phone;
        $merchant->company_name=$request->company_name;
        $merchant->address=$request->address;
        $merchant->password=$request->password;

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move(public_path("uploads"), $filename);
            $merchant->image=$filename; 
        }else{
            return $request;
            $merchant->image = '';
        }

        $merchant->save();
        return redirect('adminmerchant')
        ->with('success','Merchand update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merchant=merchant::find($id);
        $merchant->delete();
        return redirect('adminmerchant')
        ->with('success','Merchant delete successfully.');
    }
}
