<?php

namespace App\Http\Controllers\zone;

use App\Http\Controllers\Controller;
use App\Models\merchant;
use App\Models\Parcel;
use App\Models\Category;
use App\Models\Zone;
use App\Models\Branch;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch_id=session('zone_sess_user_id');
        $branch = Branch::where('id', $branch_id)->get();
        foreach($branch as $branch)  
        Paginator::useBootstrap();      
        $parcels = Parcel::where('delivery_area', $branch->brance_id)->latest()->paginate(5);  
        //dd($parcels);
        return view('branch.pages.parcel.index',compact('parcels'));
        
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
        $user_id=session('zone_sess_user_id');
        $parcel=Parcel::find($id);
        $category_id=$parcel->catagory_id;
        

        $merchant = merchant::where('id', $user_id )->get();
        //dd($merchant);
        $category = Category::where('id', $category_id )->get();
        return view('branch.pages.parcel.show',compact('parcel','merchant','category'));
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
