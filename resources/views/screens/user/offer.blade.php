@extends('layouts.user')
@section('content')
    <div class="offer-page">
        <div class="container">
            <div class="row">
                @forelse ($offers as $offer)
                <div class="col-12">
                    <div class="offer-wrapper">
                        <div class="offer-content d-flex justify-content-between align-items-center">
                            <div class="price">
                                <p>Offer ID : <span class="fw-bold"> {{ $offer->id }} </span></p>
                                <h4>${{ $offer->amount }}</h4>
                            </div>
                            <div class="price-btn">
                                <form action="{{ route('bids.accept', $offer->id) }}" method="post">
                                    @csrf
                                    <button class="">Accept</button>
                                </form>
                            </div>
                        </div>
                        <div class="offer-date">
                            <p>Date: {{ $offer->created_at->format('m-d-Y') }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="offer-wrapper">
                        <div class="offer-content d-flex justify-content-between align-items-center">
                            <div class="price">
                                {{-- <p>Offer ID : <span class="fw-bold"> {{ $offer->id }} </span></p> --}}
                                <h4>Oops! no offers found.</h4>
                            </div>
                            <div class="price-btn">
                                {{-- <button class="">Accept</button> --}}
                            </div>
                        </div>
                        <div class="offer-date">
                            {{-- <p>Date: {{ $offer->created_at->format('m-d-Y') }}</p> --}}
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="row">
                <h3>Accepted Offers</h3>
                @forelse ($acceptedOffers as $offer)
                <div class="col-12">
                    <div class="offer-wrapper">
                        <div class="offer-content d-flex justify-content-between align-items-center">
                            <div class="price">
                                <p>Offer ID : <span class="fw-bold"> {{ $offer->id }} </span></p>
                                <h4>${{ $offer->amount }}</h4>
                            </div>
                            <div class="price-btn">
                                Vendor Details: <br>
                                Name: {{ $offer->user->name }} <br>
                                Email: {{ $offer->user->email }}
                            </div>
                        </div>
                        <div class="offer-date">
                            <p>Date: {{ $offer->created_at->format('m-d-Y') }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="offer-wrapper">
                        <div class="offer-content d-flex justify-content-between align-items-center">
                            <div class="price">
                                {{-- <p>Offer ID : <span class="fw-bold"> {{ $offer->id }} </span></p> --}}
                                <h4>Oops! no offers found.</h4>
                            </div>
                            <div class="price-btn">
                                {{-- <button class="">Accept</button> --}}
                            </div>
                        </div>
                        <div class="offer-date">
                            {{-- <p>Date: {{ $offer->created_at->format('m-d-Y') }}</p> --}}
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
