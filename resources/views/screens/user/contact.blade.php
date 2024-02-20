@extends('layouts.user')
@section('content')
    <div class="contact-page">
        <section class="banner bg-img">
            <div class="container-fluid">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <div>
                            <h1 class="text-lg mb-3">Contact us</h1>
                            <div class="border-bottom-cs all-center m-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="para-sec pt-70 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="contact-info">
                            <h3 class="fw-bold">Get In Touch</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <p>45 Crescent Road Pinetree Avenue P.O. Box 3242</p>
                            <p><span class="fw-bold">Customer Centre:</span><br>+614 7343 3254</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <x-form method="post" submit="{{ route('feedbacks.store') }}">
                                <x-slot name="inputs">
                                    <div class="row justify-content-center">
                                        <div class="row g-3">
                                            <div class="col">
                                            <x-input name="name"/>
                                            </div>
                                            <div class="col">
                                                <x-input name="email"/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <x-input type="textarea" name="message"/>
                                            <x-button value="Send messages " type="button" classes="contact-btn rounded-pill" />
                                        </div>
                                    </div>
                                </x-slot>
                            </x-form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
