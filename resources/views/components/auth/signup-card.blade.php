<section class="signup-form">
    <div class="container mx-auto">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <x-auth.form submit="#" title="Sign Up" description="Come on, go to school here and get extensive knowledge">
                    <x-slot name="inputs">
                        <x-input name="first_name" />
                        <x-input name="last_name" />
                        <x-input name="phone_number" />
                        <x-input name="email" />
                        <x-input name="password" />
                        <x-input name="password_confirmation" />
                        <x-button value="Signup " type="button" classes="btn-primary form-btn rounded-pill" />
                        <p>Don't have an account? <span class="text-dark">Sign In</span></p>
                    </x-slot>
                </x-auth.form>
            </div>
        </div>
    </div>
</section>
