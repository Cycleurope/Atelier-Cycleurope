<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;

class FeedbackController extends Controller
{

    public function index()
    {
        $feedbacks = Feedback::all();
        return view('front.feedbacks.index', [
            'feedbacks' => $feedbacks
        ]);
    }

    public function show($id)
    {
        $feedback = Feedback::find($id);
        return view('front.feedbacks.show', [
            'feedback' => $feedback
        ]);
    }

}
