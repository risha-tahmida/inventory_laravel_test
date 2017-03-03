<div class="form-group {{ $errors->has('assetTypeName') ? 'has-error' : ''}}">
    {!! Form::label('assetTypeName', 'Assettypename', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('assetTypeName', null, ['class' => 'form-control']) !!}
        {!! $errors->first('assetTypeName', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('assetTypeCode') ? 'has-error' : ''}}">
    {!! Form::label('assetTypeCode', 'Assettypecode', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('assetTypeCode', null, ['class' => 'form-control']) !!}
        {!! $errors->first('assetTypeCode', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('assetTypeDescription') ? 'has-error' : ''}}">
    {!! Form::label('assetTypeDescription', 'Assettypedescription', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('assetTypeDescription', null, ['class' => 'form-control']) !!}
        {!! $errors->first('assetTypeDescription', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>