<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Zone;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $branchs = Branch::latest()->paginate(5);
        // foreach($branchs as $branch)
        // $zones = Zone::where('id', $branch->brance_id)->latest()->paginate(5);
        //dd($branchs);
        return view('admin.pages.branch.index',compact('branchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.branch.create');
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
            'manager_name' => ['required'],
            'brance_id' => ['required'],
            'email' => ['required','unique:branches'],
            'phone' => ['required'],
            'password' => ['required'],

        ]);

        $branch=new Branch();
        $branch->manager_name=$request->manager_name;
        $branch->brance_id=$request->brance_id;
        $branch->email=$request->email;
        $branch->phone=$request->phone;
        $branch->password=$request->password;
        $branch->save();
        return redirect('branch')
        ->with('success','user create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        return "brance is working";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch=Branch::find($id);
        return view('admin.pages.branch.edit',compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'manager_name' => 'required',
            'brance_id' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',

        ]);

        $branch=Branch::find($id);
        $branch->manager_name=$request->manager_name;
        $branch->brance_id=$request->brance_id;
        $branch->email=$request->email;
        $branch->phone=$request->phone;
        $branch->password=$request->password;
        $branch->save();
        return redirect('branch')
        ->with('success','Branch Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch=Branch::find($id);
        $branch->delete();
        return redirect('branch')
        ->with('success','Branch delete successfully.');
    }
}
