<?php

namespace Modules\Pages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Pages\Entities\ContactUs;

class ContactUsController extends Controller{
//----------------------------------------------------------------------//
    public function index(){
        $contactUs = ContactUs::find(1);
        return view('pages::contact_us',compact('contactUs'));
    }
//----------------------------------------------------------------------//
    public function store(Request $request){
        $contactUs = ContactUs::find(1);
        $contactUs['contact_email'] = $request['contact_email'];
        $contactUs['phone'] = $request['phone'];
        $contactUs['mobile_1'] = $request['mobile_1'];
        $contactUs['mobile_2'] = $request['mobile_2'];
        $contactUs['facebook'] = $request['facebook'];
        $contactUs['linkedin'] = $request['linkedin'];
        $contactUs['twitter'] = $request['twitter'];
        $contactUs['google_plus'] = $request['google_plus'];
        $contactUs['youtube'] = $request['youtube'];
        $contactUs['whatsapp'] = $request['whatsapp'];
        $contactUs['skype'] = $request['skype'];
        $contactUs['medium'] = $request['medium'];
        $contactUs->save();

        $message = trans('cms.saved_successfully');
        return redirect(url('pages/contact-us'))->with('message', $message);
    }
//----------------------------------------------------------------------//
    public function getContactUs(){
        return ContactUs::findOrFail(1);
    }
//----------------------------------------------------------------------//
}