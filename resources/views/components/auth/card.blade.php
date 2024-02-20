
@props([
    'title',
    'description',
    'submit',
    "method"
])
<section class="form-card">
    <div class="container mx-auto">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <x-auth.form method="{{ $method }}" submit="{{ $submit }}" title="{{$title}}" description="{{ $description }}">
                    <x-slot name="inputs" >
                        {{ $inputs }}
                    </x-slot>
                </x-auth.form>
            </div>
        </div>
    </div>
</section>
{{-- <section class="signup-form">
    <div class="container mx-auto">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <x-auth.form submit="#" title="Sign In" description="Come on, go to school here and get extensive knowledge">
                    <x-slot name="inputs">
                        <x-input name="email" />
                        <x-password-input name="password"/>
                        <x-button value="forget Password? " href="#" type="a" classes="text-dark text-decoration-none form-link primary-btn" />
                        <x-button value="Signin " type="button" classes="btn-primary form-btn rounded-pill" />
                        <p>New here? <span><a href="" class="text-dark text-decoration-none">Create an account</a></span></p>
                    </x-slot>
                </x-auth.form>
            </div>
        </div>
    </div>
</section> --}}
