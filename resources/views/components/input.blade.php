@props([
    'name',
    'type' => 'text',
    'placeholder' => null,
    'required' => false,
    'label' => $label ?? null,
    "value" => '',
    // 'textarea' => $textarea ?? null,
])

@if($label != null)
<label for="{{ $label }}" class="label-feld">{{ ucwords(str_replace('_', ' ', $label)) }}</label>
@endif
{{-- @if($textarea != null)
<label  class="input-field">{{ ucwords(str_replace('_', ' ', $textarea)) }}</label>
@endif --}}
@error($name)
<span class="text-danger">{{ $message }}</span>
@enderror
@if ($type == 'textarea')
<textarea name="{{ $name }}" id="{{ $label }}" placeholder="{{ $placeholder ?: ucwords(str_replace('_', ' ', $name)) }}" class="form-control form-input @error($name) is-invalid @enderror" {{ $required ? 'required' : '' }}>{{ $value }}</textarea>
@else
<input value="{{ $value }}" name="{{ $name }}" type="{{ $type }}" id="{{ $label }}"  placeholder="{{ $placeholder ?: ucwords(str_replace('_', ' ', $name)) }}" class="form-control form-input @error($name) is-invalid @enderror" {{ $required ? 'required' : '' }}>
@endif
