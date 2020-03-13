<?php

namespace App\Http\Controllers\Admin;

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
        $qas = QuestionAnswer::orderBy('position', 'asc')->get();
        return view('back.faq.index', [
            'qas' => $qas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qr = new QuestionAnswer();
        $qr->question = $request->question;
        $qr->answer = $request->answer;
        $qr->save();

        return redirect()->route('admin.faq.index')
            ->with('class', 'success')
            ->with('message', 'QR added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $qa = QuestionAnswer::find($id);
        return view('back.faq.show', [
            'qa' => $qa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qa = QuestionAnswer::find($id);
        return view('back.faq.edit', [
            'qa' => $qa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $qr = QuestionAnswer::find($id);
        $qr->question = $request->question;
        $qr->answer = $request->answer;
        $qr->save();

        return redirect()->route('admin.faq.index')
            ->with('class', 'info')
            ->with('message', 'QR updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qr = QuestionAnswer::find($id)->delete();

        return redirect()->route('admin.faq.index')
            ->with('class', 'danger')
            ->with('message', 'QR deleted successfully.');
    }

    public function sortQuestions(Request $request)
    {
        $questions = $request->question;
        print_r($questions);
        for($i = 0; $i < count($questions); $i++) {
            $question = QuestionAnswer::find($questions[$i]);
            $question->position = $i;
            $question->save();
        }
        return $questions;
        die();
    }
}
