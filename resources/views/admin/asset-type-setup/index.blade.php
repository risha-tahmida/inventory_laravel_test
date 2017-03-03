@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Assettypesetup</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/asset-type-setup/create') }}" class="btn btn-primary btn-xs" title="Add New AssetTypeSetup"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> AssetTypeName </th><th> AssetTypeCode </th><th> AssetTypeDescription </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($assettypesetup as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->assetTypeName }}</td><td>{{ $item->assetTypeCode }}</td><td>{{ $item->assetTypeDescription }}</td>
                                        <td>
                                            <a href="{{ url('/admin/asset-type-setup/' . $item->id) }}" class="btn btn-success btn-xs" title="View AssetTypeSetup"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/asset-type-setup/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit AssetTypeSetup"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/asset-type-setup', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete AssetTypeSetup" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete AssetTypeSetup',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $assettypesetup->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection