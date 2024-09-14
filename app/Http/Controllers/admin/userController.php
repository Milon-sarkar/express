<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Pagination\Paginator;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $admins = admin::latest()->paginate(5);
        return view('admin.pages.user.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.user.create');
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

            'username' => ['required'],
            'email' => ['required','unique:admins'],
            'password' => ['required'],
            // 'role_id' => 'required',
        ]);

        $admin=new admin();
        $admin->username=$request->username;
        $admin->email=$request->email;
        $admin->password=$request->password;
        $admin->save();
        return redirect('users')
        ->with('success','user create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $admin=admin::find($id);
        return view('admin.pages.user.show',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin=admin::find($id);
        return view('admin.pages.user.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        
        $r->validate([

            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $admin=admin::find($id);
        $admin->update($r->all());
        return redirect('users')
        ->with('success','user update successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $admin=admin::find($id);
        $admin->delete();
        return redirect('users')
        ->with('success','user delete successfully.');
    }
}
