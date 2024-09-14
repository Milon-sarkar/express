<?php

namespace App\Http\Controllers\zone;

use App\Http\Controllers\Controller;
use App\Models\merchant;
use App\Models\Zone;
use App\Models\Branch;
use App\Models\User;
use App\Models\asantmerchant;
use Illuminate\Pagination\Paginator;
use DB;
use Illuminate\Http\Request;

class DeliveryboyController extends Controller
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
        $deliveryboys = User::where('zone_id', $branch->brance_id)->latest()->paginate(5);
        //$totaldeliveryboy = User::where('zone_id', $branch->brance_id)->count();
        //dd($deliveryboy);
        return view('branch.pages.deliveryboy.index',compact('deliveryboys'));
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

        
       $pickupboy_id=$request->pickupboy_id;
         foreach($request->merchant_id as $key=>$name){

             $insert = [
                'merchant_id' => $request->merchant_id[$key],   
                'pickupboy_id' => $pickupboy_id,             
             ];
             //dd($insert);
            
            DB::table('asantmerchants')->insert($insert);
        }
       
       return back();  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch_id=session('zone_sess_user_id');
        $branch = Branch::where('id', $branch_id)->get();
        foreach($branch as $branch)
        $merchants = merchant::where('zone_id', $branch->brance_id)->latest()->paginate(5);

        $asinmerchants = asantmerchant::where('pickupboy_id', $id)->latest()->get();
        
        // foreach($asantmerchants as $asantmerchant)
        // dd($asantmerchant);
        // $asinmerchants = merchant::where('id', $asantmerchant->merchant_id)->get();
        //dd($asinmerchants);
        $user=User::find($id);
        return view('branch.pages.deliveryboy.show',compact('user','merchants','asinmerchants'));
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
        // $r->validate([

        //     'username' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        // $admin=asantmerchant::find($id);
        // $admin->update($r->all());
        // return redirect('users')
        // ->with('success','user update successfully.');
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
