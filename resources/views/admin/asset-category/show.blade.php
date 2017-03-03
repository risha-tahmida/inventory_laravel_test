@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">AssetCategory {{ $assetcategory->name }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/asset-category/' . $assetcategory->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit AssetCategory"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/assetcategory', $assetcategory->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete AssetCategory',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $assetcategory->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $assetcategory->name }} </td></tr><tr><th> Code </th><td> {{ $assetcategory->code }} </td></tr><tr><th> Description </th><td> {{ $assetcategory->description }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection