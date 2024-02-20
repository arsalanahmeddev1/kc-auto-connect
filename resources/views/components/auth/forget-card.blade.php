<section class="signup-form">
    <div class="container mx-auto">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <x-auth.form submit="#" title="Forgot Password" description="Kindly enter your email address to change the password.">
                    <x-slot name="inputs">
                        <x-input name="email" />
                        <p><span><a href="" class="text-dark text-decoration-none">Back to login</a></span></p>
                        <x-button value="Signin " type="button" classes="btn-primary form-btn rounded-pill" />
                    </x-slot>
                </x-auth.form>
            </div>
        </div>
    </div>
</section>
