<script>
    document.title = "Special Offers | KC Auto Connect";
    document.querySelector('title').innerHTML = document.title;
</script>
@extends('layouts.front')
    @section('content')
    <div class="home-page">
        <section class="home-banner bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7 col-sm-10 ">
                        <div class="banner-content">
                            <h1>Fast Cash for Slow <span>Car!</span></h1>
                            <p>With thousands of vehicles to choose from, you can find the one</p>
                            <button>Request A Quote</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="new-service">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="new-service-title d-flex text-center align-items-center">
                            <img src="{{ asset('/assets/images/check.png') }}" alt="">
                            <h6>Our Special Offers</h6>
                        </div>
                    </div>
                    <div class="service-cards">
                        <div class="service-card">
                            <div class="card position-relative" style="width: auto; border-radius: 15px;">
                                <img src="{{ asset('/assets/images/stock-img.png') }}" class="stock" alt="...">
                                <img src="{{ asset('/assets/images/service-card-img.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-info d-flex">
                                        <div class="card-title">
                                            <h4>Ford Kuga</h4>
                                            <p>Personal Price per month from Incl VAT</p>
                                            <span>$ 293.99</span>
                                        </div>
                                        <div class="card-sec-img">
                                            <img src="{{ asset('/assets/images/check.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="card-btns d-flex">
                                        <button class="d-flex enquire-btn">
                                            <i class="fa-solid fa-comment-dots "></i>
                                            <p>Enquire</p>
                                        </button>
                                        <button class="deal-btn">
                                            View Deal
                                            <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </div>
                                    <div class="card-text text-center">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ducimus quos velit odio quaerat omnis cum deleniti rerum quo porro libero dolorum sint.</p>
                                    </div>
                                    <div class="card-name">
                                        <p>2.5 EcoBoost PHEV ST-Line 5dr CVT</p>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="service-card">
                            <div class="card" style="width: auto; border-radius: 15px;">
                                <img src="{{ asset('/assets/images/stock-img.png') }}" class="stock" alt="...">
                                <img src="{{ asset('/assets/images/service-card-img2.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-info d-flex">
                                        <div class="card-title">
                                            <h4>Skoda Kodiaq</h4>
                                            <p>Personal Price per month from Incl VAT</p>
                                            <span>$ 293.99</span>
                                        </div>
                                        <div class="card-sec-img">
                                            <img src="{{ asset('/assets/images/check.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="card-btns d-flex">
                                        <button class="d-flex enquire-btn">
                                            <i class="fa-solid fa-comment-dots "></i>
                                            <p>Enquire</p>
                                        </button>
                                        <button class="deal-btn">
                                            View Deal
                                            <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </div>
                                    <div class="card-text text-center">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ducimus quos velit odio quaerat omnis cum deleniti rerum quo porro libero dolorum sint.</p>
                                    </div>
                                    <div class="card-name">
                                        <p>2.5 EcoBoost PHEV ST-Line 5dr CVT</p>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="service-card">
                            <div class="card" style="width: auto; border-radius: 15px;">
                                <img src="{{ asset('/assets/images/stock-img.png') }}" class="stock" alt="...">
                                <img src="{{ asset('/assets/images/service-card-img3.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-info d-flex">
                                        <div class="card-title">
                                            <h4>Mercedes-Benz EQC</h4>
                                            <p>Personal Price per month from Incl VAT</p>
                                            <span>$ 293.99</span>
                                        </div>
                                        <div class="card-sec-img">
                                            <img src="{{ asset('/assets/images/check.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="card-btns d-flex">
                                        <button class="d-flex enquire-btn">
                                            <i class="fa-solid fa-comment-dots "></i>
                                            <p>Enquire</p>
                                        </button>
                                        <button class="deal-btn">
                                            View Deal
                                            <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </div>
                                    <div class="card-text text-center">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ducimus quos velit odio quaerat omnis cum deleniti rerum quo porro libero dolorum sint.</p>
                                    </div>
                                    <div class="card-name">
                                        <p>2.5 EcoBoost PHEV ST-Line 5dr CVT</p>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="service-card">
                            <div class="card" style="width: auto; border-radius: 15px;">
                                <img src="{{ asset('/assets/images/service-card-img.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-info d-flex">
                                        <div class="card-title">
                                            <h4>Ford Kuga</h4>
                                            <p>Personal Price per month from Incl VAT</p>
                                            <span>$ 293.99</span>
                                        </div>
                                        <div class="card-sec-img">
                                            <img src="{{ asset('/assets/images/check.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="card-btns d-flex">
                                        <button class="d-flex enquire-btn">
                                            <i class="fa-solid fa-comment-dots "></i>
                                            <p>Enquire</p>
                                        </button>
                                        <button class="deal-btn">
                                            View Deal >
                                        </button>
                                    </div>
                                    <div class="card-text text-center">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ducimus quos velit odio quaerat omnis cum deleniti rerum quo porro libero dolorum sint.</p>
                                    </div>
                                    <div class="card-name">
                                        <p>2.5 EcoBoost PHEV ST-Line 5dr CVT</p>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="service-card">
                            <div class="card" style="width: auto; border-radius: 15px;">
                                <img src="{{ asset('/assets/images/service-card-img.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-info d-flex">
                                        <div class="card-title">
                                            <h4>Ford Kuga</h4>
                                            <p>Personal Price per month from Incl VAT</p>
                                            <span>$ 293.99</span>
                                        </div>
                                        <div class="card-sec-img">
                                            <img src="{{ asset('/assets/images/check.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="card-btns d-flex">
                                        <button class="d-flex enquire-btn">
                                            <i class="fa-solid fa-comment-dots "></i>
                                            <p>Enquire</p>
                                        </button>
                                        <button class="deal-btn">
                                            View Deal >
                                        </button>
                                    </div>
                                    <div class="card-text text-center">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ducimus quos velit odio quaerat omnis cum deleniti rerum quo porro libero dolorum sint.</p>
                                    </div>
                                    <div class="card-name">
                                        <p>2.5 EcoBoost PHEV ST-Line 5dr CVT</p>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonial">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 ">
                            <div class="testimonial-img text-center">
                                <img src="{{ asset('/assets/images/testimonial.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 px-0">
                            <div class="testimonial-slider ">
                                <div class="test-slides">
                                    <div class="client-box">
                                        <div class="testi-profile d-flex gap-1">
                                            <img src="{{ asset('/assets/images/testi-user.png') }}" alt="">
                                            <div class="testi-userName">
                                                <p>Bert. B</p>
                                                <img src="{{ asset('/assets/images/review.png') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <p class="testi-content">
                                            “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.”
                                        </p>
                                        <p class="text-end fw-bold fs-4">posted 2 months ago</p>
                                    </div>

                                </div>
                                <div class="test-slides">
                                    <div class="client-box">
                                        <div class="testi-profile d-flex gap-1">
                                            <img src="{{ asset('/assets/images/testi-user.png') }}" alt="">
                                            <div class="testi-userName">
                                                <p>Bert. B</p>
                                                <img src="{{ asset('/assets/images/review.png') }}" alt=""class="img-fluid">
                                            </div>
                                        </div>
                                        <p class="testi-content">
                                            “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.”
                                        </p>
                                        <p class="text-end fw-bold fs-4">posted 2 months ago</p>
                                    </div>

                                </div>
                                <div class="test-slides">
                                    <div class="client-box">
                                        <div class="testi-profile d-flex gap-1">
                                            <img src="{{ asset('/assets/images/testi-user.png') }}" alt="">
                                            <div class="testi-userName">
                                                <p>Bert. B</p>
                                                <img src="{{ asset('/assets/images/review.png') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <p class="testi-content">
                                            “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.”
                                        </p>
                                        <p class="text-end fw-bold fs-4">posted 2 months ago</p>
                                    </div>

                                </div>
                                <div class="test-slides">
                                    <div class="client-box">
                                        <div class="testi-profile d-flex gap-1">
                                            <img src="{{ asset('/assets/images/testi-user.png') }}" alt="">
                                            <div class="testi-userName">
                                                <p>Bert. B</p>
                                                <img src="{{ asset('/assets/images/review.png') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <p class="testi-content">
                                            “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.”
                                        </p>
                                        <p class="text-end fw-bold fs-4">posted 2 months ago</p>

                                    </div>

                                </div>
                                <div class="test-slides">
                                    <div class="client-box">
                                        <div class="testi-profile d-flex gap-1">
                                            <img src="{{ asset('/assets/images/testi-user.png') }}" alt="">
                                            <div class="testi-userName">
                                                <p>Bert. B</p>
                                                <img src="{{ asset('/assets/images/review.png') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <p class="testi-content">
                                            “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.”
                                        </p>
                                        <p class="text-end fw-bold fs-4">posted 2 months ago</p>

                                    </div>

                                </div>
                                <div class="test-slides">
                                    <div class="client-box">
                                        <div class="testi-profile d-flex gap-1">
                                            <img src="{{ asset('/assets/images/testi-user.png') }}" alt="">
                                            <div class="testi-userName">
                                                <p>Bert. B</p>
                                                <img src="{{ asset('/assets/images/review.png') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <p class="testi-content">
                                            “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.”
                                        </p>
                                        <p class="text-end fw-bold fs-4">posted 2 months ago</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="reason ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="reason-title">
                            <h2>More Reasons To Brighten Up Your Day</h2>
                        </div>
                    </div>
                    <div class="reason-cards">
                        <div class="reason-card">
                            <img src="{{ asset('/assets/images/box1.png') }}" alt="">
                            <h5>Refer a friend </h5>
                            <p>Tell a friend about Tilsun Leasing and if they lease from us we</p>
                            <button><i class="fa-solid fa-chevron-right text-white"></i></button>
                        </div>
                        <div class="reason-card">
                            <img src="{{ asset('/assets/images/box2.png') }}" alt="">
                            <h5>Refer a friend </h5>
                            <p>Tell a friend about Tilsun Leasing and if they lease from us we</p>
                            <button><i class="fa-solid fa-chevron-right text-white"></i></button>
                        </div>
                        <div class="reason-card">
                            <img src="{{ asset('/assets/images/box2.png') }}" alt="">
                            <h5>Refer a friend </h5>
                            <p>Tell a friend about Tilsun Leasing and if they lease from us we</p>
                            <button><i class="fa-solid fa-chevron-right text-white"></i></button>
                        </div>
                        <div class="reason-card">
                            <img src="{{ asset('/assets/images/box1.png') }}" alt="">
                            <h5>Refer a friend </h5>
                            <p>Tell a friend about Tilsun Leasing and if they lease from us we</p>
                            <button><i class="fa-solid fa-chevron-right text-white"></i></button>

                        </div>
                        <div class="reason-card">
                            <img src="{{ asset('/assets/images/box2.png') }}" alt="">
                            <h5>Refer a friend </h5>
                            <p>Tell a friend about Tilsun Leasing and if they lease from us we</p>
                            <button><i class="fa-solid fa-chevron-right text-white"></i></button>

                        </div>
                        <div class="reason-card">
                            <img src="{{ asset('/assets/images/box1.png') }}" alt="">
                            <h5>Refer a friend </h5>
                            <p>Tell a friend about Tilsun Leasing and if they lease from us we</p>
                            <button><i class="fa-solid fa-chevron-right text-white"></i></button>

                        </div>
                        <div class="reason-card">
                            <img src="{{ asset('/assets/images/box1.png') }}" alt="">
                            <h5>Refer a friend </h5>
                            <p>Tell a friend about Tilsun Leasing and if they lease from us we</p>
                            <button><i class="fa-solid fa-chevron-right text-white"></i></button>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us-sec pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-12 text-center">
                        <img src="{{ asset('/assets/images/about-us-sec-img.png') }}" class="img-fluid" alt="kc">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                    <h4 class="text-md">Van and car leasing for
                        business and personal use</h4>
                        <h5 class="text-subs">we make car and van leasing simple.</h5>
                        <p class="primary-para">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        </p>
                        <p class="primary-para">
                            The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                        </p>
                        <p class="primary-para">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
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
