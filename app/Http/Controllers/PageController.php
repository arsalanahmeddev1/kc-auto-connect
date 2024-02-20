<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('screens.front.home');
    }

    public function termsAndConditions()
    {
        return view('screens.front.terms');
    }

    public function privacyPolicy()
    {
        return view('screens.front.privacy');
    }

    public function offers()
    {
        $offers = collect([]);
        if (auth()->check())
        {
            $offers = auth()->user()->myPostBids('pending')->flatten();
            $acceptedOffers = auth()->user()->myPostBids('approved')->flatten();
        }
        return view('screens.user.offer', compact('offers', 'acceptedOffers'));
    }

    public function inquiry()
    {
        return view('screens.front.inquiry-form');
    }

    public function inquiryStore(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'make' => 'required',
            'model' => 'required',
            'trim' => 'required',
            'zipcode' => 'required',
            'ownership' => 'required',
            'title' => 'required',
            'tires' => 'required',
            'battery' => 'required',
            'starts' => 'required',
            'mileage' => 'required',
            'exterior_damage' => 'required',
            'exterior_parts' => 'required',
            'mirror_glass_lights' => 'required',
            'catalytic_converter' => 'required',
            'interior_parts' => 'required',
            'flood_fire' => 'required',
        ]);
        // dd($request->all());
        $post = auth()->user()->posts()->create($request->all());

        if ($post instanceof Model)
        {
            if ($request->has('image')) {
                $post->addMedia($request->image)->toMediaCollection('images');
            }
            toastr()->success('Post created successfully');
        }else {
            toastr()->error('Failed to create the post');
        }

        return back();
    }
}
