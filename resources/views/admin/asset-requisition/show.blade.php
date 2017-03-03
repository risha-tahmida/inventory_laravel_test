@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">AssetRequisition {{ $assetrequisition->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/asset-requisition/' . $assetrequisition->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit AssetRequisition"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/assetrequisition', $assetrequisition->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete AssetRequisition',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $assetrequisition->id }}</td>
                                    </tr>
                                    <tr><th> EmployeeName </th><td> {{ $assetrequisition->employeeName }} </td></tr><tr><th> EmployeeDesignation </th><td> {{ $assetrequisition->employeeDesignation }} </td></tr><tr><th> EmployeeDepartment </th><td> {{ $assetrequisition->employeeDepartment }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection