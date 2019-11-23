<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller{

//--------------------------------------------------------------------------//
    public function index(){
        $contacts = \Api::getContactUs();
        return view('contact', compact('contacts'));
    }
//--------------------------------------------------------------------------//
}
