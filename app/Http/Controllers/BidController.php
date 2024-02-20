<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Http\Requests\StoreBidRequest;
use App\Http\Requests\UpdateBidRequest;
use App\Notifications\BidApprovedNotification;
use Laravel\Nova\Notifications\NovaNotification;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBidRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBidRequest $request, Bid $bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bid $bid)
    {
        //
    }

    public function accept(Bid $bid)
    {
        $bid->status = 'approved';
        $bid->save();
        $bid->user->notify(
            NovaNotification::make()
                ->message('Your bid has been approved.')
                // ->action('View', env('APP_URL').'/dashboard/resources/bids/'.$bid->id)
                ->type('info')
        );
        $bid->post->bids->each(function ($b) use ($bid){
            if ($b->id !== $bid->id)
            {
                $b->status = 'rejected';
                $b->save();
            }
        });

        return back();
    }
}
