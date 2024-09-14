<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Weight;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class WightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $weights = Weight::latest()->paginate(5);
        return view('admin.pages.weightmanage.index',compact('weights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.weightmanage.create');
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

            'weight' => 'required',
            'amount' => 'required',
            

        ]);

        $weight=new Weight();
        $weight->weight=$request->weight;
        $weight->amount=$request->amount;
        $weight->save();
        return redirect('wight')
        ->with('success','Wight create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Weight  $wight
     * @return \Illuminate\Http\Response
     */
    public function show(Weight $wight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Weight  $wight
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $weight=Weight::find($id);
        return view('admin.pages.weightmanage.edit',compact('weight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Weight  $wight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'weight' => 'required',
            'amount' => 'required',

        ]);

        $weight=Weight::find($id);
        $weight->weight=$request->weight;
        $weight->amount=$request->amount;
        
        $weight->save();
        return redirect('wight')
        ->with('success','Weight Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weight  $wight
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $weight=Weight::find($id);
        $weight->delete();
        return redirect('wight')
        ->with('success','Weight delete successfully.');
    }
}
