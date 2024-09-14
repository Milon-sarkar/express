<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Zone;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $zones = Zone::latest()->paginate(5);
        
        return view('admin.pages.zone.index',compact('zones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.zone.create');
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

            'name' => 'required',
            'cod' => 'required',

        ]);

        $zone=new Zone();
        $zone->name=$request->name;
        $zone->cod=$request->cod;
        $zone->save();
        return redirect('zones')
        ->with('success','Zone create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function show(Zone $zone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zone=Zone::find($id);
        return view('admin.pages.zone.edit',compact('zone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            'cod' => 'required',

        ]);

        $zone=Zone::find($id);
        $zone->name=$request->name;
        $zone->cod=$request->cod;
        
        $zone->save();
        return redirect('zones')
        ->with('success','Zone Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zone=Zone::find($id);
        $zone->delete();
        return redirect('zones')
        ->with('success','Zone delete successfully.');
    }
}
