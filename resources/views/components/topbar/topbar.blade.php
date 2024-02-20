<header class="head shadow-sm pb-2">
    {{-- <nav class="navbar navbar-expand-lg">
        <div class="container">
          <p class="text-white nav-phone"><span class="px-2"><i class="fa-solid fa-phone"></i></span>Sales - <x-button href="tel:123-456-689" type="a" classes="text-decoration-none text-white" value="123-456-689"/></p>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <x-topbar.link class="nav-link active" title="About Us" href="{{route('about-us')}}" />
              </li>
              <li class="nav-item px-3">
                <x-topbar.link class="nav-link active" title="Knowledge Bank" href='#' />
              </li>
              <li class="nav-item px-3">
                <x-topbar.link class="nav-link active" title="Blog" href="#" />
              </li>
              <li class="nav-item px-3">
                <x-topbar.link class="nav-link active" title="Reviews" href="#" />
              </li>
              <li class="nav-item px-3">
                <x-topbar.link class="nav-button nav-link text-white px-5" title="Contact" href="{{route('contact-us')}}" />
              </li>
            </ul>
          </div>
        </div>
      </nav> --}}
      <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4 col-md-3">
                    <p class="text-white nav-phone"><span class="px-2"><i class="fa-solid fa-phone"></i></span>Sales -
                        <x-button href="tel:123-456-689" type="a" classes="text-decoration-none text-white" value="123-456-689"/></p>
                </div>
                <div class="col-8 col-md-9 col-lg-9">
                    <ul class="primary-navs">
                        <li class="nav-item">
                            <x-topbar.link class="nav-link active" title="About Us" href="{{ route('about-us') }}" />
                        </li>
                        <li class="nav-item px-3">
                            <x-topbar.link class="nav-link active" title="Knowledge Bank" href="#" />
                        </li>
                        <li class="nav-item px-3">
                            <x-topbar.link class="nav-link active" title="Blog" href="#" />
                        </li>
                        <li class="nav-item px-3">
                            <x-topbar.link class="nav-link active" title="Reviews" href="#" />
                        </li>
                        <li class="nav-item px-3">
                            <x-topbar.link class="nav-button nav-link text-white px-5" title="Contact"
                                href="{{ route('contact-us') }}" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="lower-head d-flex justify-content-between mt-4 align-items-center   ">
                    <div class="logo">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('/assets/images/logo.png')}}" alt="kc" >
                          </a>
                    </div>
                    <div class="nav-buttons d-flex ">
                        {{-- <button href="#" class="signup-btn mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal2">Sign up</button> --}}
                        <x-button type="button" id=""  classes="signup-btn mx-1" value="Sign up" />
                        <x-button type="a" href="{{route('login') }}"  classes="signin-btn mx-1" value="Sign in"/>
                    </div>
                </div>
            </div>
        </div>
      </div>
    {{-- <x-topbar.link title="Title" href="nowhere" />
    <x-topbar.link title="Title2" href="nowhere2" />
    <x-topbar.link title="Title3" href="nowhere3" />
    <x-topbar.link title="Title4" href="nowhere4" /> --}}
</header>
