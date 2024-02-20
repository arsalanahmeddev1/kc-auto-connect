@extends('layouts.app')
@section('content')
    <x-auth.card method="post" submit="{{ route('login') }}" title="Sign In" description="Come on, go to school here and get extensive knowledge">
        <x-slot name="inputs">
            <x-input name="email" />
            <x-password-input name="password" />
            <x-button value="forget Password? " href="{{ route('forget') }}" type="a"
                classes="text-dark text-decoration-none form-link primary-btn" />
            <div class="d-flex justify-content-center">
                <x-button value="Signin " type="submit" classes=" text-decoration-none from-primary-btn rounded-pill" />
            </div>
            <p>New here? <span><x-button href="{{ route('register') }}" type="a"
                        classes="text-dark text-decoration-none" value="Create an account" /></span></p>
        </x-slot>
    </x-auth.card>
@endsection
