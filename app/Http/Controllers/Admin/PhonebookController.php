<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhoneCard;
use Illuminate\Http\Request;

class PhonebookController extends Controller
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
        $phonecards = null;
        $phonecards = PhoneCard::orderBy('title', 'ASC')->get();
        return view('back.phonebook.index', [
            'phonecards' => $phonecards
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.phonebook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phonecard = new PhoneCard;
        $phonecard->title = $request->title;
        $phonecard->phone = $request->phone;
        $phonecard->email = $request->email;
        $phonecard->info = $request->info;
        $phonecard->save();

        if($request->logo != null) {
            $phonecard->addMedia($request->logo)->toMediaCollection('logos');
        }

        return redirect()->route('admin.phonebook.index')
            ->with('class', 'success')
            ->with('message', 'PhoneCard created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phonecard = PhoneCard::find($id);
        return view('back.phonebook.edit', [
            'phonecard' => $phonecard
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
        $phonecard = PhoneCard::find($id);
        $phonecard->title = $request->title;
        $phonecard->phone = $request->phone;
        $phonecard->email = $request->email;
        $phonecard->info = $request->info;
        $phonecard->save();

        if($request->logo != null) {
            $phonecard->addMedia($request->logo)->toMediaCollection('logos');
        }

        return redirect()->route('admin.phonebook.index')
            ->with('class', 'info')
            ->with('message', 'PhoneCard updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phonecard = PhoneCard::find($id)->delete();

        return redirect()->route('admin.phonebook.index')
            ->with('class', 'danger')
            ->with('message', 'PhoneCard deleted');
    }
}
