<?php

namespace App\Http\Controllers\zone;

use App\Http\Controllers\Controller;
use App\Models\merchant;
use App\Models\Zone;
use App\Models\Branch;
use App\Models\Payment;
use App\Models\Parcel;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $branch_id=session('zone_sess_user_id');
        $branch = Branch::where('id', $branch_id)->get();
        foreach($branch as $branch)  
        $merchants = merchant::where('zone_id', $branch->brance_id)->latest()->paginate(5);
        //dd($merchants);
        return view('branch.pages.merchant.index',compact('merchants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        Paginator::useBootstrap();
        $merchant=merchant::find($id);
        $payments=Payment::where('merchant_id', $merchant->id)->latest()->paginate(5);
        $parcels=Parcel::where('merchant_id', $merchant->id)->latest()->paginate(5);

        //dd($parcels);
        return view('branch.pages.merchant.show',compact('merchant','payments','parcels'));
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
