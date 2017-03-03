<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AssetTypeSetup;
use Illuminate\Http\Request;
use Session;

class AssetTypeSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $assettypesetup = AssetTypeSetup::paginate(25);

        return view('admin.asset-type-setup.index', compact('assettypesetup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.asset-type-setup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        AssetTypeSetup::create($requestData);

        Session::flash('flash_message', 'AssetTypeSetup added!');

        return redirect('admin/asset-type-setup');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $assettypesetup = AssetTypeSetup::findOrFail($id);

        return view('admin.asset-type-setup.show', compact('assettypesetup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $assettypesetup = AssetTypeSetup::findOrFail($id);

        return view('admin.asset-type-setup.edit', compact('assettypesetup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $assettypesetup = AssetTypeSetup::findOrFail($id);
        $assettypesetup->update($requestData);

        Session::flash('flash_message', 'AssetTypeSetup updated!');

        return redirect('admin/asset-type-setup');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        AssetTypeSetup::destroy($id);

        Session::flash('flash_message', 'AssetTypeSetup deleted!');

        return redirect('admin/asset-type-setup');
    }
}
