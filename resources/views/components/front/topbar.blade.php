<header class="head shadow-sm">

    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4 col-md-3">
                    <p class="text-white nav-phone"><span class="px-2"><i class="fa-solid fa-phone"></i></span>SALES -
                        <x-button classes="text-decoration-none text-white" href="tel:123-456-689" type="a"
                            value="123-456-689" />
                    </p>
                </div>
                <div class="col-8 col-md-9 col-lg-9">
                    <ul class="primary-navs">
                        <li class="nav-item">
                            <x-topbar.link class="nav-link active" title="About Us" href="{{ route('about-us') }}" />
                        </li>
                        {{-- <li class="nav-item px-3">
                            <x-topbar.link class="nav-link active" title="Knowledge Bank" href="#" />
                        </li>
                        <li class="nav-item px-3">
                            <x-topbar.link class="nav-link active" title="Blog" href="#" />
                        </li>
                        <li class="nav-item px-3">
                            <x-topbar.link class="nav-link active" title="Reviews" href="#" />
                        </li> --}}
                        <li class="nav-item px-3">
                            {{-- <a class="nav-button nav-link text-white px-5" href="">
                                Contact
                            </a> --}}
                            <x-topbar.link class="nav-link text-white px-5" title="Contact" href="{{ route('contact-us') }}" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12  ">
                <div class="row align-items-center my-4">
                    <div class="col-md-3 ">
                        <div class="logo">
                            <a class="navbar-brand" href="/">
                                <img src="{{ asset('/assets/images/logo.png') }}" alt="kc">
                            </a>
                        </div>
                    </div>
                    <div class="offset-md-5 col-md-3">
                        @auth
                            <div class="user-dropdowns d-flex ">
                                <div class="notification">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle notification-dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-bell fa-2x text-primary mt-1"></i>
                                        </button>
                                        {{-- <ul class="dropdown-menu ">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul> --}}
                                        <x-user.notification />
                                    </div>

                                </div>
                                <div class="user-account d-flex align-items-center">
                                    <i class="fa-solid fa-circle-user fa-2x text-primary"></i>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle user-dropdown " type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Hi , Mark <i class="fa-solid fa-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu ">
                                            <li><a class="dropdown-item" href="{{ route('contact-us') }}"><i
                                                        class="fa-solid fa-user"></i>Contact us</a></li>
                                            <li><a class="dropdown-item" href="{{ route('about-us') }}"> <i
                                                        class="fa-regular fa-clock"></i>About us</a></li>
                                            <li><a class="dropdown-item" href="{{ route('our-team') }}"><i
                                                        class="fa-solid fa-sliders"></i>Our Team</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fa-solid fa-right-from-bracket"></i>Request</a></li>
                                            <li><a class="dropdown-item" href="{{ route('login') }}"><i
                                                        class="fa-solid fa-right-from-bracket"></i>Log Out</a></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        @else
                            <div class="d-flex">
                                <x-button value="Sign In" href="{{ route('login') }}"
                                    classes="contact-btn log-sign-btn rounded-pill d-flex text-decoration-none fs-4 mt-0 hover-white"
                                    type="a" />
                                <x-button value="Sign Up" href="{{ route('register') }}"
                                    classes="contact-btn log-sign-btn rounded-pill d-flex  text-decoration-none fs-4 mt-0 hover-white"
                                    type="a" />
                            </div>
                        @endauth
                        <div class="open-menu">
                            <i class="fa-solid fa-bars menu-toggle"></i>
                        </div>
                    </div>
                    <div class="col-md-1 text-start">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <x-button href="{{route('home')}}" type="a" value="Home"/>
                            <x-button href="{{route('inquiry')}}" type="a" value="Sell"/>
                            <x-button href="{{route('offers') }}" type="a" value="Offers" classes="" databstoggle="modal"
                            databstarget="" />
                            <x-button href="{{route('our-team') }}" type="a" value="Our Team" classes="" databstoggle="modal"
                            databstarget="" />
                            <x-button href="{{route('contact-us') }}" type="a" value="Contact" classes="" databstoggle="modal"
                            databstarget="" />
                            <x-button href="{{route('privacy') }}" type="a" value="Privacy Policy" classes="" databstoggle="modal"
                            databstarget="" />
                            <x-button href="{{route('terms') }}" type="a" value="Terms & Conditions" classes="" databstoggle="modal"
                            databstarget="" />
                        </div>
                        <span style="font-size:4rem;cursor:pointer" onclick="openNav()"><i
                                class="fa-solid fa-bars-staggered open-bar"></i></span>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>
    <x-modal title="" />
    {{-- <x-topbar.link title="Title" href="nowhere" />
    <x-topbar.link title="Title2" href="nowhere2" />
    <x-topbar.link title="Title3" href="nowhere3" />
    <x-topbar.link title="Title4" href="nowhere4" /> --}}
</header>
