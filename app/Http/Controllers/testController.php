<?php

namespace App\Http\Controllers;

use App\AssetCategory;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        $asset_categories=AssetCategory::all();
        return view('test')->with(array('asset_categories'=>$asset_categories));
    }
}
