<script>
    document.title = "FAQs | KC Auto Connect";
    document.querySelector('title').innerHTML = document.title;
</script>
@extends('layouts.front')
@section('content')

<section class="banner bg-img mb-5">
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="col-md-12">
                <div>
                    <h1 class="text-lg mb-3">FAQ Simple</h1>
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
            <div class="col-12 text-center">
                <h2 class="sec-hd">FAQ Simple</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-9 text-center mx-auto">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="accordion-number">01</span> <span class="ats">Alright, but what exactly do you do?</span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                <!-- <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
                                <p>A good real estate website should have property listings with high-quality
                                    images, search filters, interactive maps, virtual tours, contact forms, and
                                    mobile responsiveness.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="accordion-number">02</span> <span class="ats">I don't need a brand strategist but I need help executing an upcoming campaign. Can we still work together?</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                <!-- <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
                                <p>Yes, a responsive design ensures your website works seamlessly on various
                                    devices, including smartphones and tablets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                <span class="accordion-number">03</span> <span class="ats">Why do you have a monthly project cap?</span>
                            </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
                                <p>Yes, most real estate websites come with content management systems that
                                    allow you to easily add, edit, and remove property listings.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                <span class="accordion-number">04</span> <span class="ats">Why do you have a monthly project cap?</span>
                            </button>
                        </h2>
                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
                                <p>The timeline varies based on the complexity of the project and your specific
                                    requirements. On average, it can take up to 3 to 4 weeks to develop a fully
                                    functional website.</p>
                            </div>
                        </div>
                    </div>

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
