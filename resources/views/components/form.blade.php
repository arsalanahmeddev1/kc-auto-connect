@props([
    'submit',
    "method"
])
{{-- @dd($method) --}}
<form method="{{ $method }}" action="{{ $submit }}" class="form">
    @csrf
    {{ $inputs }}
</form>
