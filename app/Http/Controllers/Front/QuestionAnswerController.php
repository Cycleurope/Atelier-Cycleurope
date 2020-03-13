<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionAnswer;

class QuestionAnswerController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$qas = QuestionAnswer::all();
        $questions = QuestionAnswer::orderBy('position', 'asc')->where('answer', '!=', '')->get();
        return view('front.faq.index', [
            'questions' => $questions
        ]);
    }

}
