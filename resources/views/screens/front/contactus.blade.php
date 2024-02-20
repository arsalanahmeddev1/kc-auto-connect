<script>
    document.title = "Contact Us | KC Auto Connect";
    document.querySelector('title').innerHTML = document.title;
</script>
@extends('layouts.front')
@section('content')

<section class="banner bg-img mb-5">
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="col-md-12">
                <div>
                    <h1 class="text-lg mb-3">Contact us</h1>
                    <div class="border-bottom-cs all-center m-auto"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-layer w-100">
        <img src="{{ asset('/assets/images/faq-banner-bottom-layer.png') }}" class="w-100" alt="kc">
    </div>
</section>

<section class="faqs-sec sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 text-center mx-auto">
                <h2 class="sec-hd">Contact us</h2>
                <p class="sec-subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, ea quam. Quo dolore earum dolorem ex illo impedit atque architecto magnam, rem obcaecati voluptas labore explicabo aut iusto dolores, nulla necessitatibus neque. Id nobis eligendi saepe ab sequi consectetur accusantium.</p>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 mx-auto">
            <form action="#">
                <div class="row mt-5 ">
                    <div class="col-md-6">
                        <div class="form">
                            <label for="text">Full Name</label>
                            <x-input name="" placeholder="Full name"  class="w-100 "/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="email">Email</label>
                            <x-input name="" placeholder="Email" />

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form form-padding">
                            <label for="text">How can we help you?</label>
                            <textarea class="w-100" name="" id="" cols="30" rows="8" placeholder="Describe your problem in at least 250 characters"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <div class="d-flex justify-content-center ">
                            <x-button value="Send Message " type="a" classes=" text-center text-decoration-none from-primary-btn rounded-pill" href="" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="cars-sec mt-350">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
                <div class="car-text text-center">
                    <h2>Van and car leasing for business and personal use</h2>
                    <h5>Here at KC Autoconnect, we make car and van leasing simple.</h5>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, </p>
                    <p>content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, </p>
                    <p>a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                </div>
            </div>
            <div class="col-12">
                <div class="cars-img">
                    <img src="{{ asset('/assets/images/cars.png') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-12">
                <div class="cars-icons">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-1 col-md-2 col-sm-3">
                            <img src="{{ asset('/assets/images/footer-img-1.png') }}" alt="">
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-3">
                            <img src="{{ asset('/assets/images/footer-img-2.png') }}" alt="">
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-3">
                            <img src="{{ asset('/assets/images/footer-img-3.png') }}" alt="">
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-3">
                            <img src="{{ asset('/assets/images/footer-img-4.png') }}" alt="">
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-3">
                            <img src="{{ asset('/assets/images/footer-img-5.png') }}" alt="">
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-3">
                            <img src="{{ asset('/assets/images/footer-img-6.png') }}" alt="">
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-3">
                            <img src="{{ asset('/assets/images/footer-img-7.png') }}" alt="">
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-3">
                            <img src="{{ asset('/assets/images/footer-img-8.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
