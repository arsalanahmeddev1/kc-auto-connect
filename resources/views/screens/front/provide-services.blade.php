<script>
    document.title = "Services | KC Auto Connect";
    document.querySelector('title').innerHTML = document.title;
</script>
@extends('layouts.front')
@section('content')

<div class="provide-service">
    <section class="banner bg-img mb-5">
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">
                    <div>
                        <h1 class="text-lg mb-3">How does it work</h1>
                        <div class="border-bottom-cs all-center m-auto"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-layer w-100">
            <img src="{{ asset('/assets/images/faq-banner-bottom-layer.png') }}" class="img-fluid w-100" alt="kc">
        </div>
    </section>

    <section class="Benefit-1 mt-350">
        <div class="container">
            <div class="row mt-5 align-items-center ">
                <div class="col-md-6 col-12">
                    <div class="col-5 mb-30">
                        <div class="d-flex justify-content-start">
                            <x-button value="Benefit #1" type="a" classes=" text-center text-decoration-none from-primary-btn rounded-pill service-btn position-relative" href="javascript:void(0)" />
                        </div>
                    </div>
                    <div class="col-12">
                        <h2 class="service-title mb-24">Lorem Ipsum has been
                            industry's standard</h2>
                        <p class="service-content mb-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="col-12 d-flex benifit-btns">
                        <div class="col-5">
                            <div class="ser-counter">
                                <h2 class="counter">99.5<span class="c-addition">%</span></h2>
                                <h4 class="counter-text">connect rate</h4>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="ser-counter">
                                <h2 class="counter">25K<span class="c-addition">*</span></h2>
                                <h4 class="counter-text">ai healthcare models</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="left-car-side text-end">
                        <img src="{{ asset('/assets/images/Image Container.png') }}" alt="" class="img-fluid h-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Benefit-2 mt-250">
        <div class="container">
            <div class="row mt-5 align-items-center justify-content-between">

                <div class="col-md-6 col-12">
                    <div class="left-car-side text-end">
                        <img src="{{ asset('/assets/images/mobile-img.png') }}" alt="" class="img-fluid h-100">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="col-5 mb-30">
                        <div class="d-flex justify-content-start">
                            <x-button value="Benefit #2" type="a" classes=" text-center text-decoration-none from-primary-btn rounded-pill service-btn position-relative" href="javascript:void(0)" />
                        </div>
                    </div>
                    <div class="col-12">
                        <h2 class="service-title mb-24">Lorem Ipsum has been
                            industry's standard</h2>
                        <p class="service-content mb-30"> It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                    </div>
                    <div class="col-12">
                        <div class="list d-flex align-items-center mb-12">
                            <img src="{{ asset('/assets/images/right.png') }}" alt="" class="img-fluid me-4">
                            <h4 class="list-text"> It has survived not only five centuries</h4>
                        </div>
                        <div class="list d-flex align-items-center mb-12">
                            <img src="{{ asset('/assets/images/right.png') }}" alt="" class="img-fluid me-4">
                            <h4 class="list-text"> But also the leap into electronic typesetting.</h4>
                        </div>
                        <div class="list d-flex align-items-center mb-12">
                            <img src="{{ asset('/assets/images/right.png') }}" alt="" class="img-fluid me-4">
                            <h4 class="list-text"> But also the leap into electronic typesetting.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Benefit-3 mt-250">
        <div class="container">
            <div class="row mt-5 align-items-center ">
                <div class="col-md-6 col-sm-12">
                    <div class="col-5 mb-30">
                        <div class="d-flex justify-content-start">
                            <x-button value="Benefit #3" type="a" classes=" text-center text-decoration-none from-primary-btn rounded-pill service-btn position-relative" href="javascript:void(0)" />
                        </div>
                    </div>
                    <div class="col-12">
                        <h2 class="service-title mb-24">Lorem Ipsum has been
                            industry's standard</h2>
                        <p class="service-content mb-30"> printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p class="service-content mb-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                    </div>
                    <div class="col-12 d-flex benifit-btns">
                        <div class="me-4">
                            <x-button value="STILL HAVE A QUESTIONS " type="a" classes=" text-center text-decoration-none from-primary-btn rounded-pill" href="" />
                        </div>
                        <div class="">
                            <x-button value="CHECK OUT OUR FAQs. " type="a" classes=" text-center text-decoration-none from-primary-btn rounded-pill" href="" />
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="left-car-side text-end">
                        <img src="{{ asset('/assets/images/running-car.png') }}" alt="" class="img-fluid h-100">
                    </div>
                </div>
            </div>
    </section>

    <section class="cars-sec">
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
</div>

@endsection
