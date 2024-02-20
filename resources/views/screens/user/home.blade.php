@extends('layouts.user')
    @section('content')
        <div class="services-page">
            <section class="banner bg-img">
                <div class="container-fluid">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-12">
                            <div>
                                <h1 class="text-lg mb-3">Services</h1>
                                <div class="border-bottom-cs all-center m-auto"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="para-sec pt-70 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="primary-para text-center line-h-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin
                                gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic
                                tempor.
                                Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum,
                                nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan
                                eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                                Proin
                                gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic
                                tempor.
                                Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum,
                                nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan
                                eget.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="it-solutions-sec pb-70">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-12">
                            <img src="{{ asset('/assets/images/middle-sec-img.png') }}" class="img-fluid mb-40" alt="kc">
                        </div>
                        <div class="col-md-10">
                            <h3 class="text-md">You Need Any IT Solutions</h3>
                            <p class="primary-para mb-20 w-700">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin
                                gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodale
                            </p>
                        </div>
                        <div class="col-md-2">
                            {{-- <x-button value="Learn More" type="a" classes="signup-btn"/> --}}
                            <button class="signup-btn reduce-pd">Learn More <i class="fa-solid fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-us-sec pb-70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <img src="{{ asset('/assets/images/about-us-sec-img.png') }}" class="img-fluid" alt="kc">
                        </div>
                        <div class="col-lg-6 col-md-12">
                        <h4 class="text-md">About Us</h4>
                            <p class="primary-para">
                                Dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum
                                sociis natoque penatibus et magnis Dolor sit amet lacus accumsan et viverra justo commodo. Proin
                                sodales pulvinar tempor. Cum sociis natoque penatibus et magnis Dolor sit amet lacus accumsan et
                                viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis
                                Dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum
                                sociis natoque penatibus et magnis Dolor sit amet lacus accumsan et viverra justo commodo. Proin
                                sodales pulvinar tempor. Cum sociis natoque penatibus et magnis
                            </p>
                            <ul class="d-flex gap-5  ps-0">
                                <li class="primary-para list-unstyled">45 Crescent Road Pinetree Avenue <br>
                                P.O. Box 3242</li>
                                    <li class="primary-para text-black list-unstyled">Customer Centre: <br> <a class="primary-para" href="tel:+614 7343 3254">+614 7343 3254</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
