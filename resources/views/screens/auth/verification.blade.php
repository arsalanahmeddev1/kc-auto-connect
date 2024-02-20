@extends('layouts.app')
@section('content')
<x-auth.card title="Forgot Password" description="Kindly enter your verification code to change the password.
.">
    <x-slot name="inputs">
        <x-input name="email" placeholder="Enter Verification Code" />
        <x-button value="Resend Code " href="#" type="a" classes="text-secondary text-decoration-none form-link primary-btn" />
        <p><span><a href="" class="text-decoration-none text-secondary">Back To Login</a></span></p>
        <x-button value="Continue" type="button" classes="btn-primary form-btn rounded-pill" />
    </x-slot>
</x-auth.card>
@endsection
