<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Pagination\Paginator;

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
        $users = User::latest()->paginate(5);
        return view('admin.pages.deliveryboy.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = Zone::all();
        return view('admin.pages.deliveryboy.create',compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return "okkk";

        $validated = $request->validate([

            'name' => 'required',
            'email' => ['required','unique:users'],
            'phone' => ['required','unique:users','min:11','max:11'],
            'password' => 'required',
            'f_name' => 'required',
            'm_name' => 'required',
            'address' => 'required',
            'zone_id' => 'required',
            
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=Hash::make($request->password);
        $user->f_name=$request->f_name;
        $user->m_name=$request->m_name;
        $user->address=$request->address;
        $user->raf_name=$request->raf_name;
        $user->raf_phone=$request->raf_phone;
        $user->raf_address=$request->raf_address;
        $user->zone_id=$request->zone_id;
        $user->emg_name=$request->emg_name;
        $user->emg_relation=$request->emg_relation;
        $user->emg_phone=$request->emg_phone;        
        $user->save();
        return redirect('deliveryboy')
        ->with('success','Delivery Boy create successfully.');
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
        $user=User::find($id);
        return view('admin.pages.deliveryboy.edit',compact('user'));
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

       // return $request->all();
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'f_name' => 'required',
            'm_name' => 'required',
            'address' => 'required',
        ]);

        $user=User::find($id);

        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=Hash::make($request->password);
        $user->f_name=$request->f_name;
        $user->m_name=$request->m_name;
        $user->address=$request->address;
        $user->raf_name=$request->raf_name;
        $user->raf_phone=$request->raf_phone;
        $user->raf_address=$request->raf_address;
        $user->emg_name=$request->emg_name;
        $user->emg_relation=$request->emg_relation;
        $user->emg_phone=$request->emg_phone;  
        $user->save();
        return redirect('deliveryboy')
        ->with('success','DeliveryBoy update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('deliveryboy')
        ->with('success','Delivery Boy delete successfully.');
    }
}
