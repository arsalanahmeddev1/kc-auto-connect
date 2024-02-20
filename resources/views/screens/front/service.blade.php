<script>
    document.title = "Service | KC Auto Connect";
    document.querySelector('title').innerHTML = document.title;
</script>
@extends('layouts.front')
    @section('content')
    <div class="about">
        <section class="banner bg-img mb-5">
            <div class="container-fluid">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <div>
                            <h1 class="text-lg mb-3">About-us</h1>
                            <div class="border-bottom-cs all-center m-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-layer  w-100">
                <img src="{{ asset('/assets/images/faq-banner-bottom-layer.png') }}" class="w-100" alt="kc">
            </div>
        </section>
        <section class="about-us-sec about-new pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-12">
                        <img src="{{ asset('/assets/images/about.png') }}" class="img-fluid" alt="kc">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-text">
                          <div class="about-intro">
                            <h4>Introduction</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                          </div>
                          <div class="about-kc">
                            <h4>About the KC Autoconnect</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                            <ul>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</li>
                            </ul>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="overview">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="overview-text">
                            <h4>Make real time a KC Autoconnect</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                            <h4>Overview:</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                        </div>
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
                            <div class="row justify-content-evenly">
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
