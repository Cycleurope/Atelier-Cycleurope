<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masterclass;
use App\Models\Record;
use App\Models\Attendee;
use Auth;

class MasterclassController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $masterclasses = Masterclass::all();
        return view('front.masterclasses.index', [
            'masterclasses' => $masterclasses
        ]);
    }

    public function show($masterclass)
    {
        $masterclass = Masterclass::find($masterclass);
        return view('front.masterclasses.show', [
            'masterclass' => $masterclass
        ]);
    }

    public function register(Request $request, $id)
    {

        $record = new Record;
        $record->masterclass_id = $id;
        $record->user_id = Auth::user()->id;
        $record->save();

        if($request->attendee1_firstname != '' && $request->attendee1_lastname != '') {

            $attendee                   = new Attendee;
            $attendee->firstname        = $request->attendee1_firstname;
            $attendee->lastname         = $request->attendee1_lastname;
            $attendee->email            = $request->attendee1_email;
            $attendee->phone            = $request->attendee1_phone;
            $attendee->record_id        = $record->id;
            $attendee->save();

            if($request->attendee2_firstname != '' && $request->attendee2_lastname != '') {

                $attendee               = new Attendee;
                $attendee->firstname    = $request->attendee2_firstname;
                $attendee->lastname     = $request->attendee2_lastname;
                $attendee->email        = $request->attendee2_email;
                $attendee->phone        = $request->attendee2_phone;
                $attendee->record_id    = $record->id;
                $attendee->save();

            }
        } elseif($request->attendee1_firstname == '' && $request->attendee1_lastname == '') {

            if($request->attendee2_firstname != '' && $request->attendee2_lastname != '') {

                $attendee = new Attendee;
                $attendee->firstname    = $request->attendee2_firstname;
                $attendee->lastname     = $request->attendee2_lastname;
                $attendee->email        = $request->attendee2_email;
                $attendee->phone        = $request->attendee2_phone;
                $attendee->record_id    = $record->id;
                $attendee->save();

            }

        }

        return redirect()->route('front.masterclasses.index');
    }

    public function deregister($id)
    {
        $masterclass = Masterclass::find($id);
        $records = Record::where('user_id', Auth::user()->id)->where('masterclass_id', $id)->delete();
        return redirect()->route('front.masterclasses.show', $id)
            ->with('class', 'danger')
            ->with('message', 'Vous n\'êtes plus enregistré à cette session de formation.');
    }

    // Ajax
    public function toggleFavorite(Request $request)
    {
        $masterclass = Masterclass::find($request->id);
        $masterclass->toggleFavorite();
        die();
    }

    public function records()
    {
        $records = Auth::user()->records()->get();
        return view('front.masterclasses.records', [
            'records' => $records
        ]);
    }

}
