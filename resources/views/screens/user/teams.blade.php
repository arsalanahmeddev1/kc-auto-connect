@extends('layouts.user')
@section('content')
    <div class="team-page">
        <section class="banner bg-img">
            <div class="container-fluid">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <div>
                            <h1 class="text-lg mb-3">Our Teams</h1>
                            <div class="border-bottom-cs all-center m-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-team-sec pb-70">
            <div class="container">
                <div class="row">
                    <p class="title">our team</p>
                    <h3 class="subtitle">Meet our team members</h3>
                    <div class="col-lg-12">
                        <div class="our-team-content">
                            <div class="row">
                                <div class="col-lg-4 col-sm-10">
                                    <div class="teams-card">
                                        <div class="teams-cards-option">
                                            <div class="dropdown options-dropdown">
                                                <button class="btn btn-light dropdown-toggle team-options" type="button" data-bs-toggle="dropdown" aria-expanded="false" onclick="toChangeIcon()">
                                                    <i class="fa-solid fa-plus  teamsOptionButton" ></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                  <li><a class="dropdown-item" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                </ul>
                                              </div>
                                        </div>
                                        <img src="{{ asset('/assets/images/teams-1.png') }}" alt="" class="img-fluid">
                                        <div class="teams-card-content text-center">
                                            <h4>Sasha</h4>
                                            <p>Working since Sept 14, 2021 Your text here this is dummy text...</p>
                                            <a href="">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-10">
                                    <div class="teams-card">
                                        <div class="teams-cards-option">
                                            <div class="dropdown options-dropdown">
                                                <button class="btn btn-light dropdown-toggle team-options" type="button" data-bs-toggle="dropdown" aria-expanded="false" onclick="toChangeIcon()">
                                                    <i class="fa-solid fa-plus teamsOptionButton"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                  <li><a class="dropdown-item" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                </ul>
                                              </div>
                                        </div>
                                        <img src="{{ asset('/assets/images/teams-2.png') }}" alt="" class="img-fluid">
                                        <div class="teams-card-content text-center">
                                            <h4>Sasha</h4>
                                            <p>Working since Sept 14, 2021 Your text here this is dummy text...</p>
                                            <a href="">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-10">
                                    <div class="teams-card">
                                        <div class="teams-cards-option">
                                            <div class="dropdown options-dropdown">
                                                <button class="btn btn-light dropdown-toggle team-options" type="button" data-bs-toggle="dropdown" aria-expanded="false" onclick="toChangeIcon()">
                                                    <i class="fa-solid fa-plus teamsOptionButton"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                  <li><a class="dropdown-item" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                </ul>
                                              </div>
                                        </div>
                                        <img src="{{ asset('/assets/images/teams-3.png') }}" alt="" class="img-fluid">
                                        <div class="teams-card-content text-center">
                                            <h4>Sasha</h4>
                                            <p>Working since Sept 14, 2021 Your text here this is dummy text...</p>
                                            <a href="">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
