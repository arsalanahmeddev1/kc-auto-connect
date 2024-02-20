@extends('layouts.user')
@section('content')
<section class="form-card">
    <div class="container mx-auto">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="form-body border shadow rounded-5 px-5">
                    <div class="form-info">
                        <img src="{{ asset('/assets/images/user-profile.png')}}" alt="">
                        <h3>Eureka Seken</h3>
                        <p>Come on, go to school here and get extensive knowledge</p>
                    </div>
                    <x-form submit="#">
                        <x-slot name="inputs">
                            <x-input name="Mark_Jacob" />
                            <x-input name="Email" />
                            <x-input name="111444555666" />
                            <x-input name="Input_Field" />
                            <x-input name="Input_Field" />
                            <x-input name="Input_Field" />
                            <x-button value="Edit Profile" type="button" classes="btn-primary form-btn rounded-pill" />
                            <button class="form-secondary-btn rounded-pill">Edit Passwords</button>
                        </x-slot>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
