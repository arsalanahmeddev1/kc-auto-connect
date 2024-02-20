@props([
    'classes' => $classes ?? '' ,
    'value',
    'id' => $id ?? '' ,
    'type' => 'button',
    'href'=> $href ?? '',
    'databstarget' => $databstarget ?? '',
    'databstoggle' => $databstoggle ?? '',

])

@if ($type == "a")
    <a href="{{ $href }}" class="{{ $classes }}" >{{ $value }}</a>
@elseif ($type == "button" || $type == "submit" )
    <button type="{{ $type }}" class="{{ $classes }}"  data-bs-toggle="{{$databstoggle}}" data-bs-target="{{$databstarget}}"  id='{{$id}}' >{{ $value }}</button>
@endif
