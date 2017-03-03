@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">AssetInfo {{ $assetinfo->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/asset-info/' . $assetinfo->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit AssetInfo"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/assetinfo', $assetinfo->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete AssetInfo',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $assetinfo->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Asset Name </th>
                                        <td> {{ $assetinfo->assetName }} </td>
                                    </tr>
                                    <tr>
                                        <th> Asset Manufacturer </th>
                                        <td> {{ $assetinfo->assetManufacturer }} </td>
                                    </tr>
                                    <tr>
                                        <th> Asset Warranty </th>
                                        <td> {{ $assetinfo->warranty }} year(s)</td>
                                    </tr>
                                    <tr>
                                        <th> Asset Category </th>
                                        <td> {{ $assetinfo->asset_categories->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Asset Type </th>
                                        <td> {{ $assetinfo->asset_type_setups->assetTypeName }} </td>
                                    </tr>
                                    <tr>
                                        <th> Asset Type </th>
                                        <td><img src="/{{$assetinfo->assetImage}}"/> </td>                                      
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
