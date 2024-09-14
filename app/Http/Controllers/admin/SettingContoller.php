<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class SettingContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response  
     */
    public function index()
    {
        $general_setting = GeneralSetting::latest()->first();
        return view('admin.pages.setting.general', \compact('general_setting'));
    }


    public function changeGeneralSetting(Request $request)
    {

          // return $request->all();
        
        $general_setting = GeneralSetting::latest()->first();
        $general_setting->title = $request->title;
        $general_setting->site_name = $request->site_name;
        $general_setting->facebook_link = $request->facebook_link;
        $general_setting->twitter_link = $request->twitter_link;
        $general_setting->youtube_link = $request->youtube_link;
        $general_setting->hotline = $request->hotline;
        $general_setting->email = $request->email;
        $general_setting->address = $request->address;
        $general_setting->short_description = $request->short_description;

        if($request->hasfile('logo')){
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move(public_path("uploads"), $filename);
            $general_setting->logo=$filename; 
        }
        if($request->hasfile('icon')){
            $file = $request->file('icon');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move(public_path("uploads"), $filename);
            $general_setting->icon=$filename; 
        }
        
        $general_setting->save();
        return back()->with('message', 'Setting Updated SuccessFUlly');
         //return $request->all();
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
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function show(GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralSetting $generalSetting)
    {
        //
    }
}
