@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Assetrequisition</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/asset-requisition/create') }}" class="btn btn-primary btn-xs" title="Add New AssetRequisition"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> EmployeeName </th><th> EmployeeDesignation </th><th> EmployeeDepartment </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($assetrequisition as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->employeeName }}</td><td>{{ $item->employeeDesignation }}</td><td>{{ $item->employeeDepartment }}</td>
                                        <td>
                                            <a href="{{ url('/admin/asset-requisition/' . $item->id) }}" class="btn btn-success btn-xs" title="View AssetRequisition"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/asset-requisition/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit AssetRequisition"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/asset-requisition', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete AssetRequisition" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete AssetRequisition',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $assetrequisition->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection