<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $feedback = Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        if ($feedback instanceof Model)
        {
            toastr('Form submitted successfully.');
        }else {
            toastr()->error('Form submission failed.');
        }

        return back();
    }
}
