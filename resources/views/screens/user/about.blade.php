@extends('layouts.user')
@section('content')
    <div class="about-page">
        <section class="banner bg-img">
            <div class="container-fluid">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <div>
                            <h1 class="text-lg mb-3">About us</h1>
                            <div class="border-bottom-cs all-center m-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us-sec pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-12">
                        <img src="{{ asset('/assets/images/about-us-sec-img.png') }}" class="img-fluid" alt="kc">
                    </div>
                    <div class="col-lg-6 col-sm-12">
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
