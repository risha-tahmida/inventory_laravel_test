<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AssetRequisition;
use Illuminate\Http\Request;
use Session;

class AssetRequisitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $assetrequisition = AssetRequisition::paginate(25);

        return view('admin.asset-requisition.index', compact('assetrequisition'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.asset-requisition.create');
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
        
        AssetRequisition::create($requestData);

        Session::flash('flash_message', 'AssetRequisition added!');

        return redirect('admin/asset-requisition');
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
        $assetrequisition = AssetRequisition::findOrFail($id);

        return view('admin.asset-requisition.show', compact('assetrequisition'));
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
        $assetrequisition = AssetRequisition::findOrFail($id);

        return view('admin.asset-requisition.edit', compact('assetrequisition'));
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
        
        $assetrequisition = AssetRequisition::findOrFail($id);
        $assetrequisition->update($requestData);

        Session::flash('flash_message', 'AssetRequisition updated!');

        return redirect('admin/asset-requisition');
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
        AssetRequisition::destroy($id);

        Session::flash('flash_message', 'AssetRequisition deleted!');

        return redirect('admin/asset-requisition');
    }
}
