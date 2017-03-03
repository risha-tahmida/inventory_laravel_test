<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

use App\AssetInfo;
use App\AssetCategory;
use App\AssetTypeSetup;
use Illuminate\Http\Request;
use Session;
use Image;

class AssetInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $assetinfo = AssetInfo::paginate(25);
        return view('admin.asset-info.index', compact('assetinfo'));
        /*return view('test')->with(array('asset_categories'=>$asset_categories));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // $asset_categories=AssetCategory::all();
        $asset_categories = AssetCategory::pluck('name', 'id');
        $asset_types = AssetTypeSetup::pluck('assetTypeName', 'id');
        return view('admin.asset-info.create')->with(array('asset_categories' => $asset_categories))->with(array('asset_types' => $asset_types));
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


          $asset_image=$request->file('asset_image');
          $file_name= time().'.'.$asset_image->getClientOriginalExtension();
          Image::make($asset_image)->save(public_path($file_name)); // image saved in this line s


        $request->offsetSet('assetImage', $file_name);
        AssetInfo::create($request->all());
        Session::flash('flash_message', 'AssetInfo added!');
        return redirect('admin/asset-info');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $assetinfo = AssetInfo::findOrFail($id);

        return view('admin.asset-info.show', compact('assetinfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $assetinfo = AssetInfo::findOrFail($id);

        return view('admin.asset-info.edit', compact('assetinfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {

        $requestData = $request->all();

        $assetinfo = AssetInfo::findOrFail($id);
        $assetinfo->update($requestData);

//        Session::flash('flash_message', 'AssetInfo updated!');

//        return redirect('admin/asset-info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        AssetInfo::destroy($id);

        Session::flash('flash_message', 'AssetInfo deleted!');

        return redirect('admin/asset-info');
    }
}
