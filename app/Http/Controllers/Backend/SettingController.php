<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('backend.setting.index')->with(compact('setting'));
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

        $validated = $request->validate([
            'title' => 'required',
            'owner_name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'youtube' => 'required',
            'instagram' => 'required',
        ]);

        $setting = Setting::where('owner_id', $request->user_id)->first();
        if (is_null($setting)) {
            $setting = new Setting();
            $setting->title = $request->title;
            $setting->owner_name = $request->owner_name;
            $setting->owner_id = $request->user_id;
            $setting->email = $request->email;
            $setting->contact_number = $request->number;
            $setting->address = $request->address;
            $setting->facebook = $request->facebook;
            $setting->twitter = $request->twitter;
            $setting->youtube = $request->youtube;
            $setting->instagram = $request->instagram;
            $setting->is_open =true;
            $setting->save();
        } else {
            $setting->title = $request->title;
            $setting->owner_name = $request->owner_name;
            $setting->email = $request->email;
            $setting->contact_number = $request->number;
            $setting->address = $request->address;
            $setting->facebook = $request->facebook;
            $setting->twitter = $request->twitter;
            $setting->youtube = $request->youtube;
            $setting->instagram = $request->instagram;
            $setting->is_open =true;
            $setting->save();
        }

        return redirect()->route('setting.index')->with('success','Setting has been updated successfully');
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
        //
    }
    public function bannerIndex()
    {
        $banners = BannerModel::all();
        return view('backend.setting.banner_index',compact('banners'));
    }
    public function bannerCreate ()
    {
        $data = [
            'is_edit' => false,
            'title' => 'Add Banner',
            'route' =>  route('setting.storebanner'),
            'button' => 'Save',
        ];
        return view('backend.setting.banner_form')->with(compact('data'));
    }
    public function bannerStore(Request $request)
    {
        $validated = $request->validate([
            'banner_img' => 'required',

        ]);
        $addbanner = new BannerModel();
        $addbanner->title = $request->title;
        $addbanner->description = $request->description;
        $addbanner->image = UploadImage($request->file('banner_img'),'banner');
        $addbanner->active = ($request->active == 'on') ? true : false;
        $addbanner->title_active = ($request->title_active == 'on') ? true : false;
        $addbanner->save();
        return redirect()->route('setting.banner');
    }
}
