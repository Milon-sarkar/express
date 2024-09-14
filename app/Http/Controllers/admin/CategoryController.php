<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $categorys = Category::latest()->paginate(5);
        return view('admin.pages.category.index',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.create');
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

        ]);

        $category=new Category();
        $category->name=$request->name;
        // if($request->hasfile('picture')){
        //     $file = $request->file('picture');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extention;
        //     $file->move(public_path("uploads"), $filename);
        //     $category->image=$filename; 
        // }else{
        //     return $request;
        //     $category->image = '';
        // }
        $category->save();
        return redirect('category')
        ->with('success','Category create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.pages.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',

        ]);

        $category=Category::find($id);
        $category->name=$request->name;
        if($request->hasfile('picture')){
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move(public_path("uploads"), $filename);
            $category->image=$filename; 
        }else{
            return $request;
            $category->image = '';
        }
        $category->save();
        return redirect('category')
        ->with('success','Category Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect('category')
        ->with('success','Category delete successfully.');
    }
}
