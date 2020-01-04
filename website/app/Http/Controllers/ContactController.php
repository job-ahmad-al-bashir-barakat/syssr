<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller{

//--------------------------------------------------------------------------//
    public function index(){
        $contacts = \Api::getContactUs();
        return view('contact', compact('contacts'));
    }
//--------------------------------------------------------------------------//
    public function contactEmail(Request $request){
        $message = str_replace("\n","<br>",$request->message);
        $re = [
            'subject'   =>  $request->subject,
            'name'      =>  $request->full_name,
            'email'     =>  $request->email,
            'message'   =>  $message,
        ];
        $default_contact = \Api::getDefaultContactUs();
        if($default_contact){
            if($default_contact->contact_email)
                $to = $default_contact->contact_email;
        }else
            $to = 'admin@syssr.org';
        Mail::to($to)->send(new \App\Mail\Contact($re));

        return response()->json([
            'message'      =>  trans('main.email_sent_successfully')
        ]);
    }
//--------------------------------------------------------------------------//
}
