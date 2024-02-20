@extends('layouts.app')
@section('content')
    <x-auth.card method="post" submit="{{ route('register') }}" title="Sign Up" description="Come on, go to school here and get extensive knowledge">
        <x-slot name="inputs">
            {{-- <x-input name="firstname" value="{{ old('firstname') }}"/> --}}
            {{-- <x-input name="lastname" value="{{ old('lastname') }}"/> --}}
            <x-input name="name" value="{{ old('name') }}"/>
            <x-input name="phone" value="{{ old('phone') }}" />
            <x-input name="email" value="{{ old('email') }}" />
            <x-input name="password" type="password"/>
            <x-input name="password_confirmation" type="password"/>
            <div class="d-flex justify-content-center">
                <x-button value="Signup" type="button" classes="from-primary-btn text-decoration-none rounded-pill" />
            </div>
            {{-- <button type="button" class="btn-primary form-btn rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Signup
              </button>
            <p>Don't have an account? <span class="text-dark">Sign In</span></p>
            <x-modal id="exampleModal" title="Signedup Successfully!" btnTitle="Login" /> --}}
        </x-slot>
    </x-auth.card>
@endsection
