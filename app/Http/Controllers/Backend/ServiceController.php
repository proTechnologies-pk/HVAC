<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with('parent')->get();
        return view('backend.services.index')->with(compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cayegories = Category::where('is_active', 1)->get();

        $data = [
            'is_edit' => false,
            'title' => 'Add Service',
            'route' =>  route('service.store'),
            'button' => 'Save',

            'cayegories' => $cayegories,

        ];
        return view('backend.services.form')->with(compact('data'));
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
            'slug' => 'required',
        ]);


        $service = new Service();
        $service->name = $request->title;
        $service->description = $request->description;
        $service->parent_id = $request->parent_id;
        $service->slug = $request->slug;
        $service->web_display = ($request->active == 'on') ? true : false;
        $service->is_active = ($request->web_display == 'on') ? true : false;
        $service->save();
        return redirect()->route('service.index');
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
        $service = Service::find($id);
        $services = Service::where('is_active', 1)->get();
        $data = [
            'is_edit' => true,
            'title' => 'Update Service',
            'route' =>  route('service.update',$service->id),
            'button' => 'Update',
            'services' => $services,
            'edit_service' => $service,
        ];
        return view('backend.services.form')->with(compact('data'));
        // return view('backend.services.form')->with(compact('service'));
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

     $validated = $request->validate([
        'title' => 'required',
        'slug' => 'required',
    ]);

    $service = Service::find($id);
    $service->name = $request->title;
    $service->description = $request->description;
    $service->parent_id = $request->parent_id;
    $service->slug = $request->slug;
    $service->web_display = ($request->active == 'on') ? true : false;
    $service->is_active = ($request->web_display == 'on') ? true : false;
    $service->save();
    return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service.index')->with('success','Category has been Deleted Successfully!');
    }
}
