@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Assetinfo</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/asset-info/create') }}" class="btn btn-primary btn-xs" title="Add New AssetInfo"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> AssetName </th><th> AssetManufacturer </th><th> Warrenty </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($assetinfo as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->assetName }}</td><td>{{ $item->assetManufacturer }}</td><td>{{ $item->warranty }}</td>
                                        <td>
                                            <a href="{{ url('/admin/asset-info/' . $item->id) }}" class="btn btn-success btn-xs" title="View AssetInfo"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/asset-info/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit AssetInfo"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/asset-info', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete AssetInfo" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete AssetInfo',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $assetinfo->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection