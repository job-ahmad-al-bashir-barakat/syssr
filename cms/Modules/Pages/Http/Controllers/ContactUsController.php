<?php

namespace Modules\Pages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Yajra\Datatables\Datatables;
use LaravelLocalization;
use Modules\Pages\Entities\ContactUs;

class ContactUsController extends Controller{
//----------------------------------------------------------------------//
    public function index(){
        $contactUs = ContactUs::find(1);
        return view('pages::contact_us',compact('contactUs'));
    }
//----------------------------------------------------------------------//
    public function create(){
        return view('pages::contact_us_create');
    }
//----------------------------------------------------------------------//
    public function store(Request $request){
        $request->validate([
            'name_en'               =>  'required',
            'name_ar'               =>  'required',
            'contact_email'         =>  'required|email',
            'info_email'            =>  'required|email',
            'phone'                 =>  'required|num',
            'mobile_1'              =>  'required|num',
        ]);

        $contactUs = ContactUs::find(1);
        $contactUs->setTranslation('name', 'en', $request['name_en']);
        $contactUs->setTranslation('name', 'ar', $request['name_ar']);
        $contactUs['default'] = $request['default'];
        $contactUs['contact_email'] = $request['contact_email'];
        $contactUs['info_email'] = $request['info_email'];
        $contactUs['phone'] = $request['phone'];
        $contactUs['mobile_1'] = $request['mobile_1'];
        $contactUs['mobile_2'] = $request['mobile_2'];
        $contactUs->setTranslation('address', 'en', $request['address_en']);
        $contactUs->setTranslation('address', 'ar', $request['address_ar']);
        $contactUs['lat'] = $request['lat'];
        $contactUs['lng'] = $request['lng'];
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
    public function edit(ContactUs $contactUs){
        return view('pages::contact_us_edit', compact('contactUs'));
    }
//----------------------------------------------------------------------//
    public function update(Request $request, ContactUs $contactUs){
        $request->validate([
            'name_en'               =>  'required',
            'name_ar'               =>  'required',
            'contact_email'         =>  'required|email',
            'info_email'            =>  'required|email',
            'phone'                 =>  'required|num',
            'mobile_1'              =>  'required|num',
        ]);
    }
//----------------------------------------------------------------------//
    public function getDatatableContactUs(){
        $lang = LaravelLocalization::getCurrentLocale();
        $contactUs = ContactUs::orderBy('created_at','asc')->get();
        return Datatables::of($contactUs)
        ->addColumn('name_en',function ($col){
            return $col->getTranslation('name', 'en');
        })->addColumn('name_ar',function ($col){
            return $col->getTranslation('name', 'ar');
        })->addColumn('name',function ($col){
            return $col->getTranslation('name', $lang);
        })->make(true);
    }
//----------------------------------------------------------------------//
    public function getContactUs(){
        return ContactUs::findOrFail(1);
    }
//----------------------------------------------------------------------//
}