@props([
    'title',
    'description',
    'submit',
    // "method"
])
{{-- @dd($method) --}}
<div class="form-body border shadow rounded-5 px-5">
    <div class="form-info">
        <h2>{{ $title }}</h2>
        <p>{{ $description }}</p>
    </div>
    <x-form method="post" submit="{{$submit}}">
        <x-slot name="inputs">
        {{ $inputs }}
        </x-slot>
    </x-form>
</div>
