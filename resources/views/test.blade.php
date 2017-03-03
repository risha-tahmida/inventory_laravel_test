{{--{{$asset_categories}}--}}
@foreach($asset_categories as $cat)
    {{$cat->name}}
@endforeach

{{$asset_categories}}
{!! Form::select('size', $asset_categories) !!}