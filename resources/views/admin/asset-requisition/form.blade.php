<div class="form-group {{ $errors->has('employeeName') ? 'has-error' : ''}}">
    {!! Form::label('employeeName', 'Employeename', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('employeeName', null, ['class' => 'form-control']) !!}
        {!! $errors->first('employeeName', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('employeeDesignation') ? 'has-error' : ''}}">
    {!! Form::label('employeeDesignation', 'Employeedesignation', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('employeeDesignation', null, ['class' => 'form-control']) !!}
        {!! $errors->first('employeeDesignation', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('employeeDepartment') ? 'has-error' : ''}}">
    {!! Form::label('employeeDepartment', 'Employeedepartment', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('employeeDepartment', null, ['class' => 'form-control']) !!}
        {!! $errors->first('employeeDepartment', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('requisitionDate') ? 'has-error' : ''}}">
    {!! Form::label('requisitionDate', 'Requisitiondate', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('requisitionDate', null, ['class' => 'form-control']) !!}
        {!! $errors->first('requisitionDate', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    {!! Form::label('quantity', 'Quantity', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
        {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>