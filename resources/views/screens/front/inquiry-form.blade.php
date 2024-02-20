<script>
    document.title = "Inquiry Form | KC Auto Connect";
    document.querySelector('title').innerHTML = document.title;
</script>
@extends('layouts.front')
@section('content')
<style>
    .custom-input {
        padding: 15px 22px;
        line-height: 21px;
        font-size: 18px;
    }
</style>
    <div class="inquiry">
        <section class="banner bg-img mb-5">
            <div class="container-fluid">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <div>
                            <h1 class="text-lg mb-3">Inquiry Form</h1>
                            <div class="border-bottom-cs all-center m-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-layer w-100">
                <img src="{{ asset('/assets/images/faq-banner-bottom-layer.png') }}" class="img-fluid w-100" alt="kc">
            </div>
        </section>

        <section class="inquiry-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-sm-12 mx-auto">
                        <h2 class="sec-hd text-start">Get an instant offer</h2>
                        <p class="sec-subtitle">We'll keep track of your answers over here. You can jump back to a previous
                            question any time</p>
                        <h3 class="sec-bd">Tell us a little about your car.</h3>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        @if($errors->any())
                            {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
                        @endif
                    </div>
                    <div class="col-lg-10 col-sm-12 mx-auto">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link step-indicators active" id="home-tab">Vehicle</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link step-indicators " id="profile-tab">Ownership</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link step-indicators" id="contact-tab">Condition</button>
                            </li>
                        </ul>
                        <form action="{{ route('inquiry') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane-form  tab-form-1" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <h3 class="tabs-heading">Vehicle</h3>

                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload">Upload Image</label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url('...');">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="select-wrapper">
                                        <div class="form-group">
                                            <label for="select" class="tabs-label pb-12">
                                                Year
                                            </label>
                                            <input type="text" placeholder="Year" name="year" class="form-control custom-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Make
                                            </label>
                                            <input type="text" placeholder="Make" name="make" class="form-control custom-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Model
                                            </label>
                                            <input type="text" placeholder="Model" name="model" class="form-control custom-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Trim
                                            </label>
                                            <input type="text" placeholder="Trim" name="trim" class="form-control custom-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Where will we pick up?
                                            </label>
                                            <input type="text" placeholder="Zip Code" name="zipcode" class="form-control custom-input">
                                        </div>
                                        <div class="d-flex justify-content-center ">
                                            <x-button value="Next" type="button" id="next-tabs-btn-1"
                                            classes=" text-center p-5 fs-2 tabs-next-btn tabs-btn-next-prev" />
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane-form   tab-form-2" id="profile-tab-pane" role="tabpanel"
                                aria-labelledby="profile-tab" tabindex="0">
                                <h3 class="tabs-heading">Ownership</h3>
                                <div class="select-wrapper">
                                        <div class="form-group d-flex justify-content-between">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Do you own the vehicle?
                                            </label>
                                            <div class="d-block">
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">Yes, I own it outright (it's paid off).</label>
                                                    <input type="radio" name="ownership" value="Yes, I own it outright (it's paid off).">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, I am still making loan payments.</label>
                                                    <input type="radio" name="ownership" value="No, I am still making loan payments.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, I make lease payments.</label>
                                                    <input type="radio" name="ownership" value="No, I make lease payments.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-between">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Does your vehicle have a clean title?
                                            </label>
                                            <div class="d-block">
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">Yes, it has a clean title.</label>
                                                    <input type="radio" name="title" value="Yes, it has a clean title.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, it has a salvage or rebuilt title.</label>
                                                    <input type="radio" name="title" value="No, it has a salvage or rebuilt title.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, I don't have the title.</label>
                                                    <input type="radio" name="title" value="No, I don't have the title.">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center ">
                                            {{-- <x-button value="Back " type="a" classes=" text-center p-5 fs-2" href="javascript:void(0)" /> --}}
                                            <x-button value="Back" type="button" id="prev-tabs-btn-1"
                                                classes="text-center p-5 fs-2 tabs-next-btn tabs-btn-next-prev" />
                                            <x-button value="Next" type="button" id="next-tabs-btn-2"
                                                classes=" text-center p-5 fs-2 tabs-next-btn tabs-btn-next-prev" />


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane-form  tab-form-3" id="contact-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0">
                                    <h3 class="tabs-heading">Condition</h3>
                                    <div class="select-wrapper">
                                        <div class="form-group d-flex justify-content-between">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Are all of the wheels and tires inflated and on your Vehicle?
                                            </label>
                                            <div class="d-block">
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">Yes, all are inflated and attached.</label>
                                                    <input type="radio" name="tires" value="Yes, all are inflated and attached.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, one or more are flat.</label>
                                                    <input type="radio" name="tires" value="No, one or more are flat.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, one or more are missing.</label>
                                                    <input type="radio" name="tires" value="No, one or more are missing.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-between">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Is the Vehicle's battery working and do you have a working key or fob?
                                            </label>
                                            <div class="d-block">
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">Yes, the battery works and I have a working key or fob.</label>
                                                    <input type="radio" name="battery" value="Yes, the battery works and I have a working key or fob.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, a battery, key, or fob doesn't work is missing.</label>
                                                    <input type="radio" name="battery" value="No, a battery, key, or fob doesn't work is missing.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-between">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Can you start and drive your Vechile?
                                            </label>
                                            <div class="d-block">
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">Yes, it starts and drive.</label>
                                                    <input type="radio" name="starts" value="Yes, it starts and drive.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, it starts but doesn't drive.</label>
                                                    <input type="radio" name="starts" value="No, it starts but doesn't drive.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, it doesn't start (or requires a jump-start).</label>
                                                    <input type="radio" name="starts" value="No, it doesn't start (or requires a jump-start).">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-between">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                What's the mileage on your Vechile?
                                            </label>
                                            <div class="d-block">
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    {{-- <label for="">Yes, it starts and drive.</label> --}}
                                                    <input type="text" class="form-control custom-input" name="mileage" placeholder="Mileage">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">I can't see the mileage or am unsure if the number is accurate.</label>
                                                    <input type="checkbox" name="mileage" value="I can't see the mileage or am unsure if the number is accurate.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-between">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Does your Vehicle have exterior damage?
                                            </label>
                                            <div class="d-block">
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, nothing major, just a few dings and scratches.</label>
                                                    <input type="radio" name="exterior_damage" value="No, nothing major, just a few dings and scratches.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">Yes, it has some rust or exterior damage.</label>
                                                    <input type="radio" name="exterior_damage" value="Yes, it has some rust or exterior damage.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-between">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Are the doors, bumpers, and other exterior parts and panels attached?
                                            </label>
                                            <div class="d-block">
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">Yes, all exterior parts and panels are attached.</label>
                                                    <input type="radio" name="exterior_parts" value="Yes, all exterior parts and panels are attached.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, at least one exterior part or panel is broken, loose, or missing.</label>
                                                    <input type="radio" name="exterior_parts" value="No, at least one exterior part or panel is broken, loose, or missing.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-between">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Are any mirrors, glass, or lights damaged or missing?
                                            </label>
                                            <div class="d-block">
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, all the mirrors, glass, and lights are in-place, with no damage.</label>
                                                    <input type="radio" name="mirror_glass_lights" value="No, all the mirrors, glass, and lights are in-place, with no damage.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">Yes, at least one of the mirrors, glass, and lights are loose, damaged, or missing.</label>
                                                    <input type="radio" name="mirror_glass_lights" value="Yes, at least one of the mirrors, glass, and lights are loose, damaged, or missing.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-between">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Does your Vehicle have its catalytic converter?
                                            </label>
                                            <div class="d-block">
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">Yes, it's attached.</label>
                                                    <input type="radio" name="catalytic_converter" value="Yes, it's attached.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, it's missing.</label>
                                                    <input type="radio" name="catalytic_converter" value="No, it's missing.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-between">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Does the interior of your Vehicle have missing parts or major damage?
                                            </label>
                                            <div class="d-block">
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, all interior parts are there and in good condition.</label>
                                                    <input type="radio" name="interior_parts" value="No, all interior parts are there and in good condition.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">Yes, some interior parts are damaged or missing.</label>
                                                    <input type="radio" name="interior_parts" value="Yes, some interior parts are damaged or missing.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-between">
                                            <label for="select" class="tabs-label pb-12 p-40">
                                                Has your Vehicle ever been in a flood or fire?
                                            </label>
                                            <div class="d-block">
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">No, thank goodness.</label>
                                                    <input type="radio" name="flood_fire" value="No, thank goodness.">
                                                </div>
                                                <div class="form-group d-flex justify-content-between align-items-center gap-3">
                                                    <label for="">Yes, it has been in a flood or fire.</label>
                                                    <input type="radio" name="flood_fire" value="Yes, it has been in a flood or fire.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center ">
                                            {{-- <x-button value="Back " type="a" classes=" text-center p-5 fs-2" href="javascript:void(0)" /> --}}
                                            <x-button value="Back" type="button" id="prev-tabs-btn-2"
                                                classes=" text-center p-5 fs-2 tabs-next-btn tabs-btn-next-prev" />
                                            <x-button value="Submit" type="submit" id="next-tabs-btn-2"
                                                classes=" text-center p-5 fs-2 tabs-next-btn tabs-btn-next-prev" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, </p>
                            <p>content here', making it look like readable English. Many desktop publishing packages and web
                                page editors now use Lorem Ipsum as their default model text, </p>
                            <p>a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                                versions have evolved over the years, sometimes by accident, sometimes on purpose (injected
                                humour and the like).</p>
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
