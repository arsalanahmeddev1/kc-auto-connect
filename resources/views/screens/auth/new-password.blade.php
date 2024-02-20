@extends('layouts.app')
@section('content')
<x-auth.card title="Forgot Password" description="Kindly enter the new password.    ">
    <x-slot name="inputs">
        <x-password-input name="password" />
        <x-password-input name="password" placeholder="Confrim Password" />
        <x-button value="Update" type="button" classes="btn-primary form-btn rounded-pill" />
        {{-- <button type="button" class="btn-primary form-btn rounded-pill" data-bs-toggle="modal" data-bs-target="#forgetPassword">
           Update
          </button>
          <x-modal id="forgetPassword" btnTitle="Okay" title="Password Updated Successfully!"  /> --}}
        <x-button value="Back To Login " href="{{route('login') }}" type="a" classes="text-dark d-block fs-4 mt-2 text-decoration-none" />
    </x-slot>
</x-auth.card>
@endsection
