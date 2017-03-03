<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AssetCategory;
use Illuminate\Http\Request;
use Session;

class AssetCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $assetcategory = AssetCategory::paginate(25);

        return view('admin.asset-category.index', compact('assetcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.asset-category.create');
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
        
        AssetCategory::create($requestData);

        Session::flash('flash_message', 'AssetCategory added!');

        return redirect('admin/asset-category');
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
        $assetcategory = AssetCategory::findOrFail($id);

        return view('admin.asset-category.show', compact('assetcategory'));
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
        $assetcategory = AssetCategory::findOrFail($id);

        return view('admin.asset-category.edit', compact('assetcategory'));
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
        
        $assetcategory = AssetCategory::findOrFail($id);
        $assetcategory->update($requestData);

        Session::flash('flash_message', 'AssetCategory updated!');

        return redirect('admin/asset-category');
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
        AssetCategory::destroy($id);

        Session::flash('flash_message', 'AssetCategory deleted!');

        return redirect('admin/asset-category');
    }
}
