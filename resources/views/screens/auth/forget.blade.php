@extends('layouts.app')
@section('content')
<x-auth.card title="Forgot Password" description="Kindly enter your email address to change the password.">
    <x-slot name="inputs">
        <x-input name="email" />
        <p><span><a href="{{route('login') }}" class="text-decoration-none text-secondary">Back To Login</a></span></p>
        <x-button value="Continue" type="button" classes="btn-primary form-btn rounded-pill" />
    </x-slot>
</x-auth.card>
@endsection
