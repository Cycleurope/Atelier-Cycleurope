<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Masterclass;

class FeedbackController extends Controller
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
        $feedbacks = Feedback::all();
        return view('back.feedbacks.index', [
            'feedbacks' => $feedbacks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        if(Masterclass::archive()->count() == 0) {
            return redirect()->route('admin.feedbacks.index')
                ->with('class', 'danger')
                ->with('message', 'Hop Hop Hop ! Aucun retour de formation ne peut être ajouté pour le moment ...');
        }

        $masterclass = null;
        if($id != null) {
            $masterclass = Masterclass::find($id);
        }
        $masterclasses = Masterclass::all();
        $masterclasses = Masterclass::doesnthave('feedback')->get();
        return view('back.feedbacks.create', [
            'masterclasses' => $masterclasses,
            'masterclass' => $masterclass,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feedback = new Feedback();
        $feedback->content = $request->content;
        $feedback->masterclass_id = $request->masterclass;
        $feedback->save();

        return redirect()->route('admin.feedbacks.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedback = Feedback::find($id);
        $masterclasses = Masterclass::all();
        $masterclasses = Masterclass::doesnthave('feedback')->orWhere('id', '=', $id)->get();
        $masterclasses = Masterclass::whereHas('feedback', function($q) use ($id) {
            $q->where('id', $id);
        })->ordoesnthave('feedback')->get();

        return view('back.feedbacks.edit', [
            'feedback' => $feedback,
            'masterclasses' => $masterclasses
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
        $feedback = Feedback::find($id);
        $feedback->content = $request->content;
        $feedback->masterclass_id = $request->masterclass;
        $feedback->save();

        return redirect()->route('admin.feedbacks.index')
            ->with('class', 'info')
            ->with('message', 'Le retour de formation a été mis à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::find($id)->delete();

        return redirect()->route('admin.feedbacks.index')
        ->with('class', 'danger')
        ->with('message', 'Le retour de formation a été supprimé.');

    }
}
