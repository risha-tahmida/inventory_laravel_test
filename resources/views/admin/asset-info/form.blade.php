<div class="form-group {{ $errors->has('assetName') ? 'has-error' : ''}}">
    {!! Form::label('assetName', 'Assetname', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('assetName', null, ['class' => 'form-control']) !!}
        {!! $errors->first('assetName', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('assetManufacturer') ? 'has-error' : ''}}">
    {!! Form::label('assetManufacturer', 'Assetmanufacturer', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('assetManufacturer', null, ['class' => 'form-control']) !!}
        {!! $errors->first('assetManufacturer', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('warranty') ? 'has-error' : ''}}">
    {!! Form::label('warranty', 'warranty', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('warranty', null, ['class' => 'form-control']) !!}
        {!! $errors->first('warranty', '<p class="help-block">:message</p>') !!}
    </div>
</div>

{{--TODO:trying to populate drop down here --}}
<div class="form-group ">
    {!! Form::label('asset_category', 'Asset Category', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('asset_categories_id', $asset_categories) !!}
    </div>
</div>

{{--populating drop down ends here --}}

{{--TODO:trying to populate drop down here --}}
<div class="form-group ">
    {!! Form::label('asset_type', 'Asset Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('asset_type_setups_id', $asset_types) !!}
    </div>
</div>

{{--populating drop down ends here --}}


<div class="form-group {{ $errors->has('assetPurchaseDate') ? 'has-error' : ''}}">
    {!! Form::label('assetPurchaseDate', 'Assetpurchasedate', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('assetPurchaseDate', null, ['class' => 'form-control']) !!}
        {!! $errors->first('assetPurchaseDate', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div >
    {!! Form::label('assetPurchaseDate', 'Assetpurchasedate', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('asset_image', null, ['class' => 'form-control']) !!}        
    </div>
</div>



<div class="form-group {{ $errors->has('assetQuantity') ? 'has-error' : ''}}">
    {!! Form::label('assetQuantity', 'Assetquantity', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('assetQuantity', null, ['class' => 'form-control']) !!}
        {!! $errors->first('assetQuantity', '<p class="help-block">:message</p>') !!}
    </div>
</div>
{{--</div><div class="form-group {{ $errors->has('assetType') ? 'has-error' : ''}}">
    {!! Form::label('assetType', 'Assettype', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('assetType', null, ['class' => 'form-control']) !!}
        {!! $errors->first('assetType', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('categoryType') ? 'has-error' : ''}}">
    {!! Form::label('categoryType', 'Categorytype', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('categoryType', null, ['class' => 'form-control']) !!}
        {!! $errors->first('categoryType', '<p class="help-block">:message</p>') !!}
    </div>
</div>--}}

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
