@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">AssetTypeSetup {{ $assettypesetup->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/asset-type-setup/' . $assettypesetup->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit AssetTypeSetup"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/assettypesetup', $assettypesetup->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete AssetTypeSetup',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $assettypesetup->id }}</td>
                                    </tr>
                                    <tr><th> AssetTypeName </th><td> {{ $assettypesetup->assetTypeName }} </td></tr><tr><th> AssetTypeCode </th><td> {{ $assettypesetup->assetTypeCode }} </td></tr><tr><th> AssetTypeDescription </th><td> {{ $assettypesetup->assetTypeDescription }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection