<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin/asset-type-setup', 'Admin\\AssetTypeSetupController');
Route::resource('admin/asset-category', 'Admin\\AssetCategoryController');
Route::resource('admin/asset-info', 'Admin\\AssetInfoController');
Route::resource('admin/asset-requisition', 'Admin\\AssetRequisitionController');
Route::resource('test', 'testController');
