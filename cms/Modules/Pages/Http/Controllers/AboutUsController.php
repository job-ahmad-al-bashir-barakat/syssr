<?php

namespace Modules\Pages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Pages\Entities\AboutUs;

class AboutUsController extends Controller{
//------------------------------------------------------------------------//
    public function index(){
        $aboutUs = AboutUs::find(1);
        if(empty($aboutUs))
            $description_en = $description_ar = '';
        else{
            $description_en = $aboutUs->getTranslation('description', 'en');
            $description_ar = $aboutUs->getTranslation('description', 'ar');
        }
        return view('pages::about_us',compact('description_en', 'description_ar'));
    }
//------------------------------------------------------------------------//
    public function store(Request $request){
        $aboutUs = AboutUs::find(1);
        if(empty($aboutUs))
            $aboutUs = new AboutUs();
        
        $aboutUs->setTranslation('description', 'en', $request['description_en']);
        $aboutUs->setTranslation('description', 'ar', $request['description_ar']);
        $aboutUs->save();
        
        $message = trans('cms.saved_successfully');
        return redirect()->back()->with('message', $message);
    }
//------------------------------------------------------------------------//
    public function getAboutUs(Request $request){
        if(isset($request['lang']))
            $lang = $request['lang'];
        else 
            $lang = 'en';

        $aboutUs = AboutUs::find(1);
        if(empty($aboutUs))
            $description_en = $description_ar = $description = '';
        else{
            $description_en = $aboutUs->getTranslation('description', 'en');
            $description_ar = $aboutUs->getTranslation('description', 'ar');
            $description = $aboutUs->getTranslation('description', $lang);
        }
        return [
            'description_en'        =>  $description_en,
            'description_ar'        =>  $description_ar,
            'description'           =>  $description,
        ];
    }
//------------------------------------------------------------------------//
}
