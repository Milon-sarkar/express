<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Parcel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $parcels = Parcel::with('category')->latest()->paginate(5);
        return view('admin.pages.parcel.index',compact('parcels'));
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
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
         $parcel= Parcel::find($id);
         //dd($parcel);
         return view('admin.pages.parcel.show',compact('parcel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function edit(Parcel $parcel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parcel $parcel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcel $parcel)
    {
        //
    }


    public function statusChange(Request $request, $id)
    {

        //return $id;



        try {
            $parcel = Parcel::findOrFail($id);
            $parcel->status = $request->status;
            $parcel->save();
            return response()->json([
                'success' => true,
                'message' => "status change successfully",
            ]);
        } catch (Exception $e) {
            return back()->withErrors(['msg' => $e->getMessage()]);

        }

         return $request->all();

    }
}
