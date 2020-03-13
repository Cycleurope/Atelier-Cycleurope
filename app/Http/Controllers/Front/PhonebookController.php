<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PhoneCard;

class PhonebookController extends Controller
{
    
    public function __construct()
    {

    }

    public function index()
    {
        $cards = PhoneCard::all();
        return view('front.phonebook.index', [
            'cards' => $cards
        ]);
    }
    

}
