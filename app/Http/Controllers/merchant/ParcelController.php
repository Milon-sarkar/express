<?php

namespace App\Http\Controllers\merchant;

use App\Http\Controllers\Controller;
use App\Models\merchant;
use App\Models\Parcel;
use App\Models\Category;
use App\Models\Zone;
use App\Models\Weight;
use Picqer;
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
        

        $user_id=session('mer_sess_user_id');
        Paginator::useBootstrap();
        $parcels = Parcel::where('merchant_id', $user_id)->latest()->paginate(5);
        $count = $parcels;
        //dd($count);
        return view('merchant.pages.parcel.index',compact('parcels'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id=session('mer_sess_user_id');
        $merchant = merchant::where('id', $user_id )->get();
        $categorys = Category::all();
        $zones = Zone::all();
        $weights = Weight::all();

         //dd($merchant);
        return view('merchant.pages.parcel.create',compact('merchant','categorys','zones','weights'));
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

            'cus_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'invoice_no' => 'required',
            'product_weight' => 'required',
            'catagory_id' => 'required',
            'delivery_area' => 'required',
            'Product_type' => 'required',
            'cash_amount' => 'required',
            'payamount' => 'required',
            'sell_amount' => 'required',
            
        ]);

        

        
        $last = Parcel::latest('id')->first();
        $lastid = 'stkit'. ($last->id + '1') . 'inv';
        $generator = new Picqer\Barcode\BarcodeGeneratorJPG();;
        $barcode = $generator->getBarcode('$lastid', $generator::TYPE_CODE_128);
        // return $barcode;
        $user_id=session('mer_sess_user_id');

        $parcel=new Parcel();
        $parcel->merchant_id="$user_id";
        $parcel->cus_name=$request->cus_name;
        $parcel->phone=$request->phone;
        $parcel->address=$request->address;
        $parcel->invoice_no=$request->invoice_no;
        $parcel->barcode=$barcode;
        $parcel->barcode_number=$lastid;
        $parcel->product_weight=$request->product_weight;
        $parcel->catagory_id=$request->catagory_id;
        $parcel->delivery_area=$request->delivery_area;
        $parcel->Product_type=$request->Product_type;
        $parcel->cash_amount=$request->cash_amount;
        $parcel->payamount=$request->payamount;
        $parcel->sell_amount=$request->sell_amount;       
        $parcel->save();
        return redirect ('merchant/parcel')
        ->with('success','parcel create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id=session('mer_sess_user_id');
        $parcel=Parcel::find($id);
        $category_id=$parcel->catagory_id;
        

        $merchant = merchant::where('id', $user_id )->get();
        //dd($merchant);
        $category = Category::where('id', $category_id )->get();
        
         return view('merchant.pages.parcel.show',compact('parcel','merchant','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "route is ready";
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
        //return "route is ready to work";
        $parcel=Parcel::find($id);
        $parcel->delete();
        return redirect('merchant/parcel')
        ->with('success','user delete successfully.');
    }
}
